<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Calculator Uzb with PHP Laravel </title>
    <style>
        h1{
            text-align: center;
            margin-top: 0.67em;
            margin-bottom: 0.67em;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            margin: auto;
            width: 25%;
            padding: 10px;
            border: 1px solid #f2f2f2;
            -webkit-box-shadow: 1px 1px 4px 0px rgba(176,176,176,1);
            -moz-box-shadow: 1px 1px 4px 0px rgba(176,176,176,1);
            box-shadow: 1px 1px 4px 0px rgba(176,176,176,1);
            background-color: #fff;
            height: 450px;
            background-color: #F8F8F8;
        }
        .header{
            background-color: #81C784;
            padding: 10px;
            color: #fff;
            text-align: center;
        }
        .result{
            font-size: 24px;
            padding: 24px 5px;
            font-weight: 700;

            text-align: right;
            width: 94%;
            height: 5px;

            background-color: #F8F8F8;
            margin: 2px auto;
            border: 1px solid blue;
        }
        .first-row,
        .second-row,
        .third-row,
        .fourth-row,
        .conflict
        {
            display: inline-block;
            width: 100%;
        }
        .global{
            padding: 15px;
            font-weight: bold;
            font-size: 16px;

            border: 2px solid gray;
            border-radius: 3px;
            background-color: #F2F2F2;
            float: left;
            width: 23.5%;
            margin: 0 2px;
            /*border: 1px solid #000;*/
        }
        .global:hover{
            border: 2px solid blueviolet;
            background-color: #668bd8;
        }
        .conflict .left,
        .conflict .right{
            float: left;
            position: relative;
        }
        .left{
            width: 74%;
        }
        .right{
            width: 24%;
        }
        .big{
            padding: 15px;
            font-weight: bold;
            font-size: 16px;
            border: 2px solid gray;
            border-radius: 3px;
            background-color: #F2F2F2;
            float: left;
            width: 64.5%;
            margin: 0 2px;
        }
        .small{
            padding: 15px;
            font-weight: bold;
            font-size: 16px;
            border: 2px solid gray;
            border-radius: 3px;
            background-color: #F2F2F2;
            float: left;
            width: 31.5%;
            margin: 0 2px;
        }
        .small:hover{
            border: 2px solid blueviolet;
            background-color: #668bd8;
        }
        .big:hover{
            background-color: #668bd8;
            border: 2px solid blueviolet;
        }
        .plus{
            height: 105px;
            width: 100%;
        }
        .green{
            background-color: #81C784;
        }
        .red{
            background-color: #F50258
        }
        .grey{
            background-color: #F2F2F2;
        }
        .white-text{
            color: #fff;
        }
        .top-margin{
            margin-top: 4px;
        }

    </style>
</head>
<body>
<h1></h1>
<br>
<br>
<br>
<div class="container">
    <div class="header">Calculator with PHP</div>
    <form action="" method="post">
        @csrf
    <input type="text" name="result" value="<?php if (isset($data)) echo $data?>" class="result">

    <div class="first-row">

        <input type="submit" name="val" value="&radic;" class="global">


        <input type="submit" name="val" value="(" class="global">


        <input type="submit" name="val" value=")" class="global">


        <input type="submit" name="val" value="%" class="global">

    </div>
    <div class="second-row">

        <input type="submit" name="val" value="7" class="global">


        <input type="submit" name="val" value="8" class="global">


        <input type="submit" name="val" value="9" class="global">


        <input type="submit" name="val" value="/" class="global">

    </div>
    <div class="third-row">

        <input type="submit" name="val" value="4" class="global">


        <input type="submit" name="val" value="5" class="global">


        <input type="submit" name="val" value="6" class="global">


        <input type="submit" name="val" value="X" class="global">

    </div>
    <div class="fourth-row">

        <input type="submit" name="val" value="1" class="global">


        <input type="submit" name="val" value="2" class="global">


        <input type="submit" name="val" value="3" class="global">


        <input type="submit" name="val" value="-" class="global">

    </div>
    <div class="conflict">
        <div class="left">

            <input type="submit" name="val" value="0" class=" big">


            <input type="submit" name="val" value="." class=" small">


            <input type="submit" name="val" value="Del" class=" red small white-text top-margin">


            <input type="submit" name="val" value="=" class=" green white-text big top-margin">

        </div>
        <div class="right">

            <input type="submit" name="val" value="+" class="global grey plus">

        </div>

    </div>
    </form>
</div>
</body>
</html>
