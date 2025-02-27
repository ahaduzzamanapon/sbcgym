<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PackageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackageSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packageSections = PackageSection::all();
        return view('packageSections.index', compact('packageSections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packageSections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = public_path('images/packageSections/');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        PackageSection::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $input['image'],
            'status' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('packageSections.index')->with('success', 'Package Section created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packageSection = PackageSection::find($id);
        return view('packageSections.edit', compact('packageSection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $packageSection = PackageSection::find($id);
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($image = $request->file('image')) {
            // Delete previous image
            if ($packageSection->image) {
                $oldImagePath = public_path('images/packageSections/') . $packageSection->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $destinationPath = public_path('images/packageSections/');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $packageSection->image = "$imageName";
            $packageSection->save();
        }

        $packageSection->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'status' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('packageSections.index')->with('success', 'Package Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packageSection = PackageSection::find($id);
        if ($packageSection->image) {
            $oldImagePath = public_path('images/packageSections/') . $packageSection->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $packageSection->delete();
        return redirect()->route('packageSections.index')->with('success', 'Package Section deleted successfully');
    }
}
