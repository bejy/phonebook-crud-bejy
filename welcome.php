<?php 
include('server1.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM contact WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$phonenum = $n['phonenum'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="container_demo" >
	<div id="wrapper">
        <div id="login" class="animate form">
		<form method="post" action="server1.php" >
               <center><h1>Phone<span>book</span></h1> </center>
	<?php if (isset($_SESSION['message'])): ?>
  	
		<div class="msg">
		
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM contact"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['phonenum']; ?></td>
			<td>
				<a href="welcome.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server1.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>

	</table>
 
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		 <p>
		<label data-icon="u" >Name </label>
		<input type="text" required="required" name="name" value="<?php echo $name; ?>">
		</p>
	<p>
		<label data-icon="u" >Address</label>
		<input type="text" required="required" name="address" value="<?php echo $address; ?>">
	</p>
	 <p>
		<label data-icon="u" >Phone Number</label>
		<input type="text" required="required" name="phonenum" value="<?php echo $phonenum; ?>">
	</p>
	<div class="input-group">

		<?php if ($update == true): ?>
		 <div class="login button"> 
			<input type="submit" name= "update" value="Update" /> 
		</div>
		<?php else: ?>
		 <div class="login button"> 
			<input type="submit" name= "save" value="Add" /> 
		</div>
		<?php endif ?>
			<p class="change_link">
				<a href="index.php">Logout</a>
			</p>
	</div>

</form>



</body>
</html>
