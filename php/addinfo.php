<?php
include 'connect.php';
//Check submit is pressed
if (isset($_POST['submit'])) {
    $tourname = $_POST['name'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $days = $_POST['days'];

    //     $que = mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");
    //     $q_r = mysqli_fetch_array($que);
    //     $user = $q_r['id'];
    //     if ($user) {

    //         $sql_query = "INSERT INTO ticket_registration (name,email,phonenumber,dat,ac,user_id)
    //   VALUES ('$name','$email','$phnumber','$date','$p','$user') ";
    //     } else {
    $sql_query = "INSERT INTO tours (tourname,expense,date,time,type,days)
  VALUES ('$tourname','$price','$date','$time','$type','$days') ";
}


// $query = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC LIMIT 1");
// $query_run = mysqli_fetch_row($query);

if (mysqli_query($conn, $sql_query)) {

    // $query = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC LIMIT 1");
    // $query_run = mysqli_fetch_row($query);
?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Stadium</title>

        <!-- Bootstrap link-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- External Css Link-->
        <link href="/Stadium/css/index.css" rel="stylesheet" />

        <!--Google fonts link-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">

        <!-- For printing -->
        <style type="text/css">
            @media screen {
                .print {
                    display: none;
                }
            }

            @media print {
                .noprint {
                    display: none;
                }
            }
        </style>
    </head>

    <body style="background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.8), rgba(40, 180, 133, 0.8)), url(../img/hero-small.jpg);">

        <!--Navigation Section-->

        <div class="card text-center">
            <div class="card-header">
                <h2> Trip Creation successful</h2>

            </div>
            <div style=" text-align:center;display:inline" class="noprint">
                <?php echo '<a href="admins.php?r=1230" class="btn btn--green" style="color:black;">
        <h4>Return to Dashboard </h4>
      </a>'; ?>
            </div>

    </html>
<?php
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>