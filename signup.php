<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <?php 
              if(isset($_GET['error'])){
              ?>
                  <div class="alert alert-danger">
                   <?php echo $error=$_GET['error']; ?>
                  </div>
             <?php  } ?>
          <h3>Sign Up From:</h3>
          <hr>
          <form method="post" action="controller.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" name="fname" class="form-control">
            </div>           
             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Last Name</label>
              <input type="text" name="lname" class="form-control">
            </div>            
             <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div>        
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Date of birth</label>
              <input type="date" name="dob" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            
            </div>
            <button type="submit" name="reg_user" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
