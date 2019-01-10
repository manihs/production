<?php

namespace App\Http\Controllers;

use Illuminate\{
    Http\Request,
    Support\Facades\DB,
};
use App\{
    Post,
};
use auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        
        $userinterest = DB::table('user_interests')->where('uid','=', $user->id)->get()->pluck('icode');
        $userinterest = $userinterest->toArray();

        $community = DB::table('user_communities')->where('user','=', $user->id)->get()->pluck('community');
        $community = $community->toArray();

        $Posts = $posts = DB::table('posts')
        ->select(DB::raw("(SELECT count(likes.pid) from likes where likes.pid = posts.id group by likes.pid) as likeno"),
        DB::raw("(SELECT count(comments.pid) from comments where comments.pid = posts.id group by comments.pid) as cono"),
        'posts.id as id','posts.uid as uid','posts.caption as cap','community_shared_withs.cmtyId as cid',
        'likes.uid as likedby','comments.text as comments',
        'users.name as name',
        'communities.cname as cname')
        ->leftJoin('community_shared_withs', 'posts.id', '=', 'community_shared_withs.postId')
        ->leftJoin('likes', function($join) use ($id){
            $join->on('likes.pid', '=', 'posts.id')
                 ->where('likes.uid', '=', $id);
        })
        ->leftJoin('comments', function($join) use ($id){
            $join->on('comments.pid', '=', 'posts.id')
                 ->where('comments.uid', '=', $id);
        })
        ->leftJoin('communities', 'communities.id', '=', 'community_shared_withs.cmtyId')
        ->join('users', 'users.id', '=', 'posts.uid')
        ->WhereIn('community_shared_withs.cmtyId', $community)
        ->orderBy('posts.created_at','des')
        ->paginate(3);
        // ->get();
// dd($Posts);
        if ($request->ajax()) {
            $view = view('data',compact('Posts'))->render();
            return response()->json(['html'=>$view]);
        }
        
        return view('home', compact('Posts'));
    }
}
