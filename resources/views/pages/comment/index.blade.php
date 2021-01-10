
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Komentar</h1>
        </div>
        <div class="section-body">
            <section class="section">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Komentar</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Id User</th>
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                        <th>Dibuat pada</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($comments as $c)
                                        <tr>
                                            <td>{{$c->id_user}}</td>
                                            <td>{{$c->user->name}}</td>
                                            <td>{{$c->comment}}</td>
                                            <td>{{$c->created_at}}</td>
                                            <td>
                                                <form action="{{route('comments.destroy', $c->id) }}" method="POST" style="display: inline">
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


