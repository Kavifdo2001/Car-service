<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class AdminController extends Controller
{
    public function index(){

        return view('admin.admin-view.admin-index');
    }
    public function gallery(){
        $cars=Car::all();
        return view('admin.admin-view.admin-gallery',compact('cars'));
    }
    public function addGallery(){
        $cars=Car::all();
        return view('admin.admin-view.add-galery-data',compact('cars'));
    }
    public function editGallery($id)
    {
        $car = Car::find($id);
        
        if (!$car) {
            return redirect()->back()->with('error', 'Car not found!');
        }
        
        return view('admin.admin-view.edit-gallery-data', compact('car'));
    }
    public function saveData(Request $request) {
        $carData = [
            'car_name' => $request->input('car_name'), 
            'car_description' => $request->input('car_description'),
            'car_price' => $request->input('car_price'),
        ];
    
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/images'), $imageName);
                $imagePaths[] = 'uploads/images/' . $imageName;
            }
        }
    
        // Add image paths as a string to the car data
        $carData['car_image'] = implode(',', $imagePaths);
    
        // Now create the car
        Car::create($carData);
    
        return redirect()->route('admin.gallery')->with('success', 'Task created successfully!');
    }
    
    public function deleteCar(Request $request, $id)
    {
        $car = Car::find($id);
        if ($car) {
            $car->delete();
            return redirect()->back()->with('success', 'Car deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Car not found!');
        }
    }
    public function updateCar(Request $request, $id) {
        $car = Car::find($id);
        if (!$car) {
            return redirect()->back()->with('error', 'Car not found!');
        }
    
        $validatedData = $request->validate([
            'car_name' => 'required|string|max:255',
            'car_description' => 'required|string',
            'car_price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $car->car_name = $validatedData['car_name'];
        $car->car_description = $validatedData['car_description'];
        $car->car_price = $validatedData['car_price'];
    
      
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/images'), $imageName);
                $imagePaths[] = 'uploads/images/' . $imageName;
            }
            $car->car_image = implode(',', $imagePaths);
        }
    
        $car->save();
    
        return redirect()->route('admin.gallery')->with('success', 'Car updated successfully!');
    }
    

}
