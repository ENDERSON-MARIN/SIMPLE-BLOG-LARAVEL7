<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Post;

class PostController extends Controller
{
       public function post(){

         $categories = Category::all();
      
         return view('posts.post', ['categories' => $categories]); 
   }

   public function addPost(Request $request){

       $validatedData = $request->validate([
        'post_title' => 'required|max:255',
        'post_body' => 'required',
        'category_id' => 'required',
         'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg'
    ]); 
         $ruta = Storage::disk('public')->put('Post', $request->file('post_image'));
         $image_url = asset($ruta);
         $posts = new Post;
         $posts->user_id = Auth::user()->id;
         $posts->post_title = $request->input('post_title');
         $posts->post_body = $request->input('post_body');
         $posts->category_id = $request->input('category_id');
         $posts->post_image = $image_url;
         $posts->save();
          return redirect('/home')->with('response', 'Post Published Successfully');

       }
}
