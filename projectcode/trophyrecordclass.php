<?php
	include("trophys.php");

	/**
	* @Entity @Table(name="trophyrecords")
	**/
	class TrophyRecords{
		
		/** @Id @Column(type="integer") */
		protected $trophyrec_id;
		
		/** @Column(type="string") */
		protected $season;
		
		/** @Column(type="string") */
		protected $winner;
		
		/** @Column(type="string") */
		protected $margin;

		/**
		* @ManyToOne(targetEntity="Trophy")
		* @JoinColumn(name="trpyid", referencedColumnName="trophy_id")
		**/
		protected $trpyid;

		public function gettrophyrecid(){
			return $this->trophyrec_id;
		}
		
		public function getseason(){
			return $this->season;
		}
		
		
		public function getwinner(){
			return $this->winner;
		}
		
		public function getmargin(){
			return $this->margin;
		}
		
		public function gettrpyid(){
			return $this->trpyid;
		}
		
				
		public function settrophyrecid($mtype){
			$this->trophyrec_id = $mtype;
		}
		
		public function setseason($name){
			$this->season= $name;
		}
		
		public function setwinner($fmatch){
		
			$this->winner = $fmatch;
		}
		
		public function setmargin($description){
			$this->margin = $description;
		}
		
		public function settrpyid($leader){
			$this->trpyid = $leader;
			
		}
	}
?>