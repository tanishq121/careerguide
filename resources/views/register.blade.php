@include('header')
<section class="login_signup login">
    <div class="container">
        <div class="row">
            <div class="login_signup_box">
                <h2 class="text-center">Sign Up</h2>
                <form action="{{url('/setusers')}}" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                   <!--  <div class="form-group">
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
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Your Email" required oninput="checkmail()">
                        <p id="emailmsg" style="text-align: center;"></p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required minlength="6">
                    </div>

                    <div class="form-group">
                        <select name="role" style="border-radius:20px;">
                            <option value="Coaches">Coach</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit"  name="registerbtn" class="login_button" id="signupbtn">Sign Up</button>
                    </div>

                 

                    <div class="form-group text-center">
                        By signing up, you agree to The <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                    </div>
                    <div class="form-group text-center">
                        <a href="{{url('/login')}}">Login</a> to your existing account.
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function checkmail()
    {
        var email= $('#email').val();
        var url= "{{url('/emailexist')}}";
        $.ajax
        ({
            type: "POST",
            url: url,
            dataType:"html",
            data: {'_token':'<?php echo csrf_token() ?>', 'email': email},
            success: function(data)
            {
                if (data==1)
                {
                    $('#emailmsg').text('This email already exist!');
                    $('#signupbtn').attr('disabled', true);
                    return false;
                }
                else
                {
                    $('#emailmsg').text('');
                    $('#signupbtn').attr('disabled', false);
                    return false;
                }
            }
        });
  
    }
</script>

@include('footer')