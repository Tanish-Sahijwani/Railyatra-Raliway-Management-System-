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
    <style>
        .textarea {
            width: 30vw;
            padding: 5px;
            border: 1px solid #000000;
            border-radius: 12px;
            font-size: 1em;
            border: 1px solid black;
            outline: none;
        }
    </style>
    <title>Railyatra</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <!--######################## NAVBAR #######################################-->
    <?php
    require "partials/_nav.php";
    ?>

        <!-- #################### ContactUs ################################ -->


        <div class="container-fluid  d-flex justify-content-center " style="margin-top: 80px;">
            <div class="row">

                <div class="col-md-8">

                    <form name="contact-form" action="contact.php" method="post" id="contact-form">
                        <div class="form-group">
                            <label for="Name">Name</label><br>
                            <input class="input" type="text" class="form-control" name="your_name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label><br>
                            <input class="input" type="email" class="form-control" name="your_email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label><br>
                            <input class="input" type="text" class="form-control" name="your_phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label><br>
                            <textarea class="textarea" name="comments" class="form-control" rows="3" cols="25" rows="8" placeholder="Comments"></textarea>
                        </div>

                        <button type="submit" class="btn-warning buttonRadius input" name="submit" value="Submit" id="submit_form">Submit</button>

                    </form>

                    <div class="response_msg"></div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
<?php
    require "partials/footer.php";
    ?>