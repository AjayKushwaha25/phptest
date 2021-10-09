<?php
include_once('config/config.php');
?>
<?php

$sql = mysqli_query($con, "SELECT * FROM `contact_form` ORDER BY id ASC");
$enquiries = mysqli_fetch_all($sql, MYSQLI_ASSOC);
// echo $enquiries['id'];

/*$sql = $con->query("SELECT * FROM `contact_form` ORDER BY id DESC");

if ($sql->num_rows > 0) {
	$enquiries = $sql->fetch_assoc();
	echo $enquiries['id'];
} else {
  echo "0 results";
}*/

?>
<style type="text/css">
	table{
		width: 100%;
		text-align: center;
	}
	tr th{
		padding: 5px;
	}
	tr td{
		padding: 10px;
	}
</style>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Created At</th>
	</tr>
	<?php
	foreach ($enquiries as $enquiry) {
	?>
	<tr>
	<td><?php echo $enquiry['id'] ?></td>
	<td><?php echo $enquiry['name'] ?></td>
	<td><?php echo $enquiry['email'] ?></td>
	<td><?php echo $enquiry['subject'] ?></td>
	<td><?php echo $enquiry['message'] ?></td>
	<td><?php echo $enquiry['created_at'] ?></td>

	</tr>
	<?php 
	}
	?>
</table>