<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesDataValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Backend.Pages.Dashboard');
    }

    public function notice(){
        return view('Backend.Pages.Notice');
    }

    public function centralCommittee(){
        return view('Backend.Pages.Committee');
    }

    public function branchCommittee(){
        return view('Backend.Pages.Branch-Committee');
    }

    public function branchCommitteeList(){
        return view('Backend.Pages.Branch-Committee-List');
    }

    public function committeeCreate(){
        return view('Backend.Pages.CommitteeCreate');
    }

    public function specialPerson(){
        return view('Backend.Pages.Special-Person');
    }

    public function lifeTimePerson(){
        return view('Backend.Pages.Lifetime-Person');
    }

    public function generalPerson(){
        return view('Backend.Pages.General-Person');
    }

    public function personCreate(){
        return view('Backend.Pages.PersonCreate');
    }

    public function usersShow(){
        return view('Backend.Pages.Users-Manage');
    }

    public function userStore(Request $request){
        $validatedData = Validator::make($request->all(), [
            "name"     => "required|string|min:4|max:50|regex:/^[\x{0980}-\x{09FF} ]+$/u|unique:users,name",
            "username" => "required|string|min:10|max:50|regex:/^[\x{0980}-\x{09FF} ]+$/u|unique:users,username",
            "phone_no" => "required|digits:11|unique:users,phone_no",
            "branch"   => "required|string|min:5|max:50|regex:/^[\x{0980}-\x{09FF} ]+$/u|unique:users,branch",
            "password" => "required|min:8|max:20|confirmed",
        ],[
            // Name
            "name.required" => "নামের ফিল্ডটি অবশ্যই পূরণ করতে হবে।",
            "name.string"   => "নাম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "name.min"      => "নামটি অন্তত ৪ অক্ষরের হতে হবে।",
            "name.max"      => "নাম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",
            "name.regex"    => "নামে শুধুমাত্র বাংলা অক্ষর এবং স্পেস ব্যবহার করা যাবে।",
            "name.unique"   => "এই নামটি ইতিমধ্যে ব্যবহৃত হয়েছে।",

            // Username
            "username.required" => "ইউজারনেম ফিল্ডটি অবশ্যই পূরণ করতে হবে।",
            "username.string"   => "ইউজারনেম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "username.min"      => "ইউজারনেম অন্তত ১০ অক্ষরের হতে হবে।",
            "username.max"      => "ইউজারনেম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",
            "username.regex"    => "ইউজারনেমে শুধুমাত্র বাংলা অক্ষর এবং স্পেস ব্যবহার করা যাবে।",
            "username.unique"   => "এই ইউজারনেম ইতিমধ্যে ব্যবহৃত হয়েছে।",

            // Phone number
            "phone_no.required" => "মোবাইল নম্বর অবশ্যই দিতে হবে।",
            "phone_no.digits"   => "মোবাইল নম্বর অবশ্যই ১১ সংখ্যার হতে হবে।",
            "phone_no.unique"   => "এই মোবাইল নম্বর ইতিমধ্যে ব্যবহৃত হয়েছে।",

            // Branch
            "branch.required" => "ব্রাঞ্চের নাম অবশ্যই দিতে হবে।",
            "branch.string"   => "ব্রাঞ্চের নাম অবশ্যই স্ট্রিং আকারে হতে হবে।",
            "branch.min"      => "ব্রাঞ্চের নাম অন্তত ৫ অক্ষরের হতে হবে।",
            "branch.max"      => "ব্রাঞ্চের নাম সর্বাধিক ৫০ অক্ষরের হতে পারবে।",
            "branch.regex"    => "ব্রাঞ্চের নাম শুধুমাত্র বাংলা অক্ষর এবং স্পেস ব্যবহার করা যাবে।",
            "branch.unique"   => "এই ব্রাঞ্চের নাম ইতিমধ্যে ব্যবহৃত হয়েছে।",

            // Password
            "password.required"  => "পাসওয়ার্ড অবশ্যই দিতে হবে।",
            "password.min"       => "পাসওয়ার্ড অন্তত ৮ অক্ষরের হতে হবে।",
            "password.max"       => "পাসওয়ার্ড সর্বাধিক ২০ অক্ষরের হতে পারবে।",
            "password.confirmed" => "পাসওয়ার্ড এবং নিশ্চিত পাসওয়ার্ড মিলছে না।",
        ]);
    }


    public function activities(){
        return view('Backend.Pages.Activities');
    }

    public function finance(){
        return view('Backend.Pages.Finance');
    }

    public function contact(){
        return view('Backend.Pages.Contact');
    }

    public function services(){
        $services = Service::all();
        return view('Backend.Pages.Services', compact('services'));
    }

    public function serviceStore(ServicesDataValidate $request){
        $validatedData = $request->validated();

        $service = Service::create([
            "icon"        => $validatedData['icon'],
            "title"       => $validatedData['title'],
            "description" => $validatedData['description'],
        ]);

        if($service){
            return redirect()->back()->with("success", "সেবা সফলভাবে সংরক্ষিত হয়েছে।");
        }

        return redirect()->back()->with("error", "দুঃখিত, সেবা সংরক্ষণ করতে সমস্যা হয়েছে। দয়া করে আবার চেষ্টা করুন।");
    }

    public function serviceUpdate(ServicesDataValidate $request, $id){
        $validatedData = $request->validated();

        $services = Service::find($id);
        if(!$services){
            return "faild";
        }

        $services->update([
            "icon"        => $validatedData['icon'],
            "title"       => $validatedData['title'],
            "description" => $validatedData['description'],
        ]);

        return redirect()->back()->with("success", "সেবা সফলভাবে হালনাগাদ হয়েছে।");
    }

    public function serviceDestroy(Request $request, $id){
        $service = Service::find($id);

        if(!$service){
            return redirect()->back()->with("error", "সেবা খুঁজে পাওয়া যায়নি।");
        }

        $service->delete();

        return redirect()->back()->with("success", "সেবা সফলভাবে মুছে ফেলা হয়েছে।");
    }
    
    public function changePassword(){
        return view('Backend.Pages.Change-Password');
    }
}
