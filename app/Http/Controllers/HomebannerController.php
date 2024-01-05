<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class HomebannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::get();
        return view("home.testimonial",compact("testimonial"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.addTestimonial");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }   
        
            $testimonial = Testimonial::create($request->all());

            if($testimonial){
                return redirect()->route('homebanner.index')->with('success','Your Data is successfully Created');
            }else{
                return redirect()->route('homebanner.index')->with('error','Failed to Create Data');
            }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view("home.addTestimonial",compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content'=> 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $products = Testimonial::find($id)->update($request->all());

        if($products){
            return redirect()->route('homebanner.index')->with('success','Your Data is successfully Updated');
        }else{
            return redirect()->route('homebanner.index')->with('error','Failed to Update Data');
        }  
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete( $id)
    {
        $slider = Testimonial::find($id);

        if (!$slider) {
            return redirect()->route('homebanner.index')->with('error', 'Testimonial not found.');
        }
        $slider->delete();
        return redirect()->route('homebanner.index')->with('success', 'Testimonial deleted successfully.');
    }

    public function status(Request $request){
        
        $id = $request->input('id');
        Log::info($id);
        if($status = $request->input('status') )
        {
            $slider =Testimonial::findOrFail($id);
            $slider->status = $status;
            $slider->save();
            return response()->json(['message' => 'Testimonial status updated successfully']);
        }else{
            return response()->json(['message' => 'Testimonial update Failed']);
        }
    }
}
