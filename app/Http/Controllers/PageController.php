<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Http\Controllers\Controller;
use Illuminate\SUpport\Facades\DB;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.index', ['pages' => Page::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create', ['page' => new Page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        Page::create($request->all());

        return redirect('page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $page = Page::get();
        return view('admin.page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('page.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, Page $page)
    {
        $page->update($request->all());

        return redirect('page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $discussions = Page::find($id)->where('id', '=', $id)->delete();

        return redirect('/admin/page/show');
    }
    public function add(PageRequest $request)
    {
        $page = new Page();
        $page->title = $request->title;


        if ($request->hasFile('body')) {

            $file = $request->file('body');

            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('iklan', $fileName);

            $page['body'] = $fileName;
        }
        $page->save();
        return redirect('/admin/page/show');
    }
}
