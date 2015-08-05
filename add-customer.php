<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$contact = $_POST['contact'];
	$job = $_POST['job'];
	$company = $_POST['company'];
	
	if($crud->create($name,$website,$email,$contact,$job,$company))
	{
		header("Location: add-customer.php?inserted");
	}
	else
	{
		header("Location: add-customer.php?failure");
	}
}
?>
<?php include_once 'layout/header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container-fluid">
	<div class="alert alert-info">
    Record inserted successfully. <a href="index.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container-fluid">
	<div class="alert alert-danger" role="alert">Error</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container-fluid">

 	
	<form method='post'>
 
        <div class="form-group">
            <label for="name">Name</label>
			<input id="name" name="name" class="form-control" type="text" required />
        </div>
 
        <div class="form-group">
			<label for="email">Email ID</label>
			<input id="email" name="email" class="form-control" type="text" required />
        </div>
 
        <div class="form-group">
            <label for="website">Website</label>
			<input id="website" name="website" class="form-control" type="text" required />
        </div>
 
        <div class="form-group">
			<label for="contact">Contact No</label>
			<input id="contact" name="contact" class="form-control" type="text" required />
        </div>
		
		<div class="form-group">
			<label for="job">Job</label>
			<input id="job" name="job" class="form-control" type="text" required />
        </div>
		
		<div class="form-group">
			<label for="company">Company</label>
			<input id="company" name="company" class="form-control" type="text" required />
        </div>
 
        <table>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Create New Customer
			</button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </table>
</form>
</div>
<?php include_once 'layout/footer.php'; ?>
