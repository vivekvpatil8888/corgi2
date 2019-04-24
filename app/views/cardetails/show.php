<?php require APPROOT . '/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Car Store</h1>
    </div>
    <?php if(isset($_SESSION['user_email'])) : ?>
    <div class="col-md-6">
      
      <a href="<?php echo URLROOT; ?>/admins/add" class="btn btn-primary pull-right">
        <i class="fa fa-plus"></i> Add New Car
      </a>
    </div>
    <?php endif; ?>
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Car Image</th>
      <th scope="col">Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Seller Email</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['cars'] as $car) : ?>
    <tr>
      <td><?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $car->image) . '" style="width: 200px" />';?></td>
      <td><?php echo $car->name ?></td>
      <td><?php echo $car->brand ?></td>
      <td><?php echo $car->price ?></td>
      <td><?php echo $car->selleremail ?></td>
      <?php if(isset($_SESSION['user_email'])) : ?>
      <td>

        <a href="<?php echo URLROOT; ?>/admins/edit/<?php echo $car->id; ?>" class="btn btn-primary">
            <i class="fa fa-pencil"></i> Edit
        </a>
           <form class="pull-right" action="<?php echo URLROOT; ?>/admins/delete/<?php echo $car->id; ?>" method="post">
            <input type="submit" value="Delete" class="btn btn-danger">
           </form>
      </td>
      <?php endif;?>

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php require APPROOT . '/views/inc/footer.php'; ?>