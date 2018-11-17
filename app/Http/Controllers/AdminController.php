<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use App\Models\UserCat;
use Validator;
use Auth;


class AdminController extends Controller
{


    public function login()
    {
        return View('admin.login');
    }

    //    public function insert(){
//        $user = Admin::create([
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('admin123')
//        ]);
//        return 'created';
//    }

    public function index()
    {
        $newPost = Post::where('status', 0)->count();
        $newUser = User::where('isNew', 1)->count();
        return View('admin.dashboard', compact('newPost', 'newUser'));
    }


    //Show all Users
    public function userlist()
    {
        $users = User::all();
        return View('admin.userlist', compact('users'));
    }

    //Show User By id
    public function user($id)
    {

        $cats = Category::where('status', 1)->get();
        $user = User::find($id);

        $chosen = $user->categories()->get();


        return View('admin.userdetails', compact('user', 'cats', 'chosen'));
    }

    //Update User Info
    public function updateuser($id)
    {
        $user = User::find($id);
        UserCat::where('userId', $id)->delete();
        $category = request('catId');
        $count = count($category);
        for ($i = 0; $i < $count; $i++) {
            $data = array(
                'catId' => $category[$i],
                'userId' => $id
            );
            $insertData[] = $data;
        }
        UserCat::insert($insertData);
        $user->isNew = request()->input('isNew');
        $user->update();
        return redirect('admin/userlist');
    }

    //Soft Delete the post
    public function softdeletepost($id)
    {

        $post = Post::find($id);

        $post->delete();
        return redirect()->route('admin.posts');
    }

    //Force Delete the post
    public function forcedeletepost($id)
    {

        $post = Post::find($id);

        $post->forceDelete();
        return redirect()->route('admin.posts');
    }

    //Get all Categories
    public function categoriesList()
    {
        $cats = Category::all();
        return View('admin.categories', compact('cats'));
    }

    //Show category Details
    public function categorydetails($id)
    {
        $cat = Category::find($id);
        return View('admin.category-details', compact('cat'));
    }

    //Update Category Informations
    public function updatecategory($id)
    {
        $cat = Category::find($id);
        $cat->status = request()->input('status');
        $cat->name = request()->input('name');
        $cat->update();
        return redirect('admin/categories');
    }

    //Create Category View
    public function createcategory()
    {
        return View('admin.create-category');
    }

    //Post Create a Category
    public function newcategory()
    {
        Category::create([
            'name' => request('name'),
            'status' => 1

        ]);

        return redirect()->route('admin.categories');
    }

    ///Show all Posts
    public function posts()
    {
        $posts = Post::all();
        return View('admin.posts', compact('posts'));
    }

    //Show post infos by id
    public function postdetails($id)
    {
        $post = Post::find($id);
        return View('admin.post-details', compact('post'));
    }

    //Update post
    public function updatepost($id)
    {
        $post = Post::find($id);
        $post->status = request()->input('status');
        $post->update();
        return redirect('admin/posts');
    }
}


