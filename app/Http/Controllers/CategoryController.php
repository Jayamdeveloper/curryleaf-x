<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){

        $categories = DB::table("category")->get();
        
        return view("category.list",compact("categories"));
    }
    public function addedit($id=null){

        if($id){
            $category = Category::find($id);
        }else{ 
            $category = null;
        }

        return view("category.addedit",compact("category"));
    }
    public function edit($id){

            $category = Category::find($id);
        
        return view("category.edit",compact("category","id"));
    }
    public function createCategory(Request $request){
    
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:category',
            'image' => 'required|image|mimes:jpg,jpeg,gif,png|max:2048',
        ],['name.unique' => 'Category Already Exists',
            'images.required' => 'The image field is required.',
            'images.image' => 'Please upload a valid image file.',
            'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
            'images.max' => 'Please upload an image within 2 MB.',
         ]);
      

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
          }

          $imagePath = public_path().'/admin/upload/category';
        
        if (!file_exists($imagePath)) 
                  {
                      mkdir($imagePath, 0755);
                  }        
                  $data = [];
        if ($request->hasFile('image')) 
            {
                $image = $request->file('image');
                $imageName = uniqid().'.'.$image->extension();
                $image->move($imagePath, $imageName);
                $data['image'] = $imageName;
            }

            $data['name'] = $request->name;
            Category::create($data);
            return redirect()->route('admin.category')->with('success','Your Data is successfully Created');
    }
    public function update(Request $request){
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'image|mimes:jpg,jpeg,gif,png|max:2048',
        ],[
            'images.required' => 'The image field is required.',
            'images.image' => 'Please upload a valid image file.',
            'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
            'images.max' => 'Please upload an image within 2 MB.',
         ]);
        $id = $request->input('id');
        $category = Category::where('id', $id)->get();
        //  dd($category);
        if($category[0]['name'] != $request->name)
            {    
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:category',],[
                'name.unique' => 'Category Already Exists',
                ]);
        }
         
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
          }

          $imagePath = public_path().'/admin/upload/category';
        
        if (!file_exists($imagePath)) 
                  {
                      mkdir($imagePath, 0755);
                  }        
                  $data = [];
        if ($request->hasFile('image')) 
            {
                $image = $request->file('image');
                $imageName = uniqid().'.'.$image->extension();
                $image->move($imagePath, $imageName);
                $data['image'] = $imageName;
            }
                $data['name'] = $request->name;
                $result = Category::find($id)->update($data);
          if($result){
            
            return redirect()->route('admin.category')->with('success','Your Data is successfully changed');
          }
          else{
            
            return redirect()->route('admin.category')->with('error','Failed to Edit the data');
          }
    }
    public function delete(Request $request, $id=null){

    
        $category = DB::table('category')->where('id',$id)->delete();
        if($category){
            return redirect()->back()->with('success','You\'re Data Has been Deleted');
        }else{
            return redirect()->back()->with('error','Failed to delete the data');
        }
    }




}
