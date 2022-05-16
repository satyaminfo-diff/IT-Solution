<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class questionType
 * @package App\Models
 * @version May 16, 2022, 9:33 am UTC
 *
 * @property string $type
 */
class questionType extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'question_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required'
    ];

    
}
