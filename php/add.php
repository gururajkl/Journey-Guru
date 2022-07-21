<!DOCTYPE html>
<html lang="en">
<?php
$i = $_GET['rn'];
if ($i == 1) {
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Journey Guru || Booking process</title>
        <link rel="stylesheet" href="../css/icon-font.css">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <body>
        <!-- Navr Bar -->
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div id="bg" class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li id="l1" class="navigation__item"><a href="/tlproject-master/index.html#footer" class="navigation__link"><span>01</span>About Journey Guru</a></li>
                    <li class="navigation__item"><a href="/tlproject-master/index.html#benifits" class="navigation__link"><span>02</span>Your benfits</a></li>
                    <li class="navigation__item"><a href="/tlproject-master/index.html#section-tours" class="navigation__link"><span>03</span>Popular tours</a></li>
                    <li class="navigation__item"><a href="/tlproject-master/index.html#story" class="navigation__link"><span>04</span>Stories</a></li>
                    <li class="navigation__item"><a href="tours.php" class="navigation__link"><span>05</span>Book now</a></li>
                </ul>
            </nav>
        </div>


        <!-- Booking section -->
        <section id="book" class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="addinfo.php" class="form" method="POST">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Add Tour
                                </h2>
                            </div>



                            <div class="form__group">
                                <label for="name" class="form__label">Tour name</label>
                                <input autocomplete="new-field-name" type="text" class="form__input" placeholder="Tour name" id="name" name="name" required>

                            </div>

                            <div class="form__group">
                                <label for="email" class="form__label">Price or Expense</label>
                                <input type="number" class="form__input" placeholder="Expense" id="price" name="price" required autocomplete="new-field-name">

                            </div>

                            <div class="form__group">
                                <label for="phone" class="form__label">Date</label>
                                <input type="date" class="form__input" placeholder="Date" id="date" name="date" required autocomplete="off">

                            </div>

                            <div class="form__group">
                                <label for="phone" class="form__label">Time</label>
                                <input type="time" class="form__input" placeholder="Time" id="time" name="time" required autocomplete="off">

                            </div>

                            <div class="form__group">
                                <label for="phone" class="form__label">Type</label>
                                <input type="text" class="form__input" placeholder="Place or package" id="type" name="type" required autocomplete="off">

                            </div>

                            <div class="form__group">
                                <label for="phone" class="form__label">Days</label>
                                <input type="text" class="form__input" placeholder="No of days" id="days" name="days" required autocomplete="off">

                            </div>

                            <div class="form__group">
                                <button class="btn btn--green" name="submit">Create a Trip</button>
                            </div>
                        </form>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        </main>
    <?php
}
    ?>
    </body>

</html>