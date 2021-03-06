
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="style.css?t=[timestamp]">
	</head>

	<nav class="navbar navbar-fixed-top"> 
			<h1 id="pageHeading">Tasks</h1>

			<ol class="breadcrumb">
				<li><a href="../index.html">Home</a></li>
				<li class="active">Tasks</li>
			</ol>	

			<!--Actions-->
			<div id="actions"> 
				<div class="btn-group">
					<button type="button" class="btn btn-primary" id="btnAdd">Add</button>
					<button type="button" class="btn btn-primary"id="btnEdit">Edit</button>
					<button type="button" class="btn btn-primary" id="btnDelete">Delete</button>
				</div>
			</div>
	</nav>


	<body>

		<!--Task list-->	
		<table id="tasklist" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Subject</th>	
					<th>Due</th>
				</tr>
			</thead>
			<tbody>
				
			<?php
				$db = new SQlite3('../data.db');
				$results = $db->query('SELECT * FROM task order by due asc, id asc');
				while ($row = $results->fetchArray()) {
					$id = $row['id'];
					$subject = $row['subject'];
					$contents = $row['contents'];
					$due = $row['due'];
					echo "<tr id='$id' class='clickable-row'><td><a href='viewtask.php?id=$id'</a>$subject</td><td>$due</td></tr>";
				}
			?>
			</tbody>
		</table>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="script.js"></script>

	</body>
</html>
