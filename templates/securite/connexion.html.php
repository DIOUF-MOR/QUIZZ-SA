
    <?php
        require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.html.php";
    ?>
   
    <form id="formConnection" action="<?= WEB_ROOT ?>" method="POST">

        <div class="login-form">
            <p>Login Form</p>
            <span><i class="fa fa-close" style="font-size:30px"></i></span>
        </div>

    <input type="hidden" name="controller" value="securite">
    <input type="hidden" name="action" value="connexion">
      
        <div class="input-image">
          <input type="text" name="loginConnection" id="loginConnection" placeholder="Login" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-login.png"?>" alt="">
          <span id="loginError"><?=(isset($errors)) ? $errors['loginConnection'] : '' ?></span>
        </div>

      <div class="input-image">
          <input type="password" name="password" id="passwordConnection" placeholder="Password" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-password.png"?>" alt="">
          <span id="passwordError"><?= (isset($errors)) ? $errors['password'] : '' ?></span>
        </div>
        
        <div class="bas">
            <button>Connection</button>
            <a href="">s'inscrir pour jouer?</a>
        </div> 

    </form>

    <?php
        require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.html.php";
    ?>