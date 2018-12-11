@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @include('inc.hero')
    <section id="main-features">
    <div class="divider_top_black"></div>
    <div class="container">
        <div class="row">
            <div class=" col-md-10 col-md-offset-1 text-center">
                <h2>Why Join Landis</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, ius minim gubergren ad. <br>
                    At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clitaponderum ne.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-trophy"></i>
                    <h3>Expert teachers</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class=" icon-ok-4"></i>
                    <h3>Trusted certifications</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-mic"></i>
                    <h3>+500 Audio lessons</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="icon-video"></i>
                    <h3>+1.200 Video lessons</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
        </div><!-- End row -->
        </div><!-- End container-->
    </section><!-- End main-features -->
    <section id="main_content_gray">
    	<div class="container">
        	<div class="row">
            <div class="col-md-12 text-center">
                <h2>Latest Courses</h2>
                <p class="lead">Lorem ipsum dolor sit amet, ius minim gubergren ad.</p>
            </div>
        </div><!-- End row -->
        <div class="row">
        			<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="col-item">
                            <span class="ribbon_course"></span>
                                <div class="photo">
                                <a href="#"><img src="{{asset('img/poetry.jpg')}}" alt="" /></a>
                                    <div class="cat_row"><a href="#">LITERATURE</a><span class="pull-right"><i class=" icon-clock"></i>6 Days</span></div>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="course_info col-md-12 col-sm-12">
                                            <h4>Poetry course</h4>
                                            <p > Lorem ipsum dolor sit amet, no sit sonet corpora indoctum, quo ad fierent insolens. Duo aeterno ancillae ei. </p>
                                            <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i>
                                        	</div>
                                            <div class="price pull-right">99$</div>
                                        </div>
                                    </div>
                                    <div class="separator clearfix">
                                        <p class="btn-add"> <a href="/apply"><i class="icon-export-4"></i> Subscribe</a></p>
                                        <p class="btn-details"> <a href="#"><i class=" icon-list"></i> Details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="col-item">
                                <div class="photo">
                                    <a href="#"><img src="{{asset('img/business.jpg')}}" alt="" /></a>
                                    <div class="cat_row"><a href="#">MANAGEMENT</a><span class="pull-right"><i class=" icon-clock"></i>6 Days</span></div>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="course_info col-md-12 col-sm-12">
                                            <h4>Build a Business Plan</h4>
                                            <p > Lorem ipsum dolor sit amet, no sit sonet corpora indoctum, quo ad fierent insolens. Duo aeterno ancillae ei. </p>
                                            <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                        </div>
                                        <div class="price pull-right">99$</div>
                                        </div>
                                    </div>
                                    <div class="separator clearfix">
                                        <p class="btn-add"> <a href="/apply"><i class="icon-export-4"></i> Subscribe</a></p>
                                        <p class="btn-details"> <a href="#"><i class=" icon-list"></i> Details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="col-item">
                                <div class="photo">
                                    <a href="#"><img src="{{asset('img/art.jpg')}}" alt="" /></a>
                                    <div class="cat_row"><a href="#">ART</a><span class="pull-right"><i class=" icon-clock"></i>6 Days</span></div>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="course_info col-md-12 col-sm-12">
                                            <h4>Impressionist</h4>
                                            <p > Lorem ipsum dolor sit amet, no sit sonet corpora indoctum, quo ad fierent insolens. Duo aeterno ancillae ei. </p>
                                            <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                                        </div>
                                        <div class="price pull-right">199$</div>
                                        </div>
                                    </div>
                                    <div class="separator clearfix">
                                        <p class="btn-add"> <a href="/apply"><i class="icon-export-4"></i> Subscribe</a></p>
                                        <p class="btn-details"> <a href="#"><i class=" icon-list"></i> Details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="col-item">
                                <div class="photo">
                                    <a href="#"><img src="{{asset('img/math.jpg')}}" alt="" /></a>
                                    <div class="cat_row"><a href="#">MATH</a><span class="pull-right"><i class=" icon-clock"></i>6 Days</span></div>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="course_info col-md-12 col-sm-12">
                                            <h4>12 Principles</h4>
                                            <p > Lorem ipsum dolor sit amet, no sit sonet corpora indoctum, quo ad fierent insolens. Duo aeterno ancillae ei. </p>
                                            <div class="rating">
                                            <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                                        </div>
                                        <div class="price pull-right">160$</div>
                                        </div>
                                    </div>
                                    <div class="separator clearfix">
                                        <p class="btn-add"> <a href="/apply"><i class="icon-export-4"></i> Subscribe</a></p>
                                        <p class="btn-details"> <a href="#"><i class=" icon-list"></i> Details</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div><!-- End row -->
        <div class="row">
        	<div class="col-md-12">
        	     <a href="#" class="button_medium_outline pull-right">View all courses</a>
            </div>
        </div>
         </div>   <!-- End container -->
        </section><!-- End section gray -->
        <section id="main_content">
        <div class="container">
        <div class="row add_bottom_30">
        	<div class="col-md-12 text-center">
            <h2>NextCourses</h2>
            <p class="lead">Lorem ipsum dolor sit amet, ius minim gubergren ad.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
       			<div class="media">
                   <div class="circ-wrapper pull-left"><h3>25<br>June</h3></div>
                      <div class="media-body">
                      	<h4 class="media-heading"><a href="javascript:void(0)">CSS3 Editable Flat effect</a> <span class="label label-warning">NEW</span></h4>
                         <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                         <ul class="data-lessons">
                              <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-clock"></i>Duration: 6 hours</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Duration: 6 hours</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-video"></i>Video files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Video files</strong></div> <!-- ./po-title -->
                                        <div class="po-body"><ul class="list_po_body"><li><i class="icon-ok"></i> 2 Video lessons</li><li> <i class="icon-ok"></i>1 Video for practice</li><li> <i class="icon-ok"></i>1 Video Quiz</li></ul>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-mic"></i>Audio files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Audio files</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                          </ul>
                      </div>
                    </div>
                    <div class="media">
                   <div class="circ-wrapper pull-left"><h3>15<br>July</h3></div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="javascript:void(0)">CSS3 Workshop</a> <span class="label label-warning">NEW</span></h4>
                         <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                         <ul class="data-lessons">
                              <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-clock"></i>Duration: 6 hours</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Duration: 6 hours</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-video"></i>Video files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Video files</strong></div> <!-- ./po-title -->
                                        <div class="po-body"><ul class="list_po_body"><li><i class="icon-ok"></i> 2 Video lessons</li><li> <i class="icon-ok"></i>1 Video for practice</li><li> <i class="icon-ok"></i>1 Video Quiz</li></ul>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-doc-text-inv"></i>Text doc</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Text doc</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                          </ul>
                      </div>
                    </div>
            </div><!-- End col md 6 -->
            <div class="col-md-6">
            <div class="media">
                   <div class="circ-wrapper pull-left"><h3>12<br>Aug</h3></div>
                      <div class="media-body">
                      	<h4 class="media-heading"><a href="javascript:void(0)">CSS3 Editable Flat effect</a></h4>
                         <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                         <ul class="data-lessons">
                              <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-clock"></i>Duration: 6 hours</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Duration: 6 hours</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-video"></i>Video files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Video files</strong></div> <!-- ./po-title -->
                                        <div class="po-body"><ul class="list_po_body"><li><i class="icon-ok"></i> 2 Video lessons</li><li> <i class="icon-ok"></i>1 Video for practice</li><li> <i class="icon-ok"></i>1 Video Quiz</li></ul>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-mic"></i>Audio files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Audio files</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                          </ul>
                      </div>
                    </div>
                    <div class="media">
                   <div class="circ-wrapper pull-left"><h3>25<br>Sept</h3></div>
                      <div class="media-body" >
                        <h4 class="media-heading"><a href="javascript:void(0)">CSS3 Workshop</a></h4>
                         <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                         <ul class="data-lessons">
                              <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-clock"></i>Duration: 6 hours</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Duration: 6 hours</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-video"></i>Video files</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Video files</strong></div> <!-- ./po-title -->
                                        <div class="po-body"><ul class="list_po_body"><li><i class="icon-ok"></i> 2 Video lessons</li><li> <i class="icon-ok"></i>1 Video for practice</li><li> <i class="icon-ok"></i>1 Video Quiz</li></ul>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                                    <li class="po-markup">
                                    <a class="po-link" href="javascript:void(0)" ><i class="icon-doc-text-inv"></i>Text doc</a>
                                    <div class="po-content hidden">
                                        <div class="po-title"><strong>Text doc</strong></div> <!-- ./po-title -->
                                        <div class="po-body">
                                            <p class="no_margin">Lorem ipsum dolor sit amet, has at illum dictas definitiones, ei primis indoctum torquatos nec. Vis te velit probatus, natum atomorum tincidunt nec an.</p>
                                        </div><!-- ./po-body -->
                                    </div><!-- ./po-content -->
                                    </li>
                          </ul>
                      </div>
                    </div>
            </div>
        </div><!-- End row -->
       	<hr>
          <div class="row">
          	<div class="col-md-3 col-sm-6">
				<h4>Our team</h4>
                <p><img src="{{asset('img/pic_1.jpg')}}" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>
            <div class="col-md-3 col-sm-6">
				<h4>Equiped classrooms</h4>
                <p><img src="{{asset('img/pic_2.jpg')}}" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>
            <div class="col-md-3 col-sm-6">
				<h4>Enjoy classroom mates</h4>
                <p><img src="{{asset('img/pic_3.jpg')}}" alt="Pic" class="img-responsive"></p>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
            </div>
            <div class="col-md-3 col-sm-6">
				<h4>Links</h4>
                <ul class="list_1">
                      <li><a href="#">Ceteros mediocritatem</a></li>
                      <li><a href="#">Labore nostrum</a></li>
                      <li><a href="#">Primis bonorum</a></li>
                      <li><a href="#">Ceteros mediocritatem</a></li>
                      <li><a href="#">Labore nostrum</a></li>
                       <li><a href="#">Primis bonorum</a></li>
                 </ul>
            </div>
        </div><!-- End row -->
        <hr class="add_bottom_30">
        <div class="row">
        	<div class="col-md-12">
                <p><img src="{{asset('img/sponsors.jpg')}}" alt="Pic" class="img-responsive"></p>
           </div>
        </div>
        </div><!-- End container -->
    </section><!-- End main_content -->
    @include('inc.testimonials')
@endsection
