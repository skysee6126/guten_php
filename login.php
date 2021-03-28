<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('views/header.inc.php'); ?>
    <body> 
    <div class="tittle">
        <h2>Login</h2>
        <p>会員専用ページにアクセスするためにはログインをしてください。</p>
    </div>
    <div class="login__page">
        <form action="loginProcess.php" method="post"> 
        <div class="form">
            <div class="form-email ">
                <label>Email：</label>
                <input name="email" type="text" placeholder="email">
            </div>
            <div class="form-password">
                <label>Password：</label>
                <input name="password" type="password" placeholder="password">
            </div>
        
            <button type="submit" class="submit">ログイン</button>
        </div>
        </form>
        <div class="signup">
        <p>まだ登録されてない方はこちらで<a class="signup__btn" href="#">会員登録</a>しませんか？</p>
        </div>
    <!-- modal -->
    <div class="signup__form">
    <form action="signupProcess.php" method="POST" id="signup-form">

    <div class="form">
            <div class="form-email ">
                <label>Email：</label>
                <input name="email" type="text" placeholder="メールアドレスを記入" required>
            </div>
            <div class="form-password">
                <label>Password：</label>
                <input name="password" type="text" placeholder="パスワードを記入" minlength='6' required>
            </div>
            <div class="form-cpassword">
                <label>Confirm Password：</label>
                <input name="passwordCheck" type="text" placeholder="パスワードを記入" minlength='6'  required>
            </div>
            <button type="submit" class="submit">会員登録</button>
        </div>
    </form>
    </div>
    <script>
        const signup__btn = document.querySelector('.signup__btn');
        const signup__form =  document.querySelector('.signup__form');

        signup__btn.addEventListener('click', () => {
            signup__form.classList.toggle('active');
            console.log("yey!");
        });

        const signupForm = document.querySelector("#signup-form");
        const signupButton = document.querySelector("#signup-button");
        const password = document.querySelector("#password");
        const passwordCheck = document.querySelector("#password-check");
        signupButton.addEventListener("click", function(e) {
            if(password.value&& password.value === passwordCheck.value){
                
            signupForm.submit();
            }else{
                alert("パスワードが一致しません。もう一度、確認してください。");
            }
        });
    </script>
    </div>
        <?php include('views/footer.inc.php'); ?>
    </body>
</html>

