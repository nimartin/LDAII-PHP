<?php 
namespace Model;
use Exception\HttpException;

class InMemoryFinder implements FinderInterface{

	private $tweets;

	public function __construct(){
		$this->tweets = array("tweet1","tweet2","tweet3","tweet4","tweet5");
	}
	/**
     * Returns all elements.
     *
     * @return array
     */
    public function findAll(){
    	return $this->tweets;
    }

    /**
     * Retrieve an element by its id.
     *
     * @param  mixed      $id
     * @return null|mixed
     */
    public function findOneById($id){
        if($this->tweets[$id] == null)
            throw new HttpException(404,"not found");
    	return $this->tweets[$id];
    }

}