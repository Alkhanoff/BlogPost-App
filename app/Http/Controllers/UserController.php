<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\UserCat;
use App\Models\Category;
use Carbon\Carbon;
use Auth;


class UserController extends Controller
{

    public function dashboard()
    {
        $id = Auth::user()->id;
        $posts = Post::where('userId', $id)->get();
        return view('users.dashboard', compact('posts'));
    }

    public function newpost()
    {
        $id = Auth::user()->id;
        if (Auth::user()->isNew == 0) {
            $user = User::find($id);
            $u = $user->categories()->get();

            return view('users.post', compact('ucats', 'u'));
        } else {
            \Session::flash('status', 'Aktiv deyilsiniz!');
            return redirect()->route('user.dashboard');
        }
    }

    public function writepost()
    {
        $id = Auth::user()->id;
        if (Auth::user()->isNew == 0) {

            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() . '.' . request()->image->getClientOriginalExtension();


            request()->image->move(public_path('images'), $imageName);

            Post::create([
                'title' => request('title'),
                'text' => request('title'),
                'catId' => request('catId'),
                'userId' => $id,
                'status' => 0,
                'date' => Carbon::now(),
                'image' => $imageName
            ]);


            return redirect()->route('user.dashboard');
        } else {
            \Session::flash('status', 'Aktiv deyilsiniz!');
            return redirect()->route('user.dashboard');
        }
    }


}
