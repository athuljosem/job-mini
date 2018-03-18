<?php include 'header.php' ?>
<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">
        <h3>Your Mails </h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Notification Mails</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-3 mail_list_column">
                <a href="compose.php"><button id="compose"  class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button></a>
                <?php
                $sql = "SELECT DISTINCT id_jobpost FROM apply_job WHERE id_user=$_SESSION[userid] ";
                $result = $conn->query($sql);

                      //If Job Post exists then display details of post
                if($result->num_rows > 0) 
                {
                  while($row = $result->fetch_assoc()) 
                  {
                    $sql1 = "SELECT * FROM company_mailbox WHERE id_jobpost=$row[id_jobpost] ORDER BY createdAt DESC";

                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0) 
                    {
                      while($row1 = $result1->fetch_assoc()) 
                      {
                        $sql2 = "SELECT * FROM company WHERE id_company=$row1[id_company]";
                        $result2 = $conn->query($sql2);
                        $row2 = $result2->fetch_assoc();


                        $sql3 = "SELECT * FROM job_post WHERE id_jobpost=$row[id_jobpost]";
                        $result3 = $conn->query($sql3);
                        $row3 = $result3->fetch_assoc();
                        ?>
                        <a data-toggle="tab" href="#<?php echo $row1['id_mail']; ?>">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> 
                              <!-- <i class="fa fa-edit"></i> -->
                            </div>
                            <div class="right">
                              <h3><?php echo $row2['email']; ?> <small><?php echo substr($row1['createdAt'],5,11); ?> </small></h3>
                              <p><?php echo $row3['jobtitle']; ?></p>
                            </div>
                          </div>
                        </a>



                        <?php

                      }
                    }
                  }
                }
                ?>
                       <!--  <a data-toggle="tab" href="#menu45">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> 
                              <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>Company Name <small>3.00 PM</small></h3>
                              <p>The Content of the mail comes here</p>
                            </div>
                          </div>
                        </a>
                        <a data-toggle="tab" href="#menu2">
                          <div class="mail_list">
                            <div class="left">
                              .
                            </div>
                            <div class="right">
                              <h3>Company 2<small>4.09 PM</small></h3>
                              <p>Mail Content 2</p>
                            </div>
                          </div>
                        </a> -->
                        <button id="compose" href="" class="btn btn-sm btn-success btn-block" type="button">SEND MAIL</button>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->


                      <div class="col-sm-9 mail_view tab-content">
                        <?php
                        $sql = "SELECT id_jobpost FROM apply_job WHERE id_user=$_SESSION[userid] ";
                        $result = $conn->query($sql);


                      //If Job Post exists then display details of post
                        if($result->num_rows > 0) 
                        {
                          while($row = $result->fetch_assoc()) 
                          {
                            $sql1 = "SELECT * FROM company_mailbox WHERE id_jobpost=$row[id_jobpost] ";

                            $result1 = $conn->query($sql1);
                            if($result1->num_rows > 0) 
                            {
                              while($row1 = $result1->fetch_assoc()) 
                              {
                                $sql2 = "SELECT * FROM company WHERE id_company=$row1[id_company]";
                                $result2 = $conn->query($sql2);
                                $row2 = $result2->fetch_assoc();
                                ?>
                                <div id="<?php echo $row1['id_mail']; ?>" class="inbox-body tab-pane fade in">
                                  <div class="mail_heading row">
                                    <div class="col-md-8">
                                      <div class="btn-group">
                                        <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                                      </div>
                                    </div>
                                    <div class="col-md-4 text-right">
                                      <p class="date"> <?php echo substr($row1['createdAt'],5,11); ?></p>
                                    </div>
                                    <div class="col-md-12">
                                      <h4> <?php echo $row1['mail_title']; ?></h4>
                                    </div>
                                  </div>
                                  <div class="sender-info">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <strong><?php echo $row2['companyname']; ?></strong>
                                        <span>(<?php echo $row2['email']; ?>)</span> to
                                        <strong>me</strong>
                                        <!-- <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a> -->
                                        <br><br>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="view-mail">
                                    <p><?php echo $row1['mail_content']; ?><br><br></p>
                                    
                                  </div>
                          <!-- <div class="attachment">
                            <p>
                              <span><i class="fa fa-paperclip"></i> 3 attachments — </span>
                              <a href="#">Download all attachments</a> |
                              <a href="#">View all images</a>
                            </p>
                            <ul>
                              <li>
                                <a href="#" class="atch-thumb">
                                  <img src="images/inbox.png" alt="img" />
                                </a>

                                <div class="file-name">
                                  image-name.jpg
                                </div>
                                <span>12KB</span>


                                <div class="links">
                                  <a href="#">View</a> -
                                  <a href="#">Download</a>
                                </div>
                              </li>

                              <li>
                                <a href="#" class="atch-thumb">
                                  <img src="images/inbox.png" alt="img" />
                                </a>

                                <div class="file-name">
                                  img_name.jpg
                                </div>
                                <span>40KB</span>

                                <div class="links">
                                  <a href="#">View</a> -
                                  <a href="#">Download</a>
                                </div>
                              </li>
                              <li>
                                <a href="#" class="atch-thumb">
                                  <img src="images/inbox.png" alt="img" />
                                </a>

                                <div class="file-name">
                                  img_name.jpg
                                </div>
                                <span>30KB</span>

                                <div class="links">
                                  <a href="#">View</a> -
                                  <a href="#">Download</a>
                                </div>
                              </li>

                            </ul>
                          </div> -->
                          <div class="btn-group">
                            <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                          </div>
                        </div>
                        <?php

                      }
                    }
                  }
                }
                ?>
                

              </div>
              <!-- /CONTENT MAIL -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>