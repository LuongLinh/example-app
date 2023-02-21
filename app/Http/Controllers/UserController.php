<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utilities\StatusCodes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $user = User::create($request->all())->toArray();
        if ($user) {
            return $this->successResponse($user, "Create user successfully");
        }
        return $this->errorResponse("Create user faild", StatusCodes::INTERNAL_SERVER_ERROR);
    }

    public function update(Request $request, ?string $id): JsonResponse
    {
        $user = User::find($id);
        if (!$user) {
            return $this->errorResponse("User not found", StatusCodes::NOT_FOUND);
        }
        if ($user->update($request->all())) {
            return $this->successResponse("Update user successfully");
        }

        return $this->errorResponse("Update user faild", StatusCodes::INTERNAL_SERVER_ERROR);
    }

    public function delete(string $id): JsonResponse
    {
        $user = User::find($id);
        if (!$user) {
            return $this->errorResponse("User not found", StatusCodes::NOT_FOUND);
        }
        
        if ($user->delete()) {
            return $this->successResponse("Delete user successfully");
        }
        
        return $this->errorResponse("Update user faild", StatusCodes::INTERNAL_SERVER_ERROR);
    }
}
