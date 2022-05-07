<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>QR Code</title>
</head>
<style>
  
.img-box{
    width: 100%;
    min-height: 540px;
    position: relative;
}

.img-box .main-img img{
    width: 100%;
    height: 100%;
    position: absolute;

}

.img-box .sup-img{
    width: 120px;
    height: 120px;
    position: absolute;
    top: 55%;
    left: 29%;
    padding: 4px;
    /* border: 4px solid rgb(46, 45, 45); */
    transform: rotate3d(1, 1, 1, -4deg);
}

.img-box .sup-img img{
    width: 100%;
    height: 100%;
}
</style>

<body>



    <div class="img-box">
        <div class="main-img">
            <img src="{{ asset('wedding_hero.png') }}">
        </div>
        <div class="sup-img">
            <img src="{{ asset('uploads/'.$qr_code) }}">
        </div>
    </div>






</body>

</html>