<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<?php 

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=php_lesson1; host=localhost;", "root", "");
$stmt = $pdo->query("select * from 4each_keijiban");

// foreach ($stmt as $row) {
//   echo $row['handlename'];
//   echo $row['title'];
//   echo $row['comments'];
// }

?>

  <header>

            <div class="header-logo">
                
                <img src="4eachblog_logo.jpg">
                
            </div>
            
            <div class="header-list">
                
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            
            </div>

  </header>

  <main>

    <div class="left-wrapper">
      
      <h2>プログラミングに役立つ掲示板</h2>

      <form method="post" action="insert.php">
        
      <h3>入力フォーム</h3>
        
        <p>ハンドルネーム</p>
        <input type="text" name="handlename">

        <p>タイトル</p>
        <input type="text" name="title">

        <p>コメント</p>
        <textarea name="comments" rows="6" cols="35"></textarea>

        <input type="submit" value="投稿する">

      </form>

      <?php foreach ($stmt as $row): ?>
        <div class="kiji">
          <h3><?php echo $row['title'] ?></h3>
          <div class="contents">
            <?php echo $row['comments'] ?>
            <div class='handlename'>posted by<?php echo $row['handlename'] ?></div>
          </div>
        </div>
      <?php endforeach ?>
        
        
      
      


    </div>
    
    <div class="right-wrapper">

      <h3>人気の記事</h3>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>今人気のエディタ TOP5</li>
          <li>HTMLの基礎</li>
        </ul>
      <h3>オススメリンク</h3>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Bracketsのダウンロード</li>  
        </ul>
      <h3>カテゴリ</h3>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>

    </div>

  </main>

  <footer>

    <p>copyrightⓒinternouse | 4each blog the which provides A to Z about programming.</p>

  </footer>


</body>

</html>