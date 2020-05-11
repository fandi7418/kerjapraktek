<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtalaseRequest;
use App\Http\Controllers\Controller;
use Illuminate\SUpport\Facades\DB;
use App\Etalase;
use App\Product;
use App\Etalasiproduct;
use App\Store;
// use App\Http\Requests\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class EtalaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etalase = Etalase::get();

        return view('admin.etalase.show', ['etalase' => $etalase]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::get();
        return view('etalase.create', ['etalase' => new Etalase, 'product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtalaseRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['store_id'] = Auth::user()->store_id;
        $e = Etalase::create($data);

        return redirect('/store/' . $e->store_id);
    }
    public function store_etalase(Request $request, $id)
    {
        $data = new Etalasiproduct();
        $data->product_id = $request->product_id;
        $data->etalase_id = $id;
        $data->save();

        return redirect('/etalase/' . $data->etalase_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show(Etalase $etalase, Product $product)
    {
        $etalase = Etalase::with(['products'])->find($etalase->id);
        $productIds = array_pluck($etalase->products, 'id');
        if (Auth::check()) {
            $product = Product::where('store_id', Auth::user()->store_id)
            ->whereNotIn('id', $productIds)->get();
        } else {
            $product = Product::
            whereNotIn('id', $productIds)->get();
        }
        
        //dd($etalase->toArray());

        return view('etalase.show', ['etalase' => $etalase, 'product' => $product,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etalase $etalase,   $id)
    {
        $data = Auth::user()->store_id;

        $discussions = Etalase::find($id)->where('id', '=', $id)->delete();

        return redirect('/store/' . $data);
    }
    public function hapus(Request $request, $etalase_id, $product)
    {
        $discussions = Etalasiproduct::where('etalase_id', '=', $etalase_id)
            ->where('product_id', '=', $product->id)->delete();

        return redirect('/etalase/' . $etalase_id);
    }
    public function lihat(Etalase $etalase, Product $product)
    {
        // DB::table('users')
        //     ->select('id', 'store_id')
        //     ->join('');
        $product = Product::get();
        $etalase = Etalase::with(['products'])->find($etalase->id);



        return view('etalase.lihat', ['etalase' => $etalase, 'product' => $product]);
    }
}
