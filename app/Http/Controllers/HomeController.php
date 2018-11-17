<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class HomeController extends Controller
{
    //Home Page
    public function index()
    {
        $cats = Category::where('status',1)->get();

        $posts = Post::where('status', 1)->orderBy('id', 'desc')->take(5)->get();
        return View('main.home', compact('cats', 'posts'));
    }

    //Show By Categories
    public function category($id)
    {
        $cats = Category::where('status',1)->get();

        $posts = Post::where('catId', $id)->where('status', 1)->orderBy('id', 'desc')->get();
        return View('main.home', compact('cats', 'posts'));
    }

    //Posts Single Page
    public function details($id)
    {
        $post = Post::where('status', 1)->findOrFail($id);
        $cats = Category::where('status',1)->get();
        return View('main.details', compact('cats', 'post'));
    }

    //Registering User
    public function register()
    {

        $this->validate(request(), [
            'fullname' => 'required|min:3|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
        $user = User::create([
            'email' => request('email'),
            'isNew' => 1,
            'fullname' => request('fullname'),
            'password' => Hash::make(request('password')),
            'remember_token	' => bcrypt(request('email'))
        ]);
        \Session::flash('success', 'Uğurlu! Zəhmət olmasa Admin təsdiqini gözləyin');
        return redirect()->route('home');
    }

    //Search By Title and Text of Post
    public function search()
    {
        $cats = Category::where('status',1)->get();
        $item = request()->input('search');
        $posts = Post::where('status', 1)->where('title', 'like', "%$item%")->orWhere('text', 'like', "%$item%")->get();
        return View('main.search', compact('cats', 'posts'));
    }
}
