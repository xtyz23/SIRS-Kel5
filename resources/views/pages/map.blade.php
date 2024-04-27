@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'map'
])

@section('content')
    <<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        Google Maps
                    </div>
                    <div class="card-body ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15934.124995703112!2d104.6486663!3d-3.2169352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bbdf41ccc272f%3A0x44c587e8be864639!2sUniversitas%20Sriwijaya%20-%20Kampus%20Indralaya!5e0!3m2!1sid!2sid!4v1714099946514!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.initGoogleMaps();
        });
  </script>
@endpush