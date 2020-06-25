# T2's OpenSourceProject

## Member
|Name|Student ID|Contribution|
|---|-----|----------|
|Choi Sooyong|2019063363| File sharing
|Hwang Jiwon|2016007274| Sign-up / login function
|Lee Euihyung|2019092651| File Upload logic
|Kim Minsu|2019055014|Chat service

## Docs + chat
Docs + chat is a website that adds a chat function to a file sharing service. Communicate with team members and share documents!

### Major Function
- Sign-up and Login
- File Sharing
- Chat with users


## Idea Selection

1. Web? App?

   The first problem we encountered while conducting an idea meeting was 'Can we implement the ideas as apps?'
   It was the first time that all members made an app. So I thought it would be better to implement a website than an application. All team members agreed, and the direction of the project was decided by the website implementation.

2. What?

  Next, an idea meeting was held. The meeting was conducted through Slack, and ideas from the meeting were summarized in a note app called Notion. Docs + chat was selected as a result of voting which project to select using slack's voting function.

 <img width="378" alt="img 755" src="https://user-images.githubusercontent.com/56688064/85732806-a2764b80-b736-11ea-9dca-f33b75bcc2a6.png">
<img width="377" alt="755 img" src="https://user-images.githubusercontent.com/56688064/85732814-a3a77880-b736-11ea-9a39-fcf54ee411a9.png">



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

   ####FLASK
    Coding convention
      - https://exploreflask.com/en/latest/conventions.html
   ### front-end
   -index.html
   
   -about.html
   
   -Use a lot of CSS
   
   -Works of Kim Min-soo and Hwang Ji-won
   
   #### Requirements
   
   - The flask environment i set up
   
   ### back-end
   - index.py
   
   - flask_upload.py
   
   - Works of Kim Min-soo and Hwang Ji-won
   
   - Use a Mysql
   
   #### Requirements
   - The flask environment i set up
   
   ### chat
   
   #### Requirements
   - Node.js for Windows Ver.14.4.0
   - socket.io 2.3.0
   - npm 6.14.5
   - express 4.17.1
   
   To implement chatting web site, you need to install this requirement
   
   #### chatting process
   - Asking you to type nickname which is displayed on chatting window
   - Enjoy chatting with your team!
