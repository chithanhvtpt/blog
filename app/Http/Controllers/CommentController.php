<?php

namespace App\Http\Controllers;

use App\Http\Repository\CommentRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentRepository;
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getCommentById($id)
    {
        $comments = $this->commentRepository->getCommentById($id);
        return response()->json($comments);
    }

    public function create(Request $request)
    {
        $comment = $this->commentRepository->create($request);
        return response()->json($comment);
    }
}
