@include('header')
<section class="login_signup login">
    <div class="container">
        <div class="row">
            <div class="login_signup_box">
                <h2 class="text-center">Login</h2>
                <form action="{{url('/setlogin')}}" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <!-- <div class="form-group">
                        <button class="social_login facebook_login"><i class="fab fa-facebook-f"></i>connect with facebook</button>
                    </div>
                    <div class="form-group">
                        <button class="social_login linkedin_login"><i class="fab fa-linkedin-in"></i>connect with Linkedin</button>
                    </div>
                    <div class="form-group">
                        <button class="social_login google_login"><i class="fab fa-google"></i>connect with Google</button>
                    </div>
                    <div class="form-group">
                        <div class="divider text-center"><span>or</span></div>
                    </div> -->
                    @if(Session::has('message'))
                        <p style="text-align: center;">{{ Session::get('message') }}</p>
                    @endif
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required minlength="6">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login_button">Login</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="#">Forgot Password</a>
                    </div>
                    <div class="form-group text-center">
                        If you're not a member, <a href="{{url('/register')}}">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@include('footer')