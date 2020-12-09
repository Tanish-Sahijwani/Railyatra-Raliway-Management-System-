<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <title>Railyatra</title>

    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>
</head>

<body>
    <!--######################## NAVBAR #######################################-->
    <?php
    require "partials/_nav.php";
    ?>

        <!-- ######################### Home ############################ -->

        <marquee behavior="scroll" direction="left" scrollamount="5">
            COVID-19 Appropriate behaviour - Wear Mask, Physical Distancing, Maintain Hand Hygiene - RailYatra. For Announcements
            <a href="Announcement.php">Click here</a>
        </marquee>

        <h1 class="typeEffect">
            <a href="" class="typewrite" data-period="2000" data-type='[ "Hello!!!", "Welcome to RailYatra.com" ]'>
                <span class="wrap"></span>
            </a>
        </h1>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="bg6.jpg" class="d-block w-100  carouselImg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-warning buttonRadius" href="onlineBookingFront.php" role="button">Book Ticket Online</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="bg5.jpg" class="d-block w-100 carouselImg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-warning buttonRadius" href="runningStatus.php" role="button">Check Running Status </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="bg4.jpg" class="d-block w-100 carouselImg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-warning buttonRadius" href="pnrStatus.php" role="button">Check PNR Status </a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h3 class="text-center mt-3" style="color: #016180;margin-top: 80px;">Tutorials</h3>
        <div class="list-group">
            <a href="https://youtu.be/8F11Y5sUdAs" class="list-group-item list-group-item-action" target="_blank">How to check PNR status?</a>
            <a href="https://youtu.be/UAoiP5n9rxU" class="list-group-item list-group-item-action" target="_blank">How to check Running status?</a>
            <a href="https://youtu.be/amsj8CIezO4" class="list-group-item list-group-item-action" target="_blank">How to book ticket online?</a>
        </div>
        <?php
    require "partials/footer.php";
    ?>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>