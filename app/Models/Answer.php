<?php

namespace App\Models;

use App\Models\User;
use Eloquent as Model;
use App\Models\Question;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Answer
 * @package App\Models
 * @version May 17, 2022, 8:54 am UTC
 *
 * @property string $answer
 * @property  $qid
 * @property integer $uid
 */
class Answer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'answers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'answer',
        'qid',
        'uid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'answer' => 'string',
        'uid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'answer' => 'required',
        'qid' => 'required',
        'uid' => 'required'
    ];
    public function Question(){
        return $this->hasOne(Question::class,'qid','id');
    }
    public function User(){
        return $this->BelongsTo(User::class,'uid','id');
    }    
}
