
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Kritik Saran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <section class="section">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kritik Saran</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>ID User</th>
                                        <th>Nama</th>
                                        <th>Saran</th>
                                        <th>Kritik</th>
                                        <th>Dibuat Pada</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach($suggestions as $suggestion)
                                    <tr>
                                        <td>{{$suggestion->id_user}}</td>
                                        <td>{{$suggestion->user->name}}</td>
                                        <td>{{$suggestion->suggestion}}</td>
                                        <td>{{$suggestion->critic}}</td>
                                        <td>{{$suggestion->created_at->format('d M Y H:i:s') }}</td>
                                        <td><form action="{{route('suggestions.destroy', $suggestion->id) }}" method="POST" style="display: inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-danger"><i class="fa fa-16px fa-trash"></i> Hapus</button>
                                            </form></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
