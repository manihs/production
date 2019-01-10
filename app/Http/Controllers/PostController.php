<?php

namespace App\Http\Controllers;

use auth;
use App\Post;
use App\CommunitySharedWith;
use App\Like;
use Image;
use Thumbnail;

use Illuminate\{
    Http\Request,
    Support\Facades\DB
};

class PostController extends Controller
{
    public function new_image_post_form(){

        $user = Auth::user();

        $community = DB::table('user_communities')
        ->select('communities.id','communities.cname')
        ->join('communities', 'communities.id', '=', 'user_communities.community')
        ->where('user','=', $user->id)->get();
                
        return view('posts.image',compact('community'));
    }

    public function new_image_post(Request $request)
    {
    
        if (request()->hasFile('image')) {
            $user = Auth::user();
            $input = $request->all();
            $file = request()->file('image');
            $data = $file ;
            //get filename with extension
            $name = 'IMG'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            // get the path where to store
            $path = 'Users/'.$user->id.'/image'.'/'.date("Y-m-d").'/';  
           
            
            if($file->storeAs($path, $name)){ 
                // move data to thumnail  
                $file->storeAs($path.'thumnail/', $name);
                //  Resize image here
                $thumbnailpath = storage_path('app/'.$path.'thumnail/'.$name);
          
                $img = Image::make($thumbnailpath)->resize(550, 250, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
        
                $path = 'Users/'.$user->id.'/image'.'/'.date("Y-m-d").'/';
                $post = new Post;
                $post->src = $path."".$name;
                $post->type = 'IMG';
                $post->uid = $user->id;
                $post->caption = $input['caption'];
                $post->save();

                $temp = $post->id;

                foreach ($input['community'] as $value) {
                    $CommunitySharedWith = new CommunitySharedWith;
                    $CommunitySharedWith->postId = $temp;
                    $CommunitySharedWith->cmtyId = $value;
                    $CommunitySharedWith->save();
                }
            }
        }
        return redirect('/home');
    }

    // 

    public function new_video_post_form(){

        $user = Auth::user();

        $community = DB::table('user_communities')
        ->select('communities.id','communities.cname')
        ->join('communities', 'communities.id', '=', 'user_communities.community')
        ->where('user','=', $user->id)->get();
        
        return view('postvideo', compact('community'));
    }

    public function new_video_post(Request $request)
    {
        if (request()->hasFile('img')) {
            $user = Auth::user();
            $input = $request->all();
            $file = request()->file('img');
            $name = 'VID'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $path = './Users/'.$user->id.'/video'.'/'.date("Y-m-d").'/';
            
            if($file->move($path, $name)){   
                $path = 'Users/'.$user->id.'/video'.'/'.date("Y-m-d").'/';

                $post = new Post;
                $post->src = $path."".$name;
                $post->type = 'VID';
                $post->uid = $user->id;
                $post->caption = $input['name'];
                $post->save();

                $temp = $post->id;

                foreach ($input['community'] as $value) {
                    $CommunitySharedWith = new CommunitySharedWith;
                    $CommunitySharedWith->postId = $temp;
                    $CommunitySharedWith->cmtyId = $value;
                    $CommunitySharedWith->save();
                }
            }
        }
        return redirect('/home');
    }

    public function post_like(Request $request)
    {
        $user = Auth::user();

        $query = $request->get('value');

        $like = new Like;
        $like->uid = $user->id;
        $like->pid = $query;
        $like->save();

        echo $query;
    }

    public function post_dislike(Request $request)
    {
        $user = Auth::user();

        $query = $request->get('value');
        $delete = DB::table('likes')->where('uid','=',$user->id)->where('pid','=',$query)->delete();

        echo $query;
    }
    public function post_comments_model(Request $request,$id)
    {
        // $user = Auth::user();
        // $query = strtoupper($request->get('value'));
        // echo $query;
        // $model = "<div class='model' style='width: 100%; height: 100vh; background-color: green; z-index: 4; position: absolute; top:0;'></div>";
        $id =  $id;
        return view('comments',compact('id'));
    }

    public function post_comments_add(Request $request)
    {
        // $user = Auth::user();
        $query = strtoupper($request->get('comment'));
        // echo $query;
        // $model = "<div class='model' style='width: 100%; height: 100vh; background-color: green; z-index: 4; position: absolute; top:0;'></div>";
        echo($query);
    }
}
