<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // get all users
    public function show($id = null)
    {
        if ($id) {
            $post = Post::find($id);
            if (!$post) {

                return view('show')->with('post', null);
            }
            return view('show')->with('post', $post);
        } else {
            $posts = Post::all();

            if (count($posts) > 0) {
                return view('post')->with('posts', $posts);
            } else {
                return view('post')->with('posts', null);
            }
        }
    }

    public function store(Request $request)
    {
        // if ($request->isMethod('GET')) {
        //     return view('add');
        // }

        // if ($request->isMethod('POST')) {

        // validate
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        // create post
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        // make slug from title
        $post->slug = $this->str_slug($request->title);
        $post->image = $request->image ? $request->image : null;

        // $post->save();

        if ($post->save()) {
            return view('show')->with('post', $post);
        } else {
            return view('add')->with('post', null);
        }
        // }
    }

    public function search($query = null, $filter = null)
    {
        if ($query && !$filter) {
            $posts = Post::where('title', 'like', '%' . $query . '%')
                ->orWhere('content', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->get();
            if (!$posts) {
                return response()->json(['message' => 'Posts not found'], 404);
            }
            return response()->json($posts);
        } else if ($query && $filter) {
            $posts = Post::where($filter, 'like', '%' . $query . '%')->get();

            if (!$posts) {
                return response()->json(['message' => 'Posts not found'], 404);
            }
            return response()->json($posts);
        } else {
            $posts = Post::all();
            if (!$posts) {
                return response()->json(['message' => 'Posts not found'], 404);
            }
            return response()->json($posts);
        }
    }

    public function update(Request $request, $id)
    {
        // validate
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        // update Post 
        $post = Post::find($id);

        if ($post) {
            if ($post->update($request->all())) {
                return response()->json(['message' => 'Post was Updated successfully', 'post' => $post]);
            }
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post was deleted successfully']);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }

    public function str_slug($str)
    {
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return $str;
    }
}

// For API
// {
//     // get all users
//     public function show($id = null)
//     {
//         if ($id) {
//             $post = Post::find($id);
//             if (!$post) {
//                 return response()->json(['message' => 'Post not found'], 404);
//             }
//             return response()->json(['message' => 'Post found', 'post' => $post]);
//         } else {
//             $posts = Post::all();
//             if (!$posts) {
//                 return response()->json(['message' => 'Posts not found'], 404);
//             }

//             if (count($posts) > 0) {
//                 return response()->json(['posts' => $posts]);
//             } else {
//                 return response()->json(['message' => 'NO posts Yet!!!']);
//             }
//         }
//     }

//     public function store(Request $request)
//     {
//         // validate
//         $this->validate($request, [
//             'title' => 'required|string|max:255',
//             'content' => 'required|string|max:255',
//         ]);

//         // create post
//         $post = new Post();

//         $post->title = $request->title;
//         $post->content = $request->content;
//         // make slug from title
//         $post->slug = $this->str_slug($request->title);
//         $post->image = $request->image;

//         $post->save();

//         if ($post->save()) {
//             return response()->json(['message' => 'post created successfully', 'post' => $post], 201);
//         } else {
//             return response()->json(['message' => 'post not created'], 400);
//         }
//     }

//     public function search($query = null, $filter = null)
//     {
//         if ($query && !$filter) {
//             $posts = Post::where('title', 'like', '%' . $query . '%')
//                 ->orWhere('content', 'like', '%' . $query . '%')
//                 ->orWhere('slug', 'like', '%' . $query . '%')
//                 ->get();
//             if (!$posts) {
//                 return response()->json(['message' => 'Posts not found'], 404);
//             }
//             return response()->json($posts);
//         } else if ($query && $filter) {
//             $posts = Post::where($filter, 'like', '%' . $query . '%')->get();

//             if (!$posts) {
//                 return response()->json(['message' => 'Posts not found'], 404);
//             }
//             return response()->json($posts);
//         } else {
//             $posts = Post::all();
//             if (!$posts) {
//                 return response()->json(['message' => 'Posts not found'], 404);
//             }
//             return response()->json($posts);
//         }
//     }

//     public function update(Request $request, $id)
//     {
//         // validate
//         $this->validate($request, [
//             'title' => 'required|string|max:255',
//             'content' => 'required|string|max:255',
//         ]);

//         // update Post 
//         $post = Post::find($id);

//         if ($post) {
//             if ($post->update($request->all())) {
//                 return response()->json(['message' => 'Post was Updated successfully', 'post' => $post]);
//             }
//             return response()->json(['message' => 'Post not found'], 404);
//         }

//         return response()->json(['message' => 'User not found'], 404);
//     }

//     public function delete($id)
//     {
//         $post = Post::find($id);
//         if ($post) {
//             $post->delete();
//             return response()->json(['message' => 'Post was deleted successfully']);
//         }
//         return response()->json(['message' => 'Post not found'], 404);
//     }

//     public function str_slug($str)
//     {
//         $str = strtolower(trim($str));
//         $str = preg_replace('/[^a-z0-9-]/', '-', $str);
//         $str = preg_replace('/-+/', "-", $str);
//         return $str;
//     }
// }
