<body>

			<!-- Menu -->
<?php $this->load->view('menu/menu_user'); ?>
<div id="wrap">

	<div class="container">
		<?php
			foreach($products as $data_item){
		?>
		<?php echo validation_errors(); ?>
		<?php 
			$attrib = array('class' => 'form-signin');
			echo form_open('db_process/update_product/'.$data_item->p_id, $attrib); 
		?>
        <h2 class="form-signin-heading">Update Product</h2>
		<label for="fname" class="sr-only">Product Name</label>
        <input type="text" name="p_name" id="pname" class="form-control" placeholder="Product Name" value="<?php echo $data_item->p_name; ?>" value="<?php echo set_value('p_name'); ?>">
		
		<label for="lname" class="sr-only">Product Brand</label>
        <input type="text" name="p_brand" id="pbrand" class="form-control" placeholder="Product Brand" value="<?php echo $data_item->p_brand; ?>" value="<?php echo set_value('p_brand'); ?>">
		
        <label for="email" class="sr-only">Product Category</label>
        <input type="text" name="p_category" id="pcat" class="form-control" placeholder="Product Category" value="<?php echo $data_item->p_category; ?>" value="<?php echo set_value('p_category'); ?>">
		
        <label for="password" class="sr-only">Product Stock</label>
        <input type="text" name="p_stock" id="pstock" class="form-control" placeholder="Product Stock" value="<?php echo $data_item->p_stock; ?>" value="<?php echo set_value('p_stock'); ?>">
		
		
		 <?php   } ?>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Update Product</button>
      </form>
    </div> 
</div>