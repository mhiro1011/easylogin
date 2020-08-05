<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        <div class="main">
            <h2>会員登録　確認</h2>
            <div class="midashi">
            <p>こちらの内容で登録してもよろしいでしょうか</p>
            </div>
            <div class="name">
            <p>氏名:<?php echo $_POST['name']; ?></p>
            </div>
            <div class="mail">
            <p>メール:<?php echo $_POST['mail']; ?></p>
            </div>
            <div class="pass">
            <p>パスワード:<?php echo $_POST['password']; ?></p>
            </div>
            <div class="pic">
            <p>プロフィール写真:<?php echo $original_pic_name; ?></p>
            </div>
            <div class="com">
            <p>コメント:<?php echo $_POST['comments']; ?></p>
            </div>
            <div class="button">
            <form action="register.php">
                <input type="submit" class="button1" value="戻って編集する" />
            </form>
            <form action="register_insert.php" method="post">
                <input type="submit" class="button2" value="登録をする"/>
                <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
            </form>
            </div>
        </div>
    </body>
</html>