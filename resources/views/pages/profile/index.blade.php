@extends('layouts.landing')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Profile</h2>
                            <p>Home<span>/<span>Profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->

        <section class="contact-section section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Profil Anda</h2>
                    </div>
                    @foreach($users as $user)
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('storage/article-img/'.$user->thumbnail)}}" alt="" class="rounded-circle" style="margin-bottom: 30px; width: 150px; height: 150px" >
                            </div>
                            <form action="{{ route('store-thumbnail', Auth::id()) }}" method="POST" style="display: inline" enctype="multipart/form-data">
                                @csrf
                                @method('head')
                                <input type="file" class="form-control" name="file" >
                                <button type="submit" class="genric-btn primary-border"><i class="fa fa-16px fa-pen"></i>Ganti Foto</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="{{route ('users.update', $user->id)}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        @if (session('alert'))
                                            <div class="alert alert-danger">
                                                {{ session('alert') }}
                                            </div>
                                        @endif
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Nama</h4>
                                        <input class="form-control w-100" name="name" id="critic" cols="30" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" value="{{ Auth::user()->name }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Email</h4>
                                        <input class="form-control w-100" name="email" id="suggestion" cols="30" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Password Baru</h4>
                                        <input type="password" class="form-control w-100" name="password" id="suggestion" cols="30" rows="2" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h4>Konfirmasi Password Baru</h4>
                                        <input type="password" class="form-control w-100" name="confirm_password" id="suggestion" cols="30" rows="2" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button class="genric-btn primary-border" type="submit" >Simpan</button>
                                        <a href="{{ url('/profile') }}" class="genric-btn danger-border">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    <!-- ================ contact section end ================= -->

@endsection
