<?php

$website = "http://pc1:8080";

include('classFile.php');
include("checkme.php");

$img_allowed = array(".jpg", ".jpeg", ".gif", ".png");
$file_allowed = array(".doc", ".pdf");
$allowed_size = 512000;

$contact_array = array('+91 99323 44706');
$email_array = array('stargymfitness@gmail.com');

$menuarray = array(
    'index' => array(
        'name' => 'Home',
        'title' => 'Star Gym & Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Build your body better and faster with proper guidance in Siliguri.'
    ),
    'about' => array(
        'name' => 'About',
        'title' => 'About | Star Gym &  Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Get the benefit of large amount of equipments in Siliguri'
    ),
    'service' => array(
        'name' => 'Service',
        'title' => 'Service | Star Gym &  Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Get the taste of new equiments in Siliguri'
    ),
    'branch' => array(
        'name' => 'Branch',
        'title' => 'Branch | Star Gym &  Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Eat well and workout with us in Siliguri'
    ),
    'onlinefeepayment' => array(
        'name' => 'Online Fee Payment',
        'title' => 'Online Fee Payment | Star Gym &  Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Build your body better and faster with proper guidance.'
    ),
    'branch' => array(
        'name' => 'Contact Us',
        'title' => 'Contact Us | Star Gym &  Fitness',
        'meta_key' => 'gym, bodybuilding, exercise, workout, Siliguri, West Bengal, India',
        'meta_des' => 'Build your body better and faster with proper guidance.'
    )
);


