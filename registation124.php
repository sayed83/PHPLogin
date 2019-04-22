<?php
        $con = mysqli_connect('localhost:8080','root','');
        if(!$con){
            echo 'Not Connected to Database';
        }
        if(!mysqli_select_db($con,'tutorial'))
        {
            echo 'Database not Selected';
        }

        $User_Name = $_POST['username'];
        $Email = $_POST['email'];
        $Mobile_No = $_POST['mobile_No'];
        $Address = $_POST['address'];
        $Password = $_POST['password'];

        $sql = "INSERT INTO user(user_name,email,mobile,address,password) VALUES ('$User_Name','$Email','$Mobile_No','$Address','$Password')";

        if(!mysqli_query($con,$sql)){
            echo 'Not Registered';
        }else{
            echo 'Registered';
        }
        header("refresh:2; url=index.html");
    ?>