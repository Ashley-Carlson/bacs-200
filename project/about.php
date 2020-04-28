<?php
  //include header template
  echo '<body>';
  include('layout/header.php');
?>
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">About</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">About us</h1>
				</header>
				<h3>Fennec Fox Technologies and Design</h3>
				<p><img src="https://images.pexels.com/photos/1545590/pexels-photo-1545590.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" class="img-rounded pull-right" width="300" >
        Fennec Fox Technologies is a small software company located out of Northern Colorado. We strive to provide meaningful and fun content that has a positive impact on
      the world. To learn more please visit <a href="https://fennecology.com/">our website</a> to learn more</p>
        <h3>Image Credits</h3>
				<p>This website uses images from <a href="https://www.pexels.com/license/">pexels</a> and from Paizo in accordance with the community use package.
        <h3>Paizo Legal Disclaimer</h3>
				<p>This website uses trademarks and/or copyrights owned by Paizo Inc., which are used under Paizo's Community Use Policy. We are expressly prohibited from charging you to use or access this content. This website is not published, endorsed, or specifically approved by Paizo Inc. For more information about Paizo's Community Use Policy, please visit paizo.com/communityuse. For more information about Paizo Inc. and Paizo products, please visit paizo.com.</p>
        <h3>Special Thanks</h3>
        <p> Special thanks to the <a href = "https://www.d20pfsrd.com/races/other-races/featured-races/arg-tengu/"> d20psfrd </a> who created the database of all spells. <br>
          Copywrite Credit to:
          <ul>
            <li>Pathfinder Roleplaying Game Advanced Race Guide © 2012, Paizo Publishing, LLC; Authors: Dennis Baker, Jesse Benner, Benjamin Bruck, Jason Bulmahn, Adam Daigle, Jim Groves, Tim Hitchcock, Hal MacLean, Jason Nelson, Stephen Radney-MacFarland, Owen K.C. Stephens, Todd Stewart, and Russ Taylor.</li>
            <li>Book of Heroic Races: Advanced Favored Class Options. © 2014, Jon Brazer Enterprises</li>
            <li>Pathfinder Player Companion: Blood of Angels © 2012, Paizo Publishing, LLC; Author: Amber E. Scott.</li>
            <li>Pathfinder Campaign Setting: Inner Sea Races © 2015, Paizo Inc.; Authors: Ross Byers, John Compton, Adam Daigle, Crystal Frasier, Matthew Goodall, Alex Greenshields, James Jacobs, Amanda Hamon Kunz, Ron Lundeen, Rob McCreary, Jessica Price, David N. Ross, Owen K.C. Stephens, James L. Sutter, Russ Taylor, and Jerome Virnich.</li>
            <li>Shadowsfall: Favored Class Options. © 2012, Jon Brazer Enterprises; Author Dale C. McCoy, Jr.</li>
            <li>Book of Heroic Races: Occult Intrigue in the Wilderness. © 2018, Jon Brazer Enterprises</li>
            <li>The Book of Many Things. © 2018, Samurai Sheepdog </li>
            <li>Pathfinder Player Companion: Blood of the Night, © Paizo Publishing, LLC; Author: Tork Shaw.</li>
      </article>
		</div>
	</div>	<!-- /container -->
  <?php
  // add footer
  include("layout/footer.php");
  ?>
