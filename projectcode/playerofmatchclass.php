<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="playerofmatch")
	**/
	class PlayerOfMatch{
		
		/** @Id @Column(type="integer") */
		protected $plyrofmtchid;
		
		/** @Column(type="string") */
		protected $name;
		
		/** @Column(type="string") */
		protected $ctryname;
		
		/** @Column(type="string") */
		protected $span;

		/** @Column(type="integer") */
		protected $matches;
		
		/** @Column(type="integer") */
		protected $awards;
		
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getplyrofmtchid(){
			return $this->plyrofmtchid;
		}
		
		public function getname(){
			return $this->name;
		}
		
		public function getctryname(){
			return $this->ctryname;
		}
		
		public function getspan(){
			return $this->span;
		}
		
		public function getmatches(){
			return $this->matches;
		}
		
		public function getawards(){
			return $this->awards;
		}
		
				
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setplyrofmtchid($cap){
			$this->plyrofmtchid = $cap;
		}
		
		public function setname($name){
			$this->name = $name;
		}
		
		public function setctryname($ctry){
			$this->ctryname = $ctry;
		}
		
		public function setspan($spa){
			$this->span = $spa;
		}
		
		public function setmatches($mat){
			$this->matches = $mat;
		}
		
		public function setawards($won){
			$this->awards = $won;
		}
		
		public function setmtype($mtype){
			$this->mtype = $mtype;
		}
	}
?>