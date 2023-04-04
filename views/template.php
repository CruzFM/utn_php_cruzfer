<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php?route=bruno">Bruno</a></li>
                    <li><a href="index.php?route=felix">Felix</a></li>
                    <li><a href="index.php?route=camilo">Camilo</a></li>
                    <li><a href="index.php?route=antonio">Antonio</a></li>
                </ul>
            </nav>
            <div>
                <h1>Madrigal Family Member</h1>
            </div>
        </header>
        <section>
            <?php
            if(isset($_GET["route"])){
                if(
                    $_GET["route"] == "bruno" ||
                    $_GET["route"] == "felix" ||
                    $_GET["route"] == "camilo"||
                    $_GET["route"] == "antonio" 
                ){
                    include "pages/" . $_GET["route"] . ".php";
                } else{
                    include "pages/error404.php";
                }
            } else{
                include "pages/welcome.php";
            }

            // if(isset($_GET["route"])){
            //     if(
            //         $_GET["route"] == "bruno" ||
            //         $_GET["route"] == "felix" ||
            //         $_GET["route"] == "camilo"||
            //         $_GET["route"] == "antonio" 
            //     ){
            //         include "pages/" . $_GET["route"] . ".php";
            //     } else{
            //         include "pages/error404.php";
            //     }
            // } else{
            //     if(isset($_GET["route"])){
            //         echo $_GET["route"];
            //     }
            //     include "pages/welcome.php";
            // }
            ?>
        </section>
    </main>
</body>
</html>