<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistrictResource;
use App\Models\District;
use Illuminate\Http\Request;


class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $result = [];
    public function index()
    {
        // Get districts with pagination

        $districts = District::paginate(10);

        return DistrictResource::collection($districts);
    }

    /**
     * Update/Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If we have a put request we add an id else we create a new district

        $district = $request->isMethod('put') ? District::findOrFail($request->district_id) : new District();

        $district->id = $request->input('district_id');
        $district->name = $request->input("name");
        if ($district->save()){
            $this->result['error'] = false;
            return new DistrictResource($this->result);
        }else{
            $this->result['error'] = true;
            return new DistrictResource($this->result);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get district
        $district = District::findOrFail($id);
        return new DistrictResource($district);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $district = District::findOrFail($id);
        if ($district->delete()){
            $this->result['error'] = false;
            return new DistrictResource($this->result);
        }else{
            $this->result['error'] = true;
            return new DistrictResource($this->result);
        }

    }
}
