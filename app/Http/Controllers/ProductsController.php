<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view("products.listproducts", compact("products"));
    }

    public function addedit($id = null)
    {
        $category = Category::get();

        if ($id) {
            $product = Products::where('id', $id)->first();
            return view("products.addproducts", compact("category", "product"));
        }
        return view("products.addproducts", compact("category"));
    }
    public function saveproduct(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required|unique:products,name',
                'category' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'feature' => 'required',
                'tags' => 'required',
            ],
            [
                'name.unique' => 'Products Already Exists',
                'images.required' => 'The image field is required.',
                'images.image' => 'Please upload a valid image file.',
                'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
                'images.max' => 'Please upload an image within 2 MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $imagePath = public_path() . '/admin/upload/product';

        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755);
        }

        $data = [];
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $data['images'] = $imageName;
        }

        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['price'] = $request->price;
        $data['quantity'] = $request->quantity;
        $data['feature'] = $request->feature;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;

        $products = Products::create($data);

        if ($products) {
            return redirect()->route('products.index')->with('success', 'Your Data is successfully Created');
        } else {
            return redirect()->route('products.index')->with('error', 'Failed to Create Data');
        }
    }

    public function edit($id)
    {
        $category = Category::get();

        $product = Products::where('id', $id)->first();
        return view("products.editproducts", compact("category", "product"));

    }

    public function update(Request $request)
    {

        $id = $request->input("id");
        $validator = Validator::make(
            $request->all(),
            [
                // 'images'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required',
                'category' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'feature' => 'required',
                'tags' => 'required',
            ],
            [
                'name.unique' => 'Products Already Exists',
                'images.required' => 'The image field is required.',
                'images.image' => 'Please upload a valid image file.',
                'images.mimes' => 'Please upload only jpeg, png, jpg, gif.',
                'images.max' => 'Please upload an image within 2 MB.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imagePath = public_path() . '/admin/upload/product';

        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0755);
        }

        $data = [];
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move($imagePath, $imageName);
            $data['images'] = $imageName;
        }

        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['price'] = $request->price;
        $data['quantity'] = $request->quantity;
        $data['feature'] = $request->feature;
        $data['tags'] = $request->tags;
        $data['description'] = $request->description;

        $status = Products::find($id)->update($data);

        if ($status) {
            return redirect()->route('products.index')->with('success', 'Your Data is successfully Created');
        } else {
            return redirect()->route('products.index')->with('error', 'Failed to Create Data');
        }

    }
    public function delete($id)
    {

        Log::info($id);
        $product = DB::table('products')->where('id', $id)->delete();
        if ($product) {
            return redirect()->back()->with('success', 'You\'re Data Has been Deleted');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the data');
        }
    }
}
