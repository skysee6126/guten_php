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


