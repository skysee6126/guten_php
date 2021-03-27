const hamburger = document.querySelector('.nav_hamburger');
const menu =  document.querySelector('.nav_menu');
const margin =  document.querySelector('h2');


hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
    margin.classList.toggle('active');
});
      

let plans = ["家賃", "面積", "築年数", "駅からの距離","近隣施設","防音性", "湿気", "シャワーの水圧", "トイレの水のたまり方", "玄関ドアのサイズ", "靴箱の高さ", "コンセントの位置", "エアコンの型番と年式", "虫の死骸チェック", "空室期間", "(部屋の）回転率", "クレーム発生状況", "前の住人の退去理由・居住期間", "近隣住民の家族構成や生活時間"];
for( let plan in plans ){
    $('.plan').append(`<li><input type=checkbox name=check value="check" onclick="DisChecked(this)">${plans[plan]}</li>`)
}

function selectAll(selectAll)  {
    const checkboxes 
         = document.getElementsByName('check');
    
    checkboxes.forEach((checkbox) => {
      checkbox.checked = selectAll.checked;
    })
  }

  
  function DisChecked(){
    var checks = document.all.check4;
    var checksCount = 0;
    for (var i=0; i<checks.length; i++){
        if(checks[i].checked == false){
            document.all.checkall.checked = false;
        }else{
            checksCount += 1;
            if(checksCount == checks.length){
                document.all.checkall.checked = true;
            }
        }
    }
  }


let before = ["旧居の退去日の決定","物件や駐車場の手続き","引っ越し方法","引っ越し日程の検討","インターネットの移転","不用品の処分", "役所に届け出が必要な手続き", "住所変更が必要なものの手続き", "郵便物の転送手配", "食品の整理"];
for( let list in before ){
    $('.before').append(`<li><input type=checkbox name=check2 value="check" onclick="DisChecked2(this)">${before[list]}</li>`)
}


function selectAll2(selectAll)  {
    const checkboxes 
         = document.getElementsByName('check2');
    
    checkboxes.forEach((checkbox) => {
      checkbox.checked = selectAll.checked;
    })
  }
  

  function DisChecked2(){
    var checks = document.all.check4;
    var checksCount = 0;
    for (var i=0; i<checks.length; i++){
        if(checks[i].checked == false){
            document.all.check2all.checked = false;
            console.log("check out");
        }else{
            checksCount += 1;
            if(checksCount == checks.length){
                document.all.check2all.checked = true;
            }
        }
    }
  }


let before2 = ["水回りのコーティング","エアコン配管からのゴキブリ対策","マスキングテープで汚れ防止","キッチンの換気扇フィルター", "トイレの換気扇フィルター", "コンロの隙間埋め", "お風呂のカビ予防"];
for( let list in before2 ){
    $('.before2').append(`<li><input type=checkbox name=check3 value="check" onclick="DisChecked3(this)">${before2[list]}</li>`)
}

function selectAll3(selectAll3)  {
    const checkboxes 
         = document.getElementsByName('check3');
    
    checkboxes.forEach((checkbox) => {
      checkbox.checked = selectAll3.checked;
    })
  }

  function DisChecked3(){
    var checks = document.all.check4;
    var checksCount = 0;
    for (var i=0; i<checks.length; i++){
        if(checks[i].checked == false){
            document.all.check3all.checked = false;
        }else{
            checksCount += 1;
            if(checksCount == checks.length){
                document.all.check3all.checked = true;
            }
        }
    }
  }


let after = ["転居届/転入届", "マイナンバーの住所変更", "ゴミ出し場所や曜日チェック", "ペットの登録事項変更届", "免許証の住所変更手続き", "自動車の住所変更手続き", "会社の健康保険と厚生年金の変更手続き", "銀行口座の住所変更", "通販サイトの住所変更手続き"];
for( let list in after ){
  $('.after').append(`<li><input type=checkbox name="check4" value="check" onclick="DisChecked4(this)">${after[list]}</li>`)
}
function selectAll4(selectAll)  {
  const checkboxes 
      = document.getElementsByName('check4');
  checkboxes.forEach((checkbox) => {
  checkbox.checked = selectAll.checked;
  })
}
//ここから下が追記
// 一つでもチェックを外すと「全て選択」のチェック外れる
function DisChecked4(){
  // var checks = document.content.div.check4;
  var checks = document.all.check4;
  //checkの内容をconsoleで確認してみてください
  console.dir(checks);
  var checksCount = 0;
  for (var i=0; i<checks.length; i++){
      if(checks[i].checked == false){
          // document.form.all.checked = false;
          document.all.check4all.checked = false;
          console.log("check out");
      }else{
          checksCount += 1;
          if(checksCount == checks.length){
              // document.form.all.checked = true;
              document.all.check4all.checked = true;
          }
      }
  }
}
