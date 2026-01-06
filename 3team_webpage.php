<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- sttle.css랑 연결되어 있음 -->
    <link rel="stylesheet" href="3team_webpage.css" />
    <link rel="stylesheet" href="style.css" />
    <title>홈페이지</title>

</head>

<body>
    <fieldset>
        <legend>로그인</legend>
    </fieldset>
    <div class="background-blur">
        <span style="color: rgb(0, 0, 0); font-size: 20; font-weight: bold;">백석대학교<br><br>
            The truth will set you free<br><br>
            기독교 대학의 글로벌 리더

            <div class="top-buttons">
                <?php
                if(isset($_SESSION['s_name'])){
                    echo $_SESSION['s_name']."님 환영합니다.";
                    echo "<a href='logout.php' class='btn-primary'>로그아웃</a>";
                }else{
                    echo "<a href='3team_login.php' class='btn-primary'>로그인</a>
                    <a href='3team_login_process.php' class='btn-primary'>회원가입</a><br><br>";
                }
                ?>

            </div>

            <body>

                <div class="card-wrap">
                    <div class="card">
                        <div class="card-icon">📘</div>
                        <div class="card-title">학사정보</div>
                        <div class="card-desc">수강신청, 성적조회</div>
                        <a href=""></a>
                    </div>

                    <div class="card">
                        <div class="card-icon" style="background:#22c55e;">👥</div>
                        <div class="card-title">학생지원</div>
                        <div class="card-desc">장바구니, 상담센터</div>
                    </div>

                    <div class="card">
                        <div class="card-icon" style="background:#a855f7;">🎓</div>
                        <div class="card-title">취업·진로</div>
                        <div class="card-desc">채용정보, 진로상담</div>
                    </div>
                    <div class="card">
                        <div class="card-icon" style="background:#f97316;">📅</div>
                        <div class="card-title">학사일정</div>
                        <div class="card-desc">주요 일정 안내</div>
                    </div>
                </div>

            </body>
        </span>
    </div>




</body>

</html>