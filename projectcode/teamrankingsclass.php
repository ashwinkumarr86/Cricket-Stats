<?php

	include("matchformats.php");
	include("teams.php");
	/**
	* @Entity @Table(name="teamrankings")
	**/
	class TeamRankings{
		
		/** @Id @Column(type="integer") */
		protected $teamrankrecid;
		
		/**
		* @ManyToOne(targetEntity="Teams")
		* @JoinColumn(name="teamrankname", referencedColumnName="teamname")
		**/
		protected $teamrankname;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;
		
		/** @Column(type="integer") */
		protected $matches;

		/** @Column(type="integer") */
		protected $points;
		
		/** @Column(type="integer") */
		protected $rating;
		

		public function getteamrankrecid(){
			return $this->teamrankrecid;
		}
		
		public function getteamrankname(){
			return $this->teamrankname;
		}
			
		public function getmtype(){
			return $this->mtype;
		}
		
		public function getmatches(){
			return $this->matches;
		}
		
		public function getpoints(){
			return $this->points;
		}
		
		public function getrating(){
			return $this->rating;
		}
		
		//Setter here		
		public function setteamrankrecid($id){
			 $this->teamrankrecid= $id;
		}
		
		public function setteamrankname($name){
			$this->teamrankname = $name;
		}
			
		public function setmtype($mt){
			$this->mtype = $mt;
		}
		
		public function setmatches($mt){
			$this->matches = $mt;
		}
		
		public function setpoints($po){
			$this->points = $po;
		}
		
		public function setrating($ra){
			$this->rating = $ra;
		}
	}
?>