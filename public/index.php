<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>タイトル</title>
  </head>
  <body>
    <form action="./" method="post">
        <select name="item">
            <option value="Laravel">Laravel</option>
            <option value="CakePHP">CakePHP</option>
            <option value="Symfony">Symfony</option>
        </select>
        <input type="submit" value="送信する">
    </form>
  </body>
  <?php
    if(isset($_POST['item'])){
        $post=htmlspecialchars($_POST['item'], ENT_QUOTES, "UTF-8");;
        echo '送信された値は'.$post;
    }
  ?>
</html>