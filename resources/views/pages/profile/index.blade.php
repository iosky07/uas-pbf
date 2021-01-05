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
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('frontend/img/elements/d.jpg')}}" alt="" class="rounded-circle">
                            </div>
                            <div class="col-12">
                                <a href="#" class="genric-btn primary-border">Ubah</a>
                            </div>
                        </div>
                    </div>
                    @foreach($users as $user)
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="{{route ('users.update', $user->id)}}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h3>Nama</h3>
                                        <textarea class="form-control w-100" name="name" id="critic" cols="30" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'">{{ Auth::user()->name }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h3>Email</h3>
                                        <textarea class="form-control w-100" name="email" id="suggestion" cols="30" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" disabled>{{ Auth::user()->email }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h3>Password</h3>
                                        <textarea class="form-control w-100" name="password" id="suggestion" cols="30" rows="2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'">{{ Auth::user()->password}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button class="genric-btn primary-border" type="submit" >Simpan</button>
                                        <a href="#" class="genric-btn danger-border">Batal</a>
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
