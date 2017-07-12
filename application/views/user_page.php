<body>

<div class="container setborder">
<!--Menu is placed here -->
<?php $this->load->view('menu/menu_user'); ?>

</div>
<hr>
<div class="container">
	<div class="row">
  		<div class="col-sm-10"><h1>Profile</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-right"><span class="pull-left"><strong>First Name</strong></span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Last Name</strong></span> Yesterday</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span> Joseph Doe</li>
            
          </ul> 
               
         
			
        </div><!--/col-3-->
    	<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">View Products</a></li>
            <li><a href="#messages" data-toggle="tab">View Users</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Product Brand</th>
                      <th>Product Category</th>
                      <th>In stock</th>
					  <th>Options</th>
                    </tr>
                  </thead>
                  <?php
						foreach($products as $data_item){
						?>	<tr>
							<td><?php echo $data_item->p_id; ?></td>
							<td><?php echo $data_item->p_name; ?></td>
							<td><?php echo $data_item->p_brand; ?></td>
							<td><?php echo $data_item->p_category; ?></td>
							<td><?php echo $data_item->p_stock; ?></td>
							<td></td>
							</tr>
						<?php   } ?>
                </table>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                  	<ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              <hr>
            
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <ul class="list-group">
                  <li class="list-group-item text-muted">Inbox</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                  <br><br><br><br><br><br><br>
                </ul> 
             </div><!--/tab-pane-->
			 
             
			  
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


</div>

<br><br><br><br><br><br><br><br>
</div>

