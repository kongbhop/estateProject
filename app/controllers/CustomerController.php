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

		$subject = (string)('customer contact #'.$customerData->id);

		Mail::send('customers.email', array('data'=> $customerData), function($message) use ($subject){
        	$message->to('private.park.test@gmail.com', 'AUTHOR - PRIVATE CONTACT')
        			->subject($subject);
    	});

		return Redirect::to('/');
	}

	public function viewCustomerData()
	{
		$customers = CustomerData::orderBy('id', 'DESC')->get();
		$customers = $customers->toArray();

		return View::make('customers.viewData')->with('customers', $customers);
	}

	public function exportCustomerData(){
		$customers = CustomerData::orderBy('id')->get();
		$customers = $customers->toArray();
		$filename = CustomerData::exportData($customers);
		
		return Response::download(public_path($filename));
	}
}
