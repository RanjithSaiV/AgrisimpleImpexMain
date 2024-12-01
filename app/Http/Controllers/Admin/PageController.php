<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data = Page::paginate(10);
        return view('admin.pages.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Page();
        $data->title = $request->title;
        $data->slug = $this->slugGenerate($request->title);
        $data->name = $request->name;
        $data->content = $request->contents;
        $data->save();
        Alert::toast("Page Stored Successfully", 'success');
        return redirect(route('pages.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Page::where('id', $id)->first();
        return view('admin.pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Page::where('id', $id)->first();
        $data->content = $request->contents;
        $data->save();
        Alert::toast("Page Updated Successfully", 'update');
        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function slugGenerate($name)
    {
        if (preg_match('/[\/]/', $name)) {
            $name = str_replace('/', '_', $name);
        }
        $slug = strtolower(str_replace(' ', '_', $name));

        $slugCheck = Page::where('slug', $slug)->get();
        if (count($slugCheck) > 0) {

            $name = $name . rand(1, 999);

            return $this->slugGenerate($name);

        } else {

            return $slug;

        }

    }
}
