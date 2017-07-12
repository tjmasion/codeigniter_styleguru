<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li><a class="navbar-brand" href="<?php echo site_url('page/index_user') ?>">StyleGuru</a></li>
			<li><a href="<?php echo site_url('page/index_admin') ?>">Home</a></li>
			<li><a href="<?php echo site_url('page/products_admin') ?>">Products</a></li>
			<li><a href="<?php echo site_url('page/about_admin') ?>">About</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('db_process/viewproducts_admin') ?>">View Products</a></li>
				<li><a href="<?php echo site_url('db_process/viewusers_admin') ?>">View Users</a></li>
				<li><a href="<?php echo site_url('page/logout') ?>">Logout</a></li>
		</ul>
	</div>
</nav>