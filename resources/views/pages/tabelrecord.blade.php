@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Tabel Record</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="tabelrecord/create" class="btn btn-sm btn-primary">Add Record</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        id_record
                                    </th>
                                    <th>
                                        recorddescription
                                    </th>
                                   
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                            
                                </thead>

                                <tbody>
                                    @foreach($Record as $Record)
                                    <tr>
                                        <td>
                                            {{ $Record->id_record }}
                                        </td>
                                        <td>
                                            {{ $Record->recorddescription }}
                                        </td>
                                       
                                        <td>
                                            <a href="/tabelrecord/{{$Record->id_record}}/edit" class="btn btn-success btn-round">Edit</a> </td>
                                        <td>
                                            <form action="/tabelrecord/{{ $Record->id_record }}" method="POST">
                                                @method("DELETE")
                                                @csrf
                                                <button type="button" class="btn btn-info btn-round " id="delete-user-{{ $Record->id_record }}">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Target all delete buttons using their class
                    const deleteButtons = document.querySelectorAll('.btn-info');

            deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Anda Tidak Akan Bisa Mengembalikan Ini",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
                }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form programmatically on confirmation
                    document.getElementById(button.id).parentElement.submit();
                }
                });
            });
        });
        </script>
        
@endsection