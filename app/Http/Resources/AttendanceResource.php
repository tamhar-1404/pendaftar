<?php

namespace App\Http\Resources;

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
            'student' => StudentResource::make($this->Siswa),
            'start_permission' => $this->dari,
            'end_permission' => $this->sampai,
            'information' => $this->keterangan,
            'description' => $this->deskripsi,
            'proof' => $this->bukti,
            'date' => $this->tanggal,
            'status' => $this->status,
        ];
    }
}
