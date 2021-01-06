
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>
        </div>
        <div class="section-body">
            <section class="section">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Artikel</h4>
                        </div>
                        @foreach($article as $a)
                            <div class="card-body">
                                <form action="{{route('articles.update', $a->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="judul" value="{{ $a->title }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konten</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="contents" required>{{ $a->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Gambar</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="file" class="form-control" name="file" >
                                            <img src="{{asset('storage/article-img/'.$a->thumbnail)}}" class="img-thumbnail" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


