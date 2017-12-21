<?php header('Content-Type:text/css'); ?>

@foreach ($styles as $style)
	{{$style->selector}}{ {{$style->property}}: {{$style->value}} !important;}
@endforeach
