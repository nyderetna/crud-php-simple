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

	<div class="page-header" style="margin-top: 60px;">
    	<h1>Bootstrap grid examples</h1>
    	<p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
  	</div>

	<!-- Navigation Bar -->
			  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
 
        <div id="navbar" class="navbar-collapse collapse">
          	<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left">
					  <!-- <div class="input-group">
					    <input type="text" class="form-control input-sm" placeholder="Search">
					    	<div class="input-group-btn">
					      	<button class="btn btn-default" type="submit">
					        <i class="glyphicon glyphicon-search"></i>
					      	</button>
					    	</div>
					  </div> -->
					  <div class = "input-group">
         <input type = "text" class =" form-control">
         <span class = "input-group-addon" style="cursor:pointer;"><i class="glyphicon glyphicon-search"></i></span>
      </div>
					</form>
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<!-- ./Nav Bar -->

	<div class="row">

		<div class="col-md-12">

			<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal">Add New Data</button><br/><br/>

			<!-- Modal -->
			<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Add a User</h4>
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
					<th width="3%">No</th>
					<th width="20%">Name</th>
					<th width="5%">Age</th>
					<th width="15%">Email</th>
					<th width="5%"><span class="pull-right">Update</span></th>
				</tr>
			</thead>

			<tbody id="userData"></tbody>
			</table>
			
			<!-- Detail Modal -->
			<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Detail of a User</h4>
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

					  <input type="hidden" id="id">

					</form>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary" id="updateData">Update changes</button>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- End Detail Modal -->
			
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
	            var no = 1;
	            $.each(data, function (index, value) {
	                dataUser += '<tr data-id="'+value.id+'">';
	                dataUser += '<td>'+no+'</td>';
	                dataUser += '<td>'+value.name+'</td>';
	                dataUser += '<td>'+value.age+'</td>';
	                dataUser += '<td>'+value.email+'</td>';
	                dataUser += '<td><span class="pull-right"><button class="detail-btn btn btn-success btn-xs btn-flat">DETAIL</button> ';
	                dataUser += '<button class="delete-btn btn btn-danger btn-xs btn-flat delete-ads">DELETE</button></span></td>';
	                dataUser += '<tr>';
	                no++;
	            });

				$('#userData').html(dataUser);
			}
		});
	}
	

	$(document).on('click', '#submitData', function(){

		var formData = {
			name: $('#addModal input[name="name"]').val(),
			age: $('#addModal #age').val(),
			email: $('#addModal #email').val()
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

	$(document).on('click', '.delete-btn', function(){
		var userId = $(this).closest('tr').data('id');
		// var userId = $(this).closest('tr').attr('data-id');
		$.ajax({
			url: 'delete.php',
			type: 'GET',
			data: {
				id: userId 
			},
			success: function(data, textStatus, jqXHR){
				if (jqXHR.status == 200) {
					getData();
				}
			}
		});

	});

	$(document).on('click', '.detail-btn', function(){
		var userId = $(this).closest('tr').data('id');

		var name = $('tr[data-id="'+userId+'"] td:nth-child(2)').text();
		var age = $('tr[data-id="'+userId+'"] td:nth-child(3)').text();
		var email = $('tr[data-id="'+userId+'"] td:nth-child(4)').text();

		$('#detailModal input#id').val(userId);
		$('#detailModal input#name').val(name);
		$('#detailModal input#name').val(name);
		$('#detailModal input#age').val(age);
		$('#detailModal input#email').val(email);

		$('#detailModal').modal({show : true, backdrop: 'static'});
		
	});

	$(document).on('click', '#updateData', function(){

		var formData = {
			id: $('#detailModal input#id').val(),
			name: $('#detailModal input[name="name"]').val(),
			age: $('#detailModal #age').val(),
			email: $('#detailModal #email').val()
		}

		$.ajax({
			url: 'edit.php',
			type: 'POST',
			data: formData,
			success: function(data, textStatus, jqXHR){
				if (jqXHR.status == 200) {
					$('#detailModal').modal('hide');
					getData();
				}
			}
		});

	});

</script>

</body>
</html>
