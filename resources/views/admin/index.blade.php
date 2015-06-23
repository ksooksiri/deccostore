@extends('layouts.admin.app')

@section('content')
<!-- resources/views/auth/login.blade.php -->

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-4 nopadding">

				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="#logo" aria-controls="logo" role="tab" data-toggle="tab">Logo</a></li>
				  <li role="presentation" class=""><a href="#slideShow" aria-controls="slideShow" role="tab" data-toggle="tab">Slide Show</a></li>
				  <li role="presentation"><a href="#partner" aria-controls="partner" role="tab" data-toggle="tab">Partner</a></li>
				</ul>
				</div>
				<div class="col-xs-8 nopadding">

  <!-- Tab panes -->
  <div class="tab-content">

    <div role="tabpanel" class="tab-pane active" id="logo">
		<form action="#" method="post">
			<div class="form-group">
				<img src="{{ asset('/images/logo-decco.png') }}">
			</div>

			<div class="form-group">
				<label for="exampleInputFile">File input</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>

			<button type="submit" class="btn btn-default">Submit</button>
		</form>
    </div>
    
    <div role="tabpanel" class="tab-pane" id="slideShow">...</div>
    <div role="tabpanel" class="tab-pane" id="partner">...</div>
  </div>
{{ $content->logo->image_name }}

				</div>
			</div>
		</div><!-- End of col-xs-12 -->
	</div><!-- End of row -->
</div><!-- End of container-fluid -->

@endsection
