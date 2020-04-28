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
    <li class="active">Contact</li>
  </ol>

  <div class="row">

    <!-- Article main content -->
    <article class="col-sm-9 maincontent">
      <header class="page-header">
        <h1 class="page-title">Contact us</h1>
      </header>

      <p>
        We would love to hear your feedback! If you would like to work together or recomend additional content then fill out the form below with some info and I will get back to you as soon as I can. Please allow a couple days for me to respond.
      </p>
      <br>
        <form>
          <div class="row">
            <div class="col-sm-4">
              <input class="form-control" type="text" placeholder="Name">
            </div>
            <div class="col-sm-4">
              <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="col-sm-4">
              <input class="form-control" type="text" placeholder="Phone">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
            </div>
            <div class="col-sm-6 text-right">
              <input class="btn btn-action" type="submit" value="Send message">
            </div>
          </div>
        </form>

    </article>
    <!-- /Article -->

    <!-- Sidebar -->
    <aside class="col-sm-3 sidebar sidebar-right">

      <div class="widget">
        <h4>Email</h4>
        <address>
          carl7268@bears.unco.edu
        </address>
        <h4>Discord</h4>
        <address>
          bethemelly#1350
        </address>
      </div>

    </aside>
    <!-- /Sidebar -->

  </div>
</div>	<!-- /container -->

<section class="container-full top-space">
  <div id="map"></div>
</section>

<?php
// add footer
include("layout/footer.php");
?>
