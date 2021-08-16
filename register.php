<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Register</h2>

        <form action="insert.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                </div>
                <div class="col">
                    <div class="from-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <div class="form-group">

                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" aria-label="Password">
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-success" name="submit" type="submit">SUBMIT</button>

                    </div>
                </div>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>

</html>