
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>
        </div>
        <div class="section-body">
            @foreach($article as $a)
                <div class="section-body">
                    <h2 class="section-title"> {{$a->title}}</h2>
                    <div class="card">
                        <div class="card-header" >
                            <h4 class="col-lg-6"></h4><h7 class="col-lg-6 text-right"><b>Tanggal Publikasi : {{$a->created_at}}</b></h7>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('storage/article-img/'.$a->thumbnail)}}" style="width: 300px; height: 300px" alt="">
                            <p>{!! $a->content !!}</p>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            <h7><b>Penulis : {{$a->user->name}}</b></h7>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection


