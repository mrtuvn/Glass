<h1> <?php echo $title;?> </h1> 

<?php
echo form_open('admin/users/edit');
echo " <p> <label for='uname' > Username </label> <br/> ";
$data = array('name'=> 'username','id'=> 'uname','size'=> 25, 
'value'=> $admin['username']);
echo form_input($data) ." </p> ";
echo " <p> <label for='email'> Email </label> <br/> ";
$data = array('name'=> 'email','id'=> 'email','size'=> 50, 'value'=> $admin['email']);
echo form_input($data) ." </p> ";
echo " <p> <label for='pw' > Password </label> <br/> ";
$data = array('name'=> 'password','id'=> 'pw','size'=> 25, 
'value'=> $admin['password']);
echo form_password($data) ." </p> ";
echo " <p> <label for='status' > Status </label> <br/> ";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options, $admin['status']) ." </p> ";
echo form_hidden('id',$admin['id']);
echo form_submit('submit','update admin');
echo form_close();
?> 