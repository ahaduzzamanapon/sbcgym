<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLockerAssignmentRequest;
use App\Http\Requests\UpdateLockerAssignmentRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\LockerAssignment;
use Illuminate\Http\Request;
use Flash;
use Response;

class LockerAssignmentController extends AppBaseController
{
    /**
     * Display a listing of the LockerAssignment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var LockerAssignment $lockerAssignments */
        $lockerAssignments = LockerAssignment::select('lockerassignments.*', 'members.mem_name as member_name', 'lockers.locker_number','lockerassignments.id as assignment_id')
            ->join('members', 'lockerassignments.member_id', '=', 'members.id')
            ->join('lockers', 'lockerassignments.locker_id', '=', 'lockers.id')
            ->paginate(10);

        return view('locker_assignments.index')
            ->with('lockerAssignments', $lockerAssignments);
    }

    /**
     * Show the form for creating a new LockerAssignment.
     *
     * @return Response
     */
    public function create()
    {
        return view('locker_assignments.create');
    }

    /**
     * Store a newly created LockerAssignment in storage.
     *
     * @param CreateLockerAssignmentRequest $request
     *
     * @return Response
     */
    public function store(CreateLockerAssignmentRequest $request)
    {
        $input = $request->all();

        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::create($input);

        Flash::success('Locker Assignment saved successfully.');

        return redirect(route('lockerAssignments.index'));
    }

    /**
     * Display the specified LockerAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignments = LockerAssignment::select('lockerassignments.*', 'members.mem_name as member_name', 'lockers.locker_number')
            ->join('members', 'lockerassignments.member_id', '=', 'members.id')
            ->join('lockers', 'lockerassignments.locker_id', '=', 'lockers.id')
            ->where('lockerassignments.id', $id)
            ->first();

        if (empty($lockerAssignment)) {
            Flash::error('Locker Assignment not found');

            return redirect(route('lockerAssignments.index'));
        }

        return view('locker_assignments.show')->with('lockerAssignment', $lockerAssignment);
    }

    /**
     * Show the form for editing the specified LockerAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find($id);

        if (empty($lockerAssignment)) {
            Flash::error('Locker Assignment not found');

            return redirect(route('lockerAssignments.index'));
        }

        return view('locker_assignments.edit')->with('lockerAssignment', $lockerAssignment);
    }

    /**
     * Update the specified LockerAssignment in storage.
     *
     * @param int $id
     * @param UpdateLockerAssignmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLockerAssignmentRequest $request)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find($id);

        if (empty($lockerAssignment)) {
            Flash::error('Locker Assignment not found');

            return redirect(route('lockerAssignments.index'));
        }

        $lockerAssignment->fill($request->all());
        $lockerAssignment->save();

        Flash::success('Locker Assignment updated successfully.');

        return redirect(route('lockerAssignments.index'));
    }

    /**
     * Remove the specified LockerAssignment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find($id);

        if (empty($lockerAssignment)) {
            Flash::error('Locker Assignment not found');

            return redirect(route('lockerAssignments.index'));
        }

        $lockerAssignment->delete();

        Flash::success('Locker Assignment deleted successfully.');

        return redirect(route('lockerAssignments.index'));
    }
}
