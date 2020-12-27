<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:pages', 'max:255'],
            'title' => ['required', 'max:255'],
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $page = new Page();
        $page->name = $request->name;
        $page->slug = Str::slug(Str::words($request->name, 3));
        $page->title = $request->title;
        $page->contents = $request->contents;
        $page->status = $request->status;

        if ($validatedData) {
            $page->save();
            return redirect()->route('page.edit', $page->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
//        return view('admin.pages.edit', with('name' => $id));

        return view('admin.pages.edit')->with('data', Page::find($id));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $page = Page::find($id);
        $page->name = $request->name;
        $page->slug = Str::slug(Str::words($request->name, 3));
        $page->title = $request->title;
        $page->contents = $request->contents;
        $page->status = $request->status;
        $page->save();

        return response()->json(['data' => $page]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
