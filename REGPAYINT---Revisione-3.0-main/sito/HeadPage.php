<?php
   session_start();
?>
   
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"><li><a href="HomePage.php"><img class="nav-icon" src="img/home.png" width="30" height="auto"></a></li></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <img src="img/logoBianco.png" width="80" height="auto">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="HomePage.php"><img class="nav-icon" src="img/home.png" width="30" height="auto"></a></li>
          <li><a href="CreazionePagamenti.php"><img class="nav-icon" src="img/payments.png" width="30" height="auto"></h2></a></li>
          <li><a href="#"><img class="nav-icon" src="img/Groups.png" width="30" height="auto"></h2></a></li>
          <li><a href="#"><img class="nav-icon" src="img/assistenza.png" width="30" height="auto"></a></h2></li>
          <li><a href="Admin.php"><img src="img/adminPanel.png" width="30" height="auto"></a></h2></li>
        </ul>
      

        <?php
      if (isset($_SESSION['email']) && isset($_SESSION['nome']) && isset($_SESSION['idIscrizione'])) {
        echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="InfoUtente.php"><img class="nav-icon" src="img/user.png" width="30" height="auto">  "<b>" . $_SESSION["nome"] . "</b><li>
        </ul>';
      } else {
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="login_email.php"><span class="glyphicon glyphicon-log-in"></span> <b>Login<b></a></li>
              </ul>';

      }
      ?>
        
      </div>
</div>
</nav>
<!--
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       Link aggiuntivi ma al momento non mi servono
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <hr>
    </div>
-->
    </div>

    <style>
    .nav-icon {
      filter: brightness(100%); /* Initial brightness */
      transition: filter 0.2s ease; /* Smooth transition */
    }

    .nav-icon:hover {
      filter: brightness(300%); /* Brightness increase on hover */
    }

    
</style>
    