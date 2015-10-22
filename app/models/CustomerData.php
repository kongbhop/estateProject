<?php


class CustomerData extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customer_data';
	protected $fillable = array('firstname', 'lastname', 'email', 'mobile', 'description', 'appointment');
}
