<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();

return view('quan-tri.category.index',['data'=>$data]);

    }
    public function create_category(Request $request)
    {
        $validatedCategory = $request->validate([
           'name' => 'required|max:255|min:5|unique:categories'

        ],[
            'name.required' => 'Tên không được để trống',
             'name.min' => 'tên không được dưới 5 ký tự',
            ]
        );

        $data = new Category();
        $data->name = $request->name;

        $data->slug = str_slug($request->name);
        //kiểm tra File update lên
        $data->save();
        return redirect('quan-tri/category');
    }



    public function show_create_category()
    {
        return view('quan-tri.category.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('quan-tri.category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->slug = str_slug($request->name);
        //kiểm tra File update lên
        $data->save();
        return redirect('quan-tri/category');
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('quan-tri/category');
    }
}
