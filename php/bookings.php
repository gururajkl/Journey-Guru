<?php
include 'connect.php';
//Check submit is pressed
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phnumber = $_POST['phone'];
    $tourid = $_POST['tour'];

    //     $que = mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");
    //     $q_r = mysqli_fetch_array($que);
    //     $user = $q_r['id'];
    //     if ($user) {

    //         $sql_query = "INSERT INTO ticket_registration (name,email,phonenumber,dat,ac,user_id)
    //   VALUES ('$name','$email','$phnumber','$date','$p','$user') ";
    //     } else {

  $sql_query = "INSERT INTO booking (nam,age,email,phone,tourid)
  VALUES ('$name','$age','$email','$phnumber','$tourid') ";
}
$mails = "gururajragavendra7@gmail.com";
$subject2 = "Booking confirmed please print the page";
$message = "Booking successful";
$header = "From: " . $mails;
$result = mail($email, $subject2, $message, $header);
if ($result) {
    echo '<h4>Email sent.Please print the ticket</h4>';
} else {
    echo '<h4>Please print the ticket,there is issue in sending mail</h4>';
}


// $query = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC LIMIT 1");
// $query_run = mysqli_fetch_row($query);

if (mysqli_query($conn, $sql_query)) {

    $query = mysqli_query($conn, "SELECT * FROM booking ORDER BY id DESC LIMIT 1");
    $query_run = mysqli_fetch_row($query);
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

    <body style="text-align:center;background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.8), rgba(40, 180, 133, 0.8)), url(../img/hero-small.jpg);">

        <!--Navigation Section-->


        <div class="card text-center">
            <div class="card-header">
                <h2> Booking successful</h2>
            </div>
            <div class="card-body">
                <?php
                $quer = mysqli_query($conn, "SELECT date,time,days,tourname,expense FROM tours t join booking b on b.tourid=t.id");
                $query_ru = mysqli_fetch_row($quer);
                ?>
                <h5 class="card-title">Booking id :<?php echo $query_run[0];
                                                    ?></h5>
                <h5 class="card-title">Name :<?php echo $query_run[1];
                                                ?></h5>
                <h5 class="card-title">Age :<?php echo $query_run[2];
                                            ?></h5>
                <h5 class="card-title">Email :<?php echo $query_run[3];
                                                ?></h5>
                <h5 class="card-title">Phone :<?php echo $query_run[4];
                                                ?></h5>
                <h5 class="card-title">Date :<?php echo $query_ru[0];
                                                ?></h5>
                <h5 class="card-title">Time :<?php echo $query_ru[1];
                                                ?></h5>
                <h5 class="card-title">Days :<?php echo $query_ru[2];
                                                ?></h5>
                <h5 class="card-title">Tour id :<?php echo $query_run[5];
                                                ?></h5>

                <h5 class="card-title">Tour name :<?php echo $query_ru[3];
                                                    ?></h5>
                <h5 class="card-title">Price :<?php echo $query_ru[4];
                                                ?></h5>
                <p class="noprint">Please print this ticket for further references</p>
                <a href="#" class="btn btn-primary noprint"><button onclick="window.print()"> Print ticket</button></a>
            </div>
        </div>

        <!-- Printing Information-->

        <table class="print">
            <br />
            <tr>
                <td colspan="2">
                    <h2>Instructions :-</h2>
                    <h3> WASHING HANDS OFTEN:</h3>
                    1]Washing your hands often with soap and water or other disinfectants that have similar soap properties for at least 20 seconds is advised. This should be done especially after you have been to public places, or after blowing your nose or coughed or sneezed.<br>
                    2]If in any case, that soap is not readily available, using a hand sanitizer which has almost 60% alcohol composition is also a good way to sanitize your hands.<br>
                    3]Also try to avoid touching your face, eyes, nose or mouth with unwashed hands as the pathogens can enter through your mouth or other openings as well.
                    <h3>AVOIDING CLOSE CONTACT/ SOCIAL DISTANCING: </h3>
                    1]Avoiding contact with people who are affected is the best way to stay safe, even if the person affected is one of your family members.<br>
                    2]Maintain a 6 feet distance between the person who is sick and you.<br>
                    3]Make sure not to gather in groups.<br>
                    4]Stay out of gatherings and crowded places.<br>
                    5]If you are someone who gets easily sick, then you must maintain this distance strictly.
                    <h3>USE OF MASKS:</h3>
                    1]The use of masks when going out is a must, especially when you are going for buying something.<br>
                    2]You should use the masks even if you do not feel sick as the transmission can happen through the droplets from the sneezes or coughs of other people.<br>
                    3]DO NOT use the masks that are supposed to be provided for the health workers as they are the front line during this pandemic and any shortage of such special masks can cause the health workers to fall sick which can furthermore spread the virus.
                    <h3>CLEANING AND DISINFECTING AREAS: </h3>
                    1]Disinfecting area is a key to being safe as well. Places such as tables, doorknobs, light switches, desks, handles, toilets, sinks and faucets should be clean and disinfected.<br>
                    2]If the surfaces are dirty, use of detergent or soap before disinfection is highly advised.<br>
                    3]Use of disinfectant even when using household material is very necessary.

                    <h1 align="center">Lets Fight together</h1><br>
                </td>
            </tr>




        </table>
        <div style=" text-align:center;" class="noprint">
            <a href="../index.html" class="btn btn--blue" style="color:white;">
                <h4>Back to Home</h4>
            </a>
        </div>
    </body>

    </html>
<?php
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>