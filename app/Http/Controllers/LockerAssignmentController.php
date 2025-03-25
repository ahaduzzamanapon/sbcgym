<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateLockerAssignmentRequest;
use App\Http\Requests\UpdateLockerAssignmentRequest;
use App\Models\LockerAssignment;
use Flash;
use Illuminate\Http\Request;
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
    public function index( Request $request )
    {
        /** @var LockerAssignment $lockerAssignments */
        $query = LockerAssignment::select( 'lockerassignments.*', 'members.mem_name as member_name', 'lockers.locker_number', 'lockerassignments.id as assignment_id' )
            ->join( 'members', 'lockerassignments.member_id', '=', 'members.id' )
            ->join( 'lockers', 'lockerassignments.locker_id', '=', 'lockers.id' );

        // Check permissions and filter by branch accordingly
        if ( if_can( 'male-access' ) ) {
            $query->where( 'members.branch_id', 1 ); // Male branch
        } elseif ( if_can( 'female-access' ) ) {
            $query->where( 'members.branch_id', 2 ); // Female branch 
        } elseif ( !if_can( 'see_all_branch' ) ) {
            $query->where( 'members.branch_id', get_branch() );
        }

        $lockerAssignments = $query->paginate( 10 );

        return view( 'locker_assignments.index' )
            ->with( 'lockerAssignments', $lockerAssignments );
    }

    /**
     * Show the form for creating a new LockerAssignment.
     *
     * @return Response
     */
    public function create()
    {
        return view( 'locker_assignments.create' );
    }

    /**
     * Store a newly created LockerAssignment in storage.
     *
     * @param CreateLockerAssignmentRequest $request
     *
     * @return Response
     */
    public function store( CreateLockerAssignmentRequest $request )
    {
        $input = $request->all();

        // dd( $input );

        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::create( [

            'member_id'      => $input['member_id'],
            'locker_id'      => $input['locker_id'],
            'amount'         => $input['amount'],
            'tax'            => $input['tax'],
            'admission_fee'  => $input['admission_fee'],
            'gross_amount'   => $input['gross_amount'],
            'coupons_id'     => $input['coupons_id'],
            'coupon_amount'  => $input['coupon_amount'],
            'pay_amount'     => $input['pay_amount'],
            'due_amount'     => $input['due_amount'],
            'pay_status'     => $input['pay_status'],
            'start_date'     => $input['start_date'],
            'end_date'       => $input['end_date'],
            'active_status'  => 'Active',
            'status'         => $input['locker_status'],
            'payment_mode'   => $input['payment_mode'],
            'payment_date'   => $input['payment_date'],
            'payment_amount' => $input['payment_amount'],
            'payment_note'   => $input['payment_note'],
            'payment_doc'    => $input['payment_doc'],
            'payment_number' => $input['payment_number'],
            'payment_status' => $input['payment_status'],

        ] );

        Flash::success( 'Locker Assignment saved successfully.' );

        return redirect( route( 'lockerAssignments.index' ) );
    }

    /**
     * Display the specified LockerAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show( $id )
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignments = LockerAssignment::select( 'lockerassignments.*', 'members.mem_name as member_name', 'lockers.locker_number' )
            ->join( 'members', 'lockerassignments.member_id', '=', 'members.id' )
            ->join( 'lockers', 'lockerassignments.locker_id', '=', 'lockers.id' )
            ->where( 'lockerassignments.id', $id )
            ->first();

        if ( empty( $lockerAssignment ) ) {
            Flash::error( 'Locker Assignment not found' );

            return redirect( route( 'lockerAssignments.index' ) );
        }

        return view( 'locker_assignments.show' )->with( 'lockerAssignment', $lockerAssignment );
    }

    /**
     * Show the form for editing the specified LockerAssignment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit( $id )
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find( $id );

        if ( empty( $lockerAssignment ) ) {
            Flash::error( 'Locker Assignment not found' );

            return redirect( route( 'lockerAssignments.index' ) );
        }

        return view( 'locker_assignments.edit' )->with( 'lockerAssignment', $lockerAssignment );
    }

    /**
     * Update the specified LockerAssignment in storage.
     *
     * @param int $id
     * @param UpdateLockerAssignmentRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateLockerAssignmentRequest $request )
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find( $id );

        if ( empty( $lockerAssignment ) ) {
            Flash::error( 'Locker Assignment not found' );

            return redirect( route( 'lockerAssignments.index' ) );
        }

        $lockerAssignment->fill( $request->all() );
        $lockerAssignment->save();

        Flash::success( 'Locker Assignment updated successfully.' );

        return redirect( route( 'lockerAssignments.index' ) );
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
    public function destroy( $id )
    {
        /** @var LockerAssignment $lockerAssignment */
        $lockerAssignment = LockerAssignment::find( $id );

        if ( empty( $lockerAssignment ) ) {
            Flash::error( 'Locker Assignment not found' );

            return redirect( route( 'lockerAssignments.index' ) );
        }

        $lockerAssignment->delete();

        Flash::success( 'Locker Assignment deleted successfully.' );

        return redirect( route( 'lockerAssignments.index' ) );
    }
}
