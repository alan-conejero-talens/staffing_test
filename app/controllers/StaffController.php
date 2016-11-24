<?php

class StaffController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$staff_data = [];
		$total_hours = Array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0);
		$staff = Rota_slot_staff::whereNotNull('staffid')->where('slottype','shift')->get();

		foreach ($staff as $s)
		{
			//IF THERE IS NO ENTRY FOR THIS USER, CREATE A NEW ONE
			if(!isset($staff_data[$s->staffid]))
			{	
				$staff_data[$s->staffid] = [];
			}

			//IF THERE IS NO ENTRY FOR THIS DAY ON THIS USER, CREATE A NEW ONE
			if(!isset($staff_data[$s->staffid][$s->daynumber]))
			{
				$staff_data[$s->staffid][$s->daynumber] = [];
			}

			//ADD WORKING HOURS INFORMATION FOR THIS USER/DAY
			$staff_data[$s->staffid][$s->daynumber] = $s->starttime.'-'.$s->endtime;

			//ADDDED TIME WORKED TODAY TO TOTAL HOURS OF THE DAY
			$total_hours[$s->daynumber] += $s->workhours;

		}

		return View::make('index_staff')
		->with('staff_data',$staff_data)
		->with('total_hours',$total_hours);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
