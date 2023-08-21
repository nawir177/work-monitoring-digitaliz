<?php

namespace App\Http\Controllers\admin;

use App\Models\Icon;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.category.index', [
            'categories' => Category::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.category.form', [
            'route' => route('admin.category.store'),
            'icons' => Icon::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'icon_id' => 'required',
            'color' => 'required',
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);
        toast('Category Added Succussfully', 'success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('pages.admin.category.show',
            [
                'category' => Category::where('slug', $slug)->get()->first()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('pages.admin.category.form', [
            'route' => route('admin.category.update',$id),
            'icons' => Icon::latest()->get(),
            'old'=>Category::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'icon_id' => 'required',
            'color' => 'required',
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::find($id)->update($data);
        toast('Category Updated Succussfully', 'success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
