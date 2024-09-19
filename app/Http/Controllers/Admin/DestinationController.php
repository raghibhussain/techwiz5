<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function getAddDestinationPage()
    {
        return view('Pages.Admin.Destinations.Add', [
            'title' => 'Add Destination'
        ]);
    }

    public function AddDestination(Request $req)
    {


        $validate = $req->validate(
            [
                'DestinationName' => 'required|string',
                'destination_description' => 'required|string',
                'destination_location' => 'required|string',
                'destinationImage' => 'required|mimes:png,jpg,jpeg',
                'destinationImage1' => 'required|mimes:png,jpg,jpeg',
                'destinationImage2' => 'required|mimes:png,jpg,jpeg',
                'destinationImage3' => 'required|mimes:png,jpg,jpeg',
            ],
            [
                'DestinationName.required' => 'Please Enter Destination Name',
                'DestinationName.string' => 'What are you tryin to do, You Silly Human? 🥺',
                'destination_description.required' => 'Please Enter Destination Description',
                'destination_description.string' => 'What are you tryin to do, You Silly Human? 🥺',
                'destination_location.required' => 'Please Enter Destination Location ',
                'destination_location.string' => 'What are you tryin to do, You Silly Human? 🥺',
                'destinationImage.required' => 'Destination Image is required',
                'destinationImage.mimes' => 'Only Png, JPG And JPEG format is allowed',
                'destinationImage1.required' => 'Destination Image is required',
                'destinationImage1.mimes' => 'Only Png, JPG And JPEG format is allowed',
                'destinationImage2.required' => 'Destination Image is required',
                'destinationImage2.mimes' => 'Only Png, JPG And JPEG format is allowed',
                'destinationImage3.required' => 'Destination Image is required',
                'destinationImage3.mimes' => 'Only Png, JPG And JPEG format is allowed',
            ]
        );

        $destination = new Destinations;
        $destination->name = $validate['DestinationName'];
        $destination->description = $validate['destination_description'];
        $destination->location = $validate['destination_location'];
        $destination->image = $validate['destinationImage'];

        $imagePaths = [];

        if ($req->hasFile('destinationImage')) {
            $image = $req->file('destinationImage');
            $imageName = 'image_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/destinations'), $imageName);
            $imagePaths['image'] = 'uploads/destinations/' . $imageName;
        }

        if ($req->hasFile('destinationImage1')) {
            $image = $req->file('destinationImage1');
            $imageName = 'image2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/destinations'), $imageName);
            $imagePaths['image2'] = 'uploads/destinations/' . $imageName;
        }


        if ($req->hasFile('destinationImage2')) {
            $image = $req->file('destinationImage2');
            $imageName = 'image3_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/destinations'), $imageName);
            $imagePaths['image3'] = 'uploads/destinations/' . $imageName;
        }
        if ($req->hasFile('destinationImage3')) {
            $image = $req->file('destinationImage3');
            $imageName = 'image4_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/destinations'), $imageName);
            $imagePaths['image4'] = 'uploads/destinations/' . $imageName;
        }

        $destination->image = $imagePaths['image'];
        $destination->image2 = $imagePaths['image2'];
        $destination->image3 = $imagePaths['image3'];
        $destination->image4 = $imagePaths['image4'];
        $destination->save();

        return redirect()->route('Admin.Destination')->with('success', 'Destination added successfully!');
    }

    public function getDestinationPage(){
        $destinations = Destinations::all();
        return view('pages.Admin.Destinations.All', [
            'title' => 'All Destinations',
            'destinations' => $destinations
        ]);
    }
}
