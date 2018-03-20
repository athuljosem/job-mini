
<?php include 'header.php' ?>
<!-- page content -->
<div class="right_col" role="main">
 
  <h3><i>Compose Mail</i></h3>
  <div class="row">
    <form method="post" action="addmail.php">
      <div class="col-md-12 latest-job ">
        <div class="form-group">
        <?php 
        $user_id=NULL;
       if(isset($_GET['id']))
        {
          $user_id=$_GET['id'];
          $_SESSION['user_id']=$user_id;
        }
        
          if ($user_id==NULL)
          {?>
         <label for="heard">Applicants of:</label>
         <select id="to" name="to" class="form-control" required>
          <option value="">Choose..</option>
        <?php
         $sql= "SELECT * FROM job_post WHERE id_company='$_SESSION[companyid]'";
          $result=$conn->query($sql);

          if($result->num_rows > 0) 
          {
           while($row = $result->fetch_assoc()) 
           {
            ?>
            <option value=<?php echo $row['id_jobpost']; ?>><?php echo $row['jobtitle']; ?></option>
            <?php 
          }
        }
      }
        ?>
      </select><br>
      <input class="form-control input-lg" type="text" id="subject" name="subject" placeholder="Mail Title">
    </div>
    <div class="form-group">
      <textarea class="form-control input-lg" id="description" name="description" placeholder="Job Description"></textarea>
    </div>
    <!-- <div class="form-group"> -->
      <!-- <input type="number" class="form-control  input-lg" id="minimumsalary" min="1000" autocomplete="off" name="minimumsalary" placeholder="Minimum Salary" required=""> -->
      <!-- </div> -->
      <!-- <div class="form-group"> -->
        <!-- <input type="number" class="form-control  input-lg" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required=""> -->
        <!-- </div> -->
        <!-- <div class="form-group"> -->
          <!-- <input type="number" class="form-control  input-lg" id="experience" autocomplete="off" name="experience" placeholder="Experience (in Years) Required" required=""> -->
          <!-- </div> -->
          <!-- <div class="form-group"> -->
            <!-- <input type="text" class="form-control  input-lg" id="qualification" name="qualification" placeholder="Qualification Required" required=""> -->
            <!-- </div> -->
            <div class="form-group">
              <input type="submit" class="btn btn-flat btn-success" name="submit" value="Send">
            </div>
          </form>
        </div>
      </div>


      <!-- /page content -->

      <!-- footer content -->
      <?php include 'footer.php' ?>