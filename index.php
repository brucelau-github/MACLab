<?php
if (!session_id()) {
    session_start();
}
// require_once __DIR__ . '/vendor/autoload.php';

// $klein = new \Klein\Klein();

// $klein->respond('GET', '/hello-world', function () {
//     return 'Hello World!';
// });

// $klein->dispatch();

// // $klein->respond('/[:name]', function ($request) {
// //     return 'Hello ' . $request->name;
// // });

// // $klein->respond('GET', '/posts', $callback);
// // $klein->respond('POST', '/posts', $callback);
// // $klein->respond('PUT', '/posts/[i:id]', $callback);
// // $klein->respond('DELETE', '/posts/[i:id]', $callback);
// // $klein->respond('OPTIONS', null, $callback);

// // // To match multiple request methods:
// // $klein->respond(array('POST','GET'), $route, $callback);

// // // Or you might want to handle the requests in the same place
// // $klein->respond('/posts/[create|edit:action]?/[i:id]?', function ($request, $response) {
// //     switch ($request->action) {
// //         //
// //     }
// // });
// //default router
// $klein->respond(function () {
// 	header('Location:/login.php');
// });
	header('Location:/login.php');
?>