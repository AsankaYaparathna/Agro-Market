 <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Agro Market</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <div class="navbar-nav">
         
            <?php  
              echo "<a href='hp.php' class='nav-link'>Products</a>";
            ?>
          
          <label class="nav-link">
            <?php  
              echo $_SESSION['UName'];

            ?>
          </label>
      
      <?php
        echo "<a href='functions/lgout.php?RN={$_SESSION['user']}' class='nav-link'>log out</a>";
        //echo date("d-m-y");
        //echo date("l");
      ?>
         
        </div>
        
      </div>
    </div>
  </nav>