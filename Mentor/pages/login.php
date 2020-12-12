   
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
      <center>  <h2>LOGIN</h2>
      
<form action="" method="post" name="logIn">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input style="width: 30%" type="email" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input style="width: 30%" type="password" class="form-control" name="password" required>
  </div>
   
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p></center>

    </div><!-- End Breadcrumbs -->

   
   

  </main><!-- End #main -->







   </body>
   <?php
include "footer.php";
   ?>
   </html>