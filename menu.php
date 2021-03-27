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
    
<div class="recommendation">
<h3>おすすめのテーマがこちら！</h3>
<div class="recipes">
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keyword" value="子供%E3%80%80ヘルシー%E3%80%80おやつ"></p>
    <button type="submit" class="submit"><img class="recipe__img" src="img/1.jpg" alt="snack"><p>誰でも好きだけど健康も考えたおやつ</p></button>
    </form>
</div>
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keyword" value="辛い%E3%80%80簡単%E3%80%80おつまみ"></p>
    <button type="submit" class="submit"><img class="recipe__img" src="img/2.jpg" alt="alcohol"><p>仕事で貯まったストレスを解消！</p></button>
    </form>    
</div>
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keyword" value="ダイエット%E3%80%80作り置き"></p>
    <button type="submit" class="submit"><img class="recipe__img" src="img/3.jpg" alt="health"><p>忙しいけど食生活も守りたい</p></button>
    </form>    
</div>
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keyword" value="パーティー%E3%80%80肉%E3%80%80贅沢"></p>
    <button type="submit" class="submit"><img class="recipe__img" src="img/4.jpg" alt="party"><p>今日はちょっと特別ななにかが食べたい</p></button>
    </form>    
</div>
</div>
</div>

    <div class="checkbox">
    <h3>気になるキーワードから検索！</h3>
<div class="serach">
    <form method="post" action="menu_result.php">
        <input type="text" name="keyword" placeholder="Please fill in the keyword">
        <input type="submit" value="検索">
    </form><br>
</div>

<!-- Rakuten Web Services Attribution Snippet FROM HERE -->
<a href="https://webservice.rakuten.co.jp/" target="_blank"><img src="https://webservice.rakuten.co.jp/img/credit/200709/credit_22121.gif" border="0" alt="楽天ウェブサービスセンター" title="楽天ウェブサービスセンター" width="221" height="21"/></a>
<!-- Rakuten Web Services Attribution Snippet TO HERE -->

    </div>
    <?php include('views/footer.inc.php'); ?>
</div>
    </body>
</html>
