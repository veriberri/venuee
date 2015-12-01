@extends('master')

@section('title')
Venue&#233; | Register Company
@stop

@section('content')
<!-- SUBSCRIBE SECTION ******************
================================================== -->

<section class="container-fluid form-container-plain" id="register-company">
    <div class="container">
	
	
        <div class="top-profile-cont">	

            <h1 >Register Here</h1>

            <nav class="top-profile-nav">
                <ul>
                    <li><a href="/account.html">EDIT PROFILE</a></li>
                    <li><a href="#">SIGN OUT</a></li>
                </ul>
            </nav>

        </div>

        <br>
        <br>
        <h4>Subscribe now to receive early access when the app is released</h4>
        <br>
        
        <h2>COMPANY INFO</h2>

        <a href="#">
            <img src="/images/logo/logo_placeholder.png" class="form-logo-img"></img>
        </a>	

        <hr/>

        <div class="col-md-12 form-cont-well">
            <div class="row">
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Title</label>
                                <input type="text" placeholder="Enter Title Here.." class="form-control">
                            </div>		
                            <div class="col-sm-6 form-group">
                                <label>Company</label>
                                <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                            </div>	
                        </div>


                        <div class="form-group">
                            <label>Address</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                        </div>	
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Country</label>
                                <input type="text" placeholder="Enter Country Name Here.." class="form-control">
                            </div>	
                            <div class="col-sm-4 form-group">
                                <label>City</label>
                                <input type="text" placeholder="Enter City Name Here.." class="form-control">
                            </div>	
                            <div class="col-sm-4 form-group">
                                <label>Post Code</label>
                                <input type="text" placeholder="Enter Post Code Here.." class="form-control">
                            </div>		
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                        </div>		
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                        </div>
                        <p>COMPANY VERIFICATION</p>
                        <p>To be verified in our app please insert the following information</p>

                        <div class="form-group">
                            <label>CO. TAX REGISTRATION NUMBER</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>CO. REGISTRATION NUMBER</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>
                        
                        <button type="button" class="btn form-button-confirm">SUBMIT</button>					
                    </div>
                </form> 
            </div>
        </div>
	
    </div>
	
    <p>By clicking upload you agree to our <a href="#">Terms & Privacy Policy</a></p>
</section>
@stop