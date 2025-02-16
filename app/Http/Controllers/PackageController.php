<?php

namespace App\Http\Controllers;

use App\DataTables\PackageDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Member;
use App\Models\Package;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Response;

class PackageController extends AppBaseController
{
    /**
     * Display a listing of the Package.
     *
     * @param PackageDataTable $packageDataTable
     * @return Response
     */
    public function index( PackageDataTable $packageDataTable )
    {
        return $packageDataTable->render( 'packages.index' );
    }

    /**
     * Show the form for creating a new Package.
     *
     * @return Response
     */
    public function create()
    {
        return view( 'packages.create' );
    }

    /**
     * Store a newly created Package in storage.
     *
     * @param CreatePackageRequest $request
     *
     * @return Response
     */
    public function store( Request $request )
    {
        $input = $request->all();

        if ( $request->hasFile( 'pack_image' ) ) {
            $path = public_path( 'images/pack_image' );

            if ( !File::exists( $path ) ) {
                File::makeDirectory( $path, 0775, true, true );
            }

            $file = $request->file( 'pack_image' );
            // Generate unique identifier for package
            $packageNumber = uniqid();
            $extension = $file->getClientOriginalExtension();

            // Construct the filename
            $fileName = 'package_' . $packageNumber . '.' . $extension;

            // dd( $fileName );

            // Move the uploaded file to public directory
            $file->move( $path, $fileName );

            // Save the file path in the input data
            $input['pack_image'] = $fileName;
        }

        // dd( 'no image' );
        /** @var Package $package */
        $package = Package::create( $input );

        Flash::success( 'Package saved successfully.' );

        return redirect( route( 'packages.index' ) );
    }

    /**
     * Display the specified Package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id )
    {
        /** @var Package $package */
        $package = Package::find( $id );

        if ( empty( $package ) ) {
            Flash::error( 'Package not found' );

            return redirect( route( 'packages.index' ) );
        }

        return view( 'packages.show' )->with( 'package', $package );
    }

    /**
     * Show the form for editing the specified Package.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id )
    {
        /** @var Package $package */
        $package = Package::find( $id );

        if ( empty( $package ) ) {
            Flash::error( 'Package not found' );

            return redirect( route( 'packages.index' ) );
        }

        return view( 'packages.edit' )->with( 'package', $package );
    }

    /**
     * Update the specified Package in storage.
     *
     * @param  int              $id
     * @param UpdatePackageRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdatePackageRequest $request )
    {
        /** @var Package $package */
        $package = Package::find( $id );
        $input   = $request->all();

        if ( empty( $package ) ) {
            Flash::error( 'Package not found' );

            return redirect( route( 'packages.index' ) );
        }

        if ( $request->hasFile( 'pack_image' ) ) {
            $path = storage_path( 'app/public/images/pack_image' );
            if ( !File::exists( $path ) ) {
                File::makeDirectory( $path, 0775, true, true );
            }
            $file                = $request->file( 'pack_image' );
            $input['pack_image'] = $file->store( 'images/pack_image', 'public' );
        } else {
            unset( $input['pack_image'] );
        }

        $package->fill( $input );
        $package->save();

        Flash::success( 'Package updated successfully.' );

        return redirect( route( 'packages.index' ) );
    }

    /**
     * Remove the specified Package from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy( $id )
    {
        /** @var Package $package */
        $package = Package::find( $id );

        if ( empty( $package ) ) {
            Flash::error( 'Package not found' );

            return redirect( route( 'packages.index' ) );
        }

        $package->delete();

        Flash::success( 'Package deleted successfully.' );

        return redirect( route( 'packages.index' ) );
    }

    public function packageCheck( Request $request )
    {
        $data = $request->all();
        //dd($data);
        $Package = Package::where( 'id', $data['package_id'] )
            ->first();
        $expire_date = date( 'Y-m-d', strtotime( $Package->expire_date . '+' . $Package->pack_duration . ' month' ) );
        if ( $Package instanceof Package ) {
            return response()->json( [
                'status'      => true,
                'data'        => $Package,
                'expire_date' => $expire_date,
            ] );
        } else {
            return response()->json( [
                'status' => false,
                'data'   => null,
            ] );
        }
    }

    // report
    public function packages_report()
    {
        return view( 'packages.report.index' );
    }
    public function purchase_report_view( Request $request )
    {
        $data           = $request->all();
        $from_date      = $data['from_date'];
        $to_date        = $data['to_date'];
        $member_id      = explode( ',', $data['member_id'] );
        $type           = $data['type'];
        $member_details = Member::whereIn( 'id', $member_id )->get();
        return view( 'packages.report.purchase_report_view', compact( 'from_date', 'to_date', 'member_id', 'type', 'member_details' ) );

    }
}
