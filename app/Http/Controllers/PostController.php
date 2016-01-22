<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //
    public function getPost($slug){
      $post = Post::whereSlug($slug)->firstOrFail();

			return view('blog.post')->with(['post' => $post]);
    }

    public function index(){
      $posts = Post::where('published_at', '<=', Carbon::now())
					 ->orderBy('published_at', 'desc')
					 ->take(10)->get();

        return view('home', compact('posts'));
    }
    public function create(Request $request){
      $destinationPath =  public_path('vids/');
      $filename = time().'.'.$request->file('video')->guessExtension();
      $request->file('video')->move($destinationPath,$filename);
      Post::Create([
        'content' => $filename,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'premium' => $request->premium
        ]);

    }
}
