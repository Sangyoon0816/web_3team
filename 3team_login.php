<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 페이지</title>
    <link rel="stylesheet" href="3team_login.css">
</head>

<body>
<form action="3team_login_save.php" method="post">
    <fieldset>
        <legend>로그인</legend>

        <!-- 위쪽 로그인 / 회원가입 버튼 -->
        <div class="top-buttons">
            <a href="3team_login.php" class="btn-primary">로그인</a>
            <a href="3team_login_process.php" class="btn-primary">회원가입</a>
        </div>

        <div style="text-align:left; margin-top:40px;">
            아이디 (학번 또는 사번) : <br>
            <input type="text"
                name="UID"
                placeholder="아이디를 입력해 주세요"
                required><br><br>

            비밀번호 : <br>
            <input type="password"
                name="UPW"
                placeholder="비밀번호를 입력해 주세요"
                required><br><br>

            <input type="checkbox" name="ID_SAVE" value="ID_SAVE" >
            아이디 저장<br>
        </div>

        <div class="login-submit">
            <button type="submit" class="btn-primary" style="padding:10px 170px;">
                로그인하기
            </button>
        </div>
        <br><hr>

        <p style="text-align:left;">아이디를 잊으셨나요?</p>

        <ul>
            <li>
                <a href="./3team_login_search.php">아이디 찾기</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="./3team_password_search.php">비밀번호 찾기</a>
            </li>
        </ul>

        <p style="text-align:center;">
            학생, 교직원 로그인 할 수 있습니다. <br>
            로그인 문의는 행정지원팀으로 문의 바랍니다.
        </p>

    </fieldset>
</form>
</body>
</html>
