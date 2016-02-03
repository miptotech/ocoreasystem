<?php

namespace ocorea\Http\Controllers;

use Illuminate\Http\Request;
use ocorea\Http\Requests\CreateClientRequest;
use ocorea\Http\Requests\EditClientRequest;
use ocorea\Http\Requests;
use ocorea\Http\Controllers\Controller;
use ocorea\Client;
use Illuminate\Support\Facades\Session;



class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->fill($request->all());
        $client->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        $message = $client->var_name . ' fue eliminado de nuestro registro';
        //Session::flash('message',$message);

        if(\Request::ajax()){
            return $message;
        }
    }

    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
        $client = new Client($request->all());
        $client->save();
        return \Redirect::route('client.index');
    }

    public function getClient($id){

        $clients = Client::select('var_name','var_address','var_telephone','var_email','var_mobile')
            ->where('id','=',$id)
            ->first();


        if(\Request::ajax()){

            return \Response::json([
                'mobile'     =>  $clients->var_mobile,
                'telephone'     =>  $clients->var_telephone,
                'mail'     =>  $clients->var_email,
                'address'     =>  $clients->var_address
            ]);
        }


    }
}
