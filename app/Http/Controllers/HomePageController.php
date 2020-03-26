<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Subscribe;

class HomePageController extends Controller
{
    public function index()
    {
        $hot_news = Post::with('creator')
                        ->withCount('comments')
                        ->where('hot_news', 1)
                        ->where('status', 1)
                        ->orderBy('id','DESC')
                        ->first();

        $top_viewed = Post::with('creator')
                            ->withCount('comments')
                            ->where('status',1)
                            ->orderBy('view_count','DESC')
                            ->limit(2)
                            ->get();

        $category_posts = Category::with('posts')
                                    ->where('status',1)
                                    ->orderBy('id','DESC')
                                    ->limit(5)
                                    ->get();

        return view('front.home', compact('hot_news', 'top_viewed', 'category_posts'));
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, 
                [
                    'email' => 'required'
                ]);
        
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->action('HomePageController@index')->with('success', 'Thank You So Much For Subscription');
    }
}
