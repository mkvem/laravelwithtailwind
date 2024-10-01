<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Indicates if the resource's collection keys should be preserved.
     *
     * @var bool
     */
    public $preserveKeys = true;
    
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        //Custom column mana saja yang ingin dioutputkan sebagai toArray di JSON
        return [
            'id' => $this->id,
            'name' => $this->name,
            'body' => $this->body,
            //Jika ingin data tanggal diformat menggunakan Carbon
            'created_at' => Carbon::createFromDate($this->created_at)->format('d-M-Y H:i:s'),
            'updated_at' => $this->updated_at,
        ];
    }
}
