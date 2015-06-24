@extends('layouts.admin.app')

@section('content')
<!-- resources/views/auth/login.blade.php -->

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-3 nopadding" >

				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="#logo" aria-controls="logo" role="tab" data-toggle="tab">Logo</a></li>
				  <li role="presentation" class=""><a href="#slideShow" aria-controls="slideShow" role="tab" data-toggle="tab">Slide Show</a></li>
				  <li role="presentation"><a href="#partner" aria-controls="partner" role="tab" data-toggle="tab">Partner</a></li>
				</ul>
				</div>
				<div class="col-xs-8" style="border-left: 1px solid #eee;">
				  <!-- Tab panes -->
				  <div class="tab-content">

				    <div role="tabpanel" class="tab-pane active" id="logo">

						<form action="/admin/index/create" method="post" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<img src="{{ asset('/images') }}/{{$content->logo->image_name}}">
							</div>
							<div class="form-group">
								<label for="uploadLogo"></label>
								<input type="file" id="uploadLogo" name="uploadLogo">
								<p class="help-block"><label class="label label-warning">Please be upload image size with 131x134 pixel.</label>
</p>
							</div>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
				    </div>
				    
				    <div role="tabpanel" class="tab-pane" id="slideShow">
						<form action="/admin/index/create" method="post" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							@foreach ($content->slides_show as $slide_show)
							<div class="form-group">
								<input type="file" id="uploadSlideShow" name="uploadSlideShow[]">
								<img src="{{ asset('/images/slides') }}/{{$slide_show->image_name}}" width="300">
							</div>
							@endforeach
							<div class="form-group">
								<label for="uploadLogo"></label>
								<!-- <input type="file[]" id="uploadLogo" name="uploadLogo"> -->
							</div>
							<p class="help-block"><label class="label label-warning">Please be upload image size with 1000x400 pixel.</label></p>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="partner">...</div>
				  </div>

				</div>
			</div>
		</div><!-- End of col-xs-12 -->
	</div><!-- End of row -->
</div><!-- End of container-fluid -->

@endsection
