<?php

	include("matchformats.php");
	/**
	* @Entity @Table(name="umpires")
	**/
	class Umpires{
		
		/** @Id @Column(type="integer") */
		protected $id;
		
		/** @Column(type="string") */
		protected $name;
		
		/** @Column(type="string") */
		protected $span;
		
		/** @Column(type="integer") */
		protected $nomasump;

		/** @Column(type="integer") */
		protected $nomastvump;
		
		/** @Column(type="integer") */
		protected $nomasref;
		
		/** @Column(type="integer") */
		protected $total;
		
		/**
		* @ManyToOne(targetEntity="MatchFormat")
		* @JoinColumn(name="mtype", referencedColumnName="matchtype")
		**/
		protected $mtype;

		public function getid(){
			return $this->id;
		}
		
		public function getname(){
			return $this->name;
		}
		
		
		public function getspan(){
			return $this->span;
		}
		
		public function getnomasump(){
			return $this->nomasump;
		}
		
		public function getnomastvump(){
			return $this->nomastvump;
		}
		
		public function getnomasref(){
			return $this->nomasref;
		}
		
		public function gettotal(){
			return $this->total;
		}
		
		public function getmtype(){
			return $this->mtype;
		}	
				
		public function setid($id){
			$this->id = $id;
		}
		
		public function setname($name){
			$this->name= $name;
		}
		
		public function setspan($span){
		
			$this->span = $span;
		}
		
		
		public function setnomasump($des){
			$this->nomasump = $des;
		}
		
		public function setnomastvump($led){
			$this->nomastvump = $led;			
		}
		
		public function setnomasref($ref){
			$this->nomasref = $ref;			
		}
		
		public function settotal($tot){
			$this->total = $tot;			
		}
		
		public function setmtype($mt){
			$this->mtype = $mt;			
		}
	}
?>