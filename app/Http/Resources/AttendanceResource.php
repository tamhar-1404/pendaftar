<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'date' => Carbon::parse($this->created_at)->locale('id_ID')->isoFormat('DD MMMM Y'),
            'detail_attendances' => DetailAttendanceResource::collection($this->detailAttendances),
        ];
    }
}
