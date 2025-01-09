<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLockerRequest;
use App\Http\Requests\UpdateLockerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Locker;
use Illuminate\Http\Request;
use Flash;
use Response;

class LockerController extends AppBaseController
{
    /**
     * Display a listing of the Locker.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Locker $lockers */
        $lockers = Locker::paginate(10);

        return view('lockers.index')
            ->with('lockers', $lockers);
    }

    /**
     * Show the form for creating a new Locker.
     *
     * @return Response
     */
    public function create()
    {
        return view('lockers.create');
    }

    /**
     * Store a newly created Locker in storage.
     *
     * @param CreateLockerRequest $request
     *
     * @return Response
     */
    public function store(CreateLockerRequest $request)
    {
        $input = $request->all();

        /** @var Locker $locker */
        $locker = Locker::create($input);

        Flash::success('Locker saved successfully.');

        return redirect(route('lockers.index'));
    }

    /**
     * Display the specified Locker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Locker $locker */
        $locker = Locker::find($id);

        if (empty($locker)) {
            Flash::error('Locker not found');

            return redirect(route('lockers.index'));
        }

        return view('lockers.show')->with('locker', $locker);
    }

    /**
     * Show the form for editing the specified Locker.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Locker $locker */
        $locker = Locker::find($id);

        if (empty($locker)) {
            Flash::error('Locker not found');

            return redirect(route('lockers.index'));
        }

        return view('lockers.edit')->with('locker', $locker);
    }

    /**
     * Update the specified Locker in storage.
     *
     * @param int $id
     * @param UpdateLockerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLockerRequest $request)
    {
        /** @var Locker $locker */
        $locker = Locker::find($id);

        if (empty($locker)) {
            Flash::error('Locker not found');

            return redirect(route('lockers.index'));
        }

        $locker->fill($request->all());
        $locker->save();

        Flash::success('Locker updated successfully.');

        return redirect(route('lockers.index'));
    }

    /**
     * Remove the specified Locker from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Locker $locker */
        $locker = Locker::find($id);

        if (empty($locker)) {
            Flash::error('Locker not found');

            return redirect(route('lockers.index'));
        }

        $locker->delete();

        Flash::success('Locker deleted successfully.');

        return redirect(route('lockers.index'));
    }
}
