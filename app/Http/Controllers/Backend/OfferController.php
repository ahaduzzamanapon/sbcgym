<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view( 'offers.index', compact( 'offers' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'offers.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        // dd( $request->all() );
        $request->validate( [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ] );

        $input = $request->all();

        if ( $image = $request->file( 'image' ) ) {

            $destinationPath = public_path( 'images/offers/' );

            if ( !file_exists( $destinationPath ) ) {
                mkdir( $destinationPath, 0777, true );
            }
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move( $destinationPath, $imageName );
            $input['image'] = "$imageName";
        }

        Offer::create( [
            'title'  => $request->title,
            'slug'   => Str::slug( $request->title ),
            'image'  => $input['image'],
            'status' => $request->status ? 1 : 0,
        ] );

        return redirect()->route( 'offers.index' )->with( 'success', 'Offer created successfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $offer = Offer::find( $id );
        return view( 'offers.edit', compact( 'offer' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        $offer = Offer::find( $id );
        $request->validate( [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ] );

        if ( $image = $request->file( 'image' ) ) {

            // Delete previous image
            if ( $offer->image ) {
                $oldImagePath = public_path( 'images/offers/' ) . $offer->image;
                if ( file_exists( $oldImagePath ) ) {
                    unlink( $oldImagePath );
                }
            }

            $destinationPath = public_path( 'images/offers/' );
            $imageName       = time() . "." . $image->getClientOriginalExtension();
            $image->move( $destinationPath, $imageName );
            $offer->image = "$imageName";
            $offer->save();
        }

        $offer->update( [
            'title'  => $request->title,
            'slug'   => Str::slug( $request->title ),
            'status' => $request->status ? 1 : 0,
        ] );

        return redirect()->route( 'offers.index' )->with( 'success', 'Offer updated successfully' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $offer = Offer::find( $id );
        if ( $offer->image ) {
            $oldImagePath = public_path( 'images/offers/' ) . $offer->image;
            if ( file_exists( $oldImagePath ) ) {
                unlink( $oldImagePath );
            }
        }
        $offer->delete();
        return redirect()->route( 'offers.index' )->with( 'success', 'Offer deleted successfully' );
    }
}
