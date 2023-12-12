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
            'student' => StudentResource::make($this->Siswa),
            'start_permission' => $this->dari,
            'end_permission' => $this->sampai,
            'information' => $this->keterangan,
            'description' => $this->deskripsi,
            'proof' => $this->bukti,
            'date' => Carbon::parse($this->tanggal)->format('d F Y'),
            'status' => $this->status,
        ];
    }
}
