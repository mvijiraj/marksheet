<?php
    function getDBConnection(){

        

                        $server ="localhost"; //192.168.25.10
                        $username ="root";
                        $password="";
                        $dbname="stmarks";

                        $conn=mysqli_connect( $server,$username,$password,$dbname);
                

                        return $conn;



    }

?>