<!DOCTYPE html>
<html lang="en">

<head>
    <title>Survey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">

    <style>

        .button5:hover {
            background-color: #FFFFFF;
            color: black;
        }

        .button6:hover{
            background-color: #FFFFFF;
            color: black;

        }

        .button {
            background-color: dodgerblue; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid white;
            border-radius: 20px;
        }

        body {
            background-color: pink;
            padding-top: 100px;
            font-family: 'Merriweather', serif;


        }


        @media screen and (min-width: 550px) {

        }
        label{
            border: 0px;
            width: 5%;
            height: 20px;
        }
        input[type=radio] {
            border: 0px;
            width: 5%;
            height: 20px;
        }

        .bg {
            background: url('images/carpool.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100%;
        }



    </style>

</head>
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database ="landing_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

$dtm = date("Y-m-d h:i:sa");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['savedata'])){

    if(!empty($_POST['question'])){
        $select_option =mysqli_real_escape_string($conn,$_POST['question']);

        $sql = "INSERT INTO servey_question2 (selected_option,ip,dtm)
            VALUES ('$select_option','".$_SERVER['REMOTE_ADDR']."','".$dtm."')";

        if (mysqli_query($conn, $sql)) {
            $location ="/survey/success.php?saved";
            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
            // $_POST['question'] = '';
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else{

    }
}

?>
<body class="bg" <?php if(isset($_POST['savedata'])){ echo "onLoad='showMsg()'";}?> style="margin-bottom: 30px;" >
<div class="container">
    <div style="text-align:center;" class="main_form">

        <h3 style="word-spacing: 5px; line-height: 30px;margin-top:-30px;">If you are provided with an option of various packages that includes bonuses also.
            <br> Which one will you avail considering as per your daily need?
        </h3>
        <br><br>





        <form action="" method="post">

            <input type="radio" class="form-radio" name="question" value="$4.99">
            <label for="male"> &nbsp;&nbsp;&nbsp; Weekly</label><br><br>
            <input type="radio"  name="question" value="$5.99">
            <label for="female">&nbsp;&nbsp;&nbsp;Monthly</label><br><br>
            <input type="radio"  name="question" value="$6.99">
            <label for="male">&nbsp;&nbsp;&nbsp;Premium</label><br><br>
            <input type="radio"  name="question" value="None">
            <label for="male">&nbsp;&nbsp;&nbsp;None</label><br> <br>

            <input type="submit" name="savedata" value="Submit" class="button button5">
            <a href="Index.php">
                <input type="next" name="proceed" value="Finish" class="button button6" style="width: 120px">
            </a>
        </form>

    </div>



</div>





</body>

<!--<script>-->
<!--   function showMsg(){-->
<!--        Swal.fire(-->
<!--         'Thank you!',-->
<!--         'Your feedback is highly appreciated!',-->
<!--         'success'-->
<!--       );-->
<!--   }-->


<!-- </script>-->


</html>
