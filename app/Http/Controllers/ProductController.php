<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\ModelProduct;



class ProductController extends Controller
{   
    private $objProduct;

    public function __construct(ModelProduct $modelProduct)
    {
        $this->objProduct= $modelProduct;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //if product else client
        $products= $this->objProduct->all();
        return view('product_index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {   
        $cad= $this->objProduct->create([
            'nome'=>$request->nome,
            'codigo_estoque'=>$request->codigo_estoque,
            'tipo_item'=>$request->tipo_item,
            'preco_compra'=>$request->preco_compra,
            'preco_venda'=>$request->preco_venda
            
        ]);
        if($cad){
            return redirect('products');
        }       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $product = $this->objProduct->find($id);

        return view('show_product', compact('product'));
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
    public function update(ProductRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
