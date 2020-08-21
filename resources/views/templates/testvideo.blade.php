<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h3>Data Video</h3>
 
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Video</th>
		</tr>
		@foreach($video as $v)
		<tr>
			<td>{{ $v->id}}</td>
			<td>{{ $v->video }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $video->currentPage() }} <br/>
	Jumlah Data : {{ $video->total() }} <br/>
	Data Per Halaman : {{ $video->perPage() }} <br/>
 
 
	{{ $video->links() }}
 
 
</body>
</html>