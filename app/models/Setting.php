<?php

class Setting extends \Eloquent {
	protected $fillable = [];

	public function get($setting){
		return $this->where( 'name', '=', $setting );
	}

	public function set( $setting, $value ){
		$settings = $this->get( $setting );

		if( $settings ){
			$settings->$setting = $value;
			$settings->save();

			return true;
		}

		$this->insert(array(
			'name' => $setting,
			'value' => $value,
		));

		return true;
	}
}