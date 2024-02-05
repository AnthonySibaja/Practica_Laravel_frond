<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    //
   public function index(){

      $posts = Post::all();

      return view('admin.posts.index', ['posts'=> $posts]);
   }
    public function show(Post $post){
        
       // Post::findOrFail($id);
        return view('blog-post', ['post'=>$post]);
    }
    public function create(){
        
      
        return view('admin.posts.create');
     }
     
     public function store(Request $request){
        
         $inputs = request()->validate([
            'titulo'=>'required|min:8|max:255',
            'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body'=>'required'
         ]);

         if(request('post_image')){
            $inputs['post_image'] = request('post_image')->store('images');
         }
       
         auth()->user()->posts()->create($inputs);

         session()->flash('post-created-message', ' Post with titulo was created ', $inputs['titulo']);

         return redirect()->route('post.index');
  
     }
     public function destroy(Post $post,Request $request){
            $post->delete();
            $request->flash('message', 'Post was deleted');
            return back();
     }

}
