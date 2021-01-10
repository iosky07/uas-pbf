
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>
        </div>
        <div class="section-body">
<<<<<<< Updated upstream
            <section class="section">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Artikel</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('articles.create') }}" class="-ml- btn btn-primary shadow-none" style="margin-bottom: 30px">Tambah Artikel</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Dibuat pada</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach($articles as $a)
                                        <tr>
                                            <td>{{$a->user->name}}</td>
                                            <td>{{$a->title}}</td>
                                            <td><img src="{{asset('storage/article-img/'.$a->thumbnail)}}" style="width: 100px; height: 100px" alt=""></td>
                                            <td>{{$a->created_at}}</td>
                                            <td>
                                                <form action="{{route('articles.edit', $a->id) }}" method="GET" style="display: inline">
                                                    <input type="hidden" name="_method" value="EDIT">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-warning"><i class="fa fa-16px fa-pen"></i> Edit</button>
                                                </form>
                                                <form action="{{route('articles.show', $a->id) }}" method="GET" style="display: inline">
                                                    <input type="hidden" name="_method" value="SHOW">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-primary"><i class="fa fa-16px fa-eye"></i> Lihat</button>
                                                </form>
                                                <form action="{{route('articles.destroy', $a->id) }}" method="POST" style="display: inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button class="btn btn-danger"><i class="fa fa-16px fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
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
=======
        <section class="section">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('articles.create')}}" class="-ml- btn btn-primary shadow-none">Tambah Data Baru</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach( $article as $a)
                                <tr>
                                    <td>{{$a->id_user}}</td>
                                    <td>{{$a->title}}</td>
                                    <td>{{$a->content}}</td>
                                    <td>{{$a->created_at}}</td>
                                </tr>
                                @endforeach
                            </table>
>>>>>>> Stashed changes
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


