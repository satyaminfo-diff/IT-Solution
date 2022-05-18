<?php

namespace App\Models;

use App\Models\Answer;
use Eloquent as Model;
use App\Models\questionType;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Question
 * @package App\Models
 * @version May 16, 2022, 9:56 am UTC
 *
 * @property \App\Models\questionType $questionType
 * @property string $title
 * @property string $description
 * @property integer $tid
 */
class Question extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'questions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'tid',
        'lid',
        'uid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'tid' => 'integer',
        'lid' => 'integer',
        'uid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'tid' => 'required',
        'lid' => 'required',
        'uid' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function questionType()
    {
        return $this->hasOne(\App\Models\questionType::class, 'id', 'tid');
    }
    public function language()
    {
        return $this->hasOne(\App\Models\language::class, 'id', 'lid');
    }
    public function User()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'uid');
    }
    // public function GetQTypeAttribute()
    // {
    //     return questionType::where('id',$this->tid)->pluck('type')->first();
    // }

    public function Answer()
    {
        return $this->hasMany(Answer::class, 'qid', 'id');
    }
}
