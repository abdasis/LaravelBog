@extends('layouts.app')
@section('title')
    Daftar Artikel
@endsection
@section('content')
    <div class="row justify-content-center" style="margin-top: 150px">
        <div class="col-md-8">
            <div class="card shadow-md">

                <div class="card-body">
                    <div class="card-title">
                        <h4>Daftar Semua Artikel</h4>
                        <p>Daftar Seluruh Artikel</p>
                    </div>
                    <table class="table table-bordered table-striped table-sm" id="myTable">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Dibuat</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>
                                    {{ $post->judul_artikel }}
                                </td>
                                <td>{{ $post->status }}</td>
                                <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                                <td>[Edit | Hapus]</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
