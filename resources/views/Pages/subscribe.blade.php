@extends('master')

@section('title')
Venue&#233; | Subscribe
@stop

@section('content')
@include('pages/partials/carousel')
<h2 class="inbetweener">Subscribe to get early access!</h2>

	          
<!-- SUBSCRIBE SECTION ******************
================================================== -->

  <section class="container-fluid section-download" id="subscribe">
    <!--<div class="container container-download">-->
    <!--<div class="row">-->
    <!--<div class="col"></div>-->

    <!-- </div>-->
    <!-- </div>-->
    
    <div class="container">
    <div class="row">
    <div class="col-xs-6 col-md-5 vcenter text-right">
        <div>
          <img src="images/download/02.png" id="dl-phone"></img>
          
          
          </div>
    </div><!--
    --><div class="col-xs-6 col-md-7 vcenter dl-text subscribe-text">
              <h3>Search, Connect and
     Discover new experiences.</h3>
     <p>Venueé is an mobile event finding app that allows you to search for events in your 
        location, with the aid of GPS and a built in map in the application</p>
     <h4>Coming soon, subscribe to get early access <br>enter your email below</h4>
        <form class="subscribe-form">
        	<input type="text" name="email" placeholder="email"/>
        	<input type="submit" value="Subscribe" col="30" class="_button"/>
        </form>

        
    </div>
</div>
</div>
    
    
</section>
@stop