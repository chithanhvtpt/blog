<?php

namespace App\Http\Repository;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class CommentRepository extends BaseRepository
{
    public function __construct(Comment $comment)
    {
        parent::__construct($comment);
    }

    public function getCommentById($id)
    {
        $blogId = Blog::with("user", "category")->find($id);
        return Comment::with("user", "blog")->where("blog_id", "=", $blogId->id)->orderBy("created_at", "DESC")->get();
    }

    public function create(Request $request)
    {
        $data = $request->only("content", 'blog_id', "user_id");
        return Comment::query()->create($data);
    }


}
