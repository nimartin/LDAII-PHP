<?php

namespace Model;
use Exception\HttpException;

class JsonFinder implements FinderInterface{

	/**
     * Returns all elements.
     *
     * @return array
     */
    public function findAll(){
    	$json = file_get_contents("../data/statuses.json");
        return json_decode($json, true);
    }

    /**
     * Retrieve an element by its id.
     *
     * @param  mixed      $id
     * @return null|mixed
     */
    public function findOneById($id){
        $tweets = $this->findAll();
        foreach ($tweets as $key => $tweet) {
        	if($tweet['id'] == $id){
        		return $tweet;
        	}
        }
       throw new HttpException(404,"not found");
    }
}