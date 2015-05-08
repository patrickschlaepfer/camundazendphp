<?php

return array(
     'controllers' => array(
         'invokables' => array(
             'Camunda\Controller\Camunda' => 'Camunda\Controller\CamundaController',
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'camunda' => __DIR__ . '/../view',
         ),
     ),
 );


?>