<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Gallery;
use App\Models\Team;

class AdminController extends Controller
{
    public function index(){

        return view('admin.admin-view.admin-index');
    }
    public function spare_parts(){
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
            'name' => $request->input('name'), 
            'description' => $request->input('description'),
            'price' => $request->input('price'),
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
        $carData['image'] = implode(',', $imagePaths);
    
        // Now create the car 
        Car::create($carData);
    
        return redirect()->route('admin.part')->with('success', 'Task created successfully!');
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $car->name = $validatedData['name'];
        $car->description = $validatedData['description'];
        $car->price = $validatedData['price'];
    
      
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/images'), $imageName);
                $imagePaths[] = 'uploads/images/' . $imageName;
            }
            $car->image = implode(',', $imagePaths);
        }
    
        $car->save();
    
        return redirect()->route('admin.part')->with('success', 'Car updated successfully!');
    }


    public function gallery_index(){

        $photos = Gallery::all();

        return view('admin.admin-view.gallery.gallery-index', compact('photos'));
    }


    public function team_index(){

        $teams = Team::all();

        return view('admin.admin-view.team.team-index', compact('teams'));
    }

    public function addTeam(){
       
        return view('admin.admin-view.team.team-add');
    }

    public function saveTeam(Request $request) {
        $Data = [
            'name' => $request->input('name'), 
            'designation' => $request->input('designation'),
        ];
    
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/team/images'), $imageName);
            $Data['images'] = 'uploads/team/images/' . $imageName;
        }
    
        Team::create($Data);
    
        return redirect()->route('admin.team')->with('success', 'Task created successfully!');
    }

    public function editTeam($id)
    {
        $team = Team::find($id);
        
        if (!$team) {
            return redirect()->back()->with('error', 'Team not found!');
        }
        
        return view('admin.admin-view.team.team-edit', compact('team'));
    }

    public function updateTeam(Request $request, $id) {
        $team = Team::find($id);
        if (!$team) {
            return redirect()->back()->with('error', 'Team member not found!');
        }
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $team->name = $validatedData['name'];
        $team->designation = $validatedData['designation'];
    
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/team/images'), $imageName);
            $team->images = 'uploads/team/images/' . $imageName;
        }
    
        $team->save();
    
        return redirect()->route('admin.team')->with('success', 'Team updated successfully!');
    }
    
    public function deleteTeam(Request $request, $id)
    {
        $team = Team::find($id);
        if ($team) {
            $team->delete();
            return redirect()->back()->with('success', 'Team deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Team not found!');
        }
    }

    public function savePhoto(Request $request)
    {
            $request->validate([
                'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $image = $request->file('images');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gallery'), $imageName);

            Gallery::create([
                'image' => 'uploads/gallery/' . $imageName,
            ]);

        return redirect()->back()->with('success', 'Photo uploaded successfully!');
    }

    public function deletePhoto($id)
    {
        $photo = Gallery::find($id);
        if ($photo) {
            // Delete image file from storage
            if (file_exists(public_path($photo->image))) {
                unlink(public_path($photo->image));
            }
            $photo->delete();
        }

        return redirect()->back()->with('success', 'Photo deleted successfully!');
    }

}
