<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        /**
         * Digunakan untuk API, data yang ada dimasukkan ke object "data"
         * Data links digunakan untuk data tambahan yang mungkin digunakan custom pagination / metadata
         * "links":{
         *       "first": "http://example.com/users?page=1",
         *       "last": "http://example.com/users?page=1",
         *       "prev": null,
         *       "next": null
         *   },
         *   "meta":{
         *       "current_page": 1,
         *       "from": 1,
         *       "last_page": 1,
         *       "path": "http://example.com/users",
         *       "per_page": 15,
         *       "to": 10,
         *       "total": 10
         *   }
         */
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
