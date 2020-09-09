<?php

include 'Event.php';

Event::addListener('day9_event', function($args) {
    if ($args) {
        echo 'Hello, ' . $args . '.';
    } else {
        echo 'Hello, world.';
    }
});

Event::trigger('day9_event', 'Taiwan');