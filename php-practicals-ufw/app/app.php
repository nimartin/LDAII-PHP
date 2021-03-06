<?php

require __DIR__ . '/../vendor/autoload.php';

// Config
$debug = true;

$app = new \App(new View\TemplateEngine(
    __DIR__ . '/templates/'
), $debug);


/**
 * Index
 */
$app->get('/', function (Http\Request $request) use ($app) {
    return $app->render('index.php');
});

// Create
$app->post('/tweets', function (Http\Request $request) use ($app) {
	$user = $request->getParameter('username');
	$content = $request->getParameter('message');
	$adder = new Model\JsonAdder();
	$adder->addTweet($user,$content);
    $app->redirect('/tweets');
});
// Read
$app->get('/tweets', function(Http\Request $request) use ($app){
	$memory =  new Model\JsonFinder();
	return $app->render('ListTweets.php',['tweets' => $memory->findAll()]);
});
$app->get('/tweets/(\d+)', function(Http\Request $request,$id) use ($app){
	$memory =  new Model\JsonFinder();
	return $app->render('OneTweet.php',['tweet' => $memory->findOneById($id)]);
});

$app->delete('/tweets/(\d+)', function (Http\Request $request, $id) use ($app) {
	$deleter = new Model\JsonDelete();
	$deleter->deleteTweet($id);
	$app->redirect('/tweets');
});

return $app;
