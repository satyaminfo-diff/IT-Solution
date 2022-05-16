<?php

namespace App\Repositories;

use App\Models\language;
use App\Repositories\BaseRepository;

/**
 * Class languageRepository
 * @package App\Repositories
 * @version May 16, 2022, 9:28 am UTC
*/

class languageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language'
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
        return language::class;
    }
}
