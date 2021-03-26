<?php session_start(); ?>
<!DOCTYPE html>
<html lang='ja'>
    <?php include('views/header.inc.php'); ?>
    <body>
    <div class="tittle">
        <h2>Menu Recommendation</h2>
        <p>今日何を食べるか悩んではいませんか？<br>
        そんなあなたに簡単なアドバイスを！</p>
    </div>
    <div class="content">
    <div class="serach">
    <form method="post" action="menu_result.php">
        <input type="text" name="keyword" placeholder="Please fill in the keyword">
        <input type="submit" value="検索">
    </form><br>
</div>
<div class="test">
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keyword" value="fish"></p>
    <button type="submit" class="submit"><img src="img/fish.jpg" alt="fish"></button>
    </form>
</div>
</div>

<!-- Rakuten Web Services Attribution Snippet FROM HERE -->
<a href="https://webservice.rakuten.co.jp/" target="_blank"><img src="https://webservice.rakuten.co.jp/img/credit/200709/credit_22121.gif" border="0" alt="楽天ウェブサービスセンター" title="楽天ウェブサービスセンター" width="221" height="21"/></a>
<!-- Rakuten Web Services Attribution Snippet TO HERE -->

    </div>
    <?php include('views/footer.inc.php'); ?>
</div>
    </body>
</html>
