<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Subscribe;

class DashboardController extends Controller
{
    public function index()
    {
        $users_count = Auth::user()->count();
        $posts_count = Post::count();
        $comments_count = Comment::count();
        $subscribes_count = Subscribe::count();
        $bloggers_count = Auth::user()->where('type', 2)->count();
        $editors_count = Auth::user()->where('type', 3)->count();
        $views_count = Post::sum('view_count');
        $authors_count = User::where('type', 2)->orWhere('type', 3)->count();

        return view('admin.dashboard', compact('users_count', 
                                                'posts_count', 
                                                'comments_count', 
                                                'subscribes_count',
                                                'bloggers_count',
                                                'editors_count',
                                                'views_count',
                                                'authors_count'
                                                ));
    }
}
