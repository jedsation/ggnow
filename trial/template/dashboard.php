<body>
  <div id="wrapper"> <!-- bodywrapper -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> <!-- header -->
      <div class="navbar-header"> <!-- hamburger icon -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Website</a>
      </div> <!-- hamburger icon -->
      <div class="collapse navbar-collapse navbar-ex1-collapse"> <!-- sidebar -->
        <ul id="active" class="nav navbar-nav side-nav">
          <li><a href="../php/home.php"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="../php/latest.php"><i class="fa fa-globe"></i> Latest</a></li>
          <li class="dropdown"> <!-- anime -->
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Anime</a>
            <ul class="dropdown-menu" role="menu">
						  <li><a href="../php/animelist.php"><i class="fa fa-pied-piper-alt"></i> Anime List</a></li>
						  <li><a href="../php/watchanime.php"><i class="fa fa-play-circle-o"></i> Watch Anime (Coming Soon)</a></li>
						  <li><a href="../php/manga.php"><i class="fa fa-book"></i> Manga (Coming Soon)</a></li>
              <li><a href="../php/fanart.php"><i class="fa fa-paint-brush"></i> Fan Art</a></li>
            </ul>
          </li> <!-- anime -->
          <li class="dropdown"> <!-- games -->
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-power-off"></i> Games</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../php/computergames.php"><i class="fa fa-keyboard-o"></i> Computer Games</a></li>
              <li><a href="../php/consolegames.php"><i class="fa fa-gamepad"></i> Console Games</a></li>
              <li><a href="../php/mobilegames.php"><i class="fa fa-mobile"></i> Mobile Games</a></li>
              <li><a href="../php/gameslist.php"><i class="fa fa-users"></i> Games list</a></li>
            </ul>
          </li> <!-- games -->
          <li class="dropdown"> <!-- meme -->
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-smile-o"></i> Meme</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../php/animememe.php"><i class="fa fa-fire"></i> Anime Meme</a></li>
              <li><a href="../php/gamesmeme.php"><i class="fa fa-snowflake-o"></i> Games Meme</a></li>
            </ul>
          </li> <!-- meme -->
          <li><a href="../php/freebies.php"><i class="fa fa-thumbs-up"></i> Freebies</a></li>
          <li class="dropdown"> <!-- tournament -->
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-keyboard-o"></i> Tournament</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="../php/online.php"><i class="fa fa-globe"></i> Online</a></li>
              <li><a href="../php/local.php"><i class="fa fa-trophy"></i> Local</a></li>
            </ul>
          </li> <!-- tournament -->
          <li><a href="../php/events.php"><i class="fa fa-calendar"></i> Events</a></li>
          <li><a href="../php/forum.php"><i class="fa fa-slideshare"></i> Forum</a></li>
          <li><a href="../php/suggestions.php"><i class="fa fa-comments-o"></i> Suggestions</a></li>
          <li><a href="../php/livestream.php"><i class="fa fa-video-camera"></i> Livestream (Coming soon)</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">
          <li> <!-- searchbar -->
          <form class="navbar-search">
            <input type="text" placeholder="Search" class="form-control">
          </form>
          </li> <!-- searchbar -->
          <li class="dropdown user-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../php/profile.php"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="../php/settings.php"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
          <li class="dropdown messages-dropdown"> <!-- Chat -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <b class="caret"></b></a>
            <ul class="dropdown-menu"> </ul>
          </li> <!-- Chat -->
        </ul>
      </div> <!-- sidebar -->
    </nav> <!-- header -->
