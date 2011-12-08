<?php
$this->load->view('include\header');

$this->load->view('include\banners');

$this->load->view('include\menu');

$this->load->view($content);

$this->load->view('include\footer');

?>