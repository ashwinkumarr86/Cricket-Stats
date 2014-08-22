<?php

/**
* @Entity @Table(name="grounds")
**/
class Grounds
{
	/** @Id @Column(type="string") **/
	protected $groundname;
	
	/**  @Column(type="string") **/
	protected $ctryname;
	
	/** @Column(type="integer") **/
	protected $established;
	
	/** @Column(type="integer") **/
	protected $capacity;
	
	/** @Column(type="string") **/
	protected $firstend;
	
	/** @Column(type="string") **/
	protected $secondend;
	
	
	
	public function getgroundname(){
		return $this->groundname;
	}
	
	public function getctryname(){
		return $this->ctryname;
	}
	
	public function getestablished(){
		return $this->established;
	}
	
	public function getcapacity(){
		return $this->capacity;
	}
	
	public function getfirstend(){
		return $this->firstend;
	}
	
	public function getsecondend(){
		return $this->secondend;
	}
	
	public function setgroundname($name){
		$this->groundname =$name;
	}
	
	public function setctryname($name){
		 $this->ctryname= $name;
	}
	
	public function setestablished($est){
		$this->established = $est;
	}
	
	public function setcapacity($capa){
		$this->capacity = $capa;
	}
	
	public function setfirstend($fend){
		$this->firstend = $fend;
	}
	
	public function setsecondend($send){
		$this->secondend = $send;
	}
}
?>
	
	
	