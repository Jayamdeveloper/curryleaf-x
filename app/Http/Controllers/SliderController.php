<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::get();
        return view("home.slider", compact("slider"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.addSlider");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
                'title_1' => 'required',
                'title_2' => 'required',
            ],
            [
                'images.required' => 'The image field is required.',
                'images.image' => 'Please upload a valid image file.',
                'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
                //    'images.max' => 'Please upload an image within 2 MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = public_path() . '/assets/upload/home';

        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        $data = [];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $data['image'] = $imageName;
        }

        $data['title_1'] = $request->title_1;
        $data['title_2'] = $request->title_2;
        $data['content'] = $request->content;

        $products = Slider::create($data);

        if ($products) {
            return redirect()->route('slider.index')->with('success', 'Your Data is successfully Created');
        } else {
            return redirect()->route('slider.index')->with('error', 'Failed to Create Data');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::where('id', $id)->first();
        return view("home.addSlider", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'title_1' => 'required',
                'title_2' => 'required',
            ],
            [
                'images.required' => 'The image field is required.',
                'images.image' => 'Please upload a valid image file.',
                'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
                //    'images.max' => 'Please upload an image within 2 MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = public_path() . '/assets/upload/home';

        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755, true);
        }

        $data = [];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $data['image'] = $imageName;
        }

        $data['title_1'] = $request->title_1;
        $data['title_2'] = $request->title_2;
        $data['content'] = $request->content;

        $products = Slider::find($id)->update($data);

        if ($products) {
            return redirect()->route('slider.index')->with('success', 'Your Data is successfully Changed');
        } else {
            return redirect()->route('slider.index')->with('error', 'Failed to Update the Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function delete($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('slider.index')->with('error', 'Slider not found.');
        }

        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully.');
    }

    public function status(Request $request)
    {

        $id = $request->input('id');

        if ($status = $request->input('status')) {
            $slider = Slider::findOrFail($id);
            $slider->status = $status;
            $slider->save();
            return response()->json(['message' => 'Slider status updated successfully']);
        } else {
            return response()->json(['message' => 'Slider update Failed']);
        }
    }
}
