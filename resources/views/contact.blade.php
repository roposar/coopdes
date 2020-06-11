@extends('layout')

@section('content')

<!--
    ==================================================
        Global Page Section Start
    ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Contacto</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="ion-ios-home"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="active">Contacto</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!--page-header-->


    <!--
    ==================================================
        Contact Section Start
    ================================================== -->
    <section id="contact-section">
        <div class="container">
            <div class="row">
                @if (seccion()->has('flash'))
                
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to margin utilities to keep things nice tidy.</p>
                    </div>
                @endif

                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                             consectetur adipisicing elit. Dolore, ea!
                        </p>
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="{{route('messages')}}" role="form">

                                {{ csrf_field() }} <!--para Enviar el formulario-->

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" class="form-control" name="body" id="message" required></textarea>
                                </div>


                                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="map-area">
                        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                        </p>
                        <div class="map">
                            <iframe src="https://goo.gl/maps/ooyapn1YKgixn7bw8" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row address-details">
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <i class="ion-ios-location-outline"></i>
                        <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                        <i class="ion-ios-email-outline"></i>
                        <p>support@themefisher.com<br>support@themefisher.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>+07 052 245 022<br>+07 999 999 999</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection







