<?php

class CustomerController extends BaseController {

	public function __construct(){
		$this->beforeFilter('auth', array('only' => array(
    		'viewCustomerData', 'exportCustomerData'
    	)));
	}

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

		if($data['appointment']){
			$appointment_dt = date_create_from_format('d F Y - H:i', $data['appointment']);
			$customerData->appointment = $appointment_dt;
		}
		else {
			$customerData->appointment = null;
		}
		$customerData->save();

		if($customerData->appointment){
			$customerData->appointment = $customerData->appointment->format('d F Y - H:i');
		}
		else {
			$customerData->appointment = '-';
		}

		$subject = (string)('customer contact #'.$customerData->id);
		Mail::send('customers.email', array('data'=> $customerData), function($message) use ($subject){
        	$message->to('Privatepark3@gmail.com', 'AUTHOR - PRIVATE CONTACT')
        			->from('Privatepark3@gmail.com', 'PRIVATE PARK')
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

	public function deleteCustomerData(){
		$id = $_POST['id'];
		CustomerData::where('id', $id)->delete();
		return Redirect::to('/customerData');
	}
}
