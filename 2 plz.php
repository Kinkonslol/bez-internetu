<?php

$connection = new mysqli('localhost', 'root', '', 'wedkowanie');

if ($connection->connect_error) {
    die("Błąd połączenia: " . $connection->connect_error);
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wedkuj z nami</title>
    <link rel="stylesheet" href="styly_1.css">
</head>

<body>
    <div class="header">
        <h2>Wędkuj z nami!</h2>
    </div>

    <div class="container">
        <section class="left-block">
        <img src="ryba.jpg" alt=" Szczupak">
            
        </section>

        <section class="right-block">
        <h3>Ryby zamieszkujące rzeki</h3>

<?php
$query = "
        SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 2;
    ";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)) {
    echo "<li>{$row['nazwa']} pływa w rzece {$row['akwen']}, {$row['wojewodztwo']}</li>";
}


?>

<h3>Wszystkie ryby w bazie</h3>
<table>
    <table>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT id, nazwa AS Gatunek, wystepowanie AS Występowanie FROM Ryby";
                $result = mysqli_query($connection, $query);

                
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['Gatunek']}</td>
            <td>{$row['Występowanie']}</td>
        </tr>";
                    }
                
                ?>
            </tbody>
        </table>  
            
        </section>
    </div>

    <div class="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>

    <?php
    $connection->close();
    ?>
</body>
<a href="https://wedkuje.pl/" >otwóż tak że</a>
<a href="https://wedkuje.pl/"

</html>