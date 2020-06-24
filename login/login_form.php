<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>로그인</title>

    <!-- 공통사용 스타일 적용 -->
    <link rel="stylesheet" href="../css/common.css">
    <!-- login_form 전용 스타일 -->
     <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <header>
    <!-- 공통모듈 lib -->
    <?php include "../lib/header2.php"; ?>
    </header>

    <section>
        <div id="main_content">
            <div id="login_box">
                <div id="login_title">로그인</div>
                <div id="login_form">
                <form action="./login.php" method="post">
                    <ul>
                        <li><input type="text" name="id" placegolder="아이디"></li>
                        <li><input type="password" name="pass" placegolder="비밀번호"></li>
                    </ul>
                    <div id="login_btn">
                        <input type="image" src="../img/login.png">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

 

</body>
</html>