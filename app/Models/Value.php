<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'value',
        'unit',
        'attribute_id', 
        'created_at'
    ];
    public $timestamps = true;
}
