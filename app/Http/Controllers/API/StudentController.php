<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller

{
    /**
     * Display a listing of the resource.
     */

    const PATH_UPLOAD = 'students';
    public function index()
    {

        try {
            $data = Student::query()->latest('id')->paginate(3);
            return response()->json($data);
        } catch (Exception $exception) {
            Log::error("message");
            return response()->json($data);
        }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     $majors = Majors::query()
    //         ->latest()
    //         ->pluck('name', 'id')
    //         ->all();
    //     return view(self::PATH_VIEW . __FUNCTION__, compact('majors'));
    // }


    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = $request->except('img');
    //     if ($request->hasFile('img')) {
    //         $data['img'] = Storage::put(self::PATH_UPLOAD, $request->file('img'));
    //     }
    //     Student::query()->create($data);
    //     return back()->with('msg', 'thêm thành công');
    // }


    // public function edit(Student $student)
    // {
    //     $majors = Majors::query()
    //         ->latest()
    //         ->pluck('name', 'id')
    //         ->all();
    //     return view(self::PATH_VIEW . __FUNCTION__, compact('student', 'majors'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     $student->update($request->all());
    //     return back()->with('msg', 'sửa thành công');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Student $student)
    // {
    //     $student->delete();
    //     return back()->with('msg', 'sửa thành công');
    // }
}
