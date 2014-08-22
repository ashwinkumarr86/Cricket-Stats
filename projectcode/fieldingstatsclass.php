<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="fieldingstats")
	**/
	class FieldingStats{
		
		/** @Id @Column(type="integer") */
		protected $fieldingstatid;
		
		/** @Column(type="string") */
		protected $fieldername;
		
		/** @Column(type="string") */
		protected $country;
		
		/** @Column(type="string") */
		protected $span;

		/** @Column(type="integer") */
		protected $matches;
		
		/** @Column(type="integer") */
		protected $innings;
		
		/** @Column(type="integer") */
		protected $dismissals;
		
		/** @Column(type="integer") */
		protected $catches;
		
		/** @Column(type="integer") */
		protected $stumpings;
		
		/** @Column(type="integer") */
		protected $catchesaswktkpr;
		
		/** @Column(type="integer") */
		protected $catchesasfielder;
		
		/** @Column(type="integer") */
		protected $maxdismissalsinng;
		
		/** @Column(type="decimal", precision=2, scale =5) */
		protected $dismissalsperinng;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getfieldingstatid(){
			return $this->fieldingstatid;
		}
		
		public function getfieldername(){
			return $this->fieldername;
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
		
		public function getcatches(){
			return $this->catches;
		}
		
		public function getdismissals(){
			return $this->dismissals;
		}
				
		
		public function getstumpings(){
			return $this->stumpings;
		}	
		
		public function getcatchesaswktkpr(){
			return $this->catchesaswktkpr;
		}
		
		public function getcatchesasfielder(){
			return $this->catchesasfielder;
		}
		
		public function getmaxdismissalsinng(){
			return $this->maxdismissalsinng;
		}
		
		public function getmaxdismissalsperinng(){
			return $this->dismissalsperinng;
		}
		
		public function getzeroes(){
			return $this->zeroes;
		}
		
		public function getmtype(){
			return $this->mtype;
		}
		
		//setter here
		
		public function setfieldingstatid($id){
			$this->fieldingstatid =$id;
		}
		
		public function setfieldername($bat){
			$this->fieldername = $bat;
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
		
		public function setdismissals($outs){
			$this->dismissals = $outs;
		}
		
		public function setcatches($catches){
			$this->catches = $catches;
		}
		
		public function setstumpings($stump){
			$this->stumpings = $stump;
		}
	
		
		public function setcatchesaswktkpr($wkt){
			$this->catchesaswktkpr = $wkt;
		}	
		
		public function setcatchesasfielder($fie){
			$this->catchesasfielder = $fie;
		}
		
		public function setmaxdismissalsinng($rate){
			$this->maxdismissalsinng = $rate;
		}
		
		public function setdismissalsperinng($hun){
			$this->dismissalsperinng = $hun;
		}
		
		public function setmtype($mt){
			$this->mtype = $mt;
		}
	}
?>