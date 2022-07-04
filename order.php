<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of order</title>
</head>
<body>
    
<?php
    $donuts = $_POST['donuts'];
    $bread = $_POST['bread'];
    $summary = 2*$donuts + 1.5*$bread;

    // wieloliniowa funkcja echo
echo<<<END
    <h2>Posumowanie zamówienia</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Donut (2 $/pcs)</td><td>$donuts</td>
        </tr>
        <tr>
            <td>Bread (1.5 $/pcs)</td><td>$bread</td>
        </tr>
        <tr>
            <td>SUMMARY</td><td>$summary $</td>
        </tr>
    </table>
    <br />
    <a href="index.php">Go back</a>
    


END;



?>

</body>
</html>