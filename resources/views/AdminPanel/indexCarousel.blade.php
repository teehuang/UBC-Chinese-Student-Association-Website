@include('inc.header')
	<div class="container">
		<div class="row">
		<form action="{{ route('indexCarousel.image')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
		{{csrf_field()}}
			<legend>Upcoming Events Carousel</legend>
			<p> Hi Admin, Developer here! <br>Just a heads up, once you upload the image, it will automatically delete the 1st slide of the front page carousel and put the uploaded image as the 3rd slide.</p>
			<input type="file" name="image">
			<br>
			<br>
			<label>Hyperlink: </label>
			<br>
			<input type="text" name="imageURL">
			<br>
			<input type="submit" class="btn btn-info" value="Upload">
		</div>
		</form>
	</div>
@include('inc.footer')