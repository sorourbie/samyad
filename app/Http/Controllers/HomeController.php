<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace App\Http\Controllers\HomeController;
// namespace App\Http\Controllers;
//use App\Http\Controllers\validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Curses;
use App\Models\professor;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{





    public function login(Request $request)
    {
        $national = $request->input('national');
        $student = $request->input('student');

        $user = DB::table('students')->where('national_code', $national)->first();
        $user2 = DB::table('students')->where('student_number', $student)->first();


        if ($user && $user2) {

            Session:: flash('message','دانشجوی گرامی خوش آمدید.');
            return redirect()->route('DanDash');
        } else {

            return redirect()->back()->withErrors(['email' => 'کد ملی یا شماره دانشجویی اشتباه است ']);
        }}


        public function login2(Request $request)
    {
        $national = $request->input('national');

        $user = DB::table('professors')->where('national_code', $national)->first();

        if ($user) {

            Session:: flash('message','استاد محترم خوش آمدید.');
            return redirect()->route('AsaDash');


        } else {

            return redirect()->back()->withErrors(['email' => 'کد ملی اشتباه است ']);

        }}



    public function send()
    {
        $to = 'sorour.bie@gmail.com';
        $fromAddress = 'sorosh97@gmail.com';
        $subject = 'پیام عضویت';
        $body='عضویت شما در سایت با موفقیت انجام شد';
        $fullname = 'احسان الوندی';
        $username = 'alvandi';
        return "<h2> ایمیل ارسال گردید </h2>";
//        if (Mail::to($to)->send(new MyTestEmail($subject , $fromAddress ,$fullname , $username,  $body))) return "<h2> ایمیل ارسال گردید </h2>"; else return "<h2> خطا در ارسال ایمیل </h2>";
    }

    public function authenticated(Request $request, $user)
    {
        \Mail::to($user->email)->send(new \App\Mail\MyTestEmail());
    }

}
















