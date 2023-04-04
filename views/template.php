<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/style.css">
    <title>Index</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php?route=incomes">Incomes</a></li>
                    <li><a href="index.php?route=spendings">Spendings</a></li>
                    <li><a href="index.php?route=savings">Savings</a></li>
                    <li><a href="index.php?route=balance">Balance</a></li>
                </ul>
            </nav>
            <div>
                <h1>Your finances here:</h1>
            </div>
        </header>
        <section class="main-section">
            <?php
            if(isset($_GET["route"])){
                if(
                    $_GET["route"] == "incomes" ||
                    $_GET["route"] == "spendings" ||
                    $_GET["route"] == "savings"||
                    $_GET["route"] == "balance" 
                ){
                    include "pages/" . $_GET["route"] . ".php";
                } else{
                    include "pages/error404.php";
                }
            } else{
                include "pages/welcome.php";
            }

            ?>
        </section>
    </main>
</body>
</html>