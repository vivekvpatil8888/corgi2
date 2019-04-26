<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'CarSeller',
        'description' => 'Simple platform to buy used or new cars.'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'A platform to buy used or new cars.'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){
      $data = [
        'title' => 'Contact Form',
        'description' => 'A contact form to email a car seller.'
      ];
     
      $this->view('pages/contact', $data);
    }
  }