<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Faq;

class AdminController extends Controller
{
    public function index(){

        return view("admindashboard/dashboard");
    }


    public function productReviews(){


        return view("admindashboard.productReviews");
    }

    public function contactus(){

        return view("admindashboard.contactus");
    }
    public function contactusdata(){

        $contactus = DB::table("contact_us")->get();


        return view("admindashboard.contactusdata",compact("contactus"));
    }
    public function replymail(Request $request){
        echo \App\Http\Controllers\SmtpMailer::sent($request->toemail, "Reply Mail:", $request->message);
       $replyed= DB::table('contact_us')->where('email', $request->toemail)->update(['reply_status' =>1, 'reply_message' => $request->message]);
       if ($replyed) {
        return redirect()->back()->with('success', 'Successfully Mailed!');
    } else {
        return redirect()->back()->with('error', 'Failed to reply!');
    }
    }
    public function deleteuserdata(Request $request){

$contact_us = DB::table('contact_us')->where('id',$request->id)->delete();
if($contact_us){
    return redirect()->back()->with('success','You\'re Data Has been Deleted');
}else{
    return redirect()->back()->with('error','Failed to delete the data');
}
    }
    public function faq(){
        $faqall = Faq::get();
        return view("admindashboard.faq", compact("faqall"));
    }
    public function addfaq(){
        return view("admindashboard.addfaq");
    }
    public function savefaq(Request $request){
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'question' => 'required',
                'answer' => 'required',

            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $faqarray=[
                'question' => $request->question,
                'answer' => $request->answer,
                'status' => 0,

            ];
            $faq = Faq::create($faqarray);

            if ($faq) {
                return redirect()->route('admin.faq')->with('success', 'Your Data is successfully Created');
            } else {
                return redirect()->route('admin.faq')->with('error', 'Failed to Create Data');
            }

    }
    public function deletefaq(Request $request){
        // dd($request->all());
        $faq = DB::table('faq')->where('id', $request->id)->delete();
        if ($faq) {
            return redirect()->back()->with('success', 'FAQ Data Has been Deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delete FAQ data');
        }

    }
    public function editfaq(Request $request){

        $faq = DB::selectOne("select * from faq where id = $request->id");
        return view('admindashboard.editfaq', ['faq' => $faq]);

    }
    public function updatefaq(Request $request){
        //  dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'question' => 'required',
                'answer' => 'required',

            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $faqarray=[
                'question' => $request->question,
                'answer' => $request->answer,

            ];
            $faq = Faq::find($request->id)->update($faqarray);
            if ($faq) {
                return redirect()->route('admin.faq')->with('success', 'Your Data is successfully Created');
            } else {
                return redirect()->route('admin.faq')->with('error', 'Failed to Create Data');
            }

    }
    public function termsandCondition(){


        return view("admindashboard.termsandCondition");
    }
    public function privacyPolicy(){


        return view("admindashboard.privacyPolicy");
    }
    public function refundPolicy(){


        return view("admindashboard.refundPolicy");
    }




}
