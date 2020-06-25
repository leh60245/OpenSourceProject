<?php
$conn= mysqli_connect('localhost','cw','1234');
$ndb = "CREATE DATABASE hp_db";
mysqli_query($conn, $ndb);
  // 데이터베이스 접속도 공통 모듈에 작성해서 사용
  // 한글깨짐 방지 쿼리 실행
  mysqli_query($conn,"set names utf8");


?>