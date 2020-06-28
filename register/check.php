<?php
    session_start();
    echo $_SESSION['LearnSNS']['name'] . '<br>';
    echo $_SESSION['LearnSNS']['email'] . '<br>';
    echo $_SESSION['LearnSNS']['password'] . '<br>';
    echo $_SESSION['LearnSNS']['img_name'] . '<br>';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Learn SNS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
</head>
<body>
    <img src="../user_profile_img/<?php echo $_SESSION['LearnSNS']['img_name']; ?>" width="60">

    <script src="../assets/js/jquery-3.1.1.js"></script>
    <script src="../assets/js/jquery-migrate-1.4.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>