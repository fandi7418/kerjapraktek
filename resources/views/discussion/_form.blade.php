{!! Form::open(['class' => 'form-vertical', 'url' => 'discussion', 'method' => 'POST']) !!}

{!! Form::hidden('product_id', $product->id) !!}

<p>{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Your Comment', 'rows' => 3]) !!}</p>

<p>{!! Form::submit('Send', ['class' => 'btn btn-warning', 'style'=>'font-family:bebas; font-size:16px']) !!}</p>

{!! Form::close() !!}