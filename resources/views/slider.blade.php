<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .slider {
    width: 100%;
    overflow: hidden;
    position: relative;
}
.slider img {
    width: 100%;
    height: auto;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}
.slider img.active {
    opacity: 1;
}

        </style>
</head>
<body>
<div class="slider">
    <img src="images/slide1.jpg" alt="Slide 1">
    <img src="images/slide2.jpg" alt="Slide 2">
    <img src="images/slide3.jpg" alt="Slide 3">
</div> 
</body>
</html>