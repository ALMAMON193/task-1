<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function View()
    {
        $data['allData'] = note::all();

        return view('admin.Notes.note_view', $data);
    }
    public function Add()
    {
        return view('admin.Notes.note_add');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',

        ]);

        $data = new note();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        $notification = array(
            'message' => 'Notes Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('note.view')->with($notification);
    } // end method

    public function Edit($id)
    {
        $editData = note::findOrFail($id);
        return view('admin.Notes.note_edit', compact('editData'));
    }
    public function Update(Request $request, $id)
    {
        $validatedData = $request->validate([

            'title' => 'required',
            'content' => 'required',
        ]);

        $data = note::findOrFail($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        $notification = array(
            'message' => ' Notes Updated Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('note.view')->with($notification);
    } // end method
    public function Delete($id)
    {
        $examtype = note::findOrFail($id);
        $examtype->delete();
        $notification = array(
            'message' => 'Notes Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
