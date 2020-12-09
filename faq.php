<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="login.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="faq.css">
    <title>Railyatra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="footer.css">

</head>

<body>
    <<!--######################## NAVBAR #######################################-->
        <?php
    require "partials/_nav.php";
    ?>


            <div class="content ">



                <h3>FAQs</h3>

                <div>
                    <input type="checkbox" id="question1" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question1" class="question">
                What is a PNR?
          </label>
                    <div class="answers">
                        <p>PNR - Passenger Name Record is an unique number that recognizes your booking. PNR is a travel record of an individual or a group of individuals, maintained in CRS (Central Reservation System) database. This code is generated only
                            when the CRS gets full data of journey like passenger's name, gender, age, train number, journey class, berth preference, contact link, etc PNR is per ticket and not for person. If multiple members are booked together on one
                            ticket, then Only one PNR number will be allocated for it. Indian Railways has a 10-digit numerical PNR number. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question2" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question2" class="question">
                What use is of PNR?
          </label>
                    <div class="answers">
                        <p>PNR is utilized to get the Confirmed or Waitlisted status of your booking along with the coach and seat numbers. Basically PNR is used in "follow-up" process by which passengers are able to get updates about the status of their
                            journey. This 10-digit numerical PNR number of Indian Railways is of great use to passengers, whose tickets are not confirmed. PNR helps passengers to check whether their tickets got confirmed or not. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question3" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question3" class="question">
                Where would I find PNR?
          </label>
                    <div class="answers">
                        <p>You will find PNR in pnr status section.You can get your pnr from pnr number or mobile number. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question4" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question4" class="question">
        How to book ticket?
          </label>
                    <div class="answers">
                        <p>Navigate to online booking page then enter source ,destination station and the date you wish to book ticket for and then select the train in which you want to book ticket .Click on book now button. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question5" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question5" class="question">
                Can cancellation be done across counters ?
          </label>
                    <div class="answers">
                        <p>Yes </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question6" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question6" class="question">
                Is ID Proof Required for Booking ?
          </label>
                    <div class="answers">
                        <p>No at the time of booking but required during train journey. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question7" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question7" class="question">
                Is name change permissible ?
          </label>
                    <div class="answers">
                        <p>No, facility to change passengers name is not available on IRCTC website. However, Name can be changed at Railway counters as per extant Railway rules. </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question8" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question8" class="question">
                Why am I getting errors while checking PNR?
          </label>
                    <div class="answers">
                        <p>There could be 3 possible reasons 1. You entered wrong PNR number(Please check PNR then try again ). 2. Web servers are down.(In this case check again couple of minutes).
                        </p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question9" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question9" class="question">
                Can Wait listed tickets booked?
          </label>
                    <div class="answers">
                        <p>Yes</p>

                    </div>
                </div>
                <!-- _____________________________________________________ -->
                <div>
                    <input type="checkbox" id="question10" name="q" class="questions">
                    <div class="plus">+</div>
                    <label for="question10" class="question">
                Is Change of boarding point permissible ?
          </label>
                    <div class="answers">
                        <p>Yes, facility to change boarding point is available on Railyatra website.</p>

                    </div>
                </div>


            </div>
            <?php
    require "partials/footer.php";
    ?>

</body>

</html>