<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function __construct(
        private readonly UserService $service,
    ) {}

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $user = $this->service->create($request->all());
        dd($user);

        return new JsonResponse(
            data: [
                'message' => __('user.created'),
                'data' => UserResource::make($user)
            ]
        );
    }
}
