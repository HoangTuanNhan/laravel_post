<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    public function show(Request $request) {

        return view('post.create');
    }

    public function create(Request $request ) {
        try{

            $data = $request->all();

            $role = [
                'name' => 'required|max:255',
                'detail' => 'required|max:1000',
                'is_post' => 'required',
            ];

            $validate = \Validator::make($data, $role);

            if($validate->fails()) {
                return redirect()->route('post.show')->withErrors($validate)->withInput();
            }

            $post = new Post();
            $post->fill($data);
            $post->save();
            return redirect()->route('post.child');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error($ex->getMessage());
        }


    }
}
