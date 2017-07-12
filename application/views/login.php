<body>

			<!-- Menu -->
<?php $this->load->view('menu/menu'); ?>
<div id="wrap">

	<div class="container">

      <?php 
			$attrib = array('class' => 'form-signin');
			echo form_open('Db_process/userlogin', $attrib); 
		?>
        <h2 class="form-signin-heading">Please sign in</h2>
		<?php 
		if( isset($_SESSION['error_message'])){
			echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error_message'].'</div>';
		}
		?>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        <div>
          
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
</div>
