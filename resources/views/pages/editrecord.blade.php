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
                        <form action="/tabelrecord/{{ $tablerecord->id_record}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">id_record</label>
                                <input name="id_record" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablerecord->id_record}}">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">recorddescription</label>
                                <input name="recorddescription" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Input" value="{{ $tablerecord->recorddescription}}">
                            </div>  
                       
                        
                            
                            <button type="submit" class="btn btn-primary" style="float: right;" >Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection