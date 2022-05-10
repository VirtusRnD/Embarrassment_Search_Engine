<?php
$query_keyword = "";
if($_POST['search']){
    $query_keyword = $_POST['keyword'];
}

$command = escapeshellcmd('python3 crawler.py '.$query_keyword);
$output = shell_exec($command);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shame Search</title>
    <style>
        span {
            font-size: 15px
        }


        h3 {
            font-size: 20px
        }


        .queryResult {
            background-color: #c5d7f6;
            max-height: 95px;
            padding: 10px 20px;
            margin-bottom: 20px;
            border: 2px darkslateblue solid;
            border-radius: 20px;
            overflow-y: hidden
        }


        .queryResultTitle {
            margin: 10px 0px
        }


        select{
            outline:none;
        }


        a:link {
            text-decoration: none;
            color:#009EE3;
        }


        a:visited {
            text-decoration: none;
            color:rgb(150,50,150);
        }


        a:hover {
            text-decoration: underline;
        }


        a:active {
            text-decoration: underline;
            color:red;
        }


        body{
            font-size:12px;
            font-family:Arial,serif;
            margin:0;
            padding:0;
            color:#555656;
            background-color:white;
        }


        h1{
            color:#009EE3;
            font-size:20px;
            line-height:24px;
            margin:0px;
            margin-bottom:5px;
            font-weight: normal;
            max-height:24px;
            max-width:85%;
            overflow: hidden;
        }


        b{
            color:black;
            font-size:14px;
            line-height:18px;
            margin-top:0px;
            padding-top:0px;
            word-wrap: break-word;

            display: inline-block;
            max-height:54px;
            overflow: hidden;
            max-width:60%;
        }


        p{
            font-size:14px;
            line-height:19px;
            margin-bottom:0px;
            margin-top:5px;
            word-wrap: break-word;
        }


        div.image_small{
            width:160px;
            height:40px;

            padding: 0px;
            margin: 0px auto 20px;
        }


        img{
            display:block;margin:auto;width:100%;margin-bottom:30px;
            transition-property:height;
            transition-duration:1s;

        }


        input[type=text]{
            font-size:16px;
            width:70%;
            border-width:0px;border-style: solid;
            border-color: rgb(200,200,200);outline:none;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:0px;

            margin:0px;
            margin-left:50px;
            border-radius:0px;
            -webkit-appearance: none;
            background-color:white;
        }


        input[type=submit]{
            display:block;margin:auto;
            width:27%;
            border-radius: 40px;
            background-color:#009EE3;
            color:white;
            border:0px;
            font-size:16px;
            padding: 10px 0px;
            outline:0px;
            transition-property:width,background-color,color;
            transition-duration:0.25s;
            -webkit-appearance: none;
            cursor:pointer;
        }


        input[type=submit]:hover{
            outline:none;
            background-color:#F1F3F5;color:#555656;border:0px;
        }


        div.form{
            position:sticky;
            top:20px;
            margin:auto;
            width:40%;
            transition-property:width;
            transition-duration:0.5s;
            background:transparent;
            z-index:10;
        }


        div.autocomplete{
            background-color:white;
            width:100%;
            border-width:1px;border-style: solid;
            border-color: rgb(200,200,200);outline:none;opacity:0.7;
            font-size:16px;
            padding-top:2px;
            padding-bottom:2px;
            padding-left:0px;
            margin-left:0%;

            border-radius:24px;
            transition-property:width,box-shadow;
            transition-duration:0.5s;
            -webkit-appearance: none;
            z-index:10;
        }


        .autocomplete-items div {
            padding: 5px 0 5px 50px;
            cursor: pointer;
            margin:0px;
            background-color: #fff;
            color:#555656;
            font-size:16px;
            z-index:10;
        }


        .autocomplete-items div:hover {
            padding: 5px 0 5px 50px;
            cursor: pointer;
            background-color: #F1F3F5;
        }


        mark{
            color:inherit;
            background-color: rgb(255,255,210);
        }


        @media only screen and (max-width: 700px) {

            h1 {
                max-height: 48px;
                max-width: 100%;
                overflow: hidden;
            }


            .images {
                width: 25%;
                padding: 1%;
                margin: 0px;
                opacity: 0.7;
                border-radius: 20px;
                transition-property: opacity;
                transition-duration: 0.5s;
                z-index: 0;


                height: 90px;
                width: 90px;
                max-width: 90px;
                max-height: 90px;

                object-fit: cover;


            }

            .images:hover {
                opacity: 0.9;
            }


            .image_container {
                width: 100%;
                margin: auto;
            }


            mark {
                background-color: rgb(255, 255, 210);
            }


            div.top {
                height: 120px;
            }

            div.top2 {
                height: 40px;
            }


            div.item {
                margin: auto;
                width: 86%;
                padding: 0px;
                margin-top: 40px;
                min-height: 100px;
            }


            button.mic {
                position: absolute;
                width: 10%;
                right: 7%;
                margin-top: 4px;
                padding: 10px;
                padding-left: 5px;
                padding-right: 5px;
                background: transparent;
                border: 0px;
                border-style: solid;
                outline: 0px;
                z-index: 1;
                opacity: 0.5;
                font-size: 16px;
            }


            button.cross {
                position: absolute;
                width: 10%;
                right: 16%;
                margin-top: 4px;
                padding: 10px;
                background: transparent;
                border: 0px;
                border-style: solid;
                outline: 0px;
                z-index: 1;
                opacity: 0.5;
                font-size: 16px;
            }


            button.cross_ini {
                position: absolute;
                width: 10%;
                right: 16%;
                margin-top: 4px;
                padding: 10px;
                background: transparent;
                border: 0px;
                border-style: solid;
                outline: 0px;
                z-index: 1;
                opacity: 0.5;
                font-size: 16px;
                display: none;
            }


            button.search {
                position: absolute;
                width: 10%;
                left: 22px;
                margin-top: 0px;
                padding-top: 10px;
                padding-bottom: 10px;
                background: transparent;
                border: 0px;
                border-style: solid;
                outline: 0px;
                z-index: 1;
                opacity: 0.5;
                font-size: 16px;
            }


            div.form {
                position: static;
                margin: auto;
                width: 90%;
                transition-property: width;
                transition-duration: 0.5s;
                background: transparent;
            }


            div.image {
                width: 200px;
                height: 50px;
                padding: 0px;
                margin: auto;
                margin-bottom: 15px;
                margin-top: 20px;
                padding: 0px;
            }

            div.image_small {
                width: 160px;
                height: 40px;

                padding: 0px;
                margin: auto;
                margin-top: 0px;
                margin-bottom: 20px;
            }


            img {
                width: 100%;
                margin: 0px;
                margin-bottom: 20px;
            }


            input[type=text] {
                width: 60%;
                font-size: 16px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 0px;

                margin: 0px;
                margin-left: 45px;
                border-radius: 0px;
                -webkit-appearance: none;
                background-color: white;
            }


            input[type=submit] {
                width: 30%;
            }

            .autocomplete-items div {
                padding: 0;
                padding-left: 45px;
                padding-top: 5px;
                padding-bottom: 5px;
                cursor: pointer;
                margin: 0px;
                background-color: #fff;
                color: #555656;
                font-size: 16px;
                z-index: -2;
            }

            .autocomplete-items div:hover {
                padding: 0;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 45px;
                cursor: pointer;
                background-color: #F1F3F5;
            }

            .autocomplete-active {
                background-color: #F1F3F5 !important;
            }


            div.bottom-left {
                width: 16.5%;
                padding: 10px;
                padding-left: 0px;
                padding-right: 0px;
                margin: 0px;
                font-size: 10px;
                align: center;
            }

            div.bottom-left2 {
                width: 16.5%;
                padding: 10px;
                padding-left: 0px;
                padding-right: 0px;
                margin: 0px;
                font-size: 10px;
                align: center;
            }

            div.bottom-right {
                width: 16.5%;
                padding: 10px;
                padding-right: 0px;
                padding-left: 0px;
                margin: 0px;
                font-size: 10px;
                align: center;
            }

            div.bottom-center {
                width: 150px;
                padding: 10px;
                padding-right: 0px;
                padding-left: 0px;
                margin: auto;
                font-size: 9px;
                text-align: center;
            }

            p.bottom-txt {
                color: #555656;
                padding: 0px;
                margin: 0px;
                font-size: 10px;
                text-align: center;
            }

            p.bottom-txt2 {
                color: #555656;
                padding: 0px;
                margin: 0px;
                font-size: 9px;
            }


            div.bottom {
                width: 90%;
                position: fixed;
                bottom: 30px;
                font-family: arial;
                color: #555656;
                background-color: #F1F3F5;
                padding: 0px;
                text-align: center;
                padding-left: 5%;
                padding-right: 5%;

            }

            div.bottom2 {
                width: 100%;
                position: fixed;
                bottom: 0px;
                font-family: arial;
                color: #555656;
                background-color: #F1F3F5;
                padding: 0px;
                margin: 0px;
            }

            div.below_image_smartphone {
                height: 20px;
            }

        }

    </style>
    <script type="text/javascript" src="search_result.json"></script>
    <script type="module" src="display_result.js"></script>
</head>
<body>
<script type="module">
    import { loadData } from "./display_result.js";
    loadData();
</script>


<div class="image_small" style="margin-top: 10px"><a href="embarrassmentSearch.php"><img src="images/embarrassmentSearch.png" alt="logo"></a></div>

<br><br><br><br><br>

<div id="query_timer_n_counter" style="float: right; margin-right: 20px">
</div>

<br>

<div style="width: 40%; margin: auto">
    <h2 style="margin-left: 42%; margin-right: 42%"> Shame Bar </h2>
    <progress value="3" max="100" style="width: 100%; height: 50px; accent-color: #414141"></progress>
</div>

<br>


<br><br><br><br><br>

<div id="results" style="width: 70%;margin-left: 15%"></div>
</body>
</html>
