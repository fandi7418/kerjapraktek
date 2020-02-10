<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscussionRequest;
use App\Http\Controllers\Controller;
use Illuminate\SUpport\Facades\DB;
use Illuminate\SUpport\Facades\Auth;
use App\Discussion;

class DiscussionController extends Controller
{
    public function store(DiscussionRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        // Test git
        Discussion::create($data);

        return redirect('/product/' . $request->get('product_id'));
    }
    public function show()
    {
        $discussions = Discussion::get();

        return view('admin.diskusi.show', ['discussions' => $discussions]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $discussions = Discussion::find($id)->where('id', '=', $id)->delete();

        return redirect('/admin/diskusi/show');
    }
}
