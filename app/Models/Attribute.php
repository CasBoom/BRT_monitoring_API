<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'attributes';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'description', 
        'created_at'
    ];

    public function values(){
        return $this->hasMany(Value::class, 'attribute_id');
    }
    public $timestamps = true;

    use HasFactory;

}
