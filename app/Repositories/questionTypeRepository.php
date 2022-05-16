<?php

namespace App\Repositories;

use App\Models\questionType;
use App\Repositories\BaseRepository;

/**
 * Class questionTypeRepository
 * @package App\Repositories
 * @version May 16, 2022, 9:33 am UTC
*/

class questionTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type'
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
        return questionType::class;
    }
}
