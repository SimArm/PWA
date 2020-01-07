<?php

namespace Pwa;

class Register
{
    function register()
    {
        echo "<div class=\"container formated\">
  <div class=\"row main\">
    <div class=\"panel-heading\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 cols-sm-10\">
          <div class=\"main-login main-center\">
            <form class=\"form-horizontal\" method='post' action='/register.php'>
            <div class=\"form-group\">
                <label for=\"name\" class=\"control-label\">Your Name</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"> </i></span>
                    <input type=\"text\" class=\"form-control\" name='name' id='name' placeholder=\"Enter your Name\" />
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for='email' class=\"control-label\">Your Email</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" class=\"form-control\" name='email' id='email' placeholder=\"Enter your Email\" />
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"username\" class=\"control-label\">Username</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" class=\"form-control\" name='username' id='username' placeholder=\"Enter your Username\" />
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"password\" class=\"control-label\">Password</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
                    <input type=\"password\" class=\"form-control\" name='password' id='password' placeholder=\"Enter your Password\" />
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"confirm\" class=\"control-label\">Confirm Password</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
                    <input type=\"password\" class=\"form-control\" name='password2' id='password2' placeholder=\"Confirm your Password\" />
                  </div>
                </div>
              </div>
              <div class=\"input-group\">
                <button type='submit' class=\"btn btn-secondary btn-lg btn-block login-button\">Register</button>
              </div>
              <div class='login-register'>
                <a href='/login.php'><br>Already have an account? Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
    }
}
