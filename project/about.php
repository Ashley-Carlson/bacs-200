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
			</article>

		</div>
	</div>	<!-- /container -->
  <?php
  // add footer
  include("layout/footer.php");
  ?>
