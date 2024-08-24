<?php

echo'

<head>
<style>
.nav-button {
  --bg: var(--bg);
  --hover-bg: cyan;
  --hover-text: #000;
  color: 000;
  cursor: pointer;
  border: 1px solid var(--bg);
  border-radius: 4px;
  padding: 0.8em 2em;
  background: var(--bg);
  transition: 0.2s;
}

.nav-button:hover {
  color: var(--hover-text);
  transform: translate(-0.25rem, -0.25rem);
  background: var(--hover-bg);
  box-shadow: 0.25rem 0.25rem;
}

.nav-button:active {
  transform: translate(0);
  box-shadow: none;
}
</style>
</head>


<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.php">Islam<span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
          <li class="nav-button"><a href="index.php">About me</a></li>
					<li class="nav-button"><a href="photography.php">Photography</a></li>
					<li class="nav-button"><a href="travel.php">Travel</a></li>
					<li class="nav-button"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
</aside>
</div>';		

?>
