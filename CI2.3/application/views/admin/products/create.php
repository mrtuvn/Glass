<h1> <?php echo $title; ?> </h1>
<?php
//var_dump($categories); 
/* foreach ($categories as $key => $row)
	echo $row['name'];
 */
//var_dump($data);
//var_dump($image);
echo form_open_multipart('admin/products/create');
echo " <p> <label for='parent' > Category </label> <br/> ";

echo form_dropdown('category_id',$categories) ." </p> ";
echo " <p> <label for='pname' > Name </label> <br/> ";
$data = array('name'=> 'name','id'=> 'pname','size'=> 25);
echo form_input($data) ." </p> ";

echo " <p> <label for='short' > Short Description </label> <br/> ";
$data = array('name'=> 'shortdesc','id'=> 'short','size'=> 40);
echo form_input($data) ." </p> ";

echo " <p> <label for='long' > Long Description </label> <br/> ";
$data = array('name'=> 'longdesc','id'=> 'long','rows'=> 5, 'cols'=> '40');
echo form_textarea($data) ." </p> ";


// upload image
echo " <p> <label for='uimage' > Upload Image </label> <br/> ";
$data = array('name'=> 'image','id'=> 'uimage');
echo " </p> ";
echo form_upload('image_img',$data);

// upload thumbnail


echo " <p> <label for='status' > Status </label> <br/> ";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ." </p> ";

echo " <p> <label for='group' > Grouping </label> <br/> ";
$data = array('name'=> 'grouping','id'=> 'group','size'=> 10);
echo form_input($data) ." </p> ";

echo " <p> <label for='price' > Price </label> <br/> ";
$data = array('name'=> 'price','id'=> 'price','size'=> 10);
echo form_input($data) ." </p> ";

echo " <p> <label for='featured' > Featured? </label> <br/> ";
$options = array('true' => 'true', 'false' => 'false');
echo form_dropdown('featured',$options) ." </p> ";
echo form_submit('submit','create product');
echo form_close();
?>