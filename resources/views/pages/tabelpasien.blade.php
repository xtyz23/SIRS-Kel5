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
                                <h3 class="mb-0">Tabel Pasien</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="tabelpasien/create" class="btn btn-sm btn-primary">Add pasien</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Patient_id
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        I
                                    </th>
                                    <th class="text-right">
                                        Diagnoses
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                            
                                </thead>

                                <tbody>
                                    @foreach($Patient as $Patient)
                                    <tr>
                                        <td>
                                            {{ $Patient->patient_id }}
                                        </td>
                                        <td>
                                            {{ $Patient->age }}
                                        </td>
                                        <td>
                                            {{ $Patient->i }}
                                        </td>
                                        <td class="text-right">
                                            {{ $Patient->diagnoses }}
                                        </td>
                                        <td>
                                            <a href="/tabelpasien/{{$Patient->patient_id}}/edit" class="btn btn-success btn-round">Edit</a> </td>
                                        <td>
                                            <form action="/tabelpasien/{{ $Patient->patient_id }}" method="POST">
                                                @method("DELETE")
                                                @csrf
                                                <button type="button" class="btn btn-info btn-round " id="delete-user-{{ $Patient->patient_id }}">Delete</button>
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