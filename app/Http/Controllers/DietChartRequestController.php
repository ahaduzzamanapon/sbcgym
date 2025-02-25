<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDietChartRequestRequest;
use App\Http\Requests\UpdateDietChartRequestRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\DietChartRequest;
use Illuminate\Http\Request;
use Flash;
use Response;

class DietChartRequestController extends AppBaseController
{
    /**
     * Display a listing of the DietChartRequest.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var DietChartRequest $dietChartRequests */
        if ( if_can( 'show_all_data' ) ) {
            $dietChartRequests = DietChartRequest::join('members', 'diet_chart_requests.member', '=', 'members.id')
                ->select('diet_chart_requests.*', 'members.mem_name as member_name')
                ->paginate(10);
        } else {
            $dietChartRequests = DietChartRequest::join('members', 'diet_chart_requests.member', '=', 'members.id')
                ->select('diet_chart_requests.*', 'members.mem_name as member_name')
                ->where('diet_chart_requests.member', auth()->user()->member_id)
                ->paginate(10);
        }
        return view('diet_chart_requests.index')
            ->with('dietChartRequests', $dietChartRequests);
    }

    /**
     * Show the form for creating a new DietChartRequest.
     *
     * @return Response
     */
    public function create()
    {
        return view('diet_chart_requests.create');
    }

    /**
     * Store a newly created DietChartRequest in storage.
     *
     * @param CreateDietChartRequestRequest $request
     *
     * @return Response
     */
    public function store(CreateDietChartRequestRequest $request)
    {
        $input = $request->all();

        /** @var DietChartRequest $dietChartRequest */
        $dietChartRequest = DietChartRequest::create($input);

        Flash::success('Diet Chart Request saved successfully.');

        return redirect(route('dietChartRequests.index'));
    }

    /**
     * Display the specified DietChartRequest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var DietChartRequest $dietChartRequest */
        $dietChartRequest = DietChartRequest::find($id);

        if (empty($dietChartRequest)) {
            Flash::error('Diet Chart Request not found');

            return redirect(route('dietChartRequests.index'));
        }

        return view('diet_chart_requests.show')->with('dietChartRequest', $dietChartRequest);
    }

    /**
     * Show the form for editing the specified DietChartRequest.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var DietChartRequest $dietChartRequest */
        $dietChartRequest = DietChartRequest::find($id);

        if (empty($dietChartRequest)) {
            Flash::error('Diet Chart Request not found');

            return redirect(route('dietChartRequests.index'));
        }

        return view('diet_chart_requests.edit')->with('dietChartRequest', $dietChartRequest);
    }

    /**
     * Update the specified DietChartRequest in storage.
     *
     * @param int $id
     * @param UpdateDietChartRequestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDietChartRequestRequest $request)
    {
        /** @var DietChartRequest $dietChartRequest */
        $dietChartRequest = DietChartRequest::find($id);

        if (empty($dietChartRequest)) {
            Flash::error('Diet Chart Request not found');

            return redirect(route('dietChartRequests.index'));
        }

        $dietChartRequest->fill($request->all());
        $dietChartRequest->save();

        Flash::success('Diet Chart Request updated successfully.');

        return redirect(route('dietChartRequests.index'));
    }

    /**
     * Remove the specified DietChartRequest from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var DietChartRequest $dietChartRequest */
        $dietChartRequest = DietChartRequest::find($id);

        if (empty($dietChartRequest)) {
            Flash::error('Diet Chart Request not found');

            return redirect(route('dietChartRequests.index'));
        }

        $dietChartRequest->delete();

        Flash::success('Diet Chart Request deleted successfully.');

        return redirect(route('dietChartRequests.index'));
    }
}
