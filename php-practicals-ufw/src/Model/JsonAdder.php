<?php 
	namespace Model;

	class JsonAdder{
		private $finder;

		public function __construct(){
			$this->finder = new JsonFinder();
		}

		public function addTweet($user,$message){
			$tweets = $this->finder->findAll();
	        $date = new \DateTime();
	        $date = $date->format(\DateTime::ISO8601);
	        $tweets[] = array('id' => sizeof($tweets),'date'=>$date, 'content' => $message,'user' => $user);
	        file_put_contents("../data/statuses.json", sprintf('%s', json_encode($tweets)));
		}
	}
?>
