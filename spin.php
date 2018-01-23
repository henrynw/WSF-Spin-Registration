<?php
# A basic example of a curl PHP interaction with the register API

# Set options

# Your API Key
$api_key = 'RByn2A8KID5Kblin6MpoO2FuN1XUlUceaVNXXnED';

# The API location
$api_host = 'https://2xakktt0pe.execute-api.us-east-1.amazonaws.com/prod/';

# The URL people are returned to after they successfully pay for their SPIN registration
$success_url = 'https://wsf-register.fpsquash.com/success.php';

# The URL people are returned to if they cancel their SPIN purchase
$cancel_url = 'https://wsf-register.fpsquash.com/cancel.php';

if(count($_POST) > 0) {

	if($_POST['action'] == 'register') {

		$arr = array(
			'first_name' => $_POST['first_name'],
			'middle_name' => ($_POST['middle_name'] != '') ? $_POST['middle_name'] : null,
			'last_name' => $_POST['last_name'],
			'email' => $_POST['email'],
			'gender' => $_POST['gender'],
			'date_of_birth' => $_POST['date_of_birth_year'] . '-' . $_POST['date_of_birth_month'] . '-' . $_POST['date_of_birth_day'],
			'address_line_1' => $_POST['address_line_1'],
			'address_line_2' => $_POST['address_line_2'],
			'address_city' => $_POST['address_city'],
			'address_state' => $_POST['address_state'],
			'address_postal_code' => $_POST['address_postal_code'],
			'address_country' => $_POST['address_country'],
			'representing_country' => $_POST['representing_country'],
			'passport_country' => $_POST['passport_country'],
			'phone_cell_country' => $_POST['phone_cell_country'],
			'phone_cell_value' => $_POST['phone_cell_value'],
			'phone_home_country' => $_POST['phone_home_country'],
			'phone_home_value' => $_POST['phone_home_value'],
			'phone_work_country' => $_POST['phone_work_country'],
			'phone_work_value' => $_POST['phone_work_value'],
			'success_url' => $success_url,
			'cancel_url' => $cancel_url
		);
		
		$fields = json_encode($arr);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_host . 'user/register');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'x-api-key: ' . $api_key,
			'Content-Type: application/json'
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = json_decode(curl_exec($ch));
		curl_close($ch);

		if($response->status == 'success') {
		
			header("Location: " . $response->data->purchase_url);

		}
		else if($response->status == 'error') {

			$error = true;
			include('register.php');

		}

	}
	else if($_POST['action'] == 'validate') {

	}

}
