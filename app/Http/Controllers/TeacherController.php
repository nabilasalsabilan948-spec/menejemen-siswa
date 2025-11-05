<?php

namespace App\Http\Controllers;


use  Illuminate\Http\RedirectResponse;
use  Illuminate\Http\Response;
 use App\Models\Teacher;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index():View
    {
        $Teachers = Teacher::all();
         return view('teachers.index')->with('teachers',$Teachers);
    }
    /**
     * Show the form for creating a new resource.
     */
   public function create(): View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'address' => 'nullable|string',
        'mobile'  => 'nullable|string',
    ]);

    Teacher::create($validated);

    return redirect()->route('teachers.index')->with('success','Teacher created');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teacher);
    }


    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id): RedirectResponse
    {
         $teacher =Teacher::find($id);
        $input = $request->all();
         $teacher->update($input);
        return redirect('teachers')->with('flash_message', 'teachers Updated!');  
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'teachers deleted!');  
    }
}
