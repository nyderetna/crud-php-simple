<?php
//for development only
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE);
//end for development only
?>
<html>
<head>	
	<title>Homepage</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">

	<div class="page-header">
    	<h1>Bootstrap grid examples</h1>
    	<p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
  	</div>

	<div class="row">

		<div class="col-md-12">

			<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal">Add New Data</a><br/><br/>

						<!-- Modal -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">

			        <form class="form-horizontal">

					  <div class="form-group">
					    <label for="name" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama..">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="age" class="col-sm-2 control-label">Age</label>
					    <div class="col-sm-10">
					      <input type="number" name="age" class="form-control" id="age" placeholder="Masukkan Usia..">
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="email" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email..">
					    </div>
					  </div>

					</form>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary" id="submitData">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

			<table class="table table-bordered table-hover">

			<thead class="bg-warning">
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th width="15%"><span class="pull-left">Update</span></th>
				</tr>
			</thead>

			<tbody id="userData"></tbody>
			</table>
			
		</div>
		
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

	getData();

	function getData() {
		$.ajax({
			url: 'getData.php',
			type: 'GET',
			success: function(data, textStatus, jqXHR){
				var data = JSON.parse(data);

	            var dataUser = '';
	            $.each(data, function (index, value) {
	                dataUser += '<tr data-id="'+value.id+'">';
	                dataUser += '<td>'+value.name+'</td>';
	                dataUser += '<td>'+value.age+'</td>';
	                dataUser += '<td>'+value.email+'</td>';
	                dataUser += '<td><button class="detail-btn btn btn-success btn-xs btn-flat">DETAIL</button> ';
	                dataUser += '<button class="delete-btn btn btn-danger btn-xs btn-flat delete-ads">DELETE</button></td>';
	                dataUser += '<tr>';
	            });

				$('#userData').html(dataUser);
			}
		});
	}
	

	$(document).on('click', '#submitData', function(){

		var formData = {
			name: $('input[name="name"]').val(),
			age: $('#age').val(),
			email: $('#email').val()
		}

		$.ajax({
			url: 'add.php',
			type: 'POST',
			data: formData,
			success: function(data, textStatus, jqXHR){
				if (jqXHR.status == 200) {
					$('#addModal').modal('hide');
					getData();
				}
			}
		});

	});

</script>

</body>
</html>
