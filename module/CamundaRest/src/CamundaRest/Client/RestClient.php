<?php

namespace CamundaRest\Client;

use Zend\Http\Request;
use Zend\Http\Client;
use Zend\Stdlib\Parameters;

class RestClient {
	
	public function getAll() {
		
		$request = new Request();
		$request->getHeaders()->addHeaders(array(
				'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8'
		));
		$request->setUri($someurl);
		$request->setMethod('POST');
		$request->setPost(new Parameters(array('someparam' => $somevalue)));
		
		$client = new Client();
		$response = $client->dispatch($request);
		$data = json_decode($response->getBody(), true);
		
	}
	
}

?>