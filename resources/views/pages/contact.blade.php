@extends('layouts.master')

@section('title', 'Contact Page')


@section('content')
<section id="main_content" >
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Address</h3>
                <ul id="contact-info">
                    <li><i class="icon-home"></i> 11 Fifth Ave - NJ, US</li>
                    <li><i class="icon-phone"></i> + 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
                    <li><i class=" icon-email"></i> <a href="#">info@domain.com</a></li>
                </ul>
                <hr>
                <h3>Follow us</h3>
                <p>
                    Cu affert populo neglegentur has, labore nostrum periculis ius in, singulis electram ad vel labore.
                </p>
                <ul id="follow_us_contacts">
                    <li><a href="#"><i class="icon-facebook"></i>fb.com/username</a></li>
                    <li><a href="#"><i class="icon-twitter"></i>twitter.com/#username</a></li>
                    <li><a href="#"><i class=" icon-google"></i>googleplus.com/username</a></li>
                </ul>
                <hr>
                <h3>Apply for a course</h3>
                <p>
                    Cu affert populo neglegentur has, labore nostrum periculis ius in, singulis electram ad vel labore.
                </p>
                <a href="#" class="button_medium_outline">Apply</a>
            </div>
            <div class="col-md-8">
                <div class=" box_style_2">
                    <span class="tape"></span>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>General Enquire</h3>
                        </div>
                    </div>
                    <div id="message-contact"></div>
                    <form method="POST" action="#" id="contactform">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control style_2" id="name_contact" name="name_contact" placeholder="{{ __('Enter Name') }}">
                                    <span class="input-icon"><i class="icon-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" class="form-control style_2" id="lastname_contact" name="lastname_contact" placeholder="{{ __('Enter Last Name') }}">
                                    <span class="input-icon"><i class="icon-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="email" id="email_contact" name="email_contact" class="form-control style_2" placeholder="{{__('Enter Email')}}">
                                    <span class="input-icon"><i class="icon-email"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                <input type="text" id="phone_contact" name="phone_contact" class="form-control style_2" placeholder="{{__('Enter Phone number')}}">
                                    <span class="input-icon"><i class="icon-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="{{__('Write your message')}}" style="height:200px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <input type="text" id="verify_contact" class="form-control" placeholder="{{__('Are you human? 3 + 1 =') }}" disabled>
                                <input type="submit" value="Submit" class=" button_medium" id="submit-contact"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </section>
@endsection
