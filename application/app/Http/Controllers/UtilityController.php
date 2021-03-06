<?php

namespace App\Http\Controllers;

use App\Contact;
use App\News;
use App\Organization;
use Illuminate\Http\Request;

class UtilityController extends Controller
{
    //

    public function contactUs()
    {
        return view('utility.contact-us');
    }

    public function storeContact(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->subject = $request->subject;
        $contacts->email = $request->email;
        $contacts->mobile = $request->mobile;
        $contacts->message = $request->message;
        $contacts->save();
        return redirect('/contact-us')->with('contact_message', "Thanks! We will response you soon.");
    }

    public function organization()
    {
        $organizations = Organization::all();
        return view('utility.organization', ['organizations'=> $organizations]);
    }

    public function news()
    {
        $news = News::paginate(10);
        return view('utility.news', ['news'=>$news]);
    }

    public function fullNews($id)
    {

        $news =News::find($id);
        return view('utility.full-news',['news'=>$news]);
    }

    public function terms()
    {
        return view('utility.terms-of-use');
    }

    public function team()
    {
        return view('utility.team');
    }
}
