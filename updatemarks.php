<html>
   
    <head>
        <title>Student record</title>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <style>
           #topdiv{
                background-color: A62349;
                padding-top:20px;
                color:yellow;
            }
        </style>
    </head>
    <body>
        
       
        <div class="container">
             
            
            <div class="row" id ="topdiv">
                    <div class="col-sm-12">
                        <h1>Marks update</h1>
                        <p>Add marks to Database</p>
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
                        <label for="exampleFormControlInput1" class="form-label">Name of Student</label>
                        <input type="text" name='txt' class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Marks</label>
                        <input type="marks" name='mks' class="form-control">
                        </div>

                        <button type="submit" name="btnsubmit" class="btn btn-success">Add</button>

                    </form>
                    <?php

                    if(isset($_POST["btnsubmit"])){
                        echo 'this is statement';
                        $txt = $_POST['$_txt'];
                        $mks = $_POST['$_mks'];

                        if(mysqli_num_rows($result)>0){


                        }else{

                            

                        }
                        //connect to database



                        
                      $conn = getDBConnection();
                      $sql = "SELECT * FROM marks_tbl WHERE St_Name = '$txt' AND Marks = $mks AND status_code ='ACTIVE'";
                      $result =mysqli_query($conn, $sql);
                      echo '$sqli';
                      
                    }

                    ?>
                    </div>
                    <div class="col-sm-4">
                        3
                    </div>
                 </div>
            
        </div>

    </body>
    </html>