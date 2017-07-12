<body>

			<!-- Menu -->
<?php $this->load->view('menu/menu_user'); ?>
<div id="wrap">

	<div class="container">
		<?php echo validation_errors(); ?>
		<?php 
			$attrib = array('class' => 'form-signin');
			echo form_open('form', $attrib); 
		?>
        <h2 class="form-signin-heading">Add User</h2>
		
		<label for="fname" class="sr-only">First Name</label>
        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" value="<?php echo set_value('fname'); ?>">
		<?php echo form_error('fname','<span class="error">','</span>'); ?>
		
		<label for="lname" class="sr-only">Last Name</label>
        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" value="<?php echo set_value('lname'); ?>">
		<?php echo form_error('lname','<span class="error">','</span>'); ?>
		
        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" value="<?php echo set_value('email'); ?>">
		<?php echo form_error('email','<span class="error">','</span>'); ?>
		
        <label for="password" class="sr-only">Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
		<?php echo form_error('password','<span class="error">','</span>'); ?>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add User</button>
      </form>
    </div> 
</div>