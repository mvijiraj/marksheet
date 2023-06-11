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
                    <form action="">
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name of Student</label>
                        <input type="text" name="txt" class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Marks</label>
                        <input type="marks" name="mks" class="form-control">
                        </div>

                        <button type="submit" name="btnsubmit" class="btn btn-success">Add</button>

                    </form>
                    </div>
                    <div class="col-sm-4">
                        3
                    </div>
                 </div>
            
        </div>

    </body>
    </html>