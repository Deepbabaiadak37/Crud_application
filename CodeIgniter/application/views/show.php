
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
          </style>




 </head>

<?php



$d=array(
    array('name'=>'Deep','address'=>'Andul','Contact'=>'6291259627','dept'=>'cse','roll'=>'02','email'=>'cse1802@gmail.com'),
    array('name'=>'Shayan','address'=>'Makarda','Contact'=>'9674389499','dept'=>'cse','roll'=>'05','email'=>'cse1805@gmail.com')
        );



?>

<!--body.....-->
    <body style="background:  linear-gradient(to right, #ee0979, #ff6a00);">
               <nav class="navbar navbar-dark bg-dark">
                <div class="container" style="color: white;">
                    <h4><span class="material-icons">content_paste</span>   Student Data Management</h4>
                    
                </div>
               </nav>


            <br>
                <div class="container">

                      <center>
                      <h1  style="background: white;">View All Users</h1>
                      </center>
                </div>

                
            <div class="container">

                <div style="padding-bottom:  50px;">
                  <a href="<?php echo base_url().'index.php/user/create';  ?>"> 
                       <button style="float:right; " type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg> Create New User</button> 

                  </a>
            </div>
            </div>

            <div class="container" > 
                         <table style="border: 15px;" class="table table-dark table-striped">
                         
<!--heading part-->
                          <thead>
                            <tr class="table-info">
                              <th scope="col">No</th>
                              <th scope="col">Studentname</th>
                              <th scope="col">Email</th>
                              <th scope="col">Dept</th>
                              <th scope="col">Roll</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Address</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
<!--table data part -->      

                          <tbody>
                           <?php  for($i=1;$i<=sizeof($data['users']);$i++) {     ?>
                            <tr>
                              <th scope="row"><?php echo $i ;  ?></th>
                              <td><?php  echo  $data['users'][$i-1]['username']; ?></td>
                              <td><?php  echo  $data['users'][$i-1]['email']; ?></td>
                              <td><?php  echo  $data['users'][$i-1]['dept']; ?></td>
                              <td><?php  echo  $data['users'][$i-1]['roll']; ?></td>
                              <td><?php  echo  $data['users'][$i-1]['contact']; ?></td>
                              <td><?php  echo  $data['users'][$i-1]['address']; ?></td>

                              <td><a  href="<?php  echo base_url().'index.php/user/edit/'.$data['users'][$i-1]['id'];    ?>"><button class="btn btn-primary"><span class="material-icons">border_color</span></button></a></td>
                              
                              <td><a  href="<?php  echo base_url().'index.php/user/delete/'.$data['users'][$i-1]['id'];    ?>"><button class="btn btn-danger"><span class="material-icons">delete</span></button></a></td>
                            </tr>
                            
                            <?php    } ?>
                          </tbody>


                        </table>

                </div>

    </body>
</html>