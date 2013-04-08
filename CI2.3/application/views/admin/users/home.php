<h1> <?php echo $title;?> </h1> 
<p> <?php echo anchor("admin/users/create", "Create new user");?> 

<?php
if ($this->session->flashdata('message')){
echo " <div class='message' > ".$this->session->flashdata('message')." </div> ";
}
//var_dump($admins); exit;
//echo 'data' ; var_dump($data); 
//echo 'admin' ; var_dump($admins); exit;

if (count($admins)){
echo " <table border='1' cellspacing='0' cellpadding='3' width='400' > \n";
echo " <tr valign='top'> \n";
echo " <th> ID </th> \n <th> Username </th> <th> Status </th> <th> Actions </th> \n";
echo " </tr> \n";
foreach ($admins as $key => $list){
echo " <tr valign='top' > \n";
echo " <td> ".$list['id']." </td> \n";
echo " <td> ".$list['username']." </td> \n";
echo " <td align='center'> ".$list['status']." </td> \n";
echo " <td align='center'> ";
echo anchor('admin/users/edit/'.$list['id'],'edit');
echo " | ";
echo anchor('admin/users/delete/'.$list['id'],'delete');
echo " </td> \n";
echo " </tr> \n";
}
echo " </table> ";
echo anchor("admin/","Back to dashboard");
}
?> 