<?php


	/**
	* @Entity @Table(name="matchformat")
	**/
	class MatchFormat{
		
		/** @Id @Column(type="string") */
		protected $matchtype;
		
		/** @Column(type="string") */
		protected $formatname;
		
		/** @Column(type="string") */
		protected $description;
		
		/** @Column(type="string") */
		protected $firstmatch;

		/** @Column(type="string") */
		protected $currentleader;

		public function getmatchtype(){
			return $this->matchtype;
		}
		
		public function getformatname(){
			return $this->formatname;
		}
		
		
		public function getdescription(){
			return $this->description;
		}
		
		public function getfirstmatch(){
			return $this->firstmatch;
		}
		
		public function getcurrentleader(){
			return $this->currentleader;
		}
		
				
		public function setmatchtype($mtype){
			$this->matchtype = $mtype;
		}
		
		public function setformatname($name){
			$this->formatname= $name;
		}
		
		public function setfirstmatch($fmatch){
		
			$this->firstmatch = $fmatch;
		}
		
		public function setdescription($description){
			$this->description = $description;
		}
		
		public function setcurrentleader($leader){
			$this->currentleader = $leader;
			
		}
	}
?>