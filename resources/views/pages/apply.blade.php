@extends('layouts.master')

@section('title', 'Apply')


@section('content')
<section id="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>Inside Learn</h1>
                    <p class="lead boxed">Ex utamur fierent tacimates nam, his duis choro an.</p>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix.
                    </p>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
        <div class="divider_top"></div>
        </section><!-- End sub-header -->
        <section id="main_content" >
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <h4>No sit debitis meliore postulant, per ex prompta alterum sanctus?</h4>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant.</p>
                        <ul id="contact-info">
                            <li><i class="icon-phone"></i> + 61 (2) 8093 3400</li>
                            <li><i class="icon-phone"></i> + 61 (2) 8093 3402</li>
                            <li><i class=" icon-email"></i> <a href="mailto:info@landistraining.com">info@landistraining.com</a></li>
                        </ul>
                    <h4>No sit debitis meliore postulant, per ex prompta alterum sanctus?</h4>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
              <hr>
              <a href="#" class="button_medium_outline">Browse Courses</a>
            </div>
            <div class="col-md-8">
                <div class=" box_style_2">
                    <span class="tape"></span>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Your personal info</h3>
                        </div>
                    </div>
                    <div id="message-apply"></div>
                    <form method="POST" action="#" id="contactform_apply">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control style_2" id="name_apply" name="name_apply" placeholder="{{__('First Name')}}">
                                    <span class="input-icon"><i class="icon-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control style_2" id="lastname_apply" name="lastname_apply" placeholder="{{ __('Last Name') }}">
                                    <span class="input-icon"><i class="icon-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="email" id="email_apply" name="email_apply" class="form-control style_2" placeholder="{{__('Enter Email')}}">
                                    <span class="input-icon"><i class="icon-email"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" id="phone_apply" name="phone_apply" class="form-control style_2" placeholder="{{__('Enter Phone')}}">
                                    <span class="input-icon"><i class="icon-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="styled-select">
                                        <select class="form-control" name="country_apply" id="country_apply">
                                            <option value="" selected>Select your country</option>
                                            <option value="Europe">Europe</option>
                                            <option value="Asia">Asia</option>
                                            <option value="North America">North America</option>
                                            <option value="South America">South America</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <div class="styled-select">
                                        <select class="form-control" name="gender_apply" id="gender_apply">
                                            <option value="" selected>Select your gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <div class="styled-select">
                                        <select class="form-control" name="education_apply" id="education_apply">
                                            <option value="" selected>Select your education level</option>
                                            <option value="Less than high school">Less than high school</option>
                                            <option value="High school diploma or equivalent">High school diploma or equivalent</option>
                                            <option value="Some college no degree">Some college, no degree</option>
                                            <option value="Bachelor degree">Bachelor’s degree</option>
                                            <option value="Doctoral or professional degree">Doctoral or professional degree</option>
                                        </select>
                                    </div>
                                    </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="age_apply" id="age_apply"  class="form-control" placeholder="Age">
                                    <span class="input-icon"><i class="icon-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3>Your preferences</h3>
                        <p>Which course are you interested? <a href="#">Browse course</a>.</p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                            <div class="styled-select">
                                        <select class="form-control" name="course_apply" id="course_apply">
                                            <option value="" selected>Select your a course</option>
                                            <option value="Less than high school">Management: Build a Business Plan </option>
                                            <option value="High school diploma or equivalent">Art: Impressionist </option>
                                            <option value="Some college no degree">Litteratture: Poetry </option>
                                            <option value="Bachelor degree">Math: 12 Principles</option>
                                        </select>
                                    </div>
                                   </div>
                        </div>
                        </div>
                      <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="5" id="message_apply_2" name="message_apply_2" class="form-control" placeholder="Additional message" style="height:150px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="verify_apply" class=" form-control" placeholder="Are you human? 3 + 1 =">
                            </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group pull-right">
                                    <input type="submit" value="Submit" class=" button_subscribe_green" id="submit-apply"/>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </section>

@endsection
