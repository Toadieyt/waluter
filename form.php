<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Waluter.pl</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Waluter</h1>
    </header>
    <main>
        <form action="form.php" method="POST">
            <p>Kwota</p>
            <input type="text" name="kwota" class="kwota-input"><br>
            <p>Przelicz na</p>
            <input type="radio" name="waluta" value="1" checked>dolar amerykański<br>
            <input type="radio" name="waluta" value="2">euro<br><br><br>
            <input type="submit" value="PRZELICZ" class="button-input">
        </form>
            <? php
                ($_POST['waluta'] == 1)
                {
                $przelicznik = 3.3373;
                }

                if($_POST['waluta'] == 2)
                {
                $przelicznik = 4.0399;
                }
                $wynik = $_POST['kwota']*$przelicznik;
                echo $wynik;
            ?>      
    </main>
    <footer> <p>©Dawid Ślusarczyk 2022</p></footer>
</body>
</html>