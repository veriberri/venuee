@extends('masterLoggedIn')

@section('title')
Venue&#233; | Log In
@stop

@section('content')
<section class="container-fluid form-container-plain" id="login">
    <div class="contact-container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <br/>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <br/>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button type="button" class="btn form-button-confirm">SUBMIT</button>					
        </form>
    </div>
</section>
@stop