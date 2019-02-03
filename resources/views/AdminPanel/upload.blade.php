@include('inc.header')

<div class="container">
	<form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
	{{csrf_field()}}
		<div class="row">
			<label for="image">File input</label>
			<input type="file" name="file">
			<br>
			<input type="submit" class="btn btn-info" value="Upload">
		</div>
	</form>
</div>

<div class="row">
	<img src="{{ asset('storage/upload/1opvne.jpg')}}" alt="a">
</div>

@include('inc.footer')