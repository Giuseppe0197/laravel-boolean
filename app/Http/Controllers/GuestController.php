<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home() {
        return view('pages.homepage');
    }

    public function createPostcard() {
        return view('pages.postcard-create');
    }

    public function storePostcard(Request $request) {
        $datas = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
        ]);

        /* $imageFile = $datas['image']; */

        $imageFile = $request -> file('image');

        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/images/', $imageName, 'public');

        $datas['image'] = $imageName;

        $postcard = Postcard::create($datas);

        return redirect() -> route('home');

    }
}
