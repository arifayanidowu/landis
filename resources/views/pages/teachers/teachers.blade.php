@extends('layouts.master')


@section('title', 'Teachers')


@section('content')
<section id="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>Teachers</h1>
                    <p class="lead boxed ">Ex utamur fierent tacimates duis choro an</p>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix.
                    </p>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
        <div class="divider_top"></div>
        </section><!-- End sub-header -->
        <section id="main_content">
        <div class="container">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Active page</li>
        </ol>
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_1_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Patricia Doe <small>Biologist</small></h4>
                                <p> When an unknown printer took a galley of type and <strong>scrambled it to make</strong> a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                        </ul>
                        <hr>
                        {{-- TODO --- TEACHER PROFILE --}}
                            <a href="#" class="button_medium_outline">Profile</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_2_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Megan Fox <small>Engineer</small></h4>
                                <p> When an unknown printer took a galley of type and <strong>scrambled it to make</strong> a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                        </ul>
                        <hr>
                        {{-- TODO --- TEACHER PROFILE --}}
                            <a href="#" class="button_medium_outline">Profile</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_3_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Silvia Doe <small>Biologist</small></h4>
                                <p> When an unknown printer took a galley of type and <strong>scrambled it to make</strong> a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                        </ul>
                        <hr>
                        {{-- TODO - TEACHER PROFILE PAGE --}}
                            <a href="#" class="button_medium_outline">Profile</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_4_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Roberta Twain <small>Engineer</small></h4>
                                <p> When an unknown printer took a galley of type and <strong>scrambled it to make</strong> a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                        </ul>
                        <hr>
                        {{-- TODO -- INDIVIDUAL TEACHER'S PAGE --}}
                        <a href="#" class="button_medium_outline">Profile</a>
                        </div>
                    </div>
                </div><!-- End row -->
        </div><!-- End container -->
        </section><!-- End main_content-->
        @include('inc.testimonials')
@endsection
