<body>

<div class="container setborder">
<!--Menu is placed here -->
<?php $this->load->view('menu/menu_admin'); ?>


<div class="row" id="about">
   <div class="col-md-4 col-md-offset-5">
   <h1>View Users</h1>
   </div>
   <div class="col-md-4">
		<a class ="butlink" href="<?php echo site_url('page/add_user_admin') ?>"><button type="button" class="btn btn-success">Add User</button></a><br><br>
   </div>
   <table class="table">
     <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
	   <th>Email Address</th>
	   <th>Status</th>
	   <th>Actions</th>
    </tr>
	
   <?php
    foreach($users as $data_item){
      ?><tr class="<?php
						if($data_item->status == 1){
							echo "success";
						} 
						elseif($data_item->status == 2){
							echo "warning";
						}
						elseif($data_item->status == 0){
							echo "danger";
						}
					?>
					">
        <td><?php echo $data_item->user_id; ?></td>
        <td><?php echo $data_item->fname; ?></td>
        <td><?php echo $data_item->lname; ?></td>
		<td><?php echo $data_item->email; ?></td>
		<td>
			<?php 
				if($data_item->status == 1){
					echo "Active";
				} 
				elseif($data_item->status == 2){
					echo "Administrator";
				}
				elseif($data_item->status == 0){
					echo "Deactivated";
				}
			?>
		</td>
		<td>
			<a href ="<?php echo site_url('db_process/get_user_row_admin/'.$data_item->user_id);?>"><button type="submit" class="btn btn-info btn-xs">Update</button></a>
			<a href ="<?php echo site_url('db_process/delete_user_admin/'.$data_item->user_id);?>"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>
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

