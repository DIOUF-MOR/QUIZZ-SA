<?php
   if (isset($_SESSION[KEY_ERRORS])) {
       $errors=$_SESSION[KEY_ERRORS];
       unset ($_SESSION[KEY_ERRORS]);
   }
   ?>
    <form id="formConnection" action="<?= WEB_ROOT ?>" method="POST">

        <div class="login-form">
            <p>Login Form</p>
            <span>&times</span>
        </div>

    <input type="hidden" name="controller" value="securite">
    <input type="hidden" name="action" value="connexion">
      
        <div class="input-image">
          <input type="text" name="loginConnection" id="loginConnection" placeholder="Login" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-login.png"?>" alt="">
          <span id="loginError"><?= (isset($errors['loginConnection'])) ? $errors['loginConnection'] : ''?></span>
        </div>

      <div class="input-image">
          <input type="password" name="passwordConnection" id="passwordConnection" placeholder="Password" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-password.png"?>" alt="">
          <span id="passwordError"><?= (isset($errors['passwordConnection'])) ? $errors['passwordConnection'] : '' ?></span>
        </div>
        
        <div class="bas">
            <button>Connection</button>
            <a href="<?=WEB_ROOT."?controller=securite&action=inscription"?>">s'inscrir pour jouer?</a>
        </div> 

    </form>

    