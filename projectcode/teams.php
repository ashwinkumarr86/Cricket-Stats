<?php
	/**
	* @Entity @Table(name="teams")
	**/
	class Teams{
		
		/** @Id @Column(type="string") */
		protected $teamname;
		
		/** @Column(type="string") */
		protected $abbrvteamname;
		
		/** @Column(type="string") */
		protected $nickname;
		
		/** @Column(type="string") */
		protected $governingbody;

		/** @Column(type="string") */
		protected $captain;
		
		/** @Column(type="string") */
		protected $coach;
		
		/** @Column(type="string") */
		protected $status;
		
		/** @Column(type="string") */
		protected $worldcuphistory;
		
		/** @Column(type="string") */
		protected $staus;

		public function getteamname(){
			return $this->teamname;
		}
		
		public function getabbrvteamname(){
			return $this->abbrvteamname;
		}
		
		public function getnickname(){
			return $this->nickname;
		}
		
		public function getgoverningbody(){
			return $this->governingbody;
		}
		
		public function  getcaptain(){
			return $this->captain;
		}
		
		public function getcoach(){
			return $this->coach;
		}
		
		public function getstatus(){
			return $this->status;
		}
		
		public function getworldcuphistory(){
			return $this->worldcuphistory;
		}
		
		public function getstaus(){
			return $this->staus;
		}
		
		public function setteamname($tem){
			$this->teamname = $tem;
		}
		
		public function setabbrvteamname($abbrv){
			$this->abbrvteamname= $abbrv;
		}
		
		public function setnickname($nick){
			$this->nickname = $nick;
		}
		
		public function setgoverningbody($body){
			$this->governingbody = $body;
		}
		
		public function setcaptain($cap){
			$this->captain = $cap;
		}
		
		public function setcoach($coa){
			$this->coach = $coa;
		}
		
		public function setstatus($sta){
			$this->status = $sta;
		}
		
		public function setworldcuphitory($world){
			$this->worldcuphistory = $world;
		}
		
		public function setstaus($sta){
			$this->staus =$sta;
		}
	}