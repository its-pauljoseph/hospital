<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Appointment;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
        
        $image = $request->file;
        $imagename = time().'.'. $image->getClientoriginalExtension();
        $request->file->move('doctor_image', $imagename);
        $doctor->image = $imagename;

        $doctor->doctor = $request->doctor;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully.');
    }

    public function showappointments() {
        $data = appointment::all();


        return view('admin.showappointments', compact('data'));
    }

    public function approved($id) {
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();
        return redirect()->back();
    }

    public function canceled($id) {
        $data = appointment::find($id);
        $data->status = "Canceled";
        $data->save();
        return redirect()->back();
    }

    public function showdoctor() {
        $data = doctor::all();

        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id) {
        $data = doctor::find($id);

        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id){
        $doctor = doctor::find($id);

        $doctor->doctor = $request->doctor;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        
        $image = $request->file;
        
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctor_image', $imagename);
        $doctor->image = $imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Details updated successfully.');
    }
}
