<?php
  class Dashboard extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Dashboard',
        'description' => 'User details and car search.'
      ];
     
      $this->view('pages/cars', $data);
    }
  }