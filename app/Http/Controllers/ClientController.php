<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
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
        return view('create_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $cad= $this->objClient->create([
            'nome_fantasia'=>$request->nome_fantasia,
            'razao_social'=>$request->razao_social,
            'tipo'=>$request->tipo,
            'identificacao'=>$request->identificacao,
            'pais'=>$request->pais,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'CEP'=>$request->CEP,
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
        return view('show_client', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = $this->objClient->find($id);
        return view('create_client', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $this->objClient->where(['id'=>$id])->update([
        
            'nome_fantasia'=>$request->nome_fantasia,
            'razao_social'=>$request->razao_social,
            'tipo'=>$request->tipo,
            'identificacao'=>$request->identificacao,
            'pais'=>$request->pais,
            'estado'=>$request->estado,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'CEP'=>$request->CEP,
            'numero'=>$request->numero 
        ]);
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objClient->destroy($id);
        return($del) ? "sim": "não";
         
    }
}
