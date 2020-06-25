# T2's OpenSourceProject

## Member
|이름|학번|contribution|
|---|-----|----------|
|Choi Su Yong|2019063363| File sharing
|Hwang Jiwon|2016007274| Sign-up / login function
|Lee Eui-hyung|2019092651| 
|Kim Minsu|2019055014|Chat service

## Docs + chat
Docs + chat은 기존 google docs가 제공하는 서비스에 채팅 기능까지 더해진 웹사이트입니다. 실시간으로 팀 구성원들과 의사소통하며 문서를 작성하고 수정해보세요!

###주요기능
- 회원가입, 로그인
- 공동 문서 작업(Google Docs)
- 사용자간 채팅


## 아이디어 선정

1. 웹? 어플?

   맨 처음 어플에 대한 아이디어 회의를 진행하던 도중 맞닥뜨린 문제는 '과연 여기서 나온 아이디어들을 우리가 어플로 구현할 수 있을까?'였습니다.
   팀원 모두 어플을 만드는 것은 이번이 처음이였기에 어플보다는 웹 사이트를 구현하는게 좀 더 낫지 않겠냐는 의견이 있었고 모두 이에 동의하여
   프로젝트의 방향은 웹 사이트 구현으로 가닥을 잡았습니다.
   
2. 무엇을?

   그 다음으로는 아이디어 회의를 진행하였습니다. 회의는 Slack을 통해 진행되었고 회의에서 나온 아이디어는 Notion이라는 노트앱에 정리하였습
   다. notion의 투표 기능을 활용하여 어떤 프로젝트를 선정할 것인지 투표한 결과 Docs + chat이 선정되었습니다.

## Docs + chat Design

   ### Sign-up / login
   
   #### Requirements
   - XAMPP for Windows Ver.7.4.7
      - Apache 2.4.43
      - MariaDB 10.4.13
      - PHP 7.4.7

   This project is developed by using WAMPP. We recommand executing our project using WAMPP.

   
   #### Sign-up process
   - Check for duplicate ID
   - Confirm password
   - insert into member table in hp_db
   
   #### login process
   - Check if ID and password are entered
   - Check if ID and password match the database
   - The header design changes when the user login successfully. (You can see that there is 'logout' instead of 'login' anymore.)

   ### 프론트엔드
   -index.html
   -about.html
   -Use a lot of CSS
   -Works of Kim Min-soo and Hwang Ji-won
   #### Requirements
   - The flask environment i set up
   
   ### 백엔드
   -index.py
   -flask_upload.py
   -Works of Kim Min-soo and Hwang Ji-won
   -Use a Mysql
   #### Requirements
   - The flask environment i set up
   ### 채팅
   
   #### Requirements
