<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
	protected $guarded=[];
	protected $casts = [
        'permissions' => 'array',
    ];

    protected $dates = [
        'created_at',
    ];
}
