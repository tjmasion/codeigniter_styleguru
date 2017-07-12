<body>

			<!-- Menu -->
<?php $this->load->view('menu/menu_admin'); ?>
<div id="wrap">

	<div class="container">
		<?php
			foreach($users as $data_item){
		?>
		<?php echo validation_errors(); ?>
		<?php 
			$attrib = array('class' => 'form-signin');
			echo form_open('db_process/update_user/'.$data_item->user_id, $attrib); 
		?>
        <h2 class="form-signin-heading">Update User</h2>
		<label for="fname" class="sr-only">First Name</label>
        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="<?php echo $data_item->fname; ?>" value="<?php echo set_value('fname'); ?>">
		<?php echo form_error('fname','<span class="error">','</span>'); ?>
		
		<label for="lname" class="sr-only">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo $data_item->lname; ?>" value="<?php echo set_value('lname'); ?>">
		<?php echo form_error('lname','<span class="error">','</span>'); ?>
		
        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $data_item->email; ?>" value="<?php echo set_value('email'); ?>">
		<?php echo form_error('email','<span class="error">','</span>'); ?>
		
        <label for="password" class="sr-only">Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $data_item->password; ?>" value="<?php echo set_value('password'); ?>">
		<?php echo form_error('password','<span class="error">','</span>'); ?>
		
		<label for="status" class="sr-only">Status</label>
        <input type="text" name="status" id="status" class="form-control" placeholder="Status" value="<?php echo $data_item->status; ?>" value="<?php echo set_value('status'); ?>">
		<?php echo form_error('password','<span class="error">','</span>'); ?>
		
		 <?php   } ?>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Update User</button>
      </form>
    </div> 
</div>