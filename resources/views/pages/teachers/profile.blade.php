@extends('layouts.master')

@section('title', "Teacher's Profile")


@section('content')
<section id="sub-header">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h1>Teachers</h1>
            <p class="lead">Caulie <strong>dandelion</strong> maize lentil collard greens radish arugula sweet pepper water.</p>
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
        <aside class="col-md-4">
            <div class=" box_style_1 profile">
            <p class="text-center"><img src="{{ asset('img/teacher_2_small.jpg') }}" alt="Teacher" class="img-circle styled"></p>
                    <ul class="social_teacher">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class=" icon-google"></i></a></li>
                </ul>
                <ul>
                    <li>Name <strong class="pull-right">Carla Twain</strong> </li>
                    <li>Email <strong class="pull-right">info@domain.com</strong></li>
                    <li>Telephone  <strong class="pull-right">+34 004238423</strong></li>
                    <li>Students <strong class="pull-right">42</strong></li>
                    <li>Lessons <strong class="pull-right">12</strong></li>
                    <li>Courses <strong class="pull-right">15</strong></li>
                </ul>
            </div><!-- End box-sidebar -->
        </aside><!-- End aside -->
        <div class="col-md-8">
            <!--  Tabs -->
            <ul class="nav nav-tabs" id="mytabs">
                <li class="active"><a href="#profile_teacher" data-toggle="tab">Profile</a></li>
                <li><a href="#courses" data-toggle="tab">My Courses</a></li>
            </ul>
                <div class="tab-content">
                <div class="tab-pane fade in active" id="profile_teacher">
                <h3>About me</h3>
                <p>Lorem ipsum dolor sit amet, dicta oportere ad est, ea eos partem neglegentur theophrastus. Esse voluptatum duo ne, expetenda corrumpit no per, at mei nobis lucilius. No eos semper aperiri neglegentur, vis noluisse quaestio no. Vix an nostro inimicus, qui ut animal fabellas reprehendunt. In quando repudiare intellegebat sed, nam suas dicta melius ea.</p>
                <p>Mei ut decore accusam consequat, alii dignissim no usu. Phaedrum intellegat sit ut, no pri mutat eirmod. In eum iriure perpetua adolescens, pri dicunt prodesset et. Vis dicta postulant ad.</p>
                    <h4>Credentials</h4>
                <p>Lorem ipsum dolor sit amet, dicta oportere ad est, ea eos partem neglegentur theophrastus. Esse voluptatum duo ne, expetenda corrumpit no per, at mei nobis lucilius. No eos semper aperiri neglegentur, vis noluisse quaestio no. Vix an nostro inimicus, qui ut animal fabellas reprehendunt. In quando repudiare intellegebat sed, nam suas dicta melius ea.</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list_3">
                            <li><strong>September 2009 - Bachelor Degree in Economics</strong><p>University of Cambrige - United Kingdom</p></li>
                            <li><strong>December 2012 - Master course in Economics</strong><p>University of Cambrige - United Kingdom</p></li>
                            <li><strong>October 2013 - Master's Degree in Statistic</strong><p>University of Oxford - United Kingdom</p></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list_3">
                            <li><strong>September 2009 - Bachelor Degree in Economics</strong><p>University of Cambrige - United Kingdom</p></li>
                            <li><strong>December 2012 - Master course in Economics</strong><p>University of Cambrige - United Kingdom</p></li>
                        </ul>
                    </div>
                </div><!-- End row-->
                </div><!-- End tab-pane -->
                <div class="tab-pane fade in" id="courses">
                            <h3>Active courses</h3>
                        <p>Mei ut decore accusam consequat, alii dignissim no usu. Phaedrum intellegat sit ut, no pri mutat eirmod. In eum iriure perpetua adolescens, pri dicunt prodesset et. Vis dicta postulant ad.</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th>Category</th>
                                <th>Course name</th>
                                <th>Lessons</th>
                                <th>Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Business Plan</a></td>
                                <td>12</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Economy pinciples</a></td>
                                <td>12</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Understand diagrams</a></td>
                                <td>04</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Marketing strategies</a></td>
                                <td>10</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Marketing</a></td>
                                <td>20</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Business Plan</a></td>
                                <td>12</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Economy pinciples</a></td>
                                <td>12</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Understand diagrams</a></td>
                                <td>04</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Marketing strategies</a></td>
                                <td>10</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Marketing</a></td>
                                <td>20</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i></td>
                                </tr>
                                <tr>
                                <td>Business</td>
                                <td><a href="#">Business Plan</a></td>
                                <td>12</td>
                                <td class="rating_2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></td>
                                </tr>
                            </tbody>
                            </table>
                            </div>
                </div><!-- End tab-pane -->
            </div>   <!-- End content-->
        </div><!-- End col-md-8-->
    </div><!-- End row-->
</div><!-- End container -->
</section><!-- End main_content-->
@include('inc.testimonials')
@endsection
