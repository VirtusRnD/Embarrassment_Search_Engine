<?php

$command = escapeshellcmd('python3 crawler.py');
$output = shell_exec($command);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Shame Search</title>
    <meta name="description" content="Shame Search is a search engine that you can use to find embarrassing content about people. Remember the dangers of sharing personal information on Internet!">
    <meta property="og:title" content="Shame Search | Embarrassment Search Engine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.shamesearch.com/">
    <meta property="og:image" content="https://www.shamesearch.com/embarrassmentSearch.png">
    <meta property="og:description" content="Shame Search is a search engine that you can use to find embarrassing content about people. Remember the dangers of sharing personal information on Internet!">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=10.0">

        <link rel="icon" type="image/ico" href="favicon.png">

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
                margin:0px;
                margin-bottom:0px;
                margin-top:-10px;
                margin-left:10px;
                margin-right:10px;
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



            a.bottomlink:link {
                text-decoration: none;
                color:#555656
            }

            a.bottomlink:visited {
                text-decoration: none;
                color:#555656
            }

            a.bottomlink:hover {
                text-decoration: underline;
            }

            a.bottomlink:active {
                text-decoration: underline;
                color:red;
            }





            body{
                font-size:12px;
                font-family:Arial;
                margin:0;
                padding:0;
                color:#555656;
                background-color:white;





            }

            div.item{
                margin:auto;
                width:50%;
                margin-top:20px;
                padding-left:30%;
                margin-left:-5%;
                margin-top:40px;
                min-height:100px;
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

            div.image{
                width:320px;
                height:80px;
                padding:0px;
                margin:auto;
                margin-bottom:30px;
            }




            @keyframes example2 {
                0%   {transform: rotate(0deg);}
                100% {transform: rotate(360deg);}
            }

            @keyframes example3 {
                0%   {margin-top:0%;}
                90% {margin-top:50%;}
                100% {margin-top:0%;}
            }

            @keyframes example4 {
                0%   {opacity:0;}
                100% {opacity:0.7;}
            }





            div.image_small{
                width:160px;
                height:40px;

                padding:0px;
                margin:auto;
                margin-top:0px;
                margin-bottom:20px;
            }


            img{
                display:block;margin:auto;width:100%;margin-bottom:30px;
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
                border:0px;
                border-style:solid;
                outline:0px;
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
                border:0px;
                border-style:solid;
                outline:0px;
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
                border:0px;
                border-style:solid;
                outline:0px;
                z-index:1;
                opacity:0.5;
                font-size:16px;
            }

            button.search{
                position:absolute;
                width:10%;
                left: 0px;
                margin-top:0px;
                padding-top:10px;
                padding-bottom:10px;
                background:transparent;
                border:0px;
                border-style:solid;
                outline:0px;
                z-index:1;
                opacity:0.5;
                font-size:16px;
                cursor:pointer;
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
                padding-top:10px;
                padding-bottom:10px;
                padding-left:0px;
                padding-right:0px;
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

            button.more_results{
                margin:auto;
                width:27%;
                border-radius: 40px;
                background-color:#009EE3;
                color:white;
                border:0px;
                font-size:16px;
                padding-top:10px;
                padding-bottom:10px;
                padding-left:0px;
                padding-right:0px;
                margin-left:36.5%;
                outline:0px;
                transition-property:width,background-color,color;
                transition-duration:0.25s;
                -webkit-appearance: none;
                cursor:pointer;
            }
            button.more_results:hover{
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

            div.autocomplete-items{
                background-color:white;
                padding-left:0px;
                margin-left:0%;
                margin-right:0%;
                margin-bottom:18px;
                margin-top:0px;
                width:100%;
                font-size:16px;
                z-index:10;
            }
            .autocomplete-items div {
                padding: 0;
                padding-left:50px;
                padding-top:5px;
                padding-bottom:5px;
                cursor: pointer;
                margin:0px;
                background-color: #fff;
                color:#555656;
                font-size:16px;
                z-index:10;
            }
            .autocomplete-items div:hover {
                padding: 0;
                padding-top:5px;
                padding-bottom:5px;
                padding-left:50px;
                cursor: pointer;
                background-color: #F1F3F5;
            }
            .autocomplete-active {
                background-color: #F1F3F5 !important;
            }






            div.bottom{
                width:96%;position:fixed;bottom:0px;font-family:arial;color:#555656;
                font-size:14px;background-color:#F1F3F5;padding:0px;
                text-align:center;
                padding-left:2%;
                padding-right:2%;
                z-index:1;

            }
            div.bottom2{
                width:30%;position:fixed;bottom:0px;font-family:arial;color:#555656;background-color:#F1F3F5;
                margin-left:35%;
                margin-right:35%;
                background:transparent;
                z-index:1;
            }
            p.bottom-txt{
                color:#555656;
                padding:0px;
                margin:0px;
                font-size:12px;
                line-height:12px;

            }
            p.bottom-txt2{
                color:#555656;
                padding:0px;
                margin:0px;
                font-size:12px;
                line-height:12px;
            }



            div.bottom-center{
                font-size:12px;
            }


            div.bottom-left{
                color:#555656;
                width:70px;
                padding:10px;
                padding-left:0px;
                padding-right:0px;
                float:left;
                margin:0px;
                font-size:12px;
                line-height:12px;

            }
            div.bottom-left2{
                color:#555656;
                width:90px;
                padding:10px;
                padding-left:0px;
                padding-right:0px;
                float:left;
                margin:0px;
                font-size:12px;
                line-height:12px;

            }

            div.bottom-right{
                color:#555656;
                width:70px;
                padding:10px;
                padding-right:0px;
                padding-left:0px;
                float:right;
                margin:0px;
                font-size:12px;
                line-height:12px;

            }
            div.bottom-center{
                color:#555656;
                width:150px;
                padding:10px;
                padding-right:0px;
                padding-left:0px;
                margin:auto;
                font-size:12px;
                line-height:12px;
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
                height:0px;
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
                    width:25%;
                    padding:1%;
                    margin:0px;
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
                    margin:auto;
                    width:86%;
                    padding:0px;
                    margin-top:40px;
                    min-height: 100px;
                }


                button.mic{
                    position:absolute;
                    width:10%;
                    right:7%;
                    margin-top:4px;
                    padding:10px;
                    padding-left:5px;
                    padding-right:5px;
                    background:transparent;
                    border:0px;
                    border-style:solid;
                    outline:0px;
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
                    border:0px;
                    border-style:solid;
                    outline:0px;
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
                    border:0px;
                    border-style:solid;
                    outline:0px;
                    z-index:1;
                    opacity:0.5;
                    font-size:16px;
                    display:none;
                }


                button.search{
                    position:absolute;
                    width:10%;
                    left:22px;
                    margin-top:0px;
                    padding-top:10px;
                    padding-bottom:10px;
                    background:transparent;
                    border:0px;
                    border-style:solid;
                    outline:0px;
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
                    padding:0px;
                    margin:auto;
                    margin-bottom:15px;
                    margin-top:20px;
                    padding:0px;
                }

                div.image_small{
                    width:160px;
                    height:40px;

                    padding:0px;
                    margin:auto;
                    margin-top:0px;
                    margin-bottom:20px;
                }



                img{
                    width:100%;
                    margin:0px;
                    margin-bottom:20px;
                }


                input[type=text]{
                    width:60%;
                    font-size:16px;
                    padding-top:10px;
                    padding-bottom:10px;
                    padding-left:0px;

                    margin:0px;
                    margin-left:45px;
                    border-radius:0px;
                    -webkit-appearance: none;
                    background-color:white;
                }


                input[type=submit]{
                    width:30%;
                }

                .autocomplete-items div {
                    padding: 0;
                    padding-left:45px;
                    padding-top:5px;
                    padding-bottom:5px;
                    cursor: pointer;
                    margin:0px;
                    background-color: #fff;
                    color:#555656;
                    font-size:16px;
                    z-index:-2;
                }
                .autocomplete-items div:hover {
                    padding: 0;
                    padding-top:5px;
                    padding-bottom:5px;
                    padding-left:45px;
                    cursor: pointer;
                    background-color: #F1F3F5;
                }
                .autocomplete-active {
                    background-color: #F1F3F5 !important;
                }



                div.bottom-left{
                    width:16.5%;
                    padding:10px;
                    padding-left:0px;
                    padding-right:0px;
                    margin:0px;
                    font-size:10px;
                    align:center;
                }
                div.bottom-left2{
                    width:16.5%;
                    padding:10px;
                    padding-left:0px;
                    padding-right:0px;
                    margin:0px;
                    font-size:10px;
                    align:center;
                }
                div.bottom-right{
                    width:16.5%;
                    padding:10px;
                    padding-right:0px;
                    padding-left:0px;
                    margin:0px;
                    font-size:10px;
                    align:center;
                }
                div.bottom-center{
                    width:150px;
                    padding:10px;
                    padding-right:0px;
                    padding-left:0px;
                    margin:auto;
                    font-size:9px;
                    text-align:center;
                }

                p.bottom-txt{
                    color:#555656;
                    padding:0px;
                    margin:0px;
                    font-size:10px;
                    text-align:center;
                }
                p.bottom-txt2{
                    color:#555656;
                    padding:0px;
                    margin:0px;
                    font-size:9px;
                }



                div.bottom{
                    width:90%;position:fixed;bottom:30px;font-family:arial;color:#555656;
                    background-color:#F1F3F5;padding:0px;
                    text-align:center;
                    padding-left:5%;
                    padding-right:5%;

                }

                div.bottom2{
                    width:100%;position:fixed;bottom:0px;font-family:arial;color:#555656;background-color:#F1F3F5;padding:0px;margin:0px;
                }

                div.below_image_smartphone{
                    height:20px;
                }



            }

        </style>

</head>
<body>
<div class="image_small"><img src="images/embarrassmentSearch.png" alt="logo"></div>
<div class="form">



    <button style="display:block" id="cross_ini" class="cross_ini" onclick="document.getElementById('keyword2').value = ''; document.getElementById('cross_ini').style.display = 'none';document.getElementById('search_form').style.backgroundColor = 'Transparent'; "><i class="fa fa-times"></i></button>



    <form autocomplete="off" id="search_form" method="post" action="/index.php">

        <div class="autocomplete">

            <input id="keyword2" type="text" name="keyword" autocapitalize="off" autocomplete="off" autocorrect="off" spellcheck="false" value="Kim Kar">
            <button class="search"><i class="fa fa-search"></i></button>

        </div>


        <div style="height:20px;display:block;"></div>


    </form>


</div>

</body>
</html>
