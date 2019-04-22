<?php
  class Pages extends Controller {

    private $db;

    public function __construct(){
      $this->db = new Database;
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
        'description' => 'A platform to buy new or used cars.'
      ];

      $this->view('pages/about', $data);
    }

    public function inventory(){
      $data = [
        'title' => 'Inventory',
        'description' => 'A page to display car inventory.'
      ]; 

      $this->view('pages/inventory', $data);
    }
  }