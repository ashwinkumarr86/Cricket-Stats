<?php

	include("matchformats.php");
	include ("teams.php");
	/**
	* @Entity @Table(name="matchresults")
	**/
	class MatchResults{
		
		/** @Id @Column(type="integer") 
		* @GeneratedValue
		*/
		protected $matchid;
		
		/**
		* @ManyToOne(targetEntity="Teams")
		* @JoinColumn(name="teamone", referencedColumnName="teamname")
		**/
		protected $teamone;
		
		/**
		* @ManyToOne(targetEntity="Teams")
		* @JoinColumn(name="teamtwo", referencedColumnName="teamname")
		**/
		protected $teamtwo;
		
		/** @Column(type="string") */
		protected $winner;

		/** @Column(type="string") */
		protected $margin;
		
		/** @Column(type="string") */
		protected $ground;
		
		/** @Column(type="string") */
		protected $matchdate;
		
		/** @Column(type="string") */
		protected $scorecardurl;
		
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getmatchid(){
			return $this->matchid;
		}
		
		public function getteamone(){
			return $this->teamone;
		}
		
		public function getteamtwo(){
			return $this->teamtwo;
		}
		
		public function getwinner(){
			return $this->winner;
		}
		
		public function getmargin(){
			return $this->margin;
		}
		
		public function getground(){
			return $this->ground;
		}
		
		public function getmatchdate(){
			return $this->matchdate;
		}
		
		public function getscorecardurl(){
			return $this->scorecardurl;
		}
		
		
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setmatchid($id){
			$this->matchid = $id;
		}
		
		public function setteamone($name){
			$this->teamone = $name;
		}
		
		public function setteamtwo($name){
			$this->teamtwo = $name;
		}
		
		public function setwinner($win){
			$this->winner = $win;
		}
		
		public function setmargin($mar){
			$this->margin = $mar;
		}
		
		public function setground($grou){
			$this->ground = $grou;
		}
		
		public function setmatchdate($dat){
			$this->matchdate = $dat;
		}
		
		public function setscorecardurl($url){
			$this->scorecardurl = $url;
		}
		
		public function setmtype($mtype){
			$this->mtype = $mtype;
		}
	}
?>