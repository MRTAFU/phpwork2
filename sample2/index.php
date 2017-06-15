<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍ブックマーク</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    <form>
        <div class="navbar-header">
            <label>検索：<input type="text" id="search" placeholder="検索内容を入力してください"></label></div>
        </div>
    </form>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>書籍登録フォーム</legend>
        <label>書籍名：<input type="text" name="bname" placeholder="ここに書籍名を入力してください"></label><br>
        <label>評価点：
        <span class="star-rating">
            <input type="radio" name="rating" value="1"><i></i>
            <input type="radio" name="rating" value="2"><i></i>
            <input type="radio" name="rating" value="3"><i></i>
            <input type="radio" name="rating" value="4"><i></i>
            <input type="radio" name="rating" value="5"><i></i>
        </span>
    <strong class="choice">Choose a rating</strong><br>
        <label>書籍URL：<input type="text" name="burl"></label><br>
        <label><textArea name="bcomment" rows="4" cols="40" placeholder="ここにコメントを入力してください"></textArea></label><br>
        <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script>
$(':radio').change(
    function(){
        $('.choice').text( this.value + ' stars' );
})
</script>

</body>
</html>
