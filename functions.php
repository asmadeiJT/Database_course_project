<?php

function include_template($template_name, $vars = null) {
    include_once 'templates/'.$template_name.'.php';
}