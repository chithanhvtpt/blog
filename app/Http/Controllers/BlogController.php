<?php

namespace App\Http\Controllers;

use App\Http\Repository\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogRepository;
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        $blogs = $this->blogRepository->getAll();
        return response()->json($blogs);
    }

    public function create(Request $request)
    {
        $blog = $this->blogRepository->create($request);
        return response()->json([
            "message" => "created successfully",
            "blog" => $blog
        ]);
    }

    public function delete($id)
    {
        $this->blogRepository->delete($id);
        return response()->json("deleted");
    }

    public function update($id, Request $request)
    {
        $blog = $this->blogRepository->update($id, $request);
        return response()->json($blog);
    }

    public function getById($id)
    {
        $blog = $this->blogRepository->getById($id);
        return response()->json($blog);
    }

}
