<?php
    $dbcon = mysqli_connect('localhost', 'buphs', 'phs010331@', 'buphs');
    // mysqli_select_db($dbcon, 'web_3team');
    $query = "select * from basket";
    $result = mysqli_query($dbcon, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    <title>수강신청 바구니</title>
    <style>
        a:link,
        a:visited {
            background-color: #4f63ff;
            color: #fff;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
        }

        a:hover,
        a:active {
            background-color: #164795;
        }

        h1,
        h3 {
            background: linear-gradient(to right, #164795, white);
            color: white;
        }

        iframe {
            width: 100%;
        }

        table {
            width: 95%;
            border-collapse: collapse;
            text-align: center;
        }

        button {
            /* background-color:#4f63ff;
                color : white; */
        }
    </style>
</head>
<body>
    <h1>수강바구니</h1>
    <a href='./3team_webpage.php'><b>메인화면</b></a>&nbsp;&nbsp;
    <br>
    <br>
    <h1>수강과목목록</h1>
    <form action="" method='post' enctype="multipart/form-data" target="_parent">
        <table border='1'>
            <tr>
                <th>과목코드</th>
                <th>과목명</th>
                <th>학점</th>
                <th>담당교수</th>
                <th>요일/교시</th>
                <th>강의실</th>
                <th>담기</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['subjects_code']."</td>";
                echo "<td>".$row['subjects_name']."</td>";
                echo "<td>".$row['unit']."</td>";
                echo "<td>".$row['professor']."</td>";
                echo "<td>".$row['day_period']."</td>";
                echo "<td>".$row['classroom']."</td>";
                echo "<td><button>담기</button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </form>

    <form action="" method='post' enctype="multipart/form-data" target="_parent">        
        <h3>내 바구니</h3>

        <table border='1'>
            <tr>
                <th>과목코드</th>
                <th>과목명</th>
                <th>학점</th>
                <th>담당교수</th>
                <th>요일/교시</th>
                <th>강의실</th>
                <th>삭제</th>
            </tr>
            <tr>

            </tr>
        </table>
    </form>

</body>

</html>