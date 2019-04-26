<?php
  class Cardetails extends Controller {
    public function __construct(){
      $this->adminModel = $this->model('Admin');
    } 

    public function index(){
      $data = [
        'title' => 'CarSeller',
        'description' => 'Simple plateform to buy used or new cars.'
      ];
     
      $this->view('pages/contact', $data);
    }

    public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize POST array
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'id' => $id,
            'image' => trim($_POST['image']),
            'name' => trim($_POST['name']),
            'brand' => trim($_POST['brand']),
            'price' => trim($_POST['price']),
            'selleremail' => trim($_POST['selleremail']),
            'image_err' => '',
            'name_err' => '',
            'brand_err' => '',
            'price_err' => '',
            'selleremail_err' => ''
          ];
  
          // Validate data
          if(empty($data['image'])){
            $data['image_err'] = 'Please enter image';
          }
          if(empty($data['name'])){
            $data['name_err'] = 'Please enter name';
          }
          if(empty($data['brand'])){
            $data['brand_err'] = 'Please enter  Brand';
          }
          if(empty($data['price'])){
            $data['price_err'] = 'Please enter the  Price';
          }
          if(empty($data['selleremail'])){
            $data['selleremail_err'] = 'Please enter the Sellers Email';
          }
  
          // Make sure no errors
          if(empty($data['image_err']) && empty($data['name_err']) && empty($data['brand_err']) && empty($data['price_err']) && empty($data['selleremail_err'])){
            // Validated
            
            if($this->adminModel->updateCar($data)){
              flash('post_message', 'Car Updated !');
              redirect('admins/show');
            } else {
              die('Something went wrong');
            }
          } else {
            // Load view with errors
            $this->view('admins/edit', $data);
          }
  
        } else {
        // Get existing player from model
        $car = $this->adminModel->getCarById($id);
  
        // Check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }
          $data = [
            'id' => $id,
            'image' => $car->image,
            'name' => $car->name,
            'brand' => $car->brand,
            'price' => $car->price,
            'selleremail' => $car->selleremail
          ];
    
          $this->view('admins/edit', $data);
        }
      }
  }