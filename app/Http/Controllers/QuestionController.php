<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\language;
use App\Models\Question;
use App\Models\questionType;
use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends AppBaseController
{
    /** @var QuestionRepository $questionRepository*/
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepo)
    {
        $this->questionRepository = $questionRepo;
    }

    /**
     * Display a listing of the Question.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $questions =   Question::with('questionType','language','User')->get();
        return view('questions.index')
            ->with('questions', $questions);
    }

    /**
     * Show the form for creating a new Question.
     *
     * @return Response
     */
    public function create()
    {
        $question=questionType::all();
        $languages=language::all();
        return view('questions.create')->with('questionTypes',$question)->with('languages',$languages);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param CreateQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {
        $input = $request->all();
        
        $question = $this->questionRepository->create($input);
        
        Flash::success('Question saved successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Display the specified Question.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $question = Question::with('questionType','language','User','Answer','Answer.User')->find($id);
        
       
        if (empty($question)) {
            Flash::error('Question not found');
            return redirect(route('questions.index'));
        }

        return view('questions.show')->with('question', $question);
    }

    /**
     * Show the form for editing the specified Question.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $question = $this->questionRepository->find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('questions.index'));
        }

        return view('questions.edit')->with('question', $question);
    }

    /**
     * Update the specified Question in storage.
     *
     * @param int $id
     * @param UpdateQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionRequest $request)
    {
        $question = $this->questionRepository->find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('questions.index'));
        }

        $question = $this->questionRepository->update($request->all(), $id);

        Flash::success('Question updated successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Remove the specified Question from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $question = $this->questionRepository->find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('questions.index'));
        }

        $this->questionRepository->delete($id);

        Flash::success('Question deleted successfully.');

        return redirect(route('questions.index'));
    }
}
