<?php

class CustomerController extends BaseController {
	
	public function requestData(){
		return View::make('customers.requestData');
	}

	public function handleRequestData(){
		$data = Input::all();

		$customerData = new CustomerData;
		$customerData->firstname = $data['firstname'];
		$customerData->lastname = $data['lastname'];
		$customerData->email = $data['email'];
		$customerData->mobile = $data['mobile'];
		$customerData->description = $data['description'];
		$customerData->save();

		return Response::json($customerData);
	}

	public function viewCustomerData()
	{
		return View::make('customers.viewData');
	}

	public function exportCustomerData(){
		return 'welcome to export eiei';
	}
}
