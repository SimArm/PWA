<?php

namespace Pwa;

class Main
{
    private $weekdays;
    private $event1;
    private $events;
    private $dayEvent1;
    private $dayEvents;

    public function __construct() {
        $this->weekdays = ['1' => 'Mon','2'=>'Tue','3'=>'Wed','4'=>'Thu','5'=>'Fri','6'=>'Sat','7'=>'Sun'];
        $this->event1 = new DBfunctions();
        $this->events = $this->event1->getEvents($_SESSION['id']);
    }

    function mainContent() {

        echo "<main><div class='container-lg'>
                <ul class='weekday'>";

        foreach ($this->weekdays as $value => $key) {
            echo "<li><div class=\"card border-info mb-3\" style=\"max-width: 18rem;\">
            <div class=\"card-header\">$key</div>";
            $day = $value;

            foreach ($this->events as $value) {

                if (date('w', strtotime($value['time'])) == $day) {
                    echo "<div class=\"card-body text-info\">
                    <h5 class=\"card-title\">". date('d', strtotime($value['time'])) ." d.</h5><p class=\"card-text\">". date('h', strtotime($value['time'])) . ":" . date('i', strtotime($value['time'])) . " $value[event]</p></div>";
                }
            }

            echo "</div></li>";
        }

        echo "</ul></div></main>";
    }
}
