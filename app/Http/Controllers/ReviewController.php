<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Http\Controllers\Controller;
use Illuminate\SUpport\Facades\DB;
use Illuminate\SUpport\Facades\Auth;
use App\Review;


class ReviewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Review::create($data);

        return redirect('/product/' . $request->get('product_id'));
    }
    public function show()
    {

        $reviews = Review::get();
        return view('admin.review.show', ['reviews' => $reviews]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $discussions = Review::find($id)->where('id', '=', $id)->delete();

        return redirect('/admin/review/show');
    }
}
