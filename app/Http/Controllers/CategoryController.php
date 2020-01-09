<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function list()
    {
    	// $result = DB::table('categories')
    	// 	->get();
    	
        $result = Category::all();

    	return view('category.list')
    		->with('catlist', $result);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = [
            'cat_name' => $request->catname,
            'desc' => $request->desc
        ];

       //$data = $request->all();
        
        DB::table('categories')
            ->insert($data);

        // Category::create();

        // $cat = new Category();
        // $cat->cat_name = $request->catname;
        // $cat->desc = $request->desc;
        // $cat->save();


        return redirect()->route('category.list');
    }

    public function edit($id)
    {
        // $cat = DB::table('categories')
        //     ->where('category_id', $id)
        //     ->first();

        $cat = Category::find($id);

        return view('category.edit')
            ->with('category', $cat);
    }

    public function update(Request $request, $id)
    {
        // $data = [
        //     'category_name' => $request->catname,
        //     'description' => $request->desc
        // ];

        // DB::table('categories')
        //     ->where('category_id', $request->cid)
        //     ->update($data);

        $cat = Category::find($request->cid);
        $cat->cat_name = $request->catname;
        $cat->desc = $request->desc;
        $cat->save();

        return redirect()->route('category.list');
        
    }

    public function delete($id)
    {
        // $cat = DB::table('categories')
        //     ->where('category_id', $id)
        //     ->first();

        $cat = Category::find($id);

        return view('category.delete')
            ->with('category', $cat);
    }

    public function destroy(Request $request, $id)
    {
        // DB::table('categories')
        //     ->where('category_id', $request->cid)
        //     ->delete();

        // $cat = Category::find($request->cid);
        // $cat->delete();

        Category::destroy($request->cid);

        return redirect()->route('category.list');
    }

    public function show($id)
    {

        $products = Category::find($id)->products;
       // dd($products);
        return view('category.show')
            ->with('products', $products);
    }
}
