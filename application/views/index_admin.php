<body>

			<!-- Menu -->
	<?php $this->load->view('menu/menu_admin'); ?>	
	<div id="wrap">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <?php echo img('resources/img/carousel/01.jpg'); ?>
        <div class="carousel-caption">
          <h3>Tops</h3>
          <p>T-Shirts, Blouses and shirts from exclusive brands</p>
        </div>      
      </div>

      <div class="item">
        <?php echo img('resources/img/carousel/02.jpg'); ?>
        <div class="carousel-caption">
          <h3>Bottoms</h3>
          <p>Pants, Shorts and Jeans from exclusive brands</p>
        </div>      
      </div>
	
	 <div class="item">
        <?php echo img('resources/img/carousel/03.jpg'); ?>
        <div class="carousel-caption">
          <h3>Shoes</h3>
          <p>Sneakers, Boots and Shoes from exclusive brands</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>New Arrivals</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo base_url('resources/img/new/01.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
	  <br><br>
      <p> Adidas Yeezy Boost 350</p>
    </div>
    <div class="col-sm-4"> 
      <img src="<?php echo base_url('resources/img/new/02.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
	  <br>
      <p>Uniqlo Flannel Shirts</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="<?php echo base_url('resources/img/new/03.jpg'); ?>" class="img-responsive" style="width:100%" alt="Image">
      <p>Adidas Originals x Raf Simons </p>    
    </div>
  </div>
</div><br><br><br><br><br><br><br>

</div>	
