<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Package_class;
use App\Http\Controllers\Controller;


class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Package_class::all();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
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

            $destinationPath = public_path('images/classes/');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Package_class::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $input['image'],
            'status' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('packageClasses.index')->with('success', 'Class created successfully');
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
        $class = Package_class::find($id);
        return view('classes.edit', compact('class'));
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
        $class = Package_class::find($id);
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($image = $request->file('image')) {

            // Delete previous image
            if ($class->image) {
                $oldImagePath = public_path('images/classes/') . $class->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $destinationPath = public_path('images/classes/');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $class->image = "$imageName";
            $class->save();
        }

        $class->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'status' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('packageClasses.index')->with('success', 'Class updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Package_class::find($id);
        if ($class->image) {
            $oldImagePath = public_path('images/classes/') . $class->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $class->delete();
        return redirect()->route('packageClasses.index')->with('success', 'Class deleted successfully');
    }
}
