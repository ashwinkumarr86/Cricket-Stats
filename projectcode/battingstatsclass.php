<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="battingstats")
	**/
	class BattingStats{
		
		/** @Id @Column(type="integer") */
		protected $battingstatid;
		
		/** @Column(type="string") */
		protected $battername;
		
		/** @Column(type="string") */
		protected $country;
		
		/** @Column(type="string") */
		protected $span;

		/** @Column(type="integer") */
		protected $matches;
		
		/** @Column(type="integer") */
		protected $innings;
		
		/** @Column(type="integer") */
		protected $notouts;
		
		/** @Column(type="integer") */
		protected $runs;
		
		/** @Column(type="string") */
		protected $high_score;
		
		/** @Column(type="decimal", precision=2, scale=5) */
		protected $average;
		
		/** @Column(type="integer") */
		protected $balls_faced;
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $strikerate;
		
		/** @Column(type="integer") */
		protected $hundreds;
		
		/** @Column(type="integer") */
		protected $fifties;
		
		/** @Column(type="integer") */
		protected $zeroes;
		
		/** @Column(type="integer") */
		protected $fours;
		
		/** @Column(type="integer") */
		protected $sixers;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getbattingstatid(){
			return $this->battingstatid;
		}
		
		public function getbattername(){
			return $this->battername;
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
		
		public function getnotouts(){
			return $this->notouts;
		}
		
		public function getruns(){
			return $this->runs;
		}
				
		public function gethigh_score(){
			return $this->high_score;
		}
		
		public function getaverage(){
			return $this->average;
		}	
		
		public function getballs_faced(){
			return $this->balls_faced;
		}
		
		public function getstrikerate(){
			return $this->strikerate;
		}
		
		public function gethundreds(){
			return $this->hundreds;
		}
		
		public function getfifties(){
			return $this->fifties;
		}
		
		public function getzeroes(){
			return $this->zeroes;
		}
		
		public function getfours(){
			return $this->fours;
		}
		
		public function getsixers(){
			return $this->sixers;
		}
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setbattingstatid($id){
			$this->battingstatid =$id;
		}
		
		public function setbattername($bat){
			$this->battername = $bat;
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
		
		public function setnotouts($outs){
			$this->notouts = $outs;
		}
		
		public function setruns($runs){
			$this->runs = $runs;
		}
		
		public function sethigh_score($score){
			$this->high_score = $score;
		}
	
		
		public function setaverage($avg){
			$this->average = $avg;
		}	
		
		public function setballs_faced($balls){
			$this->balls_faced = $balls;
		}
		
		public function setstrikerate($rate){
			$this->strikerate = $rate;
		}
		
		public function sethundreds($hun){
			$this->hundreds = $hun;
		}
		
		public function setfifties($fif){
			$this->fifties = $fif;
		}
		
		public function setzeroes($zero){
			$this->zeroes = $zero;
		}
		
		public function setfours($four){
			$this->fours = $four;
		}
		
		public function setsixers($six){
			$this->sixers = $six;
		}
		public function setmtype($mt){
			$this->mtype = $mt;
		}
	}
?>