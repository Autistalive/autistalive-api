<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status,
            'support_level' => $this->support_level,
            'report_photo' => $this->report_photo,
            'face_photo' => $this->face_photo,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
