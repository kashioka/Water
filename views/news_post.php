<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Watermap Post</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-script-type" content="text/javascript">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/post.css">
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<form action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST" id="post" onsubmit="return confirm('送信してもいいですか？');">
    <br>
    <h2>ニュース</h2>
    <div class="box">
        <span class="memo">タイトル</span><br>
        <input type="text" id="title" name="title" value="" style="width: 80%;">
    </div>
    <div class="box">
        <span class="memo">URL</span><br>
        <input type="text" id="url" name="url" value="" style="width: 80%;">
    </div>
    <div class="box">
        <input type="submit" name="submit" value="投稿">
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</body>

</html>