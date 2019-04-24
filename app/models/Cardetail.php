<?php
  class Cardetail {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getCars(){
        $this->db->query('SELECT * 
                          FROM inventory
                          ');
  
        $results = $this->db->resultSet();
        return $results;
      }


    
  }