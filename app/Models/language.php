<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class language
 * @package App\Models
 * @version May 16, 2022, 9:28 am UTC
 *
 * @property string $language
 */
class language extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'languages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'language'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'language' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language' => 'required'
    ];

    
}
