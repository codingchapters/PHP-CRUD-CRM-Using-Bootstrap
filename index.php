<?php 
include_once 'dbconfig.php';
include_once 'layout/header.php'; 
?>
<div class="clearfix"></div>
<div class="container-fluid">
<a href="add-customer.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Customer</a>
</div>
<div class="clearfix" style="margin-bottom:20px;"></div>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 col-sm-12">
	<table class="table table-bordered table-responsive">
		<tr>
			<th>Entry Id</th>
			<th>Date</th>
			<th>Name</th>
			<th>Email ID</th>
			<th>Website</th>
			<th>Contact</th>
			<th>Job</th>
			<th>Company</th>
			<th colspan="2" align="center">Actions</th>
		</tr>
		<?php
			$query = "SELECT * FROM contact";       
			$records_per_page=3;
			$newquery = $crud->paging($query,$records_per_page);
			$crud->dataview($newquery);
		 ?> 
	</table>
	<div class="pagination-wrap">
		<?php $crud->paginglink($query,$records_per_page); ?>
	</div>
</div>
</div>
</div>
<?php include_once 'layout/footer.php'; ?>
