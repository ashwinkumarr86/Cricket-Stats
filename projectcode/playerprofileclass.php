<?php

	/**
	* @Entity @Table(name="playerprofiles")
	**/
	class PlayerProfiles{
		
		/** @Id @Column(type="string") */
		protected $fullname;
		
		/** @Column(type="string") */
		protected $born;
		
		/** @Column(type="string") */
		protected $batting_style;
		
		/** @Column(type="string") */
		protected $bowling_style;

		/** @Column(type="string") */
		protected $profileurl;
		
		public function getfullname(){
			return $this->fullname;
		}
		
		public function getborn(){
			return $this->born;
		}
		
		public function getbatting_style(){
			return $this->batting_style;
		}
		
		public function getbowling_style(){
			return $this->bowling_style;
		}
		
		public function getprofileurl(){
			return $this->profileurl;
		}
		
				
		public function setfullname($id){
			$this->fullname = $id;
		}
		
		public function setborn($born){
			$this->born= $born;
		}
		
		public function setbatting_style($span){
			$this->batting_style = $span;
		}
		
		
		public function setbowling_style($des){
			$this->bowling_style = $des;
		}
		
		public function setprofileurl($led){
			$this->profileurl= $led;			
		}
		
		
	}
?>