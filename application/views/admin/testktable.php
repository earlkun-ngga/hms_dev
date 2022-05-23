<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		test data table
	</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> 
</head>
<body>
	<table id="table_id">
		<tr>
			<td><b>No</b></td>
			<td><b>Nama</b></td>
			<td><b>Judul</b></td>
			<td><b>Status</b></td>
		</tr>
		<tr>
			<td>1</td>
			<td>Erlangga</td>
			<td>Test 1 dan 2 dan 3</td>
			<td>Detonate</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Erlangga</td>
			<td>Test 1 dan 2 dan 3</td>
			<td>Detonate</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Erlangga</td>
			<td>Test 1 dan 2 dan 3</td>
			<td>Detonate</td>
		</tr>
	</table>
</body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</html>