  <footer>
    <p>
      <?php
      if (empty($_SESSION['member'])){
        echo '<div class="connec">Vous n\'êtes pas connecté</div>';
      }
      else{
        echo '<div class="connec">Vous êtes connecté en tant que: </div>' . $_SESSION['member']['email'] ; /*echo "Vous êtes connecté en tant que" . $_SESSION['member']['username'];   */
      }
      ?>
    </p>
    <div class="coucou"> WIS | 2020 </div>
    <?php include_once('layouts/javascript.php');?>
  </footer>
</body>
</html>
