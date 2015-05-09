<?php

namespace CamundaRest\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CamundaRestController extends AbstractActionController {
	
	public function getProcessDefinitionTable()
	{
		$camundaAPI = new \org\camunda\php\sdk\Api ( 'http://localhost:8180/engine-rest' );
		$processDefinitionRequest = new \org\camunda\php\sdk\entity\request\ProcessDefinitionRequest ();
		$processDefinitions = $camundaAPI->processDefinition->getDefinitions ( $processDefinitionRequest );
		return $processDefinitions;
	}
	
	public function indexAction() {
		
		return new ViewModel(array(
				'processDefinitions' => $this->getProcessDefinitionTable(),
		));
		
	}
}

?>