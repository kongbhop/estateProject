<?php


class CustomerData extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customer_data';
	protected $fillable = array('firstname', 'lastname', 'email', 'mobile', 'description', 'appointment');

	public function toArray(){
		return array(
			'id'=> $this->id,
			'firstname'=> $this->firstname,
			'lastname'=> $this->lastname,
			'email'=> $this->email,
			'mobile'=> $this->mobile,
			'description'=> $this->description,
			'appointment'=> $this->appointment
		);
	}

	public static function exportData($customers){
		$contents = array();
		foreach ($customers as $each_customer) {
			$contents[] = array(
				'id'=> $each_customer['id'],
				'firstname'=> $each_customer['firstname'],
				'lastname'=> $each_customer['lastname'],
				'mobile'=> $each_customer['mobile'],
				'email'=> $each_customer['email'],
				'description'=> $each_customer['description']
			);
		}

		$filename = "exportdata.csv";

		$file = fopen($filename, 'w');
		fputs($file, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
		
		if(!$contents)
			fputcsv($file, ["NOT HAVE DATA"]);

		$header = [
			'ref#',
			'firstname',
			'lastname',
			'mobile',
			'email',
			'description',
		];
		fputcsv($file, $header);

		foreach($contents as $each_content){
			fputcsv($file, $each_content);
		}

		fclose($file);

		return $filename;
	}
}
