<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameLastName = $_POST['nameLastName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $students = $_POST['Students'];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Project1";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO Form (NameLastName, CompanyName, email, phone, TypeOfStudy)
    VALUES ('$nameLastName','$companyName','$email','$phone','$students')";

    if (mysqli_query($conn, $sql)) { } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Form.css">
    <title>ProjectForm</title>
</head>

<body>
    <nav class="navbar navbar-default NavBackground">
        <div class="container-fluid">
            <div class="navbar-header headWidth">
                <button type="button" class="navbar-toggle collapsed btnMobile" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" text-uppercase textDecoration" href="index.html">
                    <img class="logoBrainster" src="assets/images/logo.png"> <br><span id="logoName">brainster</span></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav acadamyLinks">
                    <li><a href="https://www.brainster.io/marketpreneurs">Академија за маркетинг</a></li>
                    <li><a href="http://codepreneurs.co/">Академија за програмриање</a></li>
                    <li><a href="https://www.brainster.io/data-science">Академија за data science</a></li>
                    <li><a href="https://www.brainster.io/design">Академија за дизјан</a></li>
                </ul>
                <a href="Form.html"><button type="button" class="btn btn-danger pull-right TopRightBtn">Вработи наши
                        студенти</button></a>
            </div>
        </div>
    </nav>
    <div class="container-fluid topHeading">
        <div class="row">
            <div class="col-md-12 text-center headingPadding">
                <h1 id="headingText">Вработи студенти</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid wholeForm">
        <form method="POST">
            <div class="row">
                <div class="form-group col-xs-12 col-md-4 col-md-offset-2">
                    <label for="name" class="control-label">Име и презиме</label>
                    <input name="nameLastName" type="text" class="form-control" id="name" placeholder="Воедно име и презиме">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <label for="companyName" class="control-label">Име на компанија</label>
                    <input name="companyName" type="text" class="form-control" id="companyName" placeholder="Име на вашата компанија">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12 col-md-4 col-md-offset-2">
                    <label for="name" class="control-label">Контакт имејл</label>
                    <input name="email" type="text" class="form-control" id="name" placeholder="Контакт имејл на вашата компанија">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <label for="companyName" class="control-label">Контакт телефон</label>
                    <input name="phone" type="text" class="form-control" id="companyName" placeholder="Контакт телефон на вашата компанија">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12 col-md-4 col-md-offset-2">
                    <label for="select" class="control-label">Тип на студенти</label>
                    <br>
                    <select id="select" name="Students">
                        <option style="display:none;" selected disabled>Изберете тип на студент</option>
                        <option value="Marketing">Студенти од маркетинг</option>
                        <option value="Proggraming">Студенти од програмирање</option>
                        <option value="DataScience">Студенти од data science</option>
                        <option value="Design">Студенти од дизајн</option>
                    </select>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <button id="sendBtn" value="submit" type="submit" class="btn btn-danger">Испрати</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid foot text-center">
        <b class="footText">Изработено со <span class="heart">❤️</span> од студентите на Brainster</b>
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</html>
