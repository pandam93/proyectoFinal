<?php

namespace App\Http\Controllers;

use App\Article;
use App\Classroom;
use App\User;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if(Auth::user()->is_admin == 1){
        $articles = Article::orderBy('created_at','desc')->paginate(4);
        $users = User::all();
        $tags = Tag::all();
        return view('articles.index', compact('articles', 'users', 'tags'));

    }

    public function main()
    {
        //flash('Welcome Aboard!');
        $articles = Article::where('user_id', 1)->orderBy('title', 'desc')->take(4)->get();
        $tags = Tag::all();
        //$classroom = Classroom::where('id',)
        return view('home', ['articles' => $articles, 'tags' => $tags]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $tags = Article::find($article->id)->tags;
        $article = Article::find($article->id);
        $comments = $article->comments;
        $user = User::find($article->user_id);
        $classroom = Classroom::where('id', $user->classroom_id)->get()->first();

        return view('articles.show', compact('tags','article',
        'classroom', 'comments', 'user'));
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function articles($id)
    {
        $user = User::find($id);

        return view('articles.articles', compact('user'));
    }

    /**
* Show the form to create a new blog post.
*
* @return Response
*/
public function create()
{

    $categories = Classroom::all();
    $writers = User::all();
    return view('articles.create', compact('categories', 'writers'));

}

/**
* Store a new blog post.
*
* @param Request $request
* @return Response
*/
public function store(Request $request)
{
        $validatedData = $request->validate([
                                    'title' => 'bail|required|unique:articles|max:255',
                                    'body' => 'required',
                                            ]);
}

public function edit($id)
{
    if(Auth::user()->is_admin == 1){
    $article = Article::findOrFail($id);
    return view('articles.edit', compact('article'));
  }
  else {
    return redirect('home');
  }
}
public function update(Request $request, $id)
{
    if(Auth::user()->is_admin == 1){
        
      if($file = $request->file('image')){
          
          $name = $file->getClientOriginalName();
          
          $post = Article::findOrFail($id);
$post->title = $request->input('title');
$post->body = $request->input('body');  
$post->published_at = $request->input('published_at'); 
$post->image = $name;
$post->save();             
              $file->move('images/upload', $name);
}
else {
 $post = Article::findOrFail($id);
$post->title = $request->input('title');
$post->body = $request->input('body');  
$post->published_at = $request->input('published_at'); 
$post->save();   
}
  if($post){
         return redirect('articles');
     }
}
}

}
