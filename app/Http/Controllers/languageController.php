<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelanguageRequest;
use App\Http\Requests\UpdatelanguageRequest;
use App\Repositories\languageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class languageController extends AppBaseController
{
    /** @var languageRepository $languageRepository*/
    private $languageRepository;

    public function __construct(languageRepository $languageRepo)
    {
        $this->languageRepository = $languageRepo;
    }

    /**
     * Display a listing of the language.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $languages = $this->languageRepository->all();

        return view('languages.index')
            ->with('languages', $languages);
    }

    /**
     * Show the form for creating a new language.
     *
     * @return Response
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created language in storage.
     *
     * @param CreatelanguageRequest $request
     *
     * @return Response
     */
    public function store(CreatelanguageRequest $request)
    {
        $input = $request->all();

        $language = $this->languageRepository->create($input);

        Flash::success('Language saved successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Display the specified language.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $language = $this->languageRepository->find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('languages.index'));
        }

        return view('languages.show')->with('language', $language);
    }

    /**
     * Show the form for editing the specified language.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $language = $this->languageRepository->find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('languages.index'));
        }

        return view('languages.edit')->with('language', $language);
    }

    /**
     * Update the specified language in storage.
     *
     * @param int $id
     * @param UpdatelanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelanguageRequest $request)
    {
        $language = $this->languageRepository->find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('languages.index'));
        }

        $language = $this->languageRepository->update($request->all(), $id);

        Flash::success('Language updated successfully.');

        return redirect(route('languages.index'));
    }

    /**
     * Remove the specified language from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $language = $this->languageRepository->find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('languages.index'));
        }

        $this->languageRepository->delete($id);

        Flash::success('Language deleted successfully.');

        return redirect(route('languages.index'));
    }
}
