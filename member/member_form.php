<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>

    <!-- 공통 스타일 연결 -->
    <link rel="stylesheet" href="../css/common.css">
    <!-- member_form.php전용 스타일 -->
    <link rel="stylesheet" href="../css/member.css">

    <!-- 내부 자바스크립트 작성 -->
    <script>
        // 서밋 버튼 이미지 클릭시
        function submitForm(){

            // 입력값 중에 비어있으면 안되는 것들이 있음.

            // id칸이 비어 있는가?
            if(!document.member_form.id.value){
                alert("아이디를 입력하세요.");
                //커서(포커스)를 아이디 인풋요소로 이동
                document.member_form.id.focus();
                //아래의 submit()을 하면 안되므로...
                return;
            }
            // 비밀번호 비어 있는가?
            if(!document.member_form.pass.value){
                alert("비밀번호를 입력하세요.");
                document.member_form.pass.focus();
                return;
            }
             // 비밀번호 확인 비어 있는가?
             if(!document.member_form.pass_confirm.value){
                alert("비밀번호 확인을 입력하세요.");
                document.member_form.pass_confirm.focus();
                return;
            }
             // 이름 비어 있는가?
             if(!document.member_form.name.value){
                alert("이름을 입력하세요.");
                document.member_form.name.focus();
                return;
            }
            // 비밀번호와 비밀번호 확인 칸의 입력값이 같은지 비교
            if(document.member_form.pass.value != document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
                document.member_form.pass.focus();
                // 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
                document.member_form.pass.select();
                return;
            }

            // form요소를 직접 submit하는 메소드
            document.member_form.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
        }

        // 초기화 버튼 이미지 클릭시
        function resetForm(){
            document.member_form.id.value="";
            document.member_form.pass.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.name.value="";
            document.member_form.email1.value="";
            document.member_form.email2.value="";

            // 첫번째 입력 요소로 이동
            document.member_form.id.focus();
        }

        //아이디 중복 확인 버튼 클릭
        function checkId(){
            // 사용자가 입력한 id값 얻어오기
            var userid= document.member_form.id.value;

            // DB에서 같은 아이디가 있는지 확인하고 결과를 보여주는 새로운 윈도우 띄우기
            open("./check_id.php?id="+userid, "아이디체크", "width=300, height=100, left=200, top=100");
        }
    </script>

</head>
<body>
    <header>
        <!-- 공통모듈 사용 -->
        <?php include "../lib/header2.php" ?>
    </header>

    <section>
        <div id="main_content">
            <div id="join_box">
                <!-- DB의 member테이블에 저장하는 member_insert.php에 입력값들 전달하도록 -->
                <form action="./member_insert.php" method="post" name="member_form">
                    <h2>회원 가입</h2>

                    <!-- 각 줄마다 라벨, 인풋요소 영역으로 나누어 지므로 col1, col2 클래스지정으로 스타일링 -->
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2"><input type="text" name="id"></div>
                        <!-- id줄만 존재하는 칸 -->
                        <div class="col3">
                            <a href="#"><img src="../img/check_id.gif" onclick="checkId()"></a>
                        </div>
                    </div>
                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2"><input type="password" name="pass"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2"><input type="password" name="pass_confirm"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2"><input type="text" name="name"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1">@<input type="text" name="email2">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- input요소의 submit, reset으로 만들면 이미지로 못 만듬 -->
                    <!-- input요소의 타입 중 image 타입으로 하면 이미지 버튼이면서 submit 기능 -->
                    <!-- 값을 전송할 때 값이 비어있는지 검증하는 작업도 하고 싶어서.. -->
                    <!-- Javascript를 이용해서 submit()해보기 -->
                    <div class="bottom_line"></div>
                    <div class="buttons">
                        <img src="../img/button_save.gif" style="cursor:pointer" onclick="submitForm()">&nbsp;
                        <img src="../img/button_reset.gif" style="cursor:pointer" onclick="resetForm()">
                    </div>
                </form>
            </div>

        </div>
    </section>

  
    
</body>
</html>