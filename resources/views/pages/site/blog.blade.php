@extends('layouts.landing')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Blog</h2>
                            <p>Home<span>/</span>Blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="section_padding">
        <div class="container">
            <div class="row">
                @foreach($article as $ticle)
                    <div class="col-sm-5 col-md-3" style="margin-bottom: 30px;">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('storage/article-img/'.$ticle->thumbnail)}}" class="card-img-top" style="height: 300px; width: 300px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$ticle->title}}</h5>
                                <p class="card-text">{!!$ticle->content!!}</p>
                                <a href="{{ route('single-blog', $ticle->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
