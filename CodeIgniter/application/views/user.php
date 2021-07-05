<!DOCTYPE html>
<html lang="en">
<head> 
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <title> Student Data Management </title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
         <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome-4.7.0/css/font-awesome.min.css'; ?>">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
          <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>

          <style type="text/css">

                .del_a:hover{
                    background: white;
                }
                .edit_a:hover{
                    background: white;
                }
              
              .material-icons.md-blue
               { 
                color: rgba(255, 255, 255, 1); 
                background: blue;
                }

                .material-icons.md-red
               { 
                color: rgba(255, 255, 255, 1); 
                background: red;
                }

                label
                {
                  color: white;
                }
          </style>




 </head>


<!--body.....-->
    <body style="background:  linear-gradient(to right,#0f0c29, #302b63, #24243e);">
               <nav class="navbar navbar-dark bg-dark">
                <div class="container" style="color: white;">
                    <h4><span class="material-icons">content_paste</span>   Student Data Management</h4>
                    
                </div>
               </nav>


    <br>

<!-- picture of user-->


        <div class="container">
          <center>
              <img height="120" width="120" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png">
          </center>        
        </div>




<!-- form making--->

    <div class="container" style="padding-right: 150px;padding-left: 150px;">
      <div >
            <form method="post" action="<?php echo base_url().'index.php/user/create'; ?>">
              <div class="row">
                      
                      <div class="col-md-6">
                            <label for="name">Student Name</label>
                            <input type="text" value="<?php echo set_value('name');    ?>" class="form-control" name="name" id="name" placeholder="Studentname">
                            <!-- alert box for name-->
                           <h5 style="color: red;font-size: 14px;"><?php  echo form_error('name'); ?></h5>

                      </div>



                    <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password"  class="form-control" name="password" id="password" placeholder="Password">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"> <?php  echo form_error('password'); ?> </h5> 


                    </div>
                      
                     <div class="col-md-4">
                            <label for="email">Email</label>
                            <input type="email" value="<?php echo set_value('email');    ?>" class="form-control" id="email" name="email" placeholder="Email ">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"><?php  echo form_error('email'); ?> </h5> 


                    </div>

                     <div class="col-md-3">
                            <label for="roll">Roll</label>
                            <input type="number" value="<?php echo set_value('roll');    ?>" min="1" id="roll" class="form-control" name="roll" placeholder="Roll">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"><?php  echo form_error('roll'); ?></h5>  


                    </div>


                    <div class="col-md-5">
                            <label for="contact">Contact</label>
                            <input type="text" value="<?php echo set_value('contact');    ?>" id="contact" class="form-control" name="contact" placeholder="Contact">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"><?php  echo form_error('contact'); ?> </h5> 

                    </div>
                    
                    <div class="col-md-5">
                            <label for="dept">Dept</label>
                            <input type="text" id="dept" value="<?php echo set_value('dept');    ?>" class="form-control" name="dept" placeholder="Department">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"><?php  echo form_error('dept'); ?></h5>  


                    </div>

                  <div class="col-md-7">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" value="<?php echo set_value('address');    ?>" name="address" placeholder="Address">
                            <!-- alert box for name-->
                            <h5 style="color: red;font-size: 14px;"><?php  echo form_error('address'); ?></h5>  


                  </div>



                <div class="col-md-12">
                  <br>
                </div>

                  
                    
                    <div  class="col-md-6"> <center><a> <button  style="width: 200px; "  type="submit" class="btn btn-primary">Submit</button> </a></center>
                      </div>

                    <div class="col-md-6"><center><a href="<?php  echo base_url().'index.php/Show';  ?>" style="width: 200px;"  class="btn btn-danger">Cancel</a></center>
                    </div>
                    
                </div>
                    
              </form>

          </div>

    </div>








    </body>
</html>