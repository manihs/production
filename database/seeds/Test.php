<?php

use Illuminate\Database\Seeder;

class Test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,50)->create();
        factory(App\Community::class,200)->create();
        factory(App\Post::class,250)->create();
        factory(App\Like::class,350)->create();
        factory(App\Comment::class,270)->create();
        factory(App\UserCommunity::class,1050)->create();
        factory(App\Interest::class,50)->create();
        factory(App\SubInterest::class,50)->create();
        factory(App\UserInterest::class,200)->create();
        factory(App\CommunitySharedWith::class,350)->create();
    }
}
