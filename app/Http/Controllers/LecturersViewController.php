<?php

namespace App\Http\Controllers;

use App\Models\ClassAllocation;
use App\Models\ClassMaterial;
use App\Models\UnitAllocation;
use Illuminate\Http\Request;

class LecturersViewController extends Controller
{
    public function index()
    {
        $lec_classes = ClassAllocation::where('lecturer', '=', 1)->get();
        $context = ['classes' => $lec_classes];

        return view('lecturers/index', $context);
    }

    public function class_index($id)
    {
        return redirect()->route('class_materials',['id'=>$id]);
    }

    public function class_materials($id)
    {   
        $class = ClassAllocation::query()->with(['unit_','group_'])->find($id);
        $class_materials = ClassMaterial::where('class', $id)->get();

        $materials = ['materials' => $class_materials,'class'=>$class];
        return view('lecturers/materials', $materials);
    }

    public function add_material(Request $request){

        $name = $request->get('name');
        $description = "";
        $file_url =$request->get('file_url','');
        $class = $request['class'];
        // error_log($class);
        $material = ClassMaterial::create($request->all());
        $id = $request->get('class');
        return redirect()->route('class_materials',['id'=>$class]);
    }
}
