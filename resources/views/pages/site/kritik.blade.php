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
    <section class="contact-section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Masukan Anda Sangat Berarti bagi Kami</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('suggestions.store') }}" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h3>Kritik</h3>
                                    <textarea class="form-control w-100" name="critic" id="critic" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Kritik'></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <h3>Saran</h3>
                                    <textarea class="form-control w-100" name="suggestion" id="suggestion" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Saran'></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>00 (440) 9865 562</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Kritik Saran</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">

                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-6 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>pppppppppppppppppppppppppppppppppppppppppppppppppppppp</p>
                                            <h4>penulisssssss</h4>
                                            <h5>Positionnnnnnnnnnnnn</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-sm-8">
                                        <div class="testimonial_slider_img">
                                            <img src="" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ contact section end ================= -->

@endsection
