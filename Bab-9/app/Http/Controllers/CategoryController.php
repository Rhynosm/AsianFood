<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'region' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Category::create([
            'region' => $request->region,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function edit($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id_categories)
    {
        $request->validate([
            'region' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $category = Category::find($id_categories);

        $category->update([
            'region' => $request->region,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function delete($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-hapus', compact('category'));
    }

    public function destroy($id_categories)
    {
        $category = Category::find($id_categories);
        $category->delete();
        return redirect('/category');
    }

}
