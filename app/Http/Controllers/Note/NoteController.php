<?php

namespace ocorea\Http\Controllers\Note;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ocorea\Http\Requests\CreateNoteRequest;
use ocorea\Http\Requests\EditNoteRequest;
use ocorea\Note;
use ocorea\Http\Requests;
use ocorea\Http\Controllers\Controller;



class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Note::paginate(12);

        return view('notes.index', compact('note'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNoteRequest $request)
    {
        $note = new Note($request->all());
        $note->int_userid=Auth::user()->id;
        $note->save();
        return \Redirect::route('note.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditNoteRequest $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->fill($request->all());
        $note->int_userid=Auth::user()->id;
        $note->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        $message = 'La nota N.# '.$note->id . ' fue eliminado de nuestro registro';
        //Session::flash('message',$message);

        if(\Request::ajax()){
            return $message;
        }
    }
}
