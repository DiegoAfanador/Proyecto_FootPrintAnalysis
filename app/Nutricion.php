<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutricion extends Model
{
	
    protected $fillable=[
    	'comidaN','frutaN','verduraN','proteinaN','aguaN','1litroN','2litroN','3litroN','4litroN','5litroN','restriccionN','1resN','2resN','3resN','4resN','5resN'
            ];

	protected $primaryKey = 'idN';
}
