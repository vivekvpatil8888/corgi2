<?php require APPROOT . '/views/inc/header.php'; ?>
  <a href="<?php echo URLROOT; ?>/admins/show" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit Car</h2>
    <form action="<?php echo URLROOT; ?>/admins/edit/<?php echo $data['id']?>" method="post">
      <div class="form-group">
        <label for="image"> Image : <sup>*</sup></label>
        <input type="file" name="image" class="form-control form-control-lg <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="">
        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $data['image']) . '" style="width: 200px" />';?>
        <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="name"> Name : <sup>*</sup></label>
        <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="brand">Brand : <sup>*</sup></label>
        <input type="text" name="brand" class="form-control form-control-lg <?php echo (!empty($data['brand_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['brand']; ?>">
        <span class="invalid-feedback"><?php echo $data['brand_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="price">Price : <sup>*</sup></label>
        <input type="text" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
        <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="selleremail">Seller Email : <sup>*</sup></label>
        <input type="text" name="selleremail" class="form-control form-control-lg <?php echo (!empty($data['selleremail_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['selleremail']; ?>">
        <span class="invalid-feedback"><?php echo $data['selleremail_err']; ?></span>
      </div>    
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>