@extends('layouts.master')

@section('title', 'Gallery')

@section('content')
<section id="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>Gallery page</h1>
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
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                <a href="{{asset('img/gallery/1.jpg')}}" title="Title" class="fancybox" rel="gallery1" >
                    <span class="photo_icon"><i class="icon-picture-4"></i></span>
                    <img src="{{asset('img/gallery/1.jpg')}}" alt="Gallery-1" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                <a href="{{ asset('img/gallery/2.jpg') }}" title="{{__('Gallery 2')}}" class="fancybox" rel="gallery1">
                    <span class="photo_icon"><i class="icon-picture-4"></i></span>
                    <img src="{{asset('img/gallery/2.jpg')}}" alt="Gallery-2" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                    <a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" title="Video youtube"  >
                    <span class="photo_icon"><i class="icon-youtube-2"></i></span>
                    <img src="{{asset('img/gallery/3.jpg')}}" alt="Gallery-3" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                    <a class="fancybox-media" href="http://vimeo.com/36031564" title="Video Vimeo" >
                    <span class="photo_icon"><i class="icon-vimeo-2"></i></span>
                    <img src="{{asset('img/gallery/4.jpg')}}" alt="Gallery-4" class="img-responsive">
                    </a>
                </div>
                </div><!-- End row -->
                <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                    <a class="fancybox-media" href="http://vimeo.com/36031564" title="Video Vimeo" >
                    <span class="photo_icon"><i class="icon-vimeo-2"></i></span>
                    <img src="{{asset('img/gallery/4.jpg')}}" alt="Gallery-4-a" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                    <a href="../learn/img/gallery/5.jpg" title="{{__('Gallery 5')}}" class="fancybox" rel="gallery1">
                    <span class="photo_icon"><i class="icon-picture-4"></i></span>
                    <img src="{{asset('img/gallery/5.jpg')}}" alt="Gallery-5" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                    <a href="{{asset('img/gallery/6.jpg')}}" title="{{__('Gallery 6')}}" class="fancybox" rel="gallery1">
                    <span class="photo_icon"><i class="icon-picture-4"></i></span>
                    <img src="{{asset('img/gallery/6.jpg')}}" alt="Gallery-6" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 picture">
                <a href="{{asset('img/gallery/4.jpg')}}" title="{{__('Gallery 4')}}" class="fancybox" rel="gallery1">
                    <span class="photo_icon"><i class="icon-picture-4"></i></span>
                    <img src="{{asset('img/gallery/4.jpg')}}" alt="" class="img-responsive">
                    </a>
                </div>
                </div><!-- End row -->
        </div><!-- End container -->
        </section><!-- End main_content-->
        @include('inc.testimonials')
@endsection
