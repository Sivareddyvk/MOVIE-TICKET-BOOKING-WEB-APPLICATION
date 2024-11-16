<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','gkk') or die("Connection Failed");

        if(isset($_POST['gmail']) && isset($_POST['name']) && isset($_POST['phoneno']) && isset($_POST['age']))
        {
            $gmail = $_POST['gmail'];
            $name = $_POST['name'];
            $phoneno = $_POST['phoneno'];
            $age = $_POST['age'];

            $sql = "INSERT INTO `signin` (`gmail`,`name`,`phoneno`, `age`)  VALUES ('$gmail','$name','$phoneno','$age')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>