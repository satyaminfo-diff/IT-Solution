<?php

namespace App\Repositories;

use App\Models\Dashboard;
use App\Repositories\BaseRepository;

/**
 * Class DashboardRepository
 * @package App\Repositories
 * @version May 19, 2022, 7:27 am UTC
*/

class DashboardRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Dashboard::class;
    }
}
