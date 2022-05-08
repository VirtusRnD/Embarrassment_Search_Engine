<!DOCTYPE html>
<html lang="en">
<head>

    <title>sad - Yessle Search</title>
    <meta name="description"
          content="Yessle is a new independent search engine that you can use as an alternative to Google. Connect to the world with Yessle today!">
    <meta property="og:title" content="Yessle | New Search Engine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yessle.com/">
    <meta property="og:image" content="https://www.yessle.com/favicon.png">
    <meta property="og:description"
          content="Yessle is a new independent search engine that you can use as an alternative to Google. Connect to the world with Yessle today!">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0">

    <link rel="icon" type="image/ico" href="favicon.png">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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

        .image_container {
            width: 50%;
            margin: auto;
            display: none;
        }

        .images {
            padding: 1%;
            margin: 0px;
            margin-bottom: 0px;
            margin-top: -10px;
            margin-left: 10px;
            margin-right: 10px;
            opacity: 0.7;
            border-radius: 20px;
            transition-property: opacity, max-height, margin-top, margin-bottom;
            transition-duration: 0.25s;
            z-index: 0;

            max-height: 100px;
            min-height: 100px;
            width: 100px;
            object-fit: cover;
        }

        .images:hover {
            opacity: 0.9;
            max-height: 135px;
            z-index: 10;
            margin-bottom: -10px;
        }

        p.help {
            color: rgb(150, 150, 150);
        }

        select {
            outline: none;
        }

        a:link {
            text-decoration: none;
            color: #009EE3;
        }

        a:visited {
            text-decoration: none;
            color: rgb(150, 50, 150);
        }

        a:hover {
            text-decoration: underline;
        }

        a:active {
            text-decoration: underline;
            color: red;
        }


        a.bottomlink:link {
            text-decoration: none;
            color: #555656
        }

        a.bottomlink:visited {
            text-decoration: none;
            color: #555656
        }

        a.bottomlink:hover {
            text-decoration: underline;
        }

        a.bottomlink:active {
            text-decoration: underline;
            color: red;
        }


        body {
            font-size: 12px;
            font-family: Arial;
            margin: 0;
            padding: 0;
            color: #555656;
            background-color: white;


        }

        div.item {
            margin: auto;
            width: 50%;
            margin-top: 20px;
            padding-left: 30%;
            margin-left: -5%;
            margin-top: 40px;
            min-height: 100px;
        }

        h1 {
            color: #009EE3;
            font-size: 20px;
            line-height: 24px;
            margin: 0px;
            margin-bottom: 5px;
            font-weight: normal;
            max-height: 24px;
            max-width: 85%;
            overflow: hidden;
        }

        b {
            color: black;
            font-size: 14px;
            line-height: 18px;
            margin-top: 0px;
            padding-top: 0px;
            word-wrap: break-word;

            display: inline-block;
            max-height: 54px;
            overflow: hidden;
            max-width: 60%;
        }

        p {
            font-size: 14px;
            line-height: 19px;
            margin-bottom: 0px;
            margin-top: 5px;
            word-wrap: break-word;
        }

        div.image {
            width: 320px;
            height: 80px;
            padding: 0px;
            margin: auto;
            margin-bottom: 30px;
        }


        @keyframes example2 {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes example3 {
            0% {
                margin-top: 0%;
            }
            90% {
                margin-top: 50%;
            }
            100% {
                margin-top: 0%;
            }
        }

        @keyframes example4 {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 0.7;
            }
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
            display: block;
            margin: auto;
            width: 100%;
            margin-bottom: 30px;
            transition-property: height;
            transition-duration: 1s;

        }

        button.cross {
            position: absolute;
            width: 10%;
            right: 8%;
            margin-top: 4px;
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

        button.cross_ini {
            position: absolute;
            width: 10%;
            right: 8%;
            margin-top: 4px;
            padding-top: 10px;
            padding-bottom: 10px;
            background: transparent;
            border: 0px;
            border-style: solid;
            outline: 0px;
            z-index: 1;
            opacity: 0.5;
            font-size: 16px;
            display: none;
        }


        button.mic {
            position: absolute;
            width: 10%;
            right: 1%;
            margin-top: 4px;
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

        button.search {
            position: absolute;
            width: 10%;
            left: 0px;
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
            cursor: pointer;
        }


        input[type=text] {
            font-size: 16px;
            width: 70%;
            border-width: 0px;
            border-style: solid;
            border-color: rgb(200, 200, 200);
            outline: none;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0px;

            margin: 0px;
            margin-left: 50px;
            border-radius: 0px;
            -webkit-appearance: none;
            background-color: white;
        }


        input[type=submit] {
            display: block;
            margin: auto;
            width: 27%;
            border-radius: 40px;
            background-color: #009EE3;
            color: white;
            border: 0px;
            font-size: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0px;
            padding-right: 0px;
            outline: 0px;
            transition-property: width, background-color, color;
            transition-duration: 0.25s;
            -webkit-appearance: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            outline: none;
            background-color: #F1F3F5;
            color: #555656;
            border: 0px;
        }

        button.more_results {
            margin: auto;
            width: 27%;
            border-radius: 40px;
            background-color: #009EE3;
            color: white;
            border: 0px;
            font-size: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 0px;
            padding-right: 0px;
            margin-left: 36.5%;
            outline: 0px;
            transition-property: width, background-color, color;
            transition-duration: 0.25s;
            -webkit-appearance: none;
            cursor: pointer;
        }

        button.more_results:hover {
            outline: none;
            background-color: #F1F3F5;
            color: #555656;
            border: 0px;
        }


        div.form {
            position: sticky;
            top: 20px;
            margin: auto;
            width: 40%;
            transition-property: width;
            transition-duration: 0.5s;
            background: transparent;
            z-index: 10;


        }


        div.autocomplete {
            background-color: white;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(200, 200, 200);
            outline: none;
            opacity: 0.7;
            font-size: 16px;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 0px;
            margin-left: 0%;

            border-radius: 24px;
            transition-property: width, box-shadow;
            transition-duration: 0.5s;
            -webkit-appearance: none;
            z-index: 10;
        }

        div.autocomplete-items {
            background-color: white;
            padding-left: 0px;
            margin-left: 0%;
            margin-right: 0%;
            margin-bottom: 18px;
            margin-top: 0px;
            width: 100%;
            font-size: 16px;
            z-index: 10;
        }

        .autocomplete-items div {
            padding: 0;
            padding-left: 50px;
            padding-top: 5px;
            padding-bottom: 5px;
            cursor: pointer;
            margin: 0px;
            background-color: #fff;
            color: #555656;
            font-size: 16px;
            z-index: 10;
        }

        .autocomplete-items div:hover {
            padding: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 50px;
            cursor: pointer;
            background-color: #F1F3F5;
        }

        .autocomplete-active {
            background-color: #F1F3F5 !important;
        }


        div.bottom {
            width: 96%;
            position: fixed;
            bottom: 0px;
            font-family: arial;
            color: #555656;
            font-size: 14px;
            background-color: #F1F3F5;
            padding: 0px;
            text-align: center;
            padding-left: 2%;
            padding-right: 2%;
            z-index: 1;

        }

        div.bottom2 {
            width: 30%;
            position: fixed;
            bottom: 0px;
            font-family: arial;
            color: #555656;
            background-color: #F1F3F5;
            margin-left: 35%;
            margin-right: 35%;
            background: transparent;
            z-index: 1;
        }

        p.bottom-txt {
            color: #555656;
            padding: 0px;
            margin: 0px;
            font-size: 12px;
            line-height: 12px;

        }

        p.bottom-txt2 {
            color: #555656;
            padding: 0px;
            margin: 0px;
            font-size: 12px;
            line-height: 12px;
        }


        div.bottom-center {
            font-size: 12px;
        }


        div.bottom-left {
            color: #555656;
            width: 70px;
            padding: 10px;
            padding-left: 0px;
            padding-right: 0px;
            float: left;
            margin: 0px;
            font-size: 12px;
            line-height: 12px;

        }

        div.bottom-left2 {
            color: #555656;
            width: 90px;
            padding: 10px;
            padding-left: 0px;
            padding-right: 0px;
            float: left;
            margin: 0px;
            font-size: 12px;
            line-height: 12px;

        }

        div.bottom-right {
            color: #555656;
            width: 70px;
            padding: 10px;
            padding-right: 0px;
            padding-left: 0px;
            float: right;
            margin: 0px;
            font-size: 12px;
            line-height: 12px;

        }

        div.bottom-center {
            color: #555656;
            width: 150px;
            padding: 10px;
            padding-right: 0px;
            padding-left: 0px;
            margin: auto;
            font-size: 12px;
            line-height: 12px;
        }

        div.top {
            height: 165px;
            transition-property: height;
            transition-duration: 1s;
        }

        div.top2 {
            height: 32px;
            transition-property: height;
            transition-duration: 1s;
        }

        div.below_image_smartphone {
            height: 0px;
        }

        mark {
            color: inherit;
            background-color: rgb(255, 255, 210);
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

</head>


<body>


<div class="top2"></div>
<div class="image_small"><a href="https://www.yessle.com"><img src="logo-yessle-05.svg"></a></div>

<div class="form">


    <button style="display:block" id="cross_ini" class="cross_ini"
            onclick="document.getElementById('keyword2').value = ''; document.getElementById('cross_ini').style.display = 'none';document.getElementById('search_form').style.backgroundColor = 'Transparent'; ">
        <i class="fa fa-times"></i></button>
    <button class="mic"><i class="fa fa-microphone"></i></button>


    <form autocomplete="off" id="search_form" method="post" action="/index.php">

        <div class="autocomplete">

            <input id="keyword2" type="text" name="keyword" autocapitalize="off" autocomplete="off" autocorrect="off"
                   spellcheck="false" value="sad">
            <button class="search"><i class="fa fa-search"></i></button>

        </div>


        <div style="height:20px;display:block;"></div>


    </form>


</div>

<div class="image_container"><img class="images" src="images/uil1.jpg"><img class="images" src="images/uil2.jpg"><img
            class="images" src="images/uil3.jpg"><img class="images" src="images/uil4.jpg"><img class="images"
                                                                                                src="images/uil5.jpg"><br><br><br><br><br><br><br><br><br><br><br>
</div>


<div class="bottom">
    <div class="bottom-left2"><a class="bottomlink" href="https://www.yessle.com/advertising.php">Advertising</a></div>
    <div class="bottom-left"><a class="bottomlink" href="https://www.yessle.com/about.php">About</a></div>
    <div class="bottom-left"><a class="bottomlink" href="https://www.yessle.com/contact.php">Contact</a></div>
    <div class="bottom-right"><a class="bottomlink" href="https://www.yessle.com/add_webpage.php">Add Page</a></div>
    <div class="bottom-right"><a class="bottomlink" href="https://www.yessle.com/tricks.php">Tricks</a></div>
    <div class="bottom-right"><a class="bottomlink" href="https://www.yessle.com/privacy.php">Privacy</a></div>
</div>
<div class="bottom2">
    <div class="bottom-center">
        <center><a class="bottomlink" href="https://www.yessle.com">© 2022 yessle.com</a></center>
    </div>
</div>


<div class="item"><h1><a href="https://www.imdb.com/title/tt0078703/">To the Manor Born (TV Series 1979–2007) - IMDb</a>
    </h1>
    <p><a href="https://www.imdb.com/title/tt0078703/"><img style="float:right;" class="images"
                                                            src="images/Wednesday14thofOctober202011:12:17PM515.jpg"></a>Created
        by Peter Spence. With Penelope Keith, Peter Bowles, Angela Thorne, Daphne Heard. Audrey fforbes-Hamilton is sad
        when her husband dies but is ...</p>
    <p><b>imdb.com/title/tt0078703/</b></p></div>
<div class="item"><h1><a href="https://www.lonelyplanet.com/burkina-faso">Burkina Faso travel | Africa - Lonely
            Planet</a></h1>
    <p><a href="https://www.lonelyplanet.com/burkina-faso"><img style="float:right;" class="images"
                                                                src="images/Thursday15thofOctober202012:19:19000000AM939.jpg"></a>Explore
        Burkina Faso holidays and discover the best time and places to visit. | Burkina should be on everyone's travel
        list, but sadly the curren ...</p>
    <p><b>lonelyplanet.com/burkina-faso</b></p></div>
<div class="item"><h1><a href="https://min.wikipedia.org/wiki/Laman_Utamo">Wikipedia Minangkabau</a></h1>
    <p><a href="https://min.wikipedia.org/wiki/Laman_Utamo"><img style="float:right;" class="images"
                                                                 src="images/Friday16thofOctober202005:25:18000000PM146.jpg"></a>Wikipedia:Artikel
        nan Tapiliah/Oktober 2020Nan sadang balansuang: Pandemi koronavirus 2019—2020br /Kamatian kini ko: Didi Kempot -
        Ahmad Zuhdiannoo ...</p>
    <p><b>min.wikipedia.org/wiki/Laman_Utamo</b></p></div>
<div class="item"><h1><a
                href="https://www.britannica.com/video/194987/Overview-capture-trial-state-Iraq-War-Saddam-2017">Iraq
            War and the capture of Saddam Hussein | Britannica</a></h1>
    <p><a href="https://www.britannica.com/video/194987/Overview-capture-trial-state-Iraq-War-Saddam-2017"><img
                    style="float:right;" class="images" src="images/Friday16thofOctober202010:04:25000000PM559.jpg"></a>Video
        of Overview of the Iraq War, the capture and trial of Saddam Hussein, and the state of postwar Iraq, including
        the rise of ISIL, 2017.</p>
    <p><b>britannica.com/video/194987/Overview-capture-trial-state-Iraq-War-Saddam-2017</b></p></div>
<div class="item"><h1><a href="https://condenaststore.com/conde-nast-products/deskdiary">New Yorker Desk Diary / Day
            Planner 2021</a></h1>
    <p><a href="https://condenaststore.com/conde-nast-products/deskdiary"><img style="float:right;" class="images"
                                                                               src="images/Saturday17thofOctober202008:31:02000000PM955.jpg"></a>The
        2021 New Yorker Desk Diaries are here featuring a beautiful new cover design and new saddle brown color! The day
        planners cover January 2021 - De ...</p>
    <p><b>condenaststore.com/conde-nast-products/deskdiary</b></p></div>
<div class="item"><h1><a href="https://www.dogmount.com/">Leather Dog Collars, Leather Leashes, Belts - DOGMOUNT</a>
    </h1>
    <p><a href="https://www.dogmount.com/"><img style="float:right;" class="images"
                                                src="images/Monday16thofNovember202007:21:04PM.png"></a>Unique handmade
        and hand-stitched leather collars for dogs, leather leads and belts. Classic saddlery production technology,
        lifetime warranty.</p>
    <p><b>dogmount.com/</b></p></div>
<div class="item"><h1><a href="https://play.google.com/store?hl=bs&amp;gl=IE">Google Play</a></h1>
    <p>Uživajte u milionima najnovijih Android aplikacija, igara, muzičkih zapisa, filmova, TV sadržaja, knjiga,
        časopisa i još mnogo toga - bilo kada, ...</p>
    <p><b>play.google.com/store?hl=bs&amp;gl=IE</b></p></div>
<div class="item"><h1><a href="https://policy.pinterest.com/cs/cookies">Soubory cookie | Pinterest Policy</a></h1>
    <p><a href="https://policy.pinterest.com/cs/cookies"><img style="float:right;" class="images"
                                                              src="images/Saturday17thofOctober202001:14:07000000AM168.jpg"></a>Naše
        zásady ochrany osobních údajů popisují, jak shromažďujeme a&nbsp;využíváme informace a&nbsp;jaké možnosti máte k&nbsp;dispozici.
        Jedním ze zp� ...</p>
    <p><b>policy.pinterest.com/cs/cookies</b></p></div>
<div class="item"><h1><a href="https://www.amnh.org/research/anthropology/news-events/peace-hat-comes-home">Sitka Peace
            Hat Comes Home | AMNH</a></h1>
    <p><a href="https://www.amnh.org/research/anthropology/news-events/peace-hat-comes-home"><img style="float:right;"
                                                                                                  class="images"
                                                                                                  src="images/Sunday18thofOctober202001:59:49000000AM618.jpg"></a>The
        Peace Hat (AMNH Catalog No: E/2308) given to the Kiksadi Tlingits of Sitka by the Russians during peace
        negotiations almost 200 years ago was repa ...</p>
    <p><b>amnh.org/research/anthropology/news-events/peace-hat-comes-home</b></p></div>
<div class="item"><h1><a href="https://www.jasminedirectory.com/blog/advantages-and-disadvantages-of-paved-patios/">Advantages
            and Disadvantages of Paved Patios</a></h1>
    <p><a href="https://www.jasminedirectory.com/blog/advantages-and-disadvantages-of-paved-patios/"><img
                    style="float:right;" class="images"
                    src="images/Monday16thofNovember202006:03:18000000PM977.jpg"></a>Sunny days invite us outdoors to
        sit and enjoy the sunshine or dine outside in the evening hours. It raises the need for an outdoor patio and
        Landscap ...</p>
    <p><b>jasminedirectory.com/blog/advantages-and-disadvantages-of-paved-patios/</b></p></div>
<br><br><br><br><br><br><br><br>
<button class="more_results" onclick="document.getElementById('more_results').style.display = 'block' ">More results
</button>
<br><br><br><br><br>
<div id="more_results" style="display:none;">
    <div class="item"><h1><a href="https://www.imdb.com/title/tt0078703/">To the Manor Born (TV Series 1979–2007) -
                IMDb</a></h1>
        <p><a href="https://www.imdb.com/title/tt0078703/"><img style="float:right;" class="images"
                                                                src="images/Wednesday14thofOctober202011:12:17PM515.jpg"></a>Created
            by Peter Spence. With Penelope Keith, Peter Bowles, Angela Thorne, Daphne Heard. Audrey fforbes-Hamilton is
            sad when her husband dies but is ...</p>
        <p><b>imdb.com/title/tt0078703/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0000040/">Stanley Kubrick - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0000040/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202002:24:16PM83.jpg"></a>Stanley
            Kubrick, Director: 2001: A Space Odyssey. Stanley Kubrick was born in Manhattan, New York City, to Sadie
            Gertrude (Perveler) and Jacob Leonard ...</p>
        <p><b>imdb.com/name/nm0000040/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0000398/">Sally Field - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0000398/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202002:46:10PM292.jpg"></a>Sally
            Field, Actress: Forrest Gump. Sally Margaret Field was born in 1946 in Pasadena, California, to actress
            Margaret Field (née Morlan) and salesma ...</p>
        <p><b>imdb.com/name/nm0000398/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0000599/">Kathleen Quinlan - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0000599/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202002:55:11PM698.jpg"></a>Kathleen
            Quinlan, Actress: Apollo 13. Kathleen Quinlan was born in Pasadena, California, the only child of Josephine
            (Zachry), a military-supply super ...</p>
        <p><b>imdb.com/name/nm0000599/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0000880/">Meredith Baxter - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0000880/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:15:09PM613.jpg"></a>Meredith
            Baxter, Actress: All the President's Men. Meredith Baxter was born on June 21, 1947 in South Pasadena,
            California, USA as Meredith Ann Baxter ...</p>
        <p><b>imdb.com/name/nm0000880/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0000910/">Joan Bennett - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0000910/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:15:57PM566.jpg"></a>Joan
            Bennett, Actress: Suspiria. Joan Geraldine Bennett was born on February 27, 1910, in Palisades, New Jersey.
            Her parents were both successful stag ...</p>
        <p><b>imdb.com/name/nm0000910/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0001111/">Jeremy Davies - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0001111/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:24:40PM498.jpg"></a>Jeremy
            Davies, Actor: Saving Private Ryan. Jeremy Davies attended the American Academy of Dramatic Arts in
            Pasadena, California. He made his film debu ...</p>
        <p><b>imdb.com/name/nm0001111/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0001244/">Sadie Frost - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0001244/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:30:39PM787.jpg"></a>Sadie
            Frost, Actress: Dracula. With over three decades in film, theatre and television, Sadie Frost is producer,
            actor, fashion designer and author, s ...</p>
        <p><b>imdb.com/name/nm0001244/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0001260/">John Gavin - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0001260/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:31:03PM242.jpg"></a>John
            Gavin, Actor: Psycho. John Gavin, the American film and TV actor, businessman and diplomat who was Ronald
            Reagan's first Ambassador to Mexico, wa ...</p>
        <p><b>imdb.com/name/nm0001260/</b></p></div>
    <div class="item"><h1><a href="https://www.imdb.com/name/nm0001476/">Cleavon Little - IMDb</a></h1>
        <p><a href="https://www.imdb.com/name/nm0001476/"><img style="float:right;" class="images"
                                                               src="images/Wednesday14thofOctober202003:48:13PM886.jpg"></a>Cleavon
            Little, Actor: Blazing Saddles. Versatile, charismatic African-American actor Cleavon Little was born on
            June 1, 1939, in Oklahoma but grew up ...</p>
        <p><b>imdb.com/name/nm0001476/</b></p></div>
</div>


<br><br><br><br><br><br>


<script src="autosuggest.php"></script>
</body>
</html>