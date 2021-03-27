<?php 

// $keyword = $_REQUEST["keyword"];
// $keyword = implode(',',$keyword);
// echo $keyword;

$keywords = $_POST["keywords"];
$keyword = implode("%E3%80%80", $keywords);
// echo $keyword;

//Start to scrape from the URL
ini_set("allow_url_fopen", 1);
include "simple_html_dom.php";
$html = file_get_html ( 'https://recipe.rakuten.co.jp/search/'.$keyword.'/');

//Show the searched result
foreach($html->find('figure.recipe_ranking__img img') as $element) {
$url = $element->src;
$text = $element->alt;
echo 
'<div class="preview">
<p class="preview__text">'.$text.'</p>
<img class="preview__image" src="'.$url.'" width="250" height="250">
</div>
<div class="recipe"><form action="bookmark.php" method="post">
    <p><input type="hidden" name="text" value="'.$text.'"></p>
    <p><input type="hidden" name="recipe" value="'.$url.'"></p>
    <button type="submit" class="submit">Keep</button>
    </form></div>';
}

?>
