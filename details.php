<?php
include('db_connection.php');

if(isset($_POST['delete'])){
  $id_to_delete=mysqli_real_escape_string($conn,$_POST['id_to_delete']);

  $sql="DELETE FROM robin WHERE id=$id_to_delete";

  if(mysqli_query($conn,$sql)){
    //  success
    header('location:index.php');
  } {
    // failure
    echo 'query error: ' . mysqli_error($conn);
  }
}

// check GET request id param
if (isset($_GET['id'])) {

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // make sql
  $sql = "SELECT * FROM robin WHERE id=$id";

  // get the query result
  $result = mysqli_query($conn, $sql);

  // fetch the result in array format
  $robin = mysqli_fetch_assoc($result);


  mysqli_free_result($result);
  mysqli_close($conn);

  // print_r($robin);

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
</head>

<body>
  <?php include('header.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col s12 m6 push-m3">
        <div class="card blue-grey darken-1 center">
          <div class="card-content white-text">
            <?Php if ($robin) : ?>
              
              <h4><?php echo htmlspecialchars($robin['title']); ?></h4>
              <p>Created By:<?php echo htmlspecialchars($robin['email']); ?></p>
              <p><?php echo htmlspecialchars($robin['created_at']); ?></p>
              <h5>Ingredients</h5>
              <p><?php echo htmlspecialchars($robin['ingredients']); ?></p>

              <!-- delete form -->
              <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $robin['id'] ?>">
                <input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
              </form>

            <?php else : ?>
            <p>Such Pizza Is Not Exsists!</p>

            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>





  <?php include('footer.php'); ?>
</body>

</html>