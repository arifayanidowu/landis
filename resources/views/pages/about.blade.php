@extends('layouts.master')

@section('title', 'About')

@section('content')
<section id="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>Inside Learn</h1>
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
            <div class="col-md-7">
                <h3>We're in the business of hosting great ideas.</h3>
                <p>
                    Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset vituperatoribus, tation tritani prodesset ex sed. Impedit torquatos sed ad, vel ad placerat necessitatibus, in quo inani eligendi.
                </p>
                <p>
                    Cum copiosae pertinacia ei, admodum volumus cum ut, erat nonumy his te. Iudico praesent sed id, nam error consequat reprehendunt no. Nostrud nostrum tacimates mei ut, debet facilisi in ius, dolor accusam omittam eu sea. His harum verterem ocurreret ei.
                </p>
                <h3>Why choose Learn?</h3>
                <h4>Service</h4>
                <p>
                    Cum copiosae pertinacia ei, admodum volumus cum ut, erat nonumy his te. Iudico praesent sed id, nam error consequat reprehendunt no. Nostrud nostrum tacimates mei ut, debet facilisi in ius, dolor accusam omittam eu sea. His harum verterem ocurreret ei.
                </p>
                <h4>Expert Teachers</h4>
                <p>
                    An per ancillae concludaturque, senserit rationibus referrentur ne pro, ius omnis complectitur ex. Per ut vocibus contentiones. Oporteat vituperata ut nec, an dicit accusamus definiebas est, ne vix mentitum luptatum. Duo in wisi justo aperiam. Reprimique consectetuer pro ea, civibus commune oportere pri id.
                </p>
                <h4>Trusted Certification</h4>
                <p>
                    Impedit epicurei intellegam an eos, id fierent consequat definitiones est. Ne his primis invenire. Ea fugit tantas noster vis, scripta ornatus voluptua quo an. Nusquam salutatus duo ei, semper maiorum eu mea.
                </div>
                <div class="col-md-4 col-md-offset-1">
                <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="thumbnail">
                        <div class="project-item-image-container">
                        <img src="{{ asset('img/team_1.jpg') }}" alt="Team One Image"/>
                        </div>
                        <div class="caption">
                            <div class="transit-to-top">
                                <h4 class="p-title">Patricia Doe <small>CEO</small></h4>
                                <div class="widget_nav_menu">
                                    <ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class=" icon-google"></i></a></li>
                                    </ul>
                                    <div class="phone-info">
                                        <i class=" icon-phone"></i> + 4 (123) 456-7890
                                    </div><!-- End phone info -->
                                </div><!-- End widget_nav_menu -->
                            </div><!-- transition top -->
                        </div><!-- caption -->
                        </div><!-- End thumbnail -->
                    </div><!-- End col-md-12-->
                    <div class="col-md-12  col-sm-6">
                    <div class="thumbnail">
                        <div class="project-item-image-container">
                        <img src="{{ asset('img/team_2.jpg') }}" alt="Team Image"/>
                        </div>
                        <div class="caption">
                            <div class="transit-to-top">
                                <h4 class="p-title">Megan Fox <small>MANAGER</small></h4>
                                <div class="widget_nav_menu">
                                    <ul class="social_team">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class=" icon-google"></i></a></li>
                                    </ul>
                                    <div class="phone-info">
                                        <i class=" icon-phone"></i> + 4 (123) 456-7890
                                    </div><!-- End phone info -->
                                </div><!-- End widget_nav_menu -->
                            </div><!-- transition top -->
                        </div><!-- caption -->
                        </div><!-- End thumbnail -->
                    </div><!-- End col-md-12-->
             </div><!-- End row -->
               </div>
            </div><!-- End row -->
            <hr>
               <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_1_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Patricia Doe <small>Biologist</small></h4>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                        </ul>
                        <hr>
                            <a href="#" class=" button_medium_outline">View cousres</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_2_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Megan Fox <small>Engineer</small></h4>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                            </ul>
                            <hr>
                            <a href="#" class=" button_medium_outline">View cousres</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class=" box_style_3">
                        <p><img src="{{ asset('img/teacher_2.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                            <h4 class="p-title">Megan Fox <small>Engineer</small></h4>
                            <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                            <ul class="social_team">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class=" icon-google"></i></a></li>
                            </ul>
                            <hr>
                            <a href="#" class=" button_medium_outline">View cousres</a>
                        </div>
                    </div>
                </div><!-- End row -->
                 <hr class="add_bottom_30">
                <div class="row">
                    <div class="col-md-12">
                    <p><img src="{{ asset('img/sponsors.jpg') }}" alt="Pic" class="img-responsive"></p>
                   </div>
                </div>
        </div><!-- End container -->
        </section><!-- End main_content-->
    @include('inc.testimonials')
@endsection
