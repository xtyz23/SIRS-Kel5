<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function read()
    {
        $Patient = Patient::all(); // Assuming User model
        return view('pages.tabelpasien', compact('Patient')); // Pass $users to 'index' view
    }

    public function create()
    {
        return view('pages.createpasien');
    }

    public function store(Request $request)
    {

        $request->validate([
            'patient_id' => 'required',
            'age' => 'required',
            'i' => 'required',
            'diagnoses' => 'required',
            

        ]);

        Patient::create([
            'patient_id'=> $request->name,
            'age'=> $request->age,
            'i'=> $request->i,
            'diagnoses'=> $request->diagnoses,

        ]);

        return redirect('/tabelpasien')->with('success','Data User Berhasil Ditambahkan');
    }

    public function destroy($patient_id){
        $Patient = Patient :: find($patient_id);
        $Patient->delete();

        return redirect('/tabelpasien')->with('success', 'Data Berhasil Dihapus');

        

    }

    public function edit($patient_id) {
        $tablepasien = Patient :: find ($patient_id);
        return view ( 'pages.editpasien', compact ( ['tablepasien']));
    
    }

        public function update(Request $request, $patient_id)
    {
        $request->validate([
            'patient_id' => 'required',
            'age' => 'required',
            'i' => 'required',
            'diagnoses' => 'required',
        

        ]);

        // Find the user record
        $tablepasien = Patient::find($patient_id);

        // Update the user record
        $tablepasien->update([
            'patient_id'=> $request->patient_id,
            'age'=> $request->age,
            'i'=> $request->i,
            'diagnoses'=> $request->diagnoses,
        ]);

        // Redirect to the appropriate route
        return redirect('/tabelpasien')->with('success', 'Data User Berhasil Diedit');
    }




}
