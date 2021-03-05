<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SignatureResource extends Resource
{
    /*
     _ Transform the resource into an array.
     _
     _ @param  \Illuminate\Http\Request
     _ @return array
     _*/
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'avatar' => $this->avatar,
            'body' => $this->body,
            'date' => $this->created_at->diffForHumans()
        ];
    }
}