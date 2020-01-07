<?php

namespace Pwa;

class Events
{
    function events()
    {
        echo "<div class=\"container formated\">
  <div class=\"row main\">
    <div class=\"panel-heading\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 cols-sm-10\">
          <div class=\"main-login main-center\">
            <form class=\"form-horizontal\" method='post' action='/events.php'>
            <div class=\"form-group\">
                <label for=\"exampleFormControlSelect1\">Choose color</label>
                <select class=\"form-control\" name='color' id=\"color\">
                  <option value=\"1\">Green</option>
                  <option value=\"2\">Yellow</option>
                  <option value=\"3\">Red</option>
                  <option value=\"4\">Blue</option>
                </select>
              </div>
              <div class=\"form-group\">
                <label for='event' class=\"control-label\">Describe event</label>
                <div>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" class=\"form-control\" name='event' id='event' placeholder=\"Describe event\" />
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
              <label for=\"example-datetime-local-input\" class=\"col-2 col-form-label\">Date and time</label>
              <div class=\"col-10\">
                <input class=\"form-control\" type=\"datetime-local\" value=\"2020-01-06T20:18:00\" name='time' id=\"time\">
              </div>
            </div>
              <div class=\"input-group\">
                <button type='submit' class=\"btn btn-secondary btn-lg btn-block login-button\">Add event</button>
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
