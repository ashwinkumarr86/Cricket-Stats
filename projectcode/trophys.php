<?php
	include("matchformats.php");
	/**
	* @Entity @Table(name="trophy")
	**/
	class Trophy{
		
		/** @Id @Column(type="integer") */
		protected $trophy_id;
		
		/** @Column(type="string") */
		protected $trophyname;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;
		
		/** @Column(type="string") */
		protected $description;


		public function gettrophyid(){
			return $this->trophy_id;
		}
		
		public function gettrophyname(){
			return $this->trophyname;
		}
		
		public function getmtype(){
			return $this->mtype;
		}
		
		public function getdescription(){
			return $this->description;
		}
				
		public function settrophy_id($id){
			$this->trophy_id = $id;
		}
		
		public function settrophyname($name){
			$this->trophyname= $name;
		}
		
		public function setmtype($mtype){
			$this->mtype = $mtype;
		}
		
		public function setdescription($description){
			$this->description = $description;
		}
	}
?>