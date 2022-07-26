<?php

?>
<!DOCTYPE html>
<html lang="en">

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
    <section id="book">
        <div class="book__form">
            <form action="#" class="form" style="text-align: center;">
                <div class="u-margin-bottom-medium">
                    <h2 class="heading-secondary">
                        Start booking now
                    </h2>
                </div>

                <div class="form__group">
                    <input autocomplete="new-field-name" type="text" class="form__input" placeholder="Full name" id="name" required>
                    <label for="name" class="form__label">Full name</label>
                </div>

                <div class="form__group">
                    <input type="email" class="form__input" placeholder="Email address" id="email" required autocomplete="new-field-name">
                    <label for="email" class="form__label">Email address</label>
                </div>

                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Mobile Number" id="phone" required autocomplete="off">
                    <label for="phone" class="form__label">Mobile Number</label>
                </div>

                <div class="form__group">
                    <button class="btn btn--green">Book a Trip</button>
                </div>
            </form>

            <div style=" margin-top: 20px;">
                <a href="../index.html" class="btn btn--blue">Back to Home</a>
            </div>
        </div>
    </section>
</body>

</html>