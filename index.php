<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP-ISIG</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .text-gray-900 {
        color: #279f44!important;
    }
</style>

<body class="bg-gradient-primary" style="background-image: linear-gradient(180deg,#ffffff 10%,#d1d1d1 100%);">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Choisissez une option !</h1>
                            </div>
                            <form action="/Projects/jovial/detail.php" method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <b>
                                                    <input style="background:#4141b2; border-color:#4141b2; color:white;" type="submit" name="add_two_numbers" value="Addition de deux nombres">
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>
                                                <b>
                                                    <input style="background:#b24157; border-color:#b24157; color:white;" type="submit" name="max_numbers" value="Le plus grand entre deux nombres">
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>
                                                <b>
                                                    <input style="background:#41a5b2; border-color:#41a5b2; color:white;" type="submit" name="traduction" value="Traduction des jours de la semaine">
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>
                                                <b>
                                                    <input style="background:#941c1c; border-color:#941c1c; color:white;" type="submit" name="conversion_languages" value="Conversion de franc en dollar">
                                                </b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>