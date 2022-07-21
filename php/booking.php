<!DOCTYPE html>
<html lang="en">
<?php
$raw = $_GET['tours'];
$r = $_GET['dat'];
$r1 = $_GET['time'];
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
                    <form action="bookings.php" class="form" method="POST">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Start Booking now
                            </h2>
                        </div>


                        <div class="form__group">
                            <label for="name" class="form__label">Name </label>
                            <input autocomplete="new-field-name" type="text" class="form__input" placeholder="Full name" id="name" name="name" required>

                        </div>

                        <div class="form__group">
                            <label for="email" class="form__label">Age</label>
                            <input type="number" class="form__input" placeholder="Age" id="age" name="age" required autocomplete="new-field-name">

                        </div>

                        <div class="form__group">
                            <label for="phone" class="form__label">Email</label>
                            <input type="email" class="form__input" placeholder="Email" id="email" name="email" required autocomplete="off">

                        </div>
                        <div class="form__group">
                            <label for="email" class="form__label">Phone</label>
                            <input type="text" class="form__input" placeholder="Phone" id="ph" name="phone" required autocomplete="new-field-name">

                        </div>
                        <div class="form__group">
                            <label class="form__label">Date (Automatically selected from tour selected)</label>
                            <input type="text" class="form__input" value=<?php echo $r ?> id="date" name="date" readonly autocomplete="new-field-name">

                        </div>

                        <div class="form__group">
                            <label class="form__label">Time (Automatically selected from tour selected)</label>
                            <input type="text" class="form__input" value=<?php echo $r1 ?> id="time" name="time" readonly autocomplete="new-field-name">

                        </div>

                        <div class="form__group">
                            <label class="form__label">Tour id(Based on your selected tour)</label>
                            <input type="text" class="form__input" readonly id="tour" name="tour" value=<?php echo $raw ?> autocomplete="new-field-name">

                        </div>

                        <div class="form__group">
                            <button class="btn btn--green" name="submit">Book a Trip</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer id="footer" class="footer">

        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                        <li class="footer__item"><a href="mailto:ksrijanhosamane@gmail.com" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Careers</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright" style="text-align: center;">
                    Built by <a href="#" class="footer__link">Journey Guru</a> Team </p>


            </div>
        </div>
    </footer>
</body>

</html>