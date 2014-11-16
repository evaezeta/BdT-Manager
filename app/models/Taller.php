<?php

class Taller extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'titulo' => 'required',
		'descripcion' => 'required',
		'esgrupo' => 'required',
		'textorepeticion' => 'required',
		'fecha' => 'required',
		'lugar' => 'required',
		'img' => 'required',
		'tallerita_id' => 'required',
		'plazas' => 'required'
	);
}
