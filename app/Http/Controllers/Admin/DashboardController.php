<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Subscribe;
use App\Role;

use Carbon\Carbon;
use Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $posts_count = Post::count();
        $comments_count = Comment::count();
        $subscribes_count = Subscribe::count();
        $bloggers_count = User::where('type', 2)->count();
        $editors_count = Role::where('id', 3)->with('users')->count();
        $views_count = Post::sum('view_count');
        $authors_count = User::where('type', 2)->where('status', 1)->count();
        //retrieve visitors and pageview data for the current day and the last seven days
        $analyticsD = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $analyticsData = json_decode($analyticsD,true);

        return view('admin.dashboard', compact('users_count', 
                                                'posts_count', 
                                                'comments_count', 
                                                'subscribes_count',
                                                'bloggers_count',
                                                'editors_count',
                                                'views_count',
                                                'authors_count',
                                                'analyticsData'
                                                ));
    }
}
