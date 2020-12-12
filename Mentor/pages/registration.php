   
  <?php
     require "../config.php"; 
    require $functions;
include "header.php";

    ?>

   <!DOCTYPE html>
   <html>
   <head>

    <title></title>
   </head>
   <body>
    <br><br><br><br><br><br>
 


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div   data-aos="fade-in">
      <div class="container">
           <center>
        <h2>Registration </h2>
   
<form action=" " method="POST" name="registration">
  <div class="form-group">
    <label for="name">Name</label>
    <input style="width: 30%"type="text" class="form-control" name="username" pattern="[a-zA-Z]([A-Za-z0-9-_.]{4,15})" title="Must start withletter and  numbers between 4 to 15 " required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input  style="width: 30%" type="email" class="form-control" name="email" pattern="(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})"required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input  style="width: 30%" type="password" class="form-control" name="password" pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15})" title="8 to 15 character string with at least one
upper case letter, one lower case letter,
and one digit" required>
  </div>
   
  <button type="submit" class="btn btn-default">Register</button>

</form></center>
  <?php  
           print_r( $_POST);
          if (isset($_POST['username'])){
            $res = registration();
            if ($res ==1){
              echo "error";
            }
          }

  ?>
 
    </div><!-- End Breadcrumbs -->

   
   

  </main><!-- End #main -->







   </body>
   <?php
include "footer.php";
   ?>
   </html>