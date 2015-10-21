    <?php

     require 'vendor/autoload.php';

    $app = new \Slim\Slim();

    $app->view(new \JsonApiView());
    $app->add(new \JsonApiMiddleware());

     $app->get('/', function() use ($app) {
     	//
        $app->render(200,array(
                'msg' => 'Welcome to my json API!',
            ));
    });
     $app->run();
   //  header("Content-Type: application/json"); 
   // echo json_encode($app['message']); 
   // exit;
