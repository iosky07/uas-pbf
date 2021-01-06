@extends('layouts.landing')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Kritik Saran</h2>
                            <p>Home<span>/<span>Kritik Saran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->
    @isset($user)
    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Masukan Anda Sangat Berarti bagi Kami</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('store-suggestion') }}" method="post" id="contactForm" >
                        @csrf
                        @method('head')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                  @if (session('success'))
                                      <div class="alert alert-success">
                                          {{ session('success') }}
                                      </div>
                                  @endif
                                    <h3>Kritik</h3>
                                    <textarea class="form-control" name="critic" id="critic" cols="30" rows="5"  required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <h3>Saran</h3>
                                    <textarea class="form-control" name="suggestion" id="suggestion" cols="30" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="kirim" class="button button-contactForm btn_1">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Sistem Informasi, Ilmu Komputer</h3>
                            <p>Universitas Jember</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>(+62)899 9442 993</h3>
                            <p>Fernaldi Widharsono</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h5>182410101078@students.unej.ac.id</h5>
                            <p>Yoski Tanjung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endisset
    @if($user==null)
        <section class="feature_part single_feature_padding">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="section_tittle text-center">
                            <h4 class="alert alert-danger">Anda harus login terlebih dahulu untuk memasukkan Kritik dan Saran</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!-- ================ contact section end ================= -->

@endsection
