<nav class="navbar" style="background-color: #448afc">
  <div class="navbar-brand">
    <a class="navbar-item has-text-black-bis"href="../anzeige.php" style="background-color: rgb(238, 238, 238)">
        <img src="images\logo.gif" alt="Applied Experience" width="75" height="32">
        <h3><strong>Applied</strong> Experience</h3>
    </a>
    <div class="navbar-burger burger"  onclick="activeNavBar()" data-target="mainNavBar">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="mainNavBar" class="navbar-menu">
    <div class="navbar-start">
        <!-- <a class="navbar-item" href="index.php">
            Home
        </a> -->
        <a class="navbar-item has-text-black-ter" href="anzeige.php?page=funktionen">
            Mehr erfahren / Über uns
        </a>
        <a class="navbar-item has-text-black-ter" href="anzeige.php?page=deBlog">
            Kontakt und Blog
        </a>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button is-success" href="anzeige.php">
              <span>DE</span>
            </a>
          </p>
          <p class="control">
            <a class="button " href="index.php">
              <span>EN</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>