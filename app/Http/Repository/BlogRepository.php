<?php

namespace App\Http\Repository;

use App\Http\Repository\Ipl\BlogRepositoryInterface;
use App\Models\Blog;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{

    public function __construct(Blog $blog)
    {
        parent::__construct($blog);
    }

    public function getAll()
    {
        $blogs = Blog::with("user", "category")->orderBy("created_at", "DESC")->get();
        return $blogs;
    }

    public function create(Request $request)
    {
        $data = $request->only("title", "content", "date", "category_id", "user_id");
        return Blog::query()->create($data);
    }

    public function update($id, Request $request)
    {
        Blog::query()->findOrFail($id);
        $data = $request->only("title", "content", "date", "category_id", "user_id");
        return Blog::query()->where("id", "=", $id)->update($data);
    }

    public function getById($id)
    {
        return Blog::with("user", "category")->find($id);
    }

}
