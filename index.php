<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php require_once 'process.php'; ?>
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(msqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    ?>

    <div class="d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
        </table>
    </div>



    <?php
        //pre_r( $result );
        pre_r($result->fetch_assoc());
        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>

    <h1 class="text-center">Hello, world!</h1>

    <div class="container d-flex justify-content-center">
        <form action="process.php" method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="Enter your name">
            </div>
            <div class="mb-3">
                <label>Location</label>
                <input type="text" class="form-control" name="location" value="Enter your location">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>