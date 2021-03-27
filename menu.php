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
    
<div class="test">
<h3>おすすめのテーマがこちら！</h3>
<div class="recipe"><form action="menu_result.php" method="post">
    <p><input type="hidden" name="keywords[]" value="卵%E3%80%80肉"></p>
    <button type="submit" class="submit"><img src="img/fish.jpg" alt="fish"><p>おひとり様の贅沢海産系</p></button>
    </form>
</div>
<p><input type="hidden" name="keywords[]" value="肉"></p>
    <button type="submit" class="submit"><img src="img/meat.jpg" alt="meat"><p>ランキングから</p></button>
    
</div>

    <div class="checkbox">
    <h3>気になるキーワードから検索！</h3>
    <form method="post" action='test2.php'>
    <div id="option"></div>
    <script>

    const options = 
        ["一人", "カップル", "家族", "健康", "ヘルシー", "ダイエット", "簡単", "丁寧", "作り置き", "ガッツリ", "さっぱり", "辛い", "肉", "野菜", "魚", "おつまみ", "デザート", "おやつ"];


    let theseCheckBoxes =
    options.map(function(element) {   // <-- map instead of forEach
        let formName = element;
        formName = formName.replace(/[^A-Za-z0-9]/g, '_').toLowerCase();

        return `
    <div><input type='checkbox' name='keywords[]' value='${formName}' />
    <label for="${element}">${element}</label>
    </div>
    `
    });
    ;

    document.querySelector('#option').innerHTML = theseCheckBoxes.join('\n');
    </script>
    <input type='submit'>
    </form>
</div>

<div class="serach">
    <form method="post" action="menu_result.php">
        <input type="text" name="keywords[]" placeholder="Please fill in the keyword">
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
