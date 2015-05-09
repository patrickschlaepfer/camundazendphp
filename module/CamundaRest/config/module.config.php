<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'CamundaRest\Controller\CamundaRest' => 'CamundaRest\Controller\CamundaRestController',
        ),
    ),
	
	// The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'camunda-rest' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/camunda-rest[/:action][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'CamundaRest\Controller\CamundaRest',
                    	'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
 
	
    'view_manager' => array(
        'template_path_stack' => array(
            'camunda-rest' => __DIR__ . '/../view',
        ),
    ),
);