<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLockerAssignmentAPIRequest;
use App\Http\Requests\API\UpdateLockerAssignmentAPIRequest;
use App\Models\LockerAssignment;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\LockerAssignmentResource;
use Response;

/**
 * Class LockerAssignmentController
 * @package App\Http\Controllers\API
 */

class LockerAssignmentAPIController extends AppBaseController
{
    /**
     * Display a listing of the LockerAssignment.
     * GET|HEAD /lockerAssignments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = LockerAssignment::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $lockerAssignments = $query->get();

        return $this->sendResponse(LockerAssignmentResource::collection($lockerAssignments), 'Locker Assignments retrieved successfully');
    }

    /**
     * Store a newly created LockerAssignment in storage.
     * POST /lockerAssignments
     *
     * @param CreateLockerAssignmentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLockerAssignmentAPIRequest $request)
    {
        $input = $request->all();

        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::create($input);

        return $this->sendResponse(new LockerAssignmentResource($lockerAssignment), 'Locker Assignment saved successfully');
    }

    /**
     * Display the specified LockerAssignment.
     * GET|HEAD /lockerAssignments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find($id);

        if (empty($lockerAssignment)) {
            return $this->sendError('Locker Assignment not found');
        }

        return $this->sendResponse(new LockerAssignmentResource($lockerAssignment), 'Locker Assignment retrieved successfully');
    }

    /**
     * Update the specified LockerAssignment in storage.
     * PUT/PATCH /lockerAssignments/{id}
     *
     * @param int $id
     * @param UpdateLockerAssignmentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLockerAssignmentAPIRequest $request)
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find($id);

        if (empty($lockerAssignment)) {
            return $this->sendError('Locker Assignment not found');
        }

        $lockerAssignment->fill($request->all());
        $lockerAssignment->save();

        return $this->sendResponse(new LockerAssignmentResource($lockerAssignment), 'LockerAssignment updated successfully');
    }

    /**
     * Remove the specified LockerAssignment from storage.
     * DELETE /lockerAssignments/{id}
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
            return $this->sendError('Locker Assignment not found');
        }

        $lockerAssignment->delete();

        return $this->sendSuccess('Locker Assignment deleted successfully');
    }
}
