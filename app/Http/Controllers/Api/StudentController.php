<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Siswa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * index
     *
     * @param  mixed $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $data = Siswa::whereNull('status')
        ->when($request->student, function ($query) use ($request) {
            $query->where('name', 'LIKE', '%'.$request->student.'%');
        })
        ->whereNot('id', auth()->user()->student_id)
        ->get();
        return ResponseHelper::success(StudentResource::collection($data));
    }
}
