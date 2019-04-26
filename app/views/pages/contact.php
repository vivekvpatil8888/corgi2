<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <a href="<?php echo URLROOT; ?>/admins/show" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Compose Email</h2>
    <form action="<?php echo URLROOT; ?>/admins/edit/<?php echo $data['id']?>" method="post">

      <div class="form-group">
        <label for="name">Email Recipient</label>
        <input type="text" name="recipient" class="form-control form-control-lg <?php echo (!empty($data['recipient_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['recipient']; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="name">Subject</label>
        <input type="text" name="subject" class="form-control form-control-lg <?php echo (!empty($data['subject_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['subject']; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
      </div>

      <div class="form-group">
        <label for="name">Content</label>
        <textarea name="content" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" name="content" rows="10" cols="50" placeholder="Compose email here..."></textarea>
      </div>

      <input type="submit" class="btn btn-success" value="Submit">
      
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>