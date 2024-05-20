<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./aboutstyle.css">
</head>

<body>

    <?php include ("navbar.php"); ?>

    <div class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container">
            <div class="responsive-container-block leftSide">
                <p class="text-blk heading">
                    WELCOME TO OUR GAMEVERSE
                </p>
                <p class="text-blk subHeading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, aperiam repellat. Saepe
                    recusandae quo magnam repudiandae sapiente commodi harum labore deleniti quia mollitia ipsa, ipsum
                    sunt similique, nobis eaque optio.
                </p>
            </div>
            <div class="responsive-container-block rightSide">
                <img class="number1img" src="./img/batman.jpg">
                <img class="number2img" src="./img/cod ghost.jpg">
                <img class="number3img" src="./img/gta 6.jpg">
                <img class="number5img" src="./img/nfs heat.jpg">
                <video autoplay loop muted class="number4vid">
                    <source src="./video/gear-up-video.mp4" type="video/mp4">
                </video>
                <img class="number7img" src="./img/riders.jpg">
                <img class="number6img" src="./img/wwe.png">
            </div>
        </div>
    </div>
    <?php include ("footer.php"); ?>
    <script src="./script.js"></script>
</body>

</html>