<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>

    <div class="gorny-lewy">
        <img src="logo1.png" alt="Mój kalendarz" width="100" height="100">
    </div>

    <div class="gorny-prawy">
        <h1>KALENDARZ</h1>
        <p>miesiąc: październik, rok:2021</p>
    </div>


    <main>
        <?php
        require("connect.php");

        $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];

            echo '<div>';
            echo "<h6>$data, $miesiac</h6>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }

        mysqli_close($conn)
        ?>
    </main>




    <?php
require("connect.php");

    if (isset($_POST['wydarzenie'])) {
        
        $wydarzenie = $_POST['wydarzenie'];
        $qr = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
        $conn->query($qr);
        $conn->close();
    }
    ?>

    <footer class="stopka">
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis:<input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></label>
            <br>
            <br>
            <p>Stronę wykonał: Piotr Hazy 00000000000</p>
        </form>
    </footer>

</body>

</html>






















