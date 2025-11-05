<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  Illuminate\Http\RedirectResponse;
use  Illuminate\Http\Response;
 use App\Models\Enrollment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $enrollments = Enrollment::with(['batch', 'student'])->get();
    return view('enrollments.index')->with('enrollments', $enrollments);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // ambil data batch dan student biar bisa dipilih di form
    $batches = \App\Models\Batch::all();
    $students = \App\Models\Student::all();

    return view('enrollments.create', compact('batches', 'students'));
}


    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $input = $request->all();

    // kalau join_date kosong, isi otomatis hari ini
    if (empty($input['join_date'])) {
        $input['join_date'] = now();
    }

    Enrollment::create($input);

    return redirect('enrollments')->with('success', 'Enrollment Added!');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', ' enrollments deleted!');  
    }
}
