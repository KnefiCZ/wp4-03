<?php 
    require_once "classes" . DIRECTORY_SEPARATOR . "Model.php";
    $debitors = Model::getAllDebitors();
    $debts = Model::getAllDebts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>DebitoriXD</title>
</head>
<body>

    <table class="table table-striped table-dark">
        <tr>
             <td>ID</td>
             <td>Jméno</td>
             <td>Příjmení</td>
             <td>Datum do narození</td>
             <td>Datum úmrtí</td>
        </tr>
   <?php 

        foreach ($debitors as $row) { 
   ?>
        <tr>
            <td><?php echo $row['id_debitors']; ?></td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['birthdate']; ?></td>
            <td><?php echo $row['day_of_death']; ?></td>
        </tr>
    <?php 
    } 
    ?>
    </table>
    <table class="table table-striped">
        <tr>
             <td>ID</td>
             <td>ID Dlužníka</td>
             <td>Začátek dlužení</td>
             <td>Datum do splacení</td>
             <td>Částka</td>
             <td>Popisek</td>
        </tr>
    <?php
    foreach ($debts as $row) {
    ?>
        <tr>
            <td><?php echo $row['id_debt']; ?></td>
            <td><?php echo $row['id_debitor']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['description']; ?></td>
        </tr>
    <?php 
    } 
    ?>
     </table>
</body>
</html>