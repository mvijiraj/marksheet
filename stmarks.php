<html>
    <?php
    include 'function.php';

    ?>
    <head>
        <title>Student record</title>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/marks-style.css" rel="stylesheet"/>
        <style>
           #topdiv{
                background-color: A62349;
                padding-top:20px;
                color:yellow;
            }
        </style>
    </head>
    <body>
        <script>
                function ChangeElementContent(){
                    alert ('Load marksheet');
                }

                ChangeElementContent();
        </script>
       
        <div class="container">
             
            
            <div class="row" id ="topdiv">
                    <div class="col-sm-12">
                        <h1>Student Marksheet System "SMS"</h1>
                        <p>Students Performance</p>
                    </div>
            </div>
                <div class="row">
                    <div class="col-sm-4">
                        1
                    </div>
                    <div class="col-sm-4">
                        <center><img src="images/student.png" style="width:150px; margin-top:50px";/></center>
                        
                        <h2>Enter Name and Marks</h2>
                       
                    <form action="stmarks.php" method="POST">
                        <div class="mb-3">
                        
                        <label for="exampleFormControlInput1" class="form-label">Name of Student<span class="req-msg">*</span></label><br/>
                        <span class="req-msg">*fields are required </span>
                        <hr>
                        

                        <input type="text" name='text' required class="form-control">
                       
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Marks<span class="req-msg">*</span></label>
                        <input type="marks" name='marks' required class="form-control">
                        </div>

                        <button type="submit" name="btnsubmit" class="btn btn-success">Add</button>

                    </form>
                    
                    
                    <?php

                    if(isset($_POST["btnsubmit"])){
                       
                        $text = $_POST['text'];
                        $marks = $_POST['marks'];

                       /* if(mysqli_num_rows($result)>0){
                        }else{
                         }*/
                        //connect to database

                       
                      $conn = getDBConnection();
                      $sql="INSERT INTO marks_tbl (St_Name,Marks) VALUES('$text',$marks)";
                     // $sql = "SELECT * FROM marks_tbl WHERE St_Name = '$txt' AND Marks = $mks AND status_code ='ACTIVE'";
                     // $result =mysqli_query($conn, $sql);
                      
                     if(mysqli_query($conn, $sql)){
                        //success
                       
                        ?>
                        <div class="alert alert-primary" role="alert">
                        new record inserted successfully
                        </div>


                        <?php
            
                    }else{
                        //error
                        echo 'error inserted';
                     }
                    }

                    ?>
                    </div>
                    <div class="col-sm-4">
                        3
                    </div>
                 </div>
            
        </div>

        <hr>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">St_Name</th>
      <th scope="col">Marks</th>
      <th colspan=2 scope="col">Operation<th>
      
      
      
    </tr>
  </thead>
  <tbody>

  <?php
  $conn = getDBConnection();
  $sql="SELECT * FROM marks_tbl";
  $result =mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){

        
    

            ?>

<tr>
      <th scope="rows"><?php echo $row['id']?></th>
      <td><?php echo$row['St_Name'] ?></td>
      <td><?php echo$row['Marks'] ?></td>
      <td scope="col"><button type="submit" name="btnsubmit" class="btn btn-Primary">
        <a href="update.php?updateid=<?php echo $row['id'] ?>" class="text-light">Update</a></button></td>
      <td scope="col"><button type="submit" name="btnsubmit" class="btn btn-danger">
        <a href="delete.php?deleteid=<?php echo $row['id'] ?>" class="text-light">Delete</a></button></td>
      
    </tr>
    


    <?php


    
   }

   }

  ?>
   
    
  </tbody>
</table>
    </body>
    </html>