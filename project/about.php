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
				<p><img src="https://images.pexels.com/photos/3359734/pexels-photo-3359734.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-rounded pull-right" width="300" >
        Fennec Fox Technologies is a small software company located out of Northern Colorado. We strive to provide meaningful and fun content that has a positive impact on
      the world. To learn more please visit <a href="https://fennecology.com/">our website</a> to learn more</p>
        <h3>Image Credits</h3>
				<p>This website uses images from <a href="https://www.pexels.com/license/">pexels</a> and from Paizo in accordance with the community use package.
        <h3>Paizo Legal Disclaimer</h3>
				<p>This website uses trademarks and/or copyrights owned by Paizo Inc., which are used under Paizo's Community Use Policy. We are expressly prohibited from charging you to use or access this content. This website is not published, endorsed, or specifically approved by Paizo Inc. For more information about Paizo's Community Use Policy, please visit paizo.com/communityuse. For more information about Paizo Inc. and Paizo products, please visit paizo.com.</p>
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Vacancies</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="">Lorem ipsum dolor</a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
						<li><a href="">Totam, libero, quis</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
						<li><a href="">Enim, sequi dignissimos</a><br><span class="small text-muted">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
						<li><a href="">Suscipit, consequatur, aut</a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
						<li><a href="">Nam, illo, veritatis</a><br><span class="small text-muted">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
  <?php
  // add footer
  include("layout/footer.php");
  ?>
