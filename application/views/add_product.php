<body>

			<!-- Menu -->
<?php $this->load->view('menu/menu_user'); ?>
<div id="wrap">

	<div class="container">
		<?php echo validation_errors(); ?>
		<?php 
			$attrib = array('class' => 'form-signin');
			echo form_open('Db_process/add_product', $attrib); 
		?>
        <h2 class="form-signin-heading">Add Product</h2>
		
		<label for="pname" class="sr-only">Product Name</label>
        <input type="text" name="pname" id="pname" class="form-control" placeholder="Product Name" value="<?php echo set_value('pname'); ?>" required>
		
		<label for="pname" class="sr-only">Product Brand</label>
        <input type="text" name="pbrand" id="pbrand" class="form-control" placeholder="Product Brand" value="<?php echo set_value('pbrand'); ?>" required>
		
		<label for="pname" class="sr-only">Product Category</label>
        <input type="text" name="pcat" id="pcat" class="form-control" placeholder="Product Category" value="<?php echo set_value('pcat'); ?>" required>
		
		<label for="pname" class="sr-only">Product Stock</label>
        <input type="text" name="pstock" id="pstock" class="form-control" placeholder="Product Stock" value="<?php echo set_value('pstock'); ?>" required>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Product</button>
      </form>
    </div> 
</div>