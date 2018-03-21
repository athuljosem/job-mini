<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
 
 <div class="col-md-9 bg-white padding-3">
  <h1><i>Company Details</i></h1>
  <p>In this section you can change your company details</p>
  <div class="row">
    <form action="update-company.php" method="post" enctype="multipart/form-data">
      <?php
      $sql = "SELECT * FROM company WHERE id_company='$_SESSION[companyid]'";
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          ?>
          
          <div class="col-md-5 ">
            <div class="form-group">
             <label>Company Name</label>
             <input type="text" class="form-control input-lg" name="companyname" value="<?php echo $row['companyname']; ?>" required="">
           </div>
           <div class="form-group">
             <label>Website</label>
             <input type="text" class="form-control input-lg" name="website" value="<?php echo $row['website']; ?>" required="">
           </div>
           <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
          </div>
          <div class="form-group">
            <label>About Me</label>
            <textarea class="form-control input-lg" rows="4" name="aboutme"><?php echo $row['aboutme']; ?></textarea>
          </div>
          
        </div>
        <div class="col-md-5 ">
          
          <div class="form-group">
            <label for="contactno">Contact Number</label>
            <input type="text" class="form-control input-lg" id="contactno" name="contactno" placeholder="Contact Number" value="<?php echo $row['contactno']; ?>">
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control input-lg" id="city" name="city" value="<?php echo $row['city']; ?>" placeholder="city">
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control input-lg" id="state" name="state" placeholder="state" value="<?php echo $row['state']; ?>">
          </div>
          <div class="form-group">
            <label for="state">Country</label>
            <input type="text" class="form-control input-lg" id="country" name="country" placeholder="Country" value="<?php echo $row['country']; ?>">
          </div>
          <div class="form-group">
            <label>Change Company Logo</label>
            <input type="file" name="image" class="btn btn-default">
            
          </div>
          <div class="text-center">
                              <input type="submit" name="submit" class="btn btn-success" value="update">
                            </div>

           
          
            
        </div>
        <div class="col-md-2">
          <div class="profile_img">
                    <div id="crop-avatar">
                      <!-- Current avatar -->
                      <img class="img-responsive avatar-view" src= "../uploads/company/<?php echo $row['logo']; ?>" alt="Avatar" title="Change the avatar">
                    </div>
                  </div>
                </div>

        <?php
      }
    }
    ?>  
  </form>
</div>
<?php if(isset($_SESSION['uploadError'])) { ?>
<div class="row">
  <div class="col-md-12 text-center">
    <?php echo $_SESSION['uploadError']; ?>
  </div>
</div>
<?php unset($_SESSION['uploadError']); } ?>

</div>
</div>


<!-- /page content -->

<!-- footer content -->
<?php include 'footer.php' ?>