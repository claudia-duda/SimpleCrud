<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelClient;

class ClientController extends Controller
{
    private $objClient;

    public function __construct(ModelClient $modelClient)
    {   
        $this->objClient = $modelClient;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->objClient->all();
        return view('client_index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad= $this->objClient-create([
            'nome_fantasia'=>$request->nome_fantasia,
            'razao_social'=>$request->razao_social,
            'tipo'=>$request->tipo,
            'identificacao'=>$request->identificacao,
            'pais'=>$request->pais,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'numero'=>$request->numero            
        ]);
        if($cad){
             return redirect('clients');
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
        $client = $this->objClient->find($id);
        return view('showClient', compact('client'));
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
    public function destroy($id)
    {
        //
    }
}