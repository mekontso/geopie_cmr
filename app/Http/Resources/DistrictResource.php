<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        //By default we import all fields
        return parent::toArray($request);


        /*But we can format it as we like
        return [
            'id' => $this->id,
            'name' => $this->name
        ];*/

    }

    /**
     * This function adds some other informations with data
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_mail'=> 'mekontsoanderson@gmail.com'
        ];
    }
}
