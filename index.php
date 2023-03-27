<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Orientational Guide</title>
</head>
<body class="p-3 mb-2 bg-light d-flex justify-content-center text-dark">
    <div class="container pt-5 d-flex justify-content-center flex-column">
        <h1 class="display -4 mb-2 pb-5 fw-bold text-center">The Orientational Guide</h1>
            <div class="col-md-5 justify-content-between align-items-center mx-auto">
                <form class="card card-body mb-3" action="./includes/signup.inc.php" method="POST">
                    <input type="text" name="email" placeholder="Enter Your Email">
                    <br>
                    <input type="text" name="first" placeholder="First Name">
                    <br>
                    <input type="text" name="last" placeholder="Last Name">
                    <br>
                    <input type="date" name="bdate" placeholder="Enter Your Birth date">
                    <br>
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <br>
                    <input type="text" name="studylvl" placeholder="Study level">
                    <br>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-5 pt-0 fw-bold">Employment</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                   <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Student" checked>
                                    <label class="form-check-label" for="gridRadios1"> Student</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="employee">
                                    <label class="form-check-label" for="gridRadios2">Employee
                                    </label>
                                </div>
                            </div>
                    </fieldset>
                    <input type="date" name="tdate" placeholder="Enter test date">
                    <br>
                    <input type="submit" value="Submit" class="btn btn-outline-primary">
         
                </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>