@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'laravelexample'
])

@section('content')
    <<div class="content">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card ">
               
                    <div class="card-body px-2 pt-2 pb-2">
                        <form action="/tabelpasien/{{ $tablepasien->patient_id}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Patient_Id</label>
                                <input name="patient_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablepasien->patient_id}}">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input name="age" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablepasien->age}}">
                            </div>  
                       
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">I</label>
                                <input name="i" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablepasien->i}}">
                            </div>  

                            <div class="form-group">
                                <label for="exampleInputEmail1">Diagnoses</label>
                                <input name="diagnoses" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablepasien->diagnoses}}">
                            </div>  
                            
                            
                            <button type="submit" class="btn btn-primary" style="float: right;" >Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection