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
use ocorea\Http\Requests\EditStRequest;


class StController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st= St::select('st.id','st.var_invoiceci', 'st.date_start', 'clients.var_name as var_name','st.var_typequipment' ,'st.var_brand','st.var_mobile','flawcategories.var_category','st.var_status')
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
        $client=Client::select('id','var_name')
            ->get();
        $reviceuser=User::select('id','var_username','var_userlastname')
            ->get();
        $tecniuser=User::select('id','var_username','var_userlastname')
            ->where('type','Tecnico')
            ->get();
        $flaw=Flawcategory::select('id','var_category')
            ->get();

        $st = St::findOrFail($id);
        return view('St.edit', compact(['st','client','reviceuser','tecniuser','flaw']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditStRequest $request, $id)
    {
        $st = St::findOrFail($id);
        $st->fill($request->all());
        $st->save();

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
        $note = St::findOrFail($id);
        $note->delete();

        $message = 'La nota N.# '.$note->id . ' fue eliminado de nuestro registro';
        //Session::flash('message',$message);

        if(\Request::ajax()){
            return $message;
        }
    }

    public function create()
    {
        $client=Client::select('id','var_name')
            ->get();
        $reviceuser=User::select('id','var_username','var_userlastname')
            ->get();
        $tecniuser=User::select('id','var_username','var_userlastname')
            ->where('type','Tecnico')
            ->get();
        $flaw=Flawcategory::select('id','var_category')
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
        $st = new St($request->all());
        $st->save();
        return \Redirect::route('st.index');
    }
}
