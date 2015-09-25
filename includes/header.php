</head>

<body>

<header>

<!--<div id="banner">-->

<div id="logo">
	<img src="images/DD_main_logo_sm.png" alt="Logo">
</div><!--end logo-->

<nav>
<ul>
<li class="first<?php if ($page == 'index.php') { print '-on'; } ?>"><a href="index.php">HOME</a></li>
<li class="nav1<?php if ($page == 'band.php') { print '-on'; } ?>"><a href="band.php">BAND</a></li>
<li class="nav2<?php if ($page == 'gallery.php') { print '-on'; } ?>"><a href="gallery.php">GALLERY</a></li>
<li class="nav1<?php if ($page == 'music.php') { print '-on'; } ?>"><a href="music.php">MUSIC</a></li>
<li class="nav2<?php if ($page == 'contact.php') { print '-on'; } ?>"><a href="contact.php">CONTACT</a></li>
<!--<li class="nav1"><a href="index.php">HOME</a><li>
<li class="nav1"><a href="band.php">BAND</a><li>
<li class="nav2"><a href="gallery.php">GALLERY</a><li>
<li class="nav1"><a href="music.php">MUSIC</a><li>
<li class="nav2"><a href="contact.php">CONTACT</a><li>-->
</ul>
</nav>

<!--start mobile navigation-->

<button class="nav-button">Toggle Navigation</button>


		<ul class="primary-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="band.php">Band</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="music.php">Music</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

<!--end mobile navigation-->


</header>