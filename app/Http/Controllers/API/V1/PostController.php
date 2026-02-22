<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all posts 
        // with user, post_files
        // with post_files_count, post_comments_count, post_likes_count
        $data = Post::with('user', 'post_files')->withCount('post_files', 'post_comments', 'post_likes')->get();

        // map post_files to add file_path_storage attribute with asset('storage/' . $post_file->file_path)
        $data->map(function ($post) {
            $post->post_files->map(function ($post_file) {
                $post_file->file_path_storage = asset('storage/' . $post_file->file_path);
                return $post_file;
            });
            return $post;
        });

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'caption' => ['required', 'string'],
            'files.*' => ['required', 'file', 'mimes:jpg,jpeg,png,mp4,pdf', 'max:5120'],
        ]);

        $post = null;

        DB::transaction(function () use ($request, $validated) {
            $post = Post::create([
                'caption' => $validated['caption'] ?? null,
            ]);

            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    // 📌 simpan ke: post_files/random_name.ext
                    $path = $file->store('post_files', 'public');

                    PostFile::create([
                        'post_id' => $post->id,
                        'file_path' => $path,
                    ]);
                }
            }
        });

        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get post by id
        // with user, post_files, post_comments, post_comments.user
        // with post_files_count, post_comments_count, post_likes_count
        $data = Post::with('user', 'post_files', 'post_comments.user')->withCount('post_files', 'post_comments', 'post_likes')->find($id);

        // check if post is liked by current user and add is_liked_by_current_user attribute
        $data->is_liked_by_current_user = $data->post_likes()->where('user_id', Auth::user()->id)->exists();

        // format created_at to F j, Y format and add created_at_formatted attribute
        $data->created_at_formatted = $data->created_at->format('F j, Y');

        // map post_files to add file_path_storage attribute with asset('storage/' . $post_file->file_path)
        $data->post_files->map(function ($post_file) {
            $post_file->file_path_storage = asset('storage/' . $post_file->file_path);
            return $post_file;
        });

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
