<?php session_start();?>
<html>
<head>
<title>セッション管理</title>
</head>
<body>
<h2>セッション管理のページ</h2>
<hr/>
<?php
if(!isset($_SESSION["count"])){
                $_SESSION["count"] =1;
        print"はじめての訪問ですね<br/>\n";
}
else{
        $_SESSION["count"] ++;
        print"{$_SESSION["count"]}回目のお越しですね～<br/>\n";
}
?>
</body>
</html>
