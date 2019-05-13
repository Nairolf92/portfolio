<?php

use Symfony\Component\HttpFoundation\Request;
use SilexApi\User;
use SilexApi\Client;


// **************** ROUTES CLIENTS **************** //


//infos tous les clients
$app->get('/api/clients', function () use ($app) {
	$clients = $app['dao.client']->findAll();
	$responseData = array();
	foreach ($clients as $client) {
		$responseData[] = array(
			'id' => $client->getId(),
			'firstname' => $client->getFirstname(),
			'lastname' => $client->getLastName(),
			'adress' => $client->getAdress()
		);
	}

	return $app->json($responseData);
})->bind('api_clients');

//infos d'un client
$app->get('/api/client/{id}', function ($id, Request $request) use ($app) {
	$client = $app['dao.client']->find($id);
	if (!isset($client)) {
		$app->abort(404, 'User not exist');
	}

	$responseData = array(
		'id' => $client->getId(),
		'last_name' => $client->getLastname(),
		'first_name' => $client->getFirstname(),
		'adress' => $client->getAdress(),
		'city' => $client->getCity(),
		'zip_code' => $client->getZipcode(),
		'phone' => $client->getPhone(),
		'mobile_phone' => $client->getMobilephone(),
		'deleted' => $client->getDeleted()
	);

	return $app->json($responseData);
})->bind('api_client');

//create
$app->post('/api/client/create', function (Request $request) use ($app) {
	if (!$request->query->has('first_name') || 
		!$request->query->has('last_name') ||
		!$request->query->has('mobile_phone ') &&
		!$request->query->has('phone')  ) {
		return $app->json('Missing one of the following parameters: first_name, last_name, phone', 400);
	}

	$client = new Client();
	$client->setLastname($request->query->get('last_name'));
	$client->setFirstname($request->query->get('first_name'));
	$client->setAdress($request->query->get('adress'));
	$client->setCity($request->query->get('city'));
	$client->setZipcode($request->query->get('zip_code'));
	$client->setPhone($request->query->get('phone'));
	$client->setMobilephone($request->query->get('mobile_phone'));
	$client->setDeleted(0);
	$app['dao.client']->save($client);

	$responseData = array(
		'id' => $client->getId(),
		'last_name' => $client->getLastname(),
		'first_name' => $client->getFirstname(),
		'adress' => $client->getAdress(),
		'city' => $client->getCity(),
		'zip_code' => $client->getZipcode(),
		'phone' => $client->getPhone(),
		'mobile_phone' => $client->getMobilephone(),
		'deleted' => $client->getDeleted()
	);

	return $app->json($responseData, 201);
})->bind('api_client_add');

//delete
$app->post('/api/client/delete/{id}', function ($id, Request $request) use ($app) {
	$tmp = $app['dao.client']->delete($id);

	return $app->json('Client '.$id.' is deleted successfuly', 201);
})->bind('api_client_delete');

//update
$app->post('/api/client/update/{id}', function ($id, Request $request) use ($app) {
	$client = $app['dao.client']->find($id);

	if($request->query->get('first_name'))
		$client->setFirstname($request->query->get('first_name'));

	if($request->query->get('last_name'))
		$client->setLastname($request->query->get('last_name'));

	if($request->query->get('adress'))
		$client->setAdress($request->query->get('adress'));

	if($request->query->get('city'))
		$client->setCity($request->query->get('city'));

	if($request->query->get('zip_code'))
		$client->setZipcode($request->query->get('zip_code'));

	if($request->query->get('phone'))
		$client->setPhone($request->query->get('phone'));

	if($request->query->get('mobile_phone'))
		$client->setMobilephone($request->query->get('mobile_phone'));

	$app['dao.client']->save($client);
	$responseData = array(
		'id' => $client->getId(),
		'first_name' => $client->getFirstname(),
		'last_name' => $client->getLastname(),
		'adress' => $client->getAdress(),
		'city' => $client->getCity(),
		'zip_code' => $client->getZipcode(),
		'phone' => $client->getPhone(),
		'mobile_phone' => $client->getMobilephone(),
		'deleted' => $client->getDeleted()
	);

	return $app->json($responseData, 202);
})->bind('api_client_update');

// **************** ROUTES CLIENTS **************** //

//infos tous les users
$app->get('/api/users', function () use ($app) {
	$users = $app['dao.user']->findAll();
	$responseData = array();
	foreach ($users as $user) {
		$responseData[] = array(
			'id' => $user->getId(),
			'last_name' => $user->getLastname(),
			'first_name' => $user->getFirstname(),
			'login' => $user->getLogin(),
			'adress' => $user->getAdress(),
			'city' => $user->getCity(),
			'zip_code' => $user->getZipcode(),
			'phone' => $user->getPhone(),
			'mobile_phone' => $user->getMobilephone(),
			'id_role' => $user->getIdrole(),
			'deleted' => $user->getDeleted()
		);
	}

	return $app->json($responseData);
})->bind('api_users');

//infos d'un user
$app->get('/api/user/{id}', function ($id, Request $request) use ($app) {
	$user = $app['dao.user']->find($id);
	if (!isset($user)) {
		$app->abort(404, 'User not exist');
	}

	$responseData = array(
		'id' => $user->getId(),
		'last_name' => $user->getLastname(),
		'first_name' => $user->getFirstname(),
		'login' => $user->getLogin(),
		'adress' => $user->getAdress(),
		'city' => $user->getCity(),
		'zip_code' => $user->getZipcode(),
		'phone' => $user->getPhone(),
		'mobile_phone' => $user->getMobilephone(),
		'deleted' => $user->getDeleted()
	);

	return $app->json($responseData);
})->bind('api_user');