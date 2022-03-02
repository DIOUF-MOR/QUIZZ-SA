
    <?php
        require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."header.html.php";
    ?>
   
    <form action="<?= WEB_ROOT."public/index.php" ?>" method="POST">
    <div class="login-form">
        <p>Login Form</p>
        <span>x</span>
    </div>
    <input type="hidden" name="controller" value="securite">
    <input type="hidden" name="action" value="connexion">
      <div class="input-image">
          <input type="text" name="login" id="login" placeholder="Login" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-login.png"?>" alt="">
        </div>
      <div class="input-image">
          <input type="text" name="password" id="password" placeholder="Password" class="inputCss">
          <img class="imgSpan" src="<?=WEB_ROOT."img".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-password.png"?>" alt="">
        </div>
     <div class="bas">
         <button>Connection</button>
         <div>s'inscrir pour jouer?</div>
    </div> 
    </form>
    <?php
        require_once PATH_VIEWS.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.html.php";
    ?>