<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustCompany extends Model
{

	protected $fillable = [
		'id',
	];

	protected $primaryKey = 'id';
	public  $table = "customer_company";
	public $timestamps = false;

}
