<?php
include("vc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-4">
    <h3 class="text-primary"> HTML Form to Insert Data</h3>
    <p><?php echo !empty($result)? $result:''; ?></p>
       <!--=================HTML Form=======================-->
      <form method="post" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name" name="fullName">
       </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="branch" name="branch">
       </div>
     

        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email Address/linkedIn" name="Linid">
       </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="company" name="company">
       </div>
       <div class="form-group">
          <input type="text" class="form-control" placeholder="package" name="package">
       </div>

 
  <button type="submit"  name="save" class="btn btn-primary">Save</button>
  </form>
    <!--======================== HTML Form============================ -->
   </div>
   <div class="col-sm-8">
   
   </div>
   </div>
</div>
</body>
</html>