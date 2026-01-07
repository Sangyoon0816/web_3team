<?php
    session_start();
    $UID = trim($_POST['UID']);
    $UPW = $_POST['UPW'];

    $dbcon = mysqli_connect('localhost', 'buphs', 'phs010331@', 'buphs');
    // print_r($dbcon);
    // mysqli_select_db($dbcon, 'web_3team');
    if (!$dbcon) {
        die("DB 연결 실패: " . mysqli_connect_error());
    }
    $query = "select * from student where student_id = '$UID'";
    //php에서 SQL문을 실행하는 코드
    $result = mysqli_query($dbcon, $query);
    //result에 들어있는 결과 중 행 꺼냄
    $row = mysqli_fetch_array($result);

    $hash = $row['student_pw'];
    $input = $UPW;
    
    //로그인폼에서 입력한 비밀번호, 해시 암호화 비교
    //함수안에서 자동으로 암호화방식 사용 비교
    if (!$row) {
        echo "<script>alert('해당 아이디가 DB에 없습니다'); history.back();</script>";
        exit;
    }
    
    $is_match = password_verify($UPW, $hash);  

    if($is_match){
        $_SESSION['s_name'] = $row['student_name'];
        // echo "<script>alert('로그인 성공')</script>";
        echo "<script>location.replace('./3team_webpage.php')</script>";
    }else{
        echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다.'); history.back();</script>";
    }

    mysqli_close($dbcon);
    ?>
