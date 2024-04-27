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
                        <form action="/user" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
                            </div>  
                       
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan password">
                            </div>  
                            
                            <button type="submit" class="btn btn-primary" style="float: right;" id="submituser">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection