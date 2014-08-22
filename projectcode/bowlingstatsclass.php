<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="bowlingstats")
	**/
	class BowlingStats{
		
		/** @Id @Column(type="integer") */
		protected $bowlingstatid;
		
		/** @Column(type="string") */
		protected $bowlername;
		
		/** @Column(type="string") */
		protected $country;
		
		/** @Column(type="string") */
		protected $span;

		/** @Column(type="integer") */
		protected $matches;
		
		/** @Column(type="integer") */
		protected $innings;
		
		/** @Column(type="integer") */
		protected $overs;
		
		/** @Column(type="integer") */
		protected $maiden_overs;
		
		/** @Column(type="integer") */
		protected $runs_against;
		
		/** @Column(type="integer") */
		protected $wickets;
		
		/** @Column(type="string") */
		protected $bestbowlinginng;
		
		/** @Column(type="string") */
		protected $bestbowlingmatch;
		
		/** @Column(type="decimal", precision=2, scale=5) */
		protected $average;
		
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $economy;
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $strikerate;
		
		/** @Column(type="integer") */
		protected $fourwktinmtch;
		
		/** @Column(type="integer") */
		protected $fivewktinmtch;
		
		/** @Column(type="integer") */
		protected $tenwktinmtch;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getbowlingstatid(){
			return $this->bowlingstatid;
		}
		
		public function getbowlername(){
			return $this->bowlername;
		}
		
		public function getcountry(){
			return $this->country;
		}
		
		public function getspan(){
			return $this->span;
		}
		
		public function getmatches(){
			return $this->matches;
		}
		
		public function getinnings(){
			return $this->innings;
		}
		
		public function getovers(){
			return $this->overs;
		}
		
		public function getmaiden_overs(){
			return $this->maiden_overs;
		}
				
		public function getruns_against(){
			return $this->runs_against;
		}
		
		public function getwickets(){
			return $this->wickets;
		}	
		
		public function getbestbowlinginng(){
			return $this->bestbowlinginng;
		}
		
		public function getbestbowlingmatch(){
			return $this->bestbowlingmatch;
		}
		
		public function getaverage(){
			return $this->average;
		}
		
		public function geteconomy(){
			return $this->economy;
		}
		
		public function getstrikerate(){
			return $this->strikerate;
		}
		
		public function getfourwktinmtch(){
			return $this->fourwktinmtch;
		}
		
		public function getfivewktinmtch(){
			return $this->fivewktinmtch;
		}
		
		public function gettenwktinmtch(){
			return $this->tenwktinmtch;
		}
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setbowlingstatid($id){
			$this->bowlingstatid =$id;
		}
		
		public function setbowlername($bat){
			$this->bowlername = $bat;
		}
		
		public function setcountry($cou){
			$this->country = $cou;
		}
		
		public function setspan($span){
			$this->span = $span;
		}
		
		public function setmatches($mat){
			$this->matches = $mat;
		}
		
		public function setinnings($inn){
			$this->innings = $inn;
		}
		
		public function setovers($overs){
			$this->overs = $overs;
		}
		
		public function setmaiden_overs($maiden){
			$this->maiden_overs = $maiden;
		}
		
		public function setruns_against($runs){
			$this->runs_against = $runs;
		}
		
		public function setwickets($wickets){
			$this->wickets = $wickets;
		}
	
		public function setbestbowlinginng($inng){
			$this->bestbowlinginng = $inng;
		}
		
		public function setbestbowlingmatch($mat){
			$this->bestbowlingmatch = $mat;
		}
		
		public function setaverage($avg){
			$this->average = $avg;
		}	
		
		public function seteconomy($eco){
			$this->eco = $eco;
		}
		
		public function setstrikerate($rate){
			$this->strikerate = $rate;
		}
		
		public function setfourwktinmtch($mt){
			$this->fourwktinmtch = $mt;
		}
		
		public function setfivewktinmtch($fif){
			$this->setfivewktinmtch = $fif;
		}
		
		public function settenwktinmtch($ten){
			$this->tenwktinmtch = $ten;
		}
		
		public function setmtype($mt){
			$this->mtype = $mt;
		}
	}
?>