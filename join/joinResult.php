<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    $youId = mysqli_real_escape_string($connect, $_POST['youId']);
    $youPass = mysqli_real_escape_string($connect, $_POST['youPass']);
    $youName = mysqli_real_escape_string($connect, $_POST['youName']);
    $youAddress1 = mysqli_real_escape_string($connect, $_POST['youAddress1']);
    $youAddress2 = mysqli_real_escape_string($connect, $_POST['youAddress2']);
    $youAddress3 = mysqli_real_escape_string($connect, $_POST['youAddress3']);
    $youEmail = mysqli_real_escape_string($connect, $_POST['youEmail']);
    $youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);
    $regTime = time();

    $sql = "INSERT INTO myuduck(youId, youPass, youName, youAddress, youEmail, youPhone, regTime) VALUES('$youId', '$youPass', '$youName', '$youAddress1 $youAddress2 $youAddress3', '$youEmail','$youPhone','$regTime')";

    $connect -> query($sql);

    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php"?>
    <!-- //header -->


    <main class="bg">
        <div class="joinResultWrap container2">
            <div class="message1">회원 탈퇴가 완료되었습니다!</div>
            <div class="img blue"></div>
            <div class="message2">다시 만나는 날까지 안녕..</div>
            <div class="movehome">
                <a href="../main/main.php">메인페이지로가기</a>
            </div>
        </div>
    </main>
    <!-- //main-->
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>
        
    </script>
</body>
</html>