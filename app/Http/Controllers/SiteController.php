<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Wink\WinkAuthor;
use Wink\WinkPage;
use Wink\WinkPost;
use Wink\WinkTag;

class SiteController extends Controller
{

    // get all post in index page
    public function index(){
        $author = WinkAuthor::with('posts')->first();
        Session::put('author' , $author);
        $five_categories = WinkTag::paginate(5);
        $posts = WinkPost::with('tags')
                         ->live()
                         ->orderBy('publish_date' , 'DESC')
                         ->paginate(5);
        $trending_posts = WinkPost::paginate(4);
        $tree_posts = WinkPost::paginate(3);
        $categories = WinkTag::all();
        $latest_post = WinkPost::latest()->first();

        return view('site.index' , compact(['posts','five_categories','categories','trending_posts','latest_post','tree_posts']));

    }

    // this is about page
    public function about(){
        $about = WinkPage::where('slug' , 'about')->first();
        return view('site.about' , compact('about'));
    }

    // get blog page
    public function blog(){
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date' , 'DESC')
            ->paginate(3);
        $categories = WinkTag::all();
        $trending_posts = WinkPost::paginate(4);
        return view('site.blog' , compact(['posts','categories','trending_posts']));
    }

    // get blog_two page
    public function codding_news(){
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date' , 'DESC')
            ->paginate(5);
        return view('site.blog-two' , compact('posts'));
    }

    // get contact page
    public function contact(){
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date' , 'DESC')
            ->paginate(5);
        return view('site.contact' , compact('posts'));
    }

    // show the single post in show page
    public function show($slug){
        $post = WinkPost::where('slug' , $slug)->first();
        return view('site.show' , ['post'=>$post]);
    }

    // show the single  page test
    public function single(){
        return view('site.show' );
    }
}
