<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequestionTypeRequest;
use App\Http\Requests\UpdatequestionTypeRequest;
use App\Repositories\questionTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class questionTypeController extends AppBaseController
{
    /** @var questionTypeRepository $questionTypeRepository*/
    private $questionTypeRepository;

    public function __construct(questionTypeRepository $questionTypeRepo)
    {
        $this->questionTypeRepository = $questionTypeRepo;
    }

    /**
     * Display a listing of the questionType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $questionTypes = $this->questionTypeRepository->all();

        return view('question_types.index')
            ->with('questionTypes', $questionTypes);
    }

    /**
     * Show the form for creating a new questionType.
     *
     * @return Response
     */
    public function create()
    {
        return view('question_types.create');
    }

    /**
     * Store a newly created questionType in storage.
     *
     * @param CreatequestionTypeRequest $request
     *
     * @return Response
     */
    public function store(CreatequestionTypeRequest $request)
    {
        $input = $request->all();

        $questionType = $this->questionTypeRepository->create($input);

        Flash::success('Question Type saved successfully.');

        return redirect(route('questionTypes.index'));
    }

    /**
     * Display the specified questionType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $questionType = $this->questionTypeRepository->find($id);

        if (empty($questionType)) {
            Flash::error('Question Type not found');

            return redirect(route('questionTypes.index'));
        }

        return view('question_types.show')->with('questionType', $questionType);
    }

    /**
     * Show the form for editing the specified questionType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $questionType = $this->questionTypeRepository->find($id);

        if (empty($questionType)) {
            Flash::error('Question Type not found');

            return redirect(route('questionTypes.index'));
        }

        return view('question_types.edit')->with('questionType', $questionType);
    }

    /**
     * Update the specified questionType in storage.
     *
     * @param int $id
     * @param UpdatequestionTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequestionTypeRequest $request)
    {
        $questionType = $this->questionTypeRepository->find($id);

        if (empty($questionType)) {
            Flash::error('Question Type not found');

            return redirect(route('questionTypes.index'));
        }

        $questionType = $this->questionTypeRepository->update($request->all(), $id);

        Flash::success('Question Type updated successfully.');

        return redirect(route('questionTypes.index'));
    }

    /**
     * Remove the specified questionType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $questionType = $this->questionTypeRepository->find($id);

        if (empty($questionType)) {
            Flash::error('Question Type not found');

            return redirect(route('questionTypes.index'));
        }

        $this->questionTypeRepository->delete($id);

        Flash::success('Question Type deleted successfully.');

        return redirect(route('questionTypes.index'));
    }
}
