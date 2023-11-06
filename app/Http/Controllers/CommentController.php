<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //GET Method
    public function index()
    {
        $comment = Comment::all();
        return response()->json($comment);
    }

    //GET Method
    public function show($id)
    {
        $comment = Comment::find($id);

        if (!$comment)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        return response()->json($comment);
    }

    //POST Method
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment -> message = $request -> message;
        $comment -> authorId = $request -> authorId;
        $comment -> jobId = $request -> jobId;
        $comment -> isActive = $request -> isActive;
        $comment -> isArchived = $request -> isArchived;
        $comment -> createdAt = $request -> createdAt;
        $comment -> updatedAt = $request -> updatedAt;
        $comment->save();

        return response()->json(['message' => 'Đã tạo thành công.', 'comment' => $comment], 201);
    }

    //PUT Method
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);

        if (!$comment)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        $data = $request->all();
        $comment->update($data);

        return response()->json(['message' => 'Cập nhật thành công.', 'comment' => $comment]);
    }

    //DELETE Method
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        $comment->delete();

        return response()->json(['message' => 'Xóa thành công.']);
    }
}
