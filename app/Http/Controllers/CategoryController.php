<?php

namespace App\Http\Controllers;

use App\Http\Repository\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        $categories = $this->categoryRepository->getAll();
        return response()->json($categories);
    }
}
