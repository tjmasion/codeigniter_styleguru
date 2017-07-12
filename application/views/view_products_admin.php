<body>

<div class="container setborder">
<!--Menu is placed here -->
<?php $this->load->view('menu/menu_admin'); ?>


<div class="row" id="about">
   <div class="col-md-4 col-md-offset-5"><h1>View Products</h1></div>
   <div class="col-md-4">
		<a class ="butlink" href="<?php echo site_url('page/add_product_admin') ?>"><button type="button" class="btn btn-success">Add Product</button></a><br><br>
	</div>
   <table class="table">
     <tr>
       <th>Product ID</th>
       <th>Product Name</th>
       <th>Product Brand</th>
	   <th>Product Category</th>
	   <th>Product Stock</th>
	   <th>Actions</th>
    </tr>

   <?php
    foreach($products as $data_item){
      ?><tr class="<?php
						if($data_item->p_stock <= 20){
							echo "danger";
						}
						elseif($data_item->p_stock <= 30){
							echo "warning";
						}
						else{
							echo "success";
						}
					?>
					">
		 <td><?php echo $data_item->p_id; ?></td>
        <td><?php echo $data_item->p_name; ?></td>
        <td><?php echo $data_item->p_brand; ?></td>
        <td><?php echo $data_item->p_category; ?></td>
		<td><?php echo $data_item->p_stock; ?></td>
		<td>
			<a href ="<?php echo site_url('db_process/get_product_row_admin/'.$data_item->p_id);?>"><button type="submit" class="btn btn-info btn-xs">Update</button></a>
			<a href ="<?php echo site_url('db_process/delete_product_admin/'.$data_item->p_id);?>"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
		</td>
      </tr>
  <?php   } ?>


  </table>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br>
	
	


</div>


</div>

