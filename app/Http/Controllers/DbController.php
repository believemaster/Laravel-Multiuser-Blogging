<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    // DB Controller main access of data
    public function index()
    {
        // $all = DB::table('employee')->get(); // shows all data
        // $all = DB::table('employee')->select('name', 'age', 'city')->get();  // shows specific column
        // $all = DB::table('employee')->pluck('email', 'city');    // pluck specific column
        // dd($all);
        // $single = DB::table('employee')->first();  // shows only first data
        // dd($single);
        // $order = DB::table('employee')->orderBy('id', 'DESC')->get();  // shows order by data
        // dd($order);
        // $limit = DB::table('employee')->orderBy('id', 'DESC')->limit(2)->get();  // shows order by data in limit
        // dd($limit);
        // $count = DB::table('employee')->count();  // shows no of data
        // dd($count);
        // $offset = DB::table('employee')->orderBy('id', 'DESC')->offset(1)->limit(1)->get();  // shows offset
        // dd($offset);
        $min = DB::table('employee')->min('salary');  // shows min
        dd($min);
    }

    public function joining()
    {
        $result = DB::table('order')
            ->join('user', 'user.id', '=', 'order.user_id')
            ->select('user.name', 'order.id', 'order.amount', 'order.order_date')
            ->get();
        dd($result);
    }

    public function model()
    {
        $res = Employee::all();
        dd($res);
    }
}
