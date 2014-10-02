<?php
	/*
	 * Begin custom Form elements to output boostrap compatible elements
	 */
	Form::macro('bootField', function ($name, $type = 'text', $display = null, $value = null, $options = array())
	{
		$attributes = HTML::attributes($options);
		$label = '';
		if($display !== null)
		{
			$label = <<<LABEL
<label for="{$name}" class="control-label col-sm-2">{$display}</label>
LABEL;

		}

		$input = <<<OUT
<div class="form-group row">
	{$label}
	<div class="col-sm-9">
		<input $attributes type="{$type}" name="{$name}" class="form-control" id="{$name}" placeholder="{$display}" value="{$value}" autofocus="">
	</div>
</div>
OUT;


		return $input;
	});

	Form::macro('bootBTN', function ($type = 'submit', $class = 'primary', $icon = null, $display = 'Submit', $options = array())
	{
		$attributes = HTML::attributes($options);

		if( $icon !== null ){
			$icon = <<<icon
<div class="glyphicon glyphicon-{$icon}"></div>
icon;

		}

		return <<<BTN
<button type="{$type}" class="btn btn-{$class}" {$attributes}>
	{$icon}{$display}
</button>
BTN;

	});
	/*
	 * End custom Form elements to output boostrap compatible elements
	 */