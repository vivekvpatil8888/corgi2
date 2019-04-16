<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'CarSeller',
        'description' => 'Simple plateform to buy used or new cars.'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'A plateform to buy used or new cars.'
      ];

      $this->view('pages/about', $data);
    }
  }