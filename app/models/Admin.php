<?php
  class Admin {
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

    public function addCar($data){
      $this->db->query('INSERT INTO inventory (image, name, brand, price, selleremail) VALUES(:image, :name, :brand, :price, :selleremail)');
      // Bind values
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':brand', $data['brand']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':selleremail', $data['selleremail']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function updateCar($data){
      $this->db->query('UPDATE inventory 
                        SET 
                              image = :image,
                              name = :name,
                              brand = :brand,
                              price = :price,
                              selleremail = :selleremail
                        WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':brand', $data['brand']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':selleremail', $data['selleremail']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getCarById($id){
      $this->db->query('SELECT * FROM inventory WHERE id = :id');
      $this->db->bind(':id', $id);
      $row = $this->db->single();

      return $row;
    }

    public function deleteCar($id){
      $this->db->query('DELETE FROM inventory WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);
      
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }