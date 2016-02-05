<?php

namespace ocorea\Http\Controllers\St;

use Illuminate\Http\Request;

use ocorea\Http\Requests;
use ocorea\Http\Controllers\Controller;
use ocorea\St;
use ocorea\Client;
use ocorea\User;
use ocorea\Flawcategory;
use Illuminate\Support\Facades\Session;
use ocorea\Http\Requests\CreateStRequest;


class StController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st= St::select('st.var_invoiceci', 'st.date_start', 'clients.var_name as var_name','st.var_typequipment' ,'st.var_brand','st.var_mobile','flawcategories.var_category','st.var_status')
            ->join('clients','st.int_clientid','=','clients.id')
            ->join('flawcategories','st.int_flawcategoryid','=','flawcategories.id')
            ->paginate();
       // select('st.var_invoiceci', 'st.date_start', 'clients.var_name','st.var_typequipment' ,'st.var_brand','st.var_mobile','flawcategories.var_category','st.var_status')
       // $st = St::paginate();


        return view('st.index', compact('st'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = St::findOrFail($id);
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
        $client = St::findOrFail($id);
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
        $client = St::findOrFail($id);
        $client->delete();
        $message = $client->var_name . ' fue eliminado de nuestro registro';
        //Session::flash('message',$message);

        if(\Request::ajax()){
            return $message;
        }
    }

    public function create()
    {
        $client=Client::select('id','var_name')
            ->get();
        $reviceuser=User::select('var_username','var_userlastname')
            ->get();
        $tecniuser=User::select('var_username','var_userlastname')
            ->where('type','Tecnico')
            ->get();
        $flaw=Flawcategory::select('var_category')
            ->get();

        return view('st.create', compact(['client','reviceuser','tecniuser','flaw']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStRequest $request)
    {
        dd($request->all());
        $client = new St($request->all());
        $client->save();
        return \Redirect::route('st.index');
    }
}
