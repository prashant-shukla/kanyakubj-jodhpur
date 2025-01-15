<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Models\DocumentMedia;
use App\Models\DocumentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index()
    {
   
        if(setting('maintenance.mode')=="enabled") {
            return view('maintenance');
        }
        $quote = (Quote::count()) ? $quote = Quote::inRandomOrder()->first() : ['quote'=>'', 'author'=>''];
        $testimonials = Testimonial::all();
        return view('index', compact('quote', 'testimonials'));
    }


    public function DocumentCategorys(){
        $DocumentCategorys = DocumentCategory::all();
        return view('download', compact( 'DocumentCategorys'));
    }


    public function document($slug)
    {
        
        $dom = DocumentCategory::where('slug', $slug)->first();
      
        if (!$dom) {
            return redirect()->route('documents')->with('error', 'Category not found.');
        }
        $documents = DocumentMedia::where('document_category_id', $dom->id)->get();
    
            return view('document', compact('documents', 'dom'));  
    }
    

    public function changeLanguage($Language = 'EN'):string{
        dd($Language);
    }

}
