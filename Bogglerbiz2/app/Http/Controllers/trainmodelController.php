<?php

namespace App\Http\Controllers;

use App\Models\trainmodel;
use Illuminate\Http\Request;

class trainmodelController extends Controller
{
    public function index()
    {
        $trainedModel = trainmodel::latest()->get();
        return view('portal.aiModel.index', compact('trainedModel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048', // Adjust file types and size as needed
        ]);

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getSize();

            // Assuming authenticated user ID is associated with the model
            $trainModel = trainmodel::create([
                'file_name' => $fileName,
                'file_size' => $fileSize,
                'user_id' => auth()->id(),
            ]);

            // Move the uploaded file to a storage location
            $file->storeAs('uploads', $fileName); // Adjust storage location as needed

            // Perform any additional logic needed after storing the file

            return redirect()->back()->with('success', 'File uploaded successfully.');
        }

        return redirect()->back()->with('error', 'File upload failed.');
    }
}
