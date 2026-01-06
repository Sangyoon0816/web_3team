<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $UID = $_POST['UID'];
    $UPW = $_POST['UPW'];
    $UPW2 = $_POST['UPW2'];
    $UNAME = $_POST['UNAME'];
    $EMAIL = $_POST['EMAIL'];
    $CALL = $_POST['CALL'];

    if ($UPW != $UPW2) {
        echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
        exit;
    }
    else{
        echo "<script>alert('회원가입 완료')</script>";
        echo "<script>location.replace('./3team_login.php')</script>";
    }          
    $hased_password = password_hash($UPW, PASSWORD_DEFAULT);
    //echo $hased_password; 

    // 데이터베이스 연결
    $dbcon = mysqli_connect('localhost', 'root', '');
    // 데이터베이스 선택 
    mysqli_select_db($dbcon, 'web_3team');
    // 쿼리 준비 -> 전송
    $query = "insert into student values('$UNAME', '$UID', '$EMAIL', '$CALL','$hased_password;')";
    //echo $query;
    $result = mysqli_query($dbcon, $query);

    // 데이터베이스 연결 해제
    mysqli_close($dbcon);
    ?>
    
</body>
</html>