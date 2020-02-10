@extends('app')

@section('title') Browse Product @stop

@section('content')

<!-- <form action="{{ route('search') }}" method="GET">
	<input type="text" name="keyword" placeholder="Cari Product ..">
	<input type="submit" value="CARI">
</form>
<br> -->

<div class="row">
	<div class="col-md-8">
		<div class="well">
			<div class="row " align="right" style="margin-left: 10px; margin-right:10px">

				<div class="dropdown col-md-3  ">
					<button class="btn btn-default dropdown-toggle form-control" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Urutkan dari
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
						<li><a href="product">Harga Tinggi </a></li>
						<li><a href="product=k">Harga Rendah </a></li>


					</ul>
				</div>
				<a style="color:rgb(240, 173, 78)" href="?view=list"><span class="fa fa-list fa-2x"></span></a>&nbsp;
				<a style="color:rgb(240, 173, 78)" href="?view=list1"><span class="fa fa-th fa-2x"></span></a>

			</div>
		</div>

		@include('product._'.$view)
	</div>

	<div class="col-md-4">


		@include('product/_recommended')
	</div>
</div>


@stop
