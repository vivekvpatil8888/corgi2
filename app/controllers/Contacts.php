<?php
  class Contacts extends Controller {
    public function __construct(){
      $this->contactModel = $this->model('Contact');
    }

    public function register(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data = [
          'recipient' => trim($_POST['recipient']),
          'subject' => trim($_POST['subject']),
          'content' => trim($_POST['content']),
          'recipient_err' => '',
          'subject_error' => '',
          'content_error' => ''
        ];

        // Validate Email
        if(empty($data['recipient'])){
          $data['recipient_err'] = 'Please enter recipient email';
        }

        // Validate Name
        if(empty($data['subject'])){
          $data['subject_err'] = 'Please enter email subject';
        }

        // Validate Password
        if(empty($data['content'])){
          $data['contenterr'] = 'Please enter email content';
        }

        // Make sure errors are empty
        if(empty($data['recipient_err']) && empty($data['content_error']) && empty($data['subject_err'])) {
          // Validated

          // Register User
          if($this->contactModel->register($data)){
           redirect('users/login');
          } else {
            die('Something went wrong');
          }

        } else {
          // Load view with errors
          $this->view('admins/show', $data);
        }

      } else {
        // Init data
        $data =[
          'recipient' => '',
          'subject' => '',
          'content' => '',          
          'recipient_err' => '',
          'subject_error' => '',
          'content_error' => ''
        ];

        // Load view
        $this->view('users/register', $data);
      }
    }
  }