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
            width: 96%;
            border: none;
            background-color: #F8F8F8;
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
            border: none;
            border-radius: 3px;
            background-color: #F2F2F2;
            float: left;
            width: 23.5%;
            margin: 0 2px;
            /*border: 1px solid #000;*/
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
            border: none;
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
            border: none;
            border-radius: 3px;
            background-color: #F2F2F2;
            float: left;
            width: 31.5%;
            margin: 0 2px;
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
    <input type="text" class="result">
    <div class="first-row">
        <form action="">
        <input type="button" name="" value="&radic;" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="(" class="global">
        </form>
        <form action="">
        <input type="button" name="" value=")" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="%" class="global">
        </form>
    </div>
    <div class="second-row">
        <form action="">
        <input type="button" name="" value="7" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="8" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="9" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="/" class="global">
        </form>
    </div>
    <div class="third-row">
        <form action="">
        <input type="button" name="" value="4" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="5" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="6" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="X" class="global">
        </form>
    </div>
    <div class="fourth-row">
        <form action="">
        <input type="button" name="" value="1" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="2" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="3" class="global">
        </form>
        <form action="">
        <input type="button" name="" value="-" class="global">
        </form>
    </div>
    <div class="conflict">
        <div class="left">
            <form action="">
            <input type="button" name="" value="0" class=" big">
            </form>
            <form action="">
            <input type="button" name="" value="." class=" small">
            </form>
            <form action="">
            <input type="button" name="" value="Del" class=" red small white-text top-margin">
            </form>
            <form action="">
            <input type="button" name="" value="=" class=" green white-text big top-margin">
            </form>
        </div>
        <div class="right">
            <form action="">
            <input type="button" name="" value="+" class="global grey plus">
            </form>
        </div>
    </div>
</div>
</body>
</html>
