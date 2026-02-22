<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'caption' => ['required', 'string'],
            'files.*' => ['required', 'file', 'mimes:jpg,jpeg,png,mp4,pdf', 'max:5120'],
        ]);

        $post = null;

        if ($request->hasFile('files')) {
            $post = Post::create([
                'user_id' => $validated['user_id'],
                'caption' => $validated['caption'] ?? null,
            ]);

            foreach ($request->file('files') as $file) {
                $path = $file->store('post_files', 'public');

                PostFile::create([
                    'post_id' => $post->id,
                    'file_path' => $path,
                ]);
            }
        }

        return response()->json($post, 201);
    }
}
