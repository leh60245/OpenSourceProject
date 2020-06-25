<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>

        <!-- 공통 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/common.css">
        
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

        <section>
            <!-- Main Content 문서를 별도로 제작 : 추후 유지보수시의 편리성 -->
            
        </section>

       
    </body>
</html>