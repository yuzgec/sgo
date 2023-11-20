<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        $Slider = Slider::all();
        return view('frontend.index',compact('Slider'));

    }

    public function contact(){

        SEOMeta::setTitle('SGO ÇELİK');
        SEOMeta::setDescription("SGO ÇELİK");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setDescription($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.detail', compact('Detail'));
    }

    public function projectdetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setDescription($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.project.detail', compact('Detail'));
    }


    public function service(){

        SEOMeta::setTitle('Hizmetlerimiz | SGO ÇELİK');
        SEOMeta::setDescription("SGO ÇELİK");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.index');
    }

    public function project(){

        SEOMeta::setTitle('Projelerimiz | SGO ÇELİK');
        SEOMeta::setDescription("SGO ÇELİK");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.project.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setDescription($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());


        return view('frontend.blog.detail', compact('Detail'));
    }


    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setDescription($Detail->title. ' | SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.page.detail', compact('Detail'));
    }


    public function blog(){

        SEOMeta::setTitle('Haberler | SGO ÇELİK');
        SEOMeta::setDescription('SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.blog.index');
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | SGO ÇELİK');
        SEOMeta::setDescription('SGO ÇELİK');
        SEOMeta::setCanonical(url()->full());

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

    Mail::send("mail.form",compact('New'),function ($message) use($New) {
        $message->to('olcayy@gmail.com')->subject($New->name.' - Site Bilgi Formu');
    });

        return redirect()->route('home');
    }

    public function reference(){
        return view('frontend.page.reference');
    }

}
