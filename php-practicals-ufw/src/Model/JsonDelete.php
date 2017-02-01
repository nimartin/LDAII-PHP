<?php
namespace Model;
use Exception\HttpException;

class JsonDelete{

	private $finder;

	public function __construct(){
		$this->finder = new JsonFinder();
	}

	public function deleteTweet($id){
		$tweets = $this->finder->findAll();
		foreach ($tweets as $key=>$value) {
			if($value['id'] == $id){
				unset($tweets[$key]);
				file_put_contents("../data/statuses.json", sprintf('%s', json_encode($tweets)));
				return;
			}
		}
       throw new HttpException(404,"not found");
	}
		
}