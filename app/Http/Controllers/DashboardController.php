<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Repositories\DashboardRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;

class DashboardController extends AppBaseController
{
    /** @var DashboardRepository $dashboardRepository*/
    private $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepo)
    {
        $this->dashboardRepository = $dashboardRepo;
    }

    /**
     * Display a listing of the Dashboard.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        $users=User::get()->count();
        $questions=Question::get()->count();
        $answers=Answer::get()->count();
        return view('dashboards.index',compact('users','questions','answers'));
    }

    /**
     * Show the form for creating a new Dashboard.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboards.create');
    }

    /**
     * Store a newly created Dashboard in storage.
     *
     * @param CreateDashboardRequest $request
     *
     * @return Response
     */
    public function store(CreateDashboardRequest $request)
    {
        $input = $request->all();

        $dashboard = $this->dashboardRepository->create($input);

        Flash::success('Dashboard saved successfully.');

        return redirect(route('dashboards.index'));
    }

    /**
     * Display the specified Dashboard.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dashboard = $this->dashboardRepository->find($id);

        if (empty($dashboard)) {
            Flash::error('Dashboard not found');

            return redirect(route('dashboards.index'));
        }

        return view('dashboards.show')->with('dashboard', $dashboard);
    }

    /**
     * Show the form for editing the specified Dashboard.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dashboard = $this->dashboardRepository->find($id);

        if (empty($dashboard)) {
            Flash::error('Dashboard not found');

            return redirect(route('dashboards.index'));
        }

        return view('dashboards.edit')->with('dashboard', $dashboard);
    }

    /**
     * Update the specified Dashboard in storage.
     *
     * @param int $id
     * @param UpdateDashboardRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDashboardRequest $request)
    {
        $dashboard = $this->dashboardRepository->find($id);

        if (empty($dashboard)) {
            Flash::error('Dashboard not found');

            return redirect(route('dashboards.index'));
        }

        $dashboard = $this->dashboardRepository->update($request->all(), $id);

        Flash::success('Dashboard updated successfully.');

        return redirect(route('dashboards.index'));
    }

    /**
     * Remove the specified Dashboard from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dashboard = $this->dashboardRepository->find($id);

        if (empty($dashboard)) {
            Flash::error('Dashboard not found');

            return redirect(route('dashboards.index'));
        }

        $this->dashboardRepository->delete($id);

        Flash::success('Dashboard deleted successfully.');

        return redirect(route('dashboards.index'));
    }
}
