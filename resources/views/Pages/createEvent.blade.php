@extends('masterLoggedIn')

@section('title')
Venue&#233; | Create Event
@stop

@section('content')
<!-- SUBSCRIBE SECTION ******************
================================================== -->

      
      
  <section class="container-fluid form-container-plain" id="create-event">
<div class="container">
	
	
    <div class="top-profile-cont">	
 	<div class="profile-info-cont">
    <img src="/images/logo/profile-img.png"></img>
    <div class="profile-info-text">
	<h3>DREAM ENTERTAINMENT</h3>
	<p>Jamaica</p>
	</div>
	</div>
        
    <nav class="top-profile-nav">
    	<ul>
    		<li><a href="/account.html">EDIT PROFILE</a></li>
    		<li><a href="#">SIGN OUT</a></li>
    	</ul>
    </nav>

    </div>
        <br>

    

    <h2>CREATE YOUR EVENT</h2>
	<a href="#">
	<img src="/images/logo/event-placeholder.png" class="form-add-event-img"></img>
    </a>	
    	
    <hr/>
    	
    	

	<div class="col-md-12 form-cont-well">
		

	<div class="row">
				<form>
					<div class="col-sm-12">
		
						
						
						<div class="row">
							
					<div class="form-group">
						<label>Event Name</label>
						<input type="text" placeholder="Enter short, clear name" class="form-control">
					</div>		
					<div class="form-group">
						<label>Event Category</label>
						<input type="text" placeholder="Enter Email Address Here.." class="form-control">
					</div>
						</div>
						
						<div class="row">
							<p>Event Time and Date</p>
							<div class="col-sm-4 form-group">

								<input type="text" placeholder="Enter Date Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">

								<input type="text" placeholder="Enter Time Here"class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
							  <select name="ampm">
    <option value="am" selected>AM</option>
    <option value="pm">PM</option>

  </select>
							</div>		
						</div>
						

						
						
						
						
						
						<div class="form-group">
							<label>EVENT LOCATION</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="form-group">
							<label>Short Description</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						


					<p>
						You will receive a confirmation email once the event is registered
					</p>
					
					<button type="button" class="btn form-button-confirm">SUBMIT</button>					
					</div>
				</form> 
				</div>
	
	</div>
	
	
	</div>
	
	<p>By clicking upload you agree to our <a href="#">Terms & Privacy Policy</a></p>

</div>

    
</section>
@stop