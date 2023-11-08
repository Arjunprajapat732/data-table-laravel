<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class FormController extends Controller
{
    public function formget(){
        $notesdata = Notes::all();
        return view('form', compact('notesdata'));
    }
    public function notestore(Request $request){
        $notes = new Notes;
        $notes ->note = $request->note;
        $notes ->message = $request->message;
        $notes->save();

        $notesdata = Notes::all();
        return view('form', compact('notesdata'));
    }
}
