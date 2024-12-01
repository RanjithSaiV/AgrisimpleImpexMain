<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('website.index');
    }

    public function about()
    {
        return view('website.about');
    }

    public function aboutKyc()
    {
        return view('website.about_kyc');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function products()
    {
        return view('website.bananas');
    }
    public function bananaSpecification()
    {
        return view('website.bananaspecification');
    }
    public function tenderCoconut()
    {
        return view('website.bananas');
    }
    public function priceList()
    {
        return view('website.price_details');
    }
    public function appointment()
    {
        return view('website.appointment');
    }


    public function contactForm(Request $request)
    {
        $data = new ContactForm();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->subject= $request->subject;
        $data->mssage = $request->message;
        $data->save();
        Alert::toast('Thank You For Reaching Us', 'success');
        return redirect()->back();
    }



}
