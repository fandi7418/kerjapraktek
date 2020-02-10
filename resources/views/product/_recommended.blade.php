<div class="alert alert-warning">
	<h4 class="font-effect-shadow-multiple" align="center" style="font-family: bebas neue; font-size:30px ; color:black">Rekomendasi Produk</h4>

</div>
<hr />
<div class="row ">
	@foreach ($recommended as $p)
	<div class="col-md-6">
		@include('product._single')
	</div>
	@endforeach
</div>
