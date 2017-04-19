<?php

namespace App\Http\Controllers;

use DB;

use Redirect;

use Session;

use File;

use Mail;

use Input;

use Validator;

use Users;

use Auth;

class WelcomeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
       $mailbox_count   = DB::table('mailbox')->count();
       $alert_count     = DB::table('alert')->count();
       $doctor_count    = DB::table('doctors')->count();
       $operation_count = DB::table('operation')->count();
       $birth_count     = DB::table('birth')->count();
       $death_count     = DB::table('death')->count();

       $male_count      = DB::table('patience')->where('gender', 'Male')->count();
       $female_count    = DB::table('patience')->where('gender', 'Female')->count();
       $patience_count  = DB::table('patience')->count();

       $orders_2016     = DB::table('orders')->where('order_date', 2016)->count();
       $orders_2017     = DB::table('orders')->where('order_date', 2017)->count();

       $death_2015      = DB::table('death')->where('death_date', 2015)->count();
       $death_2016      = DB::table('death')->where('death_date', 2016)->count();
       $death_2017      = DB::table('death')->where('death_date', 2017)->count();

       $birth_2015      = DB::table('birth')->where('birth_date', 2015)->count();
       $birth_2016      = DB::table('birth')->where('birth_date', 2016)->count();
       $birth_2017      = DB::table('birth')->where('birth_date', 2017)->count();

       $male_2015       = DB::table('operation')->where('gender', 'Male')->where('operation_date', 2015)->count();
       $male_2016       = DB::table('operation')->where('gender', 'Male')->where('operation_date', 2016)->count();
       $male_2017       = DB::table('operation')->where('gender', 'Male')->where('operation_date', 2017)->count();

       $female_2015     = DB::table('operation')->where('gender', 'Female')->where('operation_date', 2015)->count();
       $female_2016     = DB::table('operation')->where('gender', 'Female')->where('operation_date', 2016)->count();
       $female_2017     = DB::table('operation')->where('gender', 'Female')->where('operation_date', 2017)->count();

       return view('welcome', compact('female_2015','female_2016','female_2017','male_2015','male_2016','male_2017','birth_2015','birth_2016','birth_2017','death_2015','death_2016','death_2017','orders_2017','orders_2016','patience_count','male_count','female_count','mailbox_count','alert_count', 'doctor_count', 'operation_count', 'birth_count','death_count'));
       
   }
}
