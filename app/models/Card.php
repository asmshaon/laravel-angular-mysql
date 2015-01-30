<?php

use LaravelBook\Ardent\Ardent;

class Card extends \LaravelBook\Ardent\Ardent {

	use SoftDeletingTrait;

	protected $fillable = [
		'first_name',
		'last_name',
		'address',
		'post_code',
		'state',
		'card_number',
		'expire_month',
		'expire_year'
	];

	public static $rules = [
		'first_name'    => 'required|max:100',
		'last_name'     => 'required|max:100',
		'address'       => 'required|max:100',
		'post_code'     => 'required|min:4|max:4',
		'state'         => 'required|in:ACT,NSW,NT,QLD,SA,TAS,VIC,WA',
		'card_number'   => 'required|luhn',
		'expire_month'  => 'required|min:2|max:2',
		'expire_year'   => 'required|min:2|max:2'
	];

	public static $customMessages = array(
		'luhn' => 'The :attribute is invalid.',
  	);
}