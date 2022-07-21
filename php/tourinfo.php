<?php
include 'connect.php';
$i = $_GET['tid'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Journey Guru</title>

    <!-- Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <!--Google fonts link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/b5e9fd525f.js"></script>

</head>

<body style="background-color:   #b3f0ff">

    <h1 style="background-color:#66ff99;color: white; font-size: 50px; padding-bottom: 20px;" align="center">Admin </h1>
    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="add.php"> <button class="btn btn-primary me-md-2" type="button">Add Tour </button></a>
    </div> -->

    <?php
    $res_admin = mysqli_query($conn, "SELECT * From booking t where t.tourid='$i'");
    $qarray = mysqli_fetch_array($res_admin, MYSQLI_NUM);
    if (!$qarray[0]) {
        echo '<h4 align="center">No one booked tickets till now </h4>';
    } else {
    ?>
        <table class="table table-hover">
            <thead>
                <tr class="bg-info">
                    <th scope="col">
                        <h2>Id</h2>
                    </th>
                    <th scope="col">
                        <h2>Name</h2>
                    </th>
                    <th scope="col">
                        <h2>Age</h2>
                    </th>
                    <th scope="col">
                        <h2>Email</h2>
                    </th>
                    <th scope="col">
                        <h2>Phone</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($res_admin)) {
                ?>
                    <tr>
                        <th scope="row">
                            <h3><?php echo $row['id'] ?></h3>
                        </th>
                        <td>
                            <h3><?php echo $row['nam'] ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $row['age'] ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $row['email'] ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $row['phone'] ?></h3>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
</body>

</html>