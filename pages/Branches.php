<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/branches.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lola Forte's Restaurant - Branches</title>
</head>

<body>
    <main>
        Background Image

        <div class="restaurant-name">
            Restaurant Name
        </div>

        <div class="branches">
            <div class="mySlides fade">
                <img src="img/Test1.jpg" style="width:100%; height:300px">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <img src="img/Test2.jpg" style="width:100%; height:300px">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <img src="img/Test3.jpg" style="width:100%; height:300px">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script src="js/slide-show.js"></script>
    </main>
</body>

</html>