<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryLocation extends Model
{
    public $timestamps = false;
	protected $primaryKey = 'id';
	protected $table = 'inventory_location';
}
