<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="captains")
	**/
	class Captains{
		
		/** @Id @Column(type="integer") */
		protected $captainrecid;
		
		/** @Column(type="string") */
		protected $name;
		
		/** @Column(type="string") */
		protected $ctryname;
		
		/** @Column(type="string") */
		protected $span;

		/** @Column(type="integer") */
		protected $matches;
		
		/** @Column(type="integer") */
		protected $won;
		
		/** @Column(type="integer") */
		protected $lost;
		
		/** @Column(type="integer") */
		protected $tied;
		
		/** @Column(type="integer") */
		protected $noresult;
		
		/** @Column(type="integer") */
		protected $draw;
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $win_loss_ratio;
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $win_percent;
		
		/** @Column(type="decimal", precision=2,scale =5) */
		protected $loss_percent;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getcaptainrecid(){
			return $this->captainrecid;
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
		
		public function getwon(){
			return $this->won;
		}
		
		public function getlost(){
			return $this->lost;
		}
		
		public function gettied(){
			return $this->tied;
		}
		
		public function getnoresult(){
			return $this->noresult;
		}
		
		public function getdraw(){
			return $this->draw;
		}
		
		public function getwinlossratio(){
			return $this->win_loss_ratio;
		}	
		
		public function getwinpercent(){
			return $this->win_percent;
		}
		
		public function getlosspercent(){
			return $this->loss_percent;
		}
		
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setcaptainrecid($cap){
			$this->captainrecid = $cap;
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
		
		public function setwon($won){
			$this->won = $won;
		}
		
		public function setlost($lost){
			$this->lost = $lost;
		}
		
		public function settied($tied){
			$this->tied = $tied;
		}
		
		public function setnoresult($nor){
			$this->noresult = $nor;
		}
		
		public function setdraw($draw){
			$this->draw = $draw;
		}
		
		public function setwinlossratio($rat){
			 $this->win_loss_ratio = $rat;
		}	
		
		public function setwinpercent($win){
			 $this->win_percent =$win;
		}
		
		public function setlosspercent($los){
			 $this->loss_percent = $los;
		}
		
		public function setmtype($mtype){
			$this->mtype = $mtype;
		}
	}
?>