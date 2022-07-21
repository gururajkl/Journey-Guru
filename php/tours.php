<!DOCTYPE html>
<html lang="en">
<?php
include 'connect.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Guru || All Tours</title>
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body style="background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.8), rgba(40, 180, 133, 0.8)), url(../img/hero-small.jpg);">

    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div id="bg" class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li id="l1" class="navigation__item"><a href="http://localhost/tlproject-master/index.html#footer" class="navigation__link"><span>01</span>About Journey Guru</a></li>
                <li class="navigation__item"><a href="/tlproject-master/index.html#benifits" class="navigation__link"><span>02</span>Your benfits</a></li>
                <li class="navigation__item"><a href="/tlproject-master/index.html#section-tours" class="navigation__link"><span>03</span>Popular tours</a></li>
                <li class="navigation__item"><a href="/tlproject-master/index.html#story" class="navigation__link"><span>04</span>Stories</a></li>
                <li class="navigation__item"><a href="/tlproject-master/php/tours.php" class="navigation__link"><span>05</span>Book now</a></li>
            </ul>
        </nav>
    </div>

    <section id="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                <span style="color: white;">All popular tours</span>
            </h2>
        </div>
        <?php
        $auth_admin = "SELECT * FROM tours";
        $res_admin = mysqli_query($conn, $auth_admin);
        $nu = mysqli_query($conn, "SELECT COUNT(*) FROM tours");
        $qarray = mysqli_fetch_array($nu, MYSQLI_NUM);
        if (!$qarray[0]) {
            echo '<h4 align="center">There is no tours scheduled .Please contact the authority </h4>';
        } else {
        ?><table class="table table-hover" style="background-color: white;">
                <thead>
                    <tr class="bg-info">
                        <th scope="col">
                            <h2>Tour Name</h2>
                        </th>
                        <th scope="col">
                            <h2>Price</h2>
                        </th>
                        <th scope="col">
                            <h2>Date</h2>
                        </th>
                        <th scope="col">
                            <h2>Time</h2>
                        </th>
                        <th scope="col">
                            <h2>Type</h2>
                        </th>
                        <th scope="col">
                            <h2>Days</h2>
                        </th>
                        <th scope="col">
                            <h2>Booking</h2>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($res_admin)) {
                    ?>
                        <tr>
                            <th scope="row">
                                <h3><?php echo $row['tourname'] ?></h3>
                            </th>
                            <td>
                                <h3><?php echo $row['expense'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $row['date'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $row['time'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $row['type'] ?></h3>
                            </td>
                            <td>
                                <h3><?php echo $row['days'] ?></h3>
                            </td>
                            <td> <?php echo ' <a href="booking.php?tours=' . $row['id'] . '&dat=' . $row['date'] . '&time=' . $row['time'] . '" class="btn btn-info">Book now</a>'; ?>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
            <div class="u-center-text u-margin-top-huge">
                <a href="../index.html" class="btn btn--green">Back to home</a>
            </div>
    </section>
</body>

</html>