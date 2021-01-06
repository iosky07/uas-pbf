@extends('layouts.landing')
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Blog Single</h2>
                        <p>Home<span>-</span>Blog Single</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                @foreach($article as $a)
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('storage/article-img/'.$a->thumbnail)}}" style="width: 300px; height: 300px" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $a->title }}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i>{{ $a->user->name }}</a></li>
                                <li><a href="#"><i class="far fa-comments"></i>{{ $a->created_at }}</a></li>
                            </ul>
                            <p class="excert">
                                {{ $a->content }}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="comments-area">
                    <h4>{{ $comment_count }} Komentar</h4>
                    @foreach($comments as $c)
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/comment/comment_3.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        {{ $c->comment }}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <label>{{ $c->user->name }}</label>
                                            </h5>
                                            <p class="date">{{ $c->created_at }}</p>
                                        </div>
                                        @if(Auth::id() == $c->id_user)
                                        <div class="reply-btn">
                                            <form action="{{route('destroy-comment', [$c->id, $a->id]) }}" method="GET" style="display: inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button class="btn btn-danger"><i class="fa fa-16px fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="comment-form">
                    <h4>Masukkan Komentar</h4>
                    <form class="form-contact comment_form" action="{{ route('update-comment', $a->id) }}" method="GET" id="commentForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                              <textarea class="form-control w-100" name="comments" id="comment" cols="30" rows="9"
                                        placeholder="Tulis Komentar Anda"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button btn_1 button-contactForm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
