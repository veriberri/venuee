<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>@yield('title')</title>
        {!! Html::style('css/mystyle.css') !!}
        
        <style type="text/css">
            @media (min-width: 660px)
            {
                body
                {
                    padding-top: 35px;
                }
                
                .top-space
                {
                    height: 0px;
                }
            }
            
            body
            {
                padding-top: 35px;
            }
            
            .top-space
            {
                    border: none;
            }
        </style>
    </head>	
    
    <body>
        	          <!-- TOP NAVBAR
        ================================================== -->	
        <div class="navbar-wrapper">
          <div class="container">
            <div class="navbar navbar-default _nav navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="navbar-brand" href="/">
                        {!! Html::image('images/logo/logosm.png', 'Venue&#233; Logo', ['style' => 'width:200px', 'class' => 'img-responsive']) !!}
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/index.html#download">About</a></li>
                        <li><a href="/index.html#contact">Contact</a></li>
                        <li><a href="/account.html">Account</a></li>
                        <li><a href="/createEvent">Create+</a></li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
        
        <hr class="top-space"/>
        
        
        @yield('content')
        
        	          <!-- FOOTER ******************
        ================================================== -->

        <div class="container _footer">
            <div class="row">
                <div class="col-md-4 col-sm-6 text-left">
                    <h2>Venueé, Inc.</h2>
                    <p>Venueé &copy; 2015 </p>
                </div>
                <div class="col-md-4 col-sm-6 text-left">
                    <h2>Privacy Policy</h2>
                    <a>Terms &amp; conditions</a>
                </div>
                <div class="col-md-4 col-sm-6 text-left">
                    <h2>Get Connected</h2> 
                    <a href="https://instagram.com/venuee" target="_blank">Instagram</a>
                    <br>
                    <a href="https://www.facebook.com/Venueeapp" target="_blank">Facebook</a>
                    <br>
                    <a href="https://twitter.com/venueeapp" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
        
                          <!-- script references -->
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/myscript.js') !!}
    </body>
</html>