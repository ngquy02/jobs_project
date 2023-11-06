<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    //GET Method
    public function index()
    {
        $companies = Jobs::all();
        return response()->json($companies);
    }

    //GET Method
    public function show($id)
    {
        $company = Jobs::find($id);

        if (!$company)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        return response()->json($company);
    }

    //POST Method
    public function store(Request $request)
    {
        $company = new Jobs();
        $company -> name = $request -> name;
        $company -> slug = $request -> authorId;
        $company -> logo = $request -> jobId;
        $company -> url = $request -> url;
        $company -> industry = $request -> industry;
        $company -> twitter = $request -> twitter;
        $company -> bio = $request -> bio;
        $company -> createdAt = $request -> createdAt;
        $company -> updatedAt = $request -> updatedAt;
        $company -> isArchived = $request -> isArchived;
        $company -> isActive = $request -> isActive;
        $company->save();

        return response()->json(['message' => 'Đã tạo thành công.', 'company' => $company], 201);
    }

    //PUT Method
    public function update(Request $request, $id)
    {
        $company = Jobs::find($id);

        if (!$company)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        $data = $request->all();
        $company->update($data);

        return response()->json(['message' => 'Cập nhật thành công.', 'company' => $company]);
    }

    //DELETE Method
    public function destroy($id)
    {
        $company = Jobs::find($id);

        if (!$company)
        {
            return response()->json(['message' => 'Bản ghi không tồn tại.'], 404);
        }

        $company->delete();

        return response()->json(['message' => 'Xóa thành công.']);
    }
}
