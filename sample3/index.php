<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <title>practice</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<header>
    <nav>
        <div class="navbar_header">
            <a href="select.php">投稿データを見る</a>
        </div>
    </nav>
</header>
    <div class="wrapAll">
        <form method="post" action="insert.php">
            <fieldset>
                <legend>個人情報</legend>
                    <label for="name">名前</label><input id="name" type="text" name="fullname" placeholder="名前">
                    <label for="email">メール</label><input id="email" type="text" name="email" placeholder="メールアドレスを入力してください">
            </fieldset>
            <fieldset>
                <legend>個人的意見</legend>
                    <label for="opinion">意見</label><textarea id="opinion" name="opinion" cols="30" rows="10" placeholder="ここに意見を入力してください"></textarea>
                    <label for="star0">星０</label><input id="star0" type="radio" name="star" value="5">
                    <label for="star1">星１</label><input id="star1" type="radio" name="star" value="0">
                    <label for="star2">星２</label><input id="star2" type="radio" name="star" value="1">
                    <label for="star3">星３</label><input id="star3" type="radio" name="star" value="2">
                    <label for="star4">星４</label><input id="star4" type="radio" name="star" value="3">
                    <label for="star5">星５</label><input id="star5" type="radio" name="star" value="4">
                    <div class=”star-ratings-sprite”><span style=”width:60%” class=”star-ratings-sprite-rating”></span></div>
            </fieldset>
            <button class="submit" type="submit" value="send">send</button>
        </form>
    </div>


<script>
  

</script>





<?php  ?>
</body>
</html>