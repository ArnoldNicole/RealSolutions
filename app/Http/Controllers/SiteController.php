<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelpContact;
use App\Post;
use App\PublicComments;
use App\News;

class SiteController extends Controller
{
    public function index(){
      $news=News::orderBy('created_at','DESC')->get();
    	return view('site.index', compact('news'));
    }
    public function learn_about_us(){
    	return view('site.learn_about_us');
    }
    public function gallery()
    {
    return view('site.gallery');
    }
    public function what_we_do()
    {
        return view('site.what_we_do');
    }
    public function contact_us()
    {
        return view('site.contact_us');
    }
    public function sendMessage()
    {
        $data=request()->validate([
            'name'=>['string','min:3','required'],
            'email'=>['email','required'],
            'message'=>['string','min:10','required'],
        ]);
        $message=HelpContact::create($data);
        if ($message) {
        return redirect()->back()->with('success','Message sent successfully. We will get back to you shortly');
        
        }else{
            return redirect()->back()->with('error','Error Occured. Please try again later');
    
        }
        }
        public function blog()
        { 
            $post=(Post::latest()->first() ?? null);
            //dd($post);

          if ($post!=null) {
            //  dd($post);
            $comments=PublicComments::where('post_id', $post->id)
               ->orderBy('created_at', 'desc')
               ->get();
               $user=$post->user->id;
               $userPosts=Post::where('category', '=', $post->category)
               ->orderBy('created_at','desc')
               ->paginate(6);
             // dd($userPosts);
               $verb="";
               //check if  there are related posts
               if ($userPosts->count()==0) {
                   //set verb to By same author
                $verb="From the same author";
                //get te articles from same author
                $userPosts=Post::where('user_id', '=', $post->user_id)
                ->orderBy('created_at','desc')
                ->paginate(6);
               }else{
                $verb="Related Articles";
               }

            return view('site.blog', compact('post','comments','userPosts','verb'));
          }
          else {
            return redirect('/Gallery')->with('success','No blogs yet, explore our gallery on the meanwhile');
          }
        }

        public function blogLinkAvailable(Post $post){
            //dd($post);
             $comments=PublicComments::where('post_id', $post->id)
               ->orderBy('created_at', 'desc')
               ->get();
               $user=$post->user->id;
               $userPosts=Post::where('category', '=', $post->category)
               ->orderBy('created_at','desc')
               ->paginate(6);
            //check if the post is the same post
               // dd($userPosts->count());
               $verb="";
               //check if  there are related posts
               if ($userPosts->count()==1 || $userPosts->count()<1) {
                   //set verb to By same author
                $verb="From the same author";
                //get te articles from same author
                $userPosts=Post::where('user_id', '=', $post->user_id)
                ->orderBy('created_at','desc')
                ->paginate(6);
               }
               else{
                $verb="Related Articles";
               }

            return view('site.blog', compact('post','comments','userPosts','verb'));
        }

        public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            // select title name from database
            $data = Post::where('title', 'LIKE', $request->title.'%')
                ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data)>0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                // loop through the result array
                foreach ($data as $row){
                    // concatenate output to the array
                    $output .= '<li class="list-group-item"><a href="/blog/'.$row->id.'">'.$row->title.'</a></li>';
                }
                // end of output
                $output .= '</ul>';
            }
            else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">'.'<span class="text-danger">Your search could not catch any article. <a href="/easyblog">Explore all articles</a></span>'.'</li>';
            }
            // return output result array
            return $output;
        }
    }

    public function image($url){
        //dd($url);
        return view('gallery.index', compact('url'));
    }
    public function easyblog(){
        return view('blog');
    }

    public function news(){
      $news=News::orderBy('created_at','Desc')->paginate(1);
      $others=News::orderBy('created_at','DESC')->get();
     

      return view('site.news', compact('news','others'));


    }
}
