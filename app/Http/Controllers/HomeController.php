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
        // dd(Hash::make('123'));
        if(setting('maintenance.mode')=="enabled") {
            return view('maintenance');
        }
        // dd(Quote::inRandomOrder()->first()->toArray());
        $quote = (Quote::count()) ? $quote = Quote::inRandomOrder()->first() : ['quote'=>'', 'author'=>''];
        $testimonials = Testimonial::all();
        // Pass the slides to the view
        return view('index', compact('quote', 'testimonials'));
    }
    public function DocumentCategorys(){
        $DocumentCategorys = DocumentCategory::all();
        return view('download', compact( 'DocumentCategorys'));
    }
    public function document($slug)
    {
        // Fetch the document category by slug
        $dom = DocumentCategory::where('slug', $slug)->first();
    
        // Check if the category exists
        if (!$dom) {
            return redirect()->route('documents.index')->with('error', 'Category not found.');
        }
    
        // Fetch documents associated with this category
        $documents = DocumentMedia::where('document_category_id', $dom->id)->get();
    
        if ($documents->isNotEmpty()) {
            // Return the documents to the view
            return view('document', compact('documents', 'dom')); // Pass both documents and category
        } else {
            // Optionally, handle the case where no documents are found
            return redirect()->route('documents.index')->with('error', 'No documents found in this category.');
        }
    }
    

    
    
    public function changeLanguage($Language = 'EN'):string{
        dd($Language);
    }
}
