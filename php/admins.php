<?php
include 'connect.php';
$rn = $_GET['r'];

if (isset($_POST['su']) or  $rn == 1230) {
  $user_name = $_POST['name'];
  $user_password = $_POST['password'];
  if (($user_name == "root" and $user_password == "root4u") or $rn == 1230) {

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
            <span style="color: white;">Admin Login</span>
          </h2>
        </div>
        <?php
        $res_admins = mysqli_query($conn, "SELECT COUNT(*) From tours t,booking b where t.id=b.tourid");
        $ni = mysqli_fetch_array($res_admins, MYSQLI_NUM);
        $auth_admin = "SELECT * FROM tours";
        $res_admin = mysqli_query($conn, $auth_admin);
        $nu = mysqli_query($conn, "SELECT COUNT(*) FROM tours");
        $qarray = mysqli_fetch_array($nu, MYSQLI_NUM);
        if (!$qarray[0]) {
          echo '<h4 align="center">There is no tours scheduled .To schedule tours click on add </h4>';
        } else {
        ?><table class="table table-hover" style="background-color: white;">

            <thead>
              <tr class="bg-info">
                <th scope="col">
                  <h2>Tour Id</h2>
                </th>
                <th scope="col">
                  <h2>Tour Name</h2>
                </th>
                <th scope="col">
                  <h2>Expense</h2>
                </th>
                <th scope="col">
                  <h2>Date</h2>
                </th>
                <th scope="col">
                  <h2>Type</h2>
                </th>
                <th scope="col">
                  <h2>Days</h2>
                </th>
                <th scope="col">
                  <h2>Revenue</h2>
                </th>
                <th scope="col">
                  <h2>Get details</h2>
                </th>
              </tr>
            </thead>
            <tbody>

              <?php
              while ($row = mysqli_fetch_array($res_admin)) {
                $res_admins = mysqli_query($conn, "SELECT COUNT(*) From booking  where tourid='$row[id]'");
                $ni = mysqli_fetch_array($res_admins, MYSQLI_NUM);
              ?>
                <tr>
                  <th scope="row">
                    <h3><?php echo $row['id']; ?></h3>
                  </th>
                  <td>
                    <h3><?php echo $row['tourname']; ?></h3>
                  </td>
                  <td>
                    <h3><?php echo $row['expense']; ?></h3>
                  </td>
                  <td>
                    <h3><?php echo $row['date']; ?></h3>
                  </td>
                  <td>
                    <h3><?php echo $row['type']; ?></h3>
                  </td>
                  <td>
                    <h3><?php echo $row['days']; ?></h3>
                  </td>
                  <td>
                    <h3>₹<?php echo $ni[0] * $row['expense']; ?></h3>
                  </td>
                  <td>
                    <?php echo '<a href="tourinfo.php?tid=' . $row['id'] . '" class="btn btn--white">See Passenger info </a><br /><br />'; ?>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>

          </table>
    <?php
        }
      }
    }
    ?>
    <br>
    <div style=" text-align:left;display:inline" class="noprint">
      <a href="../index.html" class="btn btn--green" style="color:white;">
        <h4>Log Out </h4>
      </a>
    </div>
    <div style=" text-align:right;display:inline" class="noprint">
      <?php echo '<a href="add.php?rn=1" class="btn btn--green" style="color:white;">
        <h4>Add tours </h4>
      </a>'; ?>
    </div>

    </body>

    </html>