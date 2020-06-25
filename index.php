<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Opensource" />
        <meta name="keywords" content="ERICA" />
        <meta name="language" content="English" />
        <meta name="robots" content="index, follow"/>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OpenSource T2</title>

        <!-- 공통 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/common.css">
        <style type="text/css">
        body{
            width:100%;
            text-align:center;
        }
        img{
            border:0;
        }
        #main{
            margin: 15px auto;
            background:white;
            overflow: auto;
            width: 100%;
        }
        #header{
            background:white;
            margin-bottom:15px;
        }
        #mainbody{
            background: white;
            width:100%;
            display:none;
        }
        #footer{
            background:white;
        }
        #v{
            width:320px;
            height:240px;
        }
        #qr-canvas{
            display:none;
        }
        #qrfile{
            width:320px;
            height:240px;
        }
        #mp1{
            text-align:center;
            font-size:35px;
        }
        #imghelp{
            position:relative;
            left:0px;
            top:-160px;
            z-index:100;
            font:18px arial,sans-serif;
            background:#f0f0f0;
            margin-left:35px;
            margin-right:35px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:20px;
        }
        .selector{
            margin:0;
            padding:0;
            cursor:pointer;
            margin-bottom:-5px;
        }
        #outdiv
        {
            width:320px;
            height:240px;
            border: solid;
            border-width: 3px 3px 3px 3px;
        }
        #result{
            border: solid;
            border-width: 1px 1px 1px 1px;
            padding:20px;
            width:70%;
        }

        ul{
            margin-bottom:0;
            margin-right:40px;
        }
        li{
            display:inline;
            padding-right: 0.5em;
            padding-left: 0.5em;
            font-weight: bold;
            border-right: 1px solid #333333;
        }
        li a{
            text-decoration: none;
            color: black;
        }

        #footer a{
            color: black;
        }
        .tsel{
            padding:0;
        }

        </style>
    </head>
    <body>
        <?php
        include "./lib/dbconn.php";
        $choose="use hp_db";
        mysqli_query($conn,$choose);
        $ntb="CREATE TABLE IF NOT EXISTS  member(
                num INTEGER NOT NULL AUTO_INCREMENT,
                id VARCHAR(15) NOT NULL,
                pass VARCHAR(15) NOT NULL,
                name VARCHAR(20) NOT NULL,
                email VARCHAR(80),
                regist_day VARCHAR(20),
                level INTEGER,
                point INTEGER,
                PRIMARY KEY(num),
                UNIQUE(id)
            )";

            if (mysqli_query($conn,$ntb)){
               // echo "성공적으로 table 테이블을 만들었습니다.";
                } else {
                //echo "테이블 생성 오류 : " . mysqli_error($conn);
                }
        ?>

        <header>
            <!-- 공통사용 php문서 외부 추가하기 : 공통 사용하는 php는 lib폴더에 작성 -->
            <?php include "./lib/header.php" ?>
        </header>

        <div id="main">
        <div id="header">
        <div style="position:relative;top:+20px;left:0px;"><g:plusone size="medium"></g:plusone></div>
        <p id="mp1">
        Document share
        </p>
        <ul>
        <li><a href="about.html">About</a></li>
        </ul>
        </div>
        <form method="post" action="upload" enctype="multipart/form-data">

          <div>
            file : <input type="file" name="file">
          </div>

          <input type="submit">

        </form>
        <div id="mainbody">
        <table class="tsel" border="0" width="100%">
        <tr>
        <td valign="top" align="center" width="50%">
        <table class="tsel" border="0">
        <tr>
        <tr><td colspan="2" align="center">
        <div id="outdiv">
        </div></td></tr>
        </table>
        </td>
        </tr>
        <tr><td colspan="3" align="center">
        <div id="result"></div>
        </td></tr>
        </table>
        </body>
        <iframe width:100vw; height="480px" src="https://sucozchat.herokuapp.com/" id="chat" frameborder="1" scrolling="yes"></iframe>
</html>
