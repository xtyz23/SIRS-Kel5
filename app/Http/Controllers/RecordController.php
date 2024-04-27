<?php

namespace App\Http\Controllers;
use App\Models\Record;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function read()
    {
        $Record = Record::all(); // Assuming User model
        return view('pages.tabelrecord', compact('Record')); // Pass $users to 'index' view
    }

    public function create()
    {
        return view('pages.createrecord');
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_record' => 'required',
            'recorddescription' => 'required',
          
            

        ]);

        Record::create([
            'id_record'=> $request->id_record,
            'recorddescription'=> $request->recorddescription,
            
        ]);

        return redirect('/tabelrecord')->with('success','Data User Berhasil Ditambahkan');
    }

    public function destroy($id_record){
        $Record = Record :: find($id_record);
        $Record->delete();

        return redirect('/tabelrecord')->with('success', 'Data Berhasil Dihapus');

        

    }

    public function edit($id_record) {
        $tablerecord = Record :: find ($id_record);
        return view ( 'pages.editrecord', compact ( ['tablerecord']));
    
    }

        public function update(Request $request, $id_record)
    {
        $request->validate([
            'id_record' => 'required',
            'recorddescription' => 'required',
          

        ]);

        // Find the user record
        $tablerecord = Record::find($id_record);

        // Update the user record
        $tablerecord->update([
            'id_record'=> $request->id_record,
            'record-description'=> $request->recorddescription,
        ]);

        // Redirect to the appropriate route
        return redirect('/tabelrecord')->with('success', 'Data User Berhasil Diedit');
    }



}
