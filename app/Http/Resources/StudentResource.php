<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [

            'id' => $this->id,
            'student_name' => $this->student_name,
            'is_active' => (bool) $this->is_active,
            'created_by' => $this->created_by
        ];
    }
}
