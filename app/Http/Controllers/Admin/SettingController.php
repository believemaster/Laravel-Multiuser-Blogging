<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{
    public function index() {
        $page_name = 'Settings Update';
        $setting = Setting::find(1);
        $system_name = $setting->value;

        $setting_meta_title = Setting::find(5);
        $meta_title = $setting_meta_title->value;
        $setting_meta_key = Setting::find(6);
        $meta_keyword = $setting_meta_key->value;
        $setting_meta_desc = Setting::find(7);
        $meta_description = $setting_meta_desc->value;

        $video_one = Setting::find(8);
        $video1 = $video_one->value;

        $video_two = Setting::find(9);
        $video2 = $video_two->value;

        $video_three = Setting::find(10);
        $video3 = $video_three->value;

        $video_four = Setting::find(11);
        $video4 = $video_four->value;

        $video_five = Setting::find(12);
        $video5 = $video_five->value;

        return view('admin.setting.update', compact('page_name', 
                                                    'system_name', 
                                                    'meta_keyword', 
                                                    'meta_title', 
                                                    'meta_description',
                                                    'video1',
                                                    'video2',
                                                    'video3',
                                                    'video4',
                                                    'video5' ));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'system_name'=>'required'
        ]);

        $fav_settings = Setting::find(2);
        if($request->file('favicon')){
            @unlink(public_path('/storage/others/'.$fav_settings->value));
            
            $file = $request->file('favicon');
            $extension = $file->getClientOriginalExtension();
            $favicon = 'favicon.'.$extension;

            $file->move(public_path('/storage/others'), $favicon);
            $fav_settings->value = $favicon;
            $fav_settings->save();
        }

        $front_settings = Setting::find(3);
        if($request->file('front_logo')){
            @unlink(public_path('/storage/others/'.$front_settings->value));
            
            $file = $request->file('front_logo');
            $extension = $file->getClientOriginalExtension();
            $front_logo = 'front_logo.'.$extension;

            $file->move(public_path('/storage/others'), $front_logo);
            $front_settings->value = $front_logo;
            $front_settings->save();
        }

        $admin_settings = Setting::find(4);
        if($request->file('admin_logo')){
            @unlink(public_path('/storage/others/'.$admin_settings->value));
            
            $file = $request->file('admin_logo');
            $extension = $file->getClientOriginalExtension();
            $admin_logo = 'admin_logo.'.$extension;

            $file->move(public_path('/storage/others'), $admin_logo);
            $admin_settings->value = $admin_logo;
            $admin_settings->save();
        }

        $sys_settings = Setting::find(1);
        $sys_settings->value = $request->system_name;
        $sys_settings->save();

        $sys_settings = Setting::find(5);
        $sys_settings->value = $request->meta_title;
        $sys_settings->save();

        $sys_settings = Setting::find(6);
        $sys_settings->value = $request->meta_keyword;
        $sys_settings->save();

        $sys_settings = Setting::find(7);
        $sys_settings->value = $request->meta_description;
        $sys_settings->save();

        $sys_settings = Setting::find(8);
        $sys_settings->value = $request->video1;
        $sys_settings->save();

        $sys_settings = Setting::find(9);
        $sys_settings->value = $request->video2;
        $sys_settings->save();

        $sys_settings = Setting::find(10);
        $sys_settings->value = $request->video3;
        $sys_settings->save();

        $sys_settings = Setting::find(11);
        $sys_settings->value = $request->video4;
        $sys_settings->save();

        $sys_settings = Setting::find(12);
        $sys_settings->value = $request->video5;
        $sys_settings->save();

        return redirect()->action('Admin\SettingController@index')->with('success', 'Settings Updated Successfully');
    }
}
