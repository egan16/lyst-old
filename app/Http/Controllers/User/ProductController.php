<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Store;
use App\ListModel;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $stores = Store::all();

        return view('user.products.create')->with([
          'listId' => $id,
          'stores' => $stores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $list_id)
    {
        //VALIDATE FOR PRODUCT
        $request->validate([
          'title' => 'required|max:191',
          'price' => 'required|',
          'product_num' => 'required|',
          'url' => 'required|',
          'store_id' => 'required|',
        ]);

        //PRODUCTS FIELDS
        $product = new Product();
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->product_num = $request->input('product_num');
        $product->url = $request->input('url');
        $product->store_id = $request->input('store_id');

        //$product->list_id = $list_id;

        $product->save();

        // $listModel = ListModel::findOrFail($list_id);

        $product->lists()->attach($list_id);

        // $listModel = new ListModel();
        // $listModel->list_id = $list_id;
        //
        // $listModel->save();



        // $product_list = new Product_list();
        // $product_list->list_id = $list_id;
        //
        // $product_list->save();


        return redirect()->route('user.lists.show', [$list_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('user.products.show')->with([
          'product' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->lists()->detach();
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('user.lists.show');
    }


    // public function destroy($list_id, $id)
    // {
    //     $product = Product::findOrFail($id);
    //     $product->lists()->detach($list_id);
    //     return redirect()->route('user.lists.show');
    // }
}
