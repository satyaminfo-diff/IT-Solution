<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Repositories\BaseRepository;

/**
 * Class AnswerRepository
 * @package App\Repositories
 * @version May 17, 2022, 8:54 am UTC
*/

class AnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'answer',
        'qid',
        'uid'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Answer::class;
    }
}
