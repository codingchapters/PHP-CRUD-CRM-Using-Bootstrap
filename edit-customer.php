<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$contact = $_POST['contact'];
	$job = $_POST['job'];
	$company = $_POST['company'];
	
	if($crud->update($id,$name,$email,$website,$contact,$job,$company))
	{
		$msg = "<div class='alert alert-info'>
				Record was updated successfully <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> ERROR while updating record !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
}

?>
<?php include_once 'layout/header.php'; ?>

<div class="clearfix"></div>

<div class="container-fluid">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container-fluid">
	<form method='post'>
 
        <div class="form-group">
            <label for="name">Name</label>
			<input id="name" name="name" class="form-control" type="text" value="<?php echo $name;?>" required />
        </div>
 
        <div class="form-group">
			<label for="email">Email ID</label>
			<input id="email" name="email" class="form-control" type="text" value="<?php echo $email;?>" required />
        </div>
 
        <div class="form-group">
            <label for="website">Website</label>
			<input id="website" name="website" class="form-control" type="text" value="<?php echo $website;?>" required />
        </div>
 
        <div class="form-group">
			<label for="contact">Contact No</label>
			<input id="contact" name="contact" class="form-control" type="text" value="<?php echo $contact;?>" required />
        </div>
		
		<div class="form-group">
			<label for="job">Job</label>
			<input id="job" name="job" class="form-control" type="text" value="<?php echo $job;?>" required />
        </div>
		
		<div class="form-group">
			<label for="company">Company</label>
			<input id="company" name="company" class="form-control" type="text" value="<?php echo $company;?>" required />
        </div>
        <table>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update Customer
				</button>
                <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>
        </table>
</form> 
</div>

<?php include_once 'layout/footer.php'; ?>
