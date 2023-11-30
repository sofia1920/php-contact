<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Login - Contact Book </title>
</head>
<body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <div class="card-header text-center">
                    Please insert your data in order to use this system.
                </div>
                <div class="card card-body">
                    <form action="save-login.php" method="POST">
                        <!-- <label for="fEmail">Email</label>
                        <input type="email" name="email" id="email" placeholder="email@email.com" class="form-control">
                        <label for="fPassword">Password</label>
                        <input type="password" name="password" id="password" placeholder="**********" class="form-control">
                        <input type="submit" name="save" value="save" class="btn btn-success btn-block" id="button">
                        <a href="login.php">Back</a> -->
 
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="email@email.com"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="**********" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="save" value="save" class="btn btn-success btn-block" id="button">
                        </div>
                        <div class="text-center">
                            <a href="login.php">Back</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
