<!DOCTYPE html>
<html lang="en">
<?php include('header.inc.php'); ?>
<body>
<div class="tittle-box">
  <video muted autoplay loop>
    <source src="background.mp4" type="video/mp4">
    <strong>Your browser does not support the video tag.</strong>
  </video>
  <div class="tittle-text">
    <p>Guten Appetit!</p>
  </div>
</div>
<div class="content">
        <div class="explanation">
            <h2>今日何を食べるか。既にお決まりですか？</h2>
            <p>今日何を食べようか悩んだことのない人は誰もいないでしょう。<br>
            日々選択の幅は広がり、私たちの悩みもどんどん深くなっています。<br>
            最近、こういう経験ありますよね？
            </p>
        </div>
        <div class="cases">
            <div class="case">
                <img class="case__img" src= "img/man.jpg" alt="man">
                <p>　コロナで在宅勤務が始まってから家にいる時間が増えました。
                普段は会社で適当に済ませてたが、家にいてからは何を食べるかを意識することになりました。
                だけど、毎回何を食べるか悩むのはもううんざりです。
                誰かが決めてくれれば良いなとも思います。

                </p>
            </div>
            <div class="case second">
                <p>　今日も残業で疲れてしまいました。
                お腹はすいたが、何を食べるか悩む力さえありません。
                毎日同じレパートリーで食事をするのもあんまりです。
                パッと誰かが決めてくれれば楽でしょうね。
                </p>
                <img class="case__img" src= "img/woman.jpg" alt="woman">
            </div>
        </div>
        <div class="bottom">
        <div class="advantage">
            <p>クリック1回であなたが今日何を食べるかをおススメします！</p>
            <p>もし会員になったらお持ちの食料品を一目で管理することもできます。<br>
            これは今後追加されるカスタマイズのオススメサービスにも活用される予定です。
            </p>
        </div>
        <div class="suggestion">
            <h3>今すぐ確認して見ませんか？</h3>
            <form action="menu.php">
            <input type="submit" value="Start now!" />
            </form>
        </div>
        </div>
    </div>
    <?php include('footer.inc.php'); ?>
</body>
</html>