<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PostLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request data post_id, status
        $validated = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'status' => 'required|in:like,unlike'
        ]);

        $data = [
            'post_id' => $validated['post_id'],
            'user_id' => Auth::user()->id,
        ];

        // check status and create or delete the like
        if ($validated['status'] === 'like') {
            // create a new like for the post
            $like = PostLike::updateOrCreate(
                $data,
                $data
            );;
            return response()->json($like, 201);
        } else {
            // delete the like for the post
            $like = PostLike::where('post_id', $validated['post_id'])
                ->where('user_id', Auth::user()->id)
                ->first();
            if ($like) {
                $like->delete();
            }
            return response()->json(null, 204);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
