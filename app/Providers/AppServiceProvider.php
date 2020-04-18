<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Setting;
use App\Category;
use App\User;
use App\Post;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $settings = Setting::all();
        foreach($settings as $key => $setting) {
            if($key === 0) $system_name = $setting->value;
            elseif($key === 1) $favicon = $setting->value;
            elseif($key === 2) $front_logo = $setting->value;
            elseif($key === 3) $admin_logo = $setting->value;
            elseif($key === 4) $meta_title = $setting->value;
            elseif($key === 5) $meta_keyword = $setting->value;
            elseif($key === 6) $meta_description = $setting->value;
            elseif($key === 7) $video1 = $setting->value;
            elseif($key === 8) $video2 = $setting->value;
            elseif($key === 9) $video3 = $setting->value;
            elseif($key === 10) $video4 = $setting->value;
            elseif($key === 11) $video5 = $setting->value;
        }

        $categories = Category::where('status', 1)->paginate(8);

        $authors = User::where('id', '!=', 1)->where('status', 1)->get();

        $most_viewed = Post::with(['creator', 'comments'])
                            ->where('status', 1)
                            ->orderBy('view_count', 'DESC')
                            ->limit(5)
                            ->get();

        $most_commented =  Post::withCount(['comments'])
                            ->where('status', 1)
                            ->orderBy('comments_count', 'DESC')
                            ->limit(5)
                            ->get();  

        $shareData = array(
            'system_name'=>$system_name,
            'favicon'=>$favicon,
            'front_logo'=>$front_logo,
            'admin_logo'=>$admin_logo,
            'meta_title'=>$meta_title,
            'meta_keyword'=>$meta_keyword,
            'meta_description'=>$meta_description,
            'video1'=>$video1,
            'video2'=>$video2,
            'video3'=>$video3,
            'video4'=>$video4,
            'video5'=>$video5,
            'categories'=>$categories,
            'authors'=>$authors,
            'most_viewed'=>$most_viewed,
            'most_commented'=>$most_commented,
        );
        view()->share('shareData', $shareData);

        // view()->share('key', 'Yanik Kumar');
    }
}
