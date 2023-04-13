<?php
$title = "";
$sum_total = "";
$max_number = "";
$tab="";
$week_day="";
$result_day="";
$result_conversion="";

if (array_key_exists('add_two_numbers',$_POST)) {
    $title = "Addition de deux nombres";
    $tab=0;
} elseif (array_key_exists('max_numbers',$_POST)) {
    $title = "Le plus Grand entre deux nombres";
    $tab=1;
}elseif (array_key_exists('traduction',$_POST)) {
    $title = "Traduction des jours de la semaine";
    $tab=2;
}elseif (array_key_exists('conversion_languages',$_POST)) {
    $title = "Conversion de franc en dollar et de dollar en franc";
    $tab=3;
}

if (array_key_exists("calcul_sum",$_POST)) {
    $num1= $_POST["number1"];
    $num2= $_POST["number2"];

    $sum_total = $num1 + $num2;
}

if (array_key_exists("max_calcul",$_POST)) {
    $num1= $_POST["number1"];
    $num2= $_POST["number2"];
    if ($num1 > $num2) {
        $max_number = $num1;
        $tab = 1;
    } else {
        $max_number = $num2;
        $tab = 1;
    }
}

if (array_key_exists("week_day_fn",$_POST)) {
    $week_day = $_POST["day2"];
    if ($week_day == "Lundi" || $week_day == "lundi") {
        $result_day = "Monday";
        $tab = 2;
    } elseif ($week_day == "Mardi" || $week_day == "mardi") {
        $result_day = "Tuesday";
        $tab = 2;
    }elseif ($week_day == "Mercredi" || $week_day == "mercredi") {
        $result_day = "Wednesday";
        $tab = 2;
    }elseif ($week_day == "Jeudi" || $week_day == "jeudi") {
        $result_day = "Thursday";
        $tab = 2;
    }elseif ($week_day == "Vendredi" || $week_day == "vendredi") {
        $result_day = "Friday";
        $tab = 2;
    }elseif ($week_day == "Samedi" || $week_day == "samedi") {
        $result_day = "Saturday";
        $tab = 2;
    }elseif ($week_day == "Dimanche" || $week_day == "dimanche") {
        $result_day = "Sunday";
        $tab = 2;
    }else {
        $result_day = "Ne pas un jour de la semaine";
        $tab = 2;
    }
    
}


if (array_key_exists("converision2",$_POST)) {
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-ISIG</title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary" style="background-image: linear-gradient(180deg,#ffffff 10%,#3e8eafe6 100%);">
    <div class="container">
        <?php
        if ($tab == 0) {?>
        <div class="col-sm-8">
            <h3 class="p-3"><?php echo $title; ?></h3>
            <div class="p-3">
                <form action="" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="number" class="form-control form-control-user" name="number1"
                                placeholder="Entrer le premier nombre">
                        </div>
                        <div class="col-sm-6">
                            <input type="number" class="form-control form-control-user" name="number2"
                                placeholder="Entrer le second nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <p>La somme entre ce deux nombres est: <?php echo $sum_total; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="submit" name="calcul_sum" class="btn btn-primary btn-user btn-block" value="Calculer">
                        </div>
                        <div class="col-sm-6">
                        <a href="/Projects/jovial/" class="btn btn-danger btn-user btn-block">
                                Retour
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php }elseif ($tab==1) {?>
            <div class="col-sm-8">
                <h3 class="p-3"><?php echo $title; ?></h3>
                <div class="p-3">
                    <form action="" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user" name="number1"
                                    placeholder="Entrer le premier nombre">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control form-control-user" name="number2"
                                    placeholder="Entrer le second nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p>Le plus grand entre ce deux nombres est: <?php echo $max_number; ?></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="submit" name="max_calcul" class="btn btn-primary btn-user btn-block" value="Calculer">
                            </div>
                            <div class="col-sm-6">
                            <a href="/Projects/jovial/" class="btn btn-danger btn-user btn-block">
                                    Retour
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php }elseif ($tab==2) {?>
            <div class="col-sm-8">
                <h3 class="p-3"><?php echo $title; ?></h3>
                <div class="p-3">
                    <form action="" method="post">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="day2"
                                    placeholder="Entrer le jour de la semaine">
                            </div>
                        </div>
                        <div class="form-group row">
                            <p><?php echo $week_day; ?> en anglais c'est: <?php echo $result_day; ?></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="submit" name="week_day_fn" class="btn btn-primary btn-user btn-block" value="Valider">
                            </div>
                            <div class="col-sm-6">
                            <a href="/Projects/jovial/" class="btn btn-danger btn-user btn-block">
                                    Retour
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php }elseif ($tab==3) {?>
            <div class="col-sm-8">
                <h3 class="p-3"><?php echo $title; ?></h3>
                <form action="" method="post">
                    <ul>
                        <li><input type="submit" style="background:none; border:none;" name="converision1" value="Conversion de franc en dollar"></li>
                        <li><input type="submit" style="background:none; border:none;" name="converision2" value="Conversion de dollar en franc"></li>
                    </ul>
                </form>
                <div class="row">
                    <div class="col-sm-6">
                    <a href="/Projects/jovial/" class="btn btn-danger btn-user btn-block">
                            Retour
                        </a>
                    </div>
                </div>
            </div>
            <?php  ?>
        <?php }?>
    </div>
</body>
</html>