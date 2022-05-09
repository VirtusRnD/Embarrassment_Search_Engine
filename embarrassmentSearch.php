<!DOCTYPE html>
<html lang="en">

<head>

    <title>Shame Search</title>
    <meta name="description" content="Shame Search is a search engine that you can use to find embarrassing content about people. Remember the dangers of sharing personal information on Internet!">
    <meta property="og:title" content="Shame Search | Embarrassment Search Engine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.shamesearch.com/">
    <meta property="og:image" content="https://www.shamesearch.com/embarrassmentSearch.png">
    <meta property="og:description" content="Shame Search is a search engine that you can use to find embarrassing content about people. Remember the dangers of sharing personal information on Internet!">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0">

    <link rel="icon" type="image/ico" href="images/embarrassmentSearch.png">

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var element = document.createElement("script");
            element.src = "autosuggest.php";
            document.body.appendChild(element);
        });
    </script>

    <script>
        document.addEventListener("keydown", (e) => {
            document.getElementById('cross_ini').style.display = 'block'
        });
    </script>

    <style>

        .image_container{
            width:50%;
            margin:auto;
            display:none;
        }

        .images{
            padding:1%;
            margin: -10px 10px 0;
            opacity:0.7;
            border-radius:20px;
            transition-property:opacity,max-height,margin-top,margin-bottom;
            transition-duration:0.25s;
            z-index:0;

            max-height:100px;
            min-height:100px;
            width:100px;
            object-fit: cover;
        }

        .images:hover{
            opacity:0.9;
            max-height:135px;
            z-index:10;
            margin-bottom:-10px;
        }

        p.help{
            color:rgb(150,150,150);
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
            font-family: Arial, serif;
            margin:0;
            padding:0;
            color:#555656;
            background-color:white;

        }

        div.item{
            width:50%;
            padding-left:30%;
            margin: 40px auto auto -5%;
            min-height:100px;
        }

        h1{
            color:#009EE3;
            font-size:20px;
            line-height:24px;
            margin: 0 0 5px;
            font-weight: normal;
            max-height:24px;
            max-width:85%;
            overflow: hidden;
        }

        b{
            color:black;
            font-size:14px;
            line-height:18px;
            margin-top:0;
            padding-top:0;
            word-wrap: break-word;

            display: inline-block;
            max-height:54px;
            overflow: hidden;
            max-width:60%;
        }

        p{
            font-size:14px;
            line-height:19px;
            margin-bottom:0;
            margin-top:5px;
            word-wrap: break-word;
        }

        div.image{
            width:320px;
            height:80px;
            padding:0;
            margin: auto auto 150px;
        }

        @keyframes example2 {
            0%   {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }

        @keyframes example3 {
            0%   {margin-top:0;}
            90% {margin-top:50%;}
            100% {margin-top:0;}
        }

        @keyframes example4 {
            0%   {opacity:0;}
            100% {opacity:0.7;}
        }

        div.image_small{
            width:160px;
        height:40px;

        padding:0;
            margin: 0 auto 20px;
        }

        img{
            display:block;
            width:100%;
            margin: auto auto 30px;
            transition-property:height;
            transition-duration:1s;
        }

        button.cross{
            position:absolute;
            width:10%;
            right:8%;
            margin-top:4px;
            padding-top:10px;
            padding-bottom:10px;
            background:transparent;
            border: 0 solid;
            outline:0;
            z-index:1;
            opacity:0.5;
            font-size:16px;
        }

        button.cross_ini{
            position:absolute;
            width:10%;
            right:8%;
            margin-top:4px;
            padding-top:10px;
            padding-bottom:10px;
            background:transparent;
            border: 0 solid;
            outline:0;
            z-index:1;
            opacity:0.5;
            font-size:16px;
            display:none;
        }

        button.mic{
            position:absolute;
            width:10%;
            right:1%;
            margin-top:4px;
            padding-top:10px;
            padding-bottom:10px;
            background:transparent;
            border: 0 solid;
            outline:0;
            z-index:1;
            opacity:0.5;
            font-size:16px;
        }

        button.search{
            position:absolute;
            width:10%;
            left: 0;
            margin-top:0;
            padding-top:10px;
            padding-bottom:10px;
            background:transparent;
            border: 0 solid;
            outline:0;
            z-index:1;
            opacity:0.5;
            font-size:16px;
            cursor:pointer;
        }

        input[type=text]{
            font-size:16px;
            width:70%;
            border-width:0;border-style: solid;
            border-color: rgb(200,200,200);outline:none;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:0;

            margin: 0 0 0 50px;
            border-radius:0;
            -webkit-appearance: none;
            background-color:white;
        }

        input[type=submit]{
            display:block;margin:auto;
            width:27%;
            border-radius: 40px;
            background-color:#009EE3;
            color:white;
            border:0;
            font-size:16px;
            padding: 10px 0;
            outline:0;
            transition-property:width,background-color,color;
            transition-duration:0.25s;
            -webkit-appearance: none;
            cursor:pointer;
        }

        input[type=submit]:hover{
            outline:none;
            background-color:#F1F3F5;color:#555656;border:0;
        }

        button.more_results{
            width:27%;
            border-radius: 40px;
            background-color:#009EE3;
            color:white;
            border:0;
            font-size:16px;
            padding: 10px 0;
            margin: auto auto auto 36.5%;
            outline:0;
            transition-property:width,background-color,color;
            transition-duration:0.25s;
            -webkit-appearance: none;
            cursor:pointer;
        }

        button.more_results:hover{
            outline:none;
            background-color:#F1F3F5;color:#555656;border:0;
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
            padding-left:0;
            margin-left:0;

            border-radius:24px;
            transition-property:width,box-shadow;
            transition-duration:0.5s;
            -webkit-appearance: none;
            z-index:10;
        }

        div.autocomplete-items{
            background-color:white;
            padding-left:0;
            margin: 0 0 18px;
            width:100%;
            font-size:16px;
            z-index:10;
        }

        .autocomplete-items div {
            padding: 5px 0 5px 50px;
            cursor: pointer;
            margin:0;
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

        .autocomplete-active {
            background-color: #F1F3F5 !important;
        }

        div.top{
            height:165px;
            transition-property:height;
            transition-duration:1s;
        }

        div.top2{
            height:32px;
            transition-property:height;
            transition-duration:1s;
        }

        div.below_image_smartphone{
            height:0;
        }

        mark{
            color:inherit;
            background-color: rgb(255,255,210);
        }

        @media only screen and (max-width: 700px) {

            h1{
                max-height:48px;
                max-width:100%;
                overflow: hidden;
            }

            .images{
                padding:1%;
                margin:0;
                opacity:0.7;
                border-radius:20px;
                transition-property:opacity;
                transition-duration:0.5s;
                z-index:0;

                height:90px;
                width:90px;
                max-width:90px;
                max-height:90px;

                object-fit: cover;
            }

            .images:hover{
                opacity:0.9;
            }

            .image_container{
                width:100%;
                margin:auto;
            }

            mark{
                background-color: rgb(255,255,210);
            }

            div.top{
                height:120px;
            }

            div.top2{
                height:40px;
            }

            div.item{
                width:86%;
                padding:0;
                margin: 40px auto auto;
                min-height: 100px;
            }

            button.mic{
                position:absolute;
                width:10%;
                right:7%;
                margin-top:4px;
                padding: 10px 5px;
                background:transparent;
                border: 0 solid;
                outline:0;
                z-index:1;
                opacity:0.5;
                font-size:16px;
            }

            button.cross{
                position:absolute;
                width:10%;
                right:16%;
                margin-top:4px;
                padding:10px;
                background:transparent;
                border: 0 solid;
                outline:0;
                z-index:1;
                opacity:0.5;
                font-size:16px;
            }

            button.cross_ini{
                position:absolute;
                width:10%;
                right:16%;
                margin-top:4px;
                padding:10px;
                background:transparent;
                border: 0 solid;
                outline:0;
                z-index:1;
                opacity:0.5;
                font-size:16px;
                display:none;
            }

            button.search{
                position:absolute;
                width:10%;
                left:22px;
                margin-top:0;
                padding-top:10px;
                padding-bottom:10px;
                background:transparent;
                border: 0 solid;
                outline:0;
                z-index:1;
                opacity:0.5;
                font-size:16px;
            }

            div.form{
                position:static;
                margin:auto;
                width:90%;
                transition-property:width;
                transition-duration:0.5s;
                background:transparent;
            }

            div.image{
                width:200px;
                height:50px;
                padding:0;
                margin: 20px auto 15px;
            }

            div.image_small{
                width:160px;
                height:40px;

                padding:0;
                margin: 0 auto 20px;
            }

            img{
                width:100%;
                margin: 0 0 20px;
            }

            input[type=text]{
                width:60%;
                font-size:16px;
                padding-top:10px;
                padding-bottom:10px;
                padding-left:0;

                margin: 0 0 0 45px;
                border-radius:0;
                -webkit-appearance: none;
                background-color:white;
            }

            input[type=submit]{
                width:30%;
            }

            .autocomplete-items div {
                padding: 5px 0 5px 45px;
                cursor: pointer;
                margin:0;
                background-color: #fff;
                color:#555656;
                font-size:16px;
                z-index:-2;
            }

            .autocomplete-items div:hover {
                padding: 5px 0 5px 45px;
                cursor: pointer;
                background-color: #F1F3F5;
            }

            .autocomplete-active {
                background-color: #F1F3F5 !important;
            }

            div.below_image_smartphone{
                    height:20px;
            }

        }

    </style>

</head>


<form method="post" action="display_result.php">

    <div class="top">
    </div>
    <div class="image">
        <a href="embarrassmentSearch.php"><img src="images/embarrassmentSearch.png" alt=""></a>
    </div>


    <div class="form">
        <div class="autocomplete">
            <label for="keyword2"></label><input id="keyword2" type="text" name="keyword" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false" autofocus="">
        </div>
        <div style="height:30px;display:block;"></div><input type="submit" value="Search" onclick="displayData();">
    </div>
</form>

    <br><br><br><br><br><br>
</body>
</html>