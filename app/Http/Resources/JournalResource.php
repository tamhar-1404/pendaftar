<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class JournalResource extends JsonResource
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
            'student' => StudentResource::make($this->siswa),
            'date' => Carbon::parse($this->tanggal)->format('d F Y'),
            'activity' => $this->kegiatan,
            'image' => asset('storage/image/' . $this->image),
            'status' => $this->status,
        ];
    }
}
