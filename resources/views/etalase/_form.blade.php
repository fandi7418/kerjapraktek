{!! Form::model($etalase, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}



<div class="form-group">
	{!! Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('name', $etalase->name, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
	</div>
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::textarea('description', $etalase->description, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 3]) !!}
	</div>
</div>

<hr />

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		{!! Form::submit('Save', ['class' => 'btn btn-warning', 'style' => 'font-size:16px']) !!}
	</div>
</div>

{!! Form::close() !!}