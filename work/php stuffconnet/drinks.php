<?php
$drinks = new drinks;
/**
* this class should return the users name and drink list.
*/
class drinks
{
	/**
	* @var str $name
	*/
	private $_name = NULL;
	/**
	* @var obj $ini
	*/
	private $ini = NULL;
	//--------------------------------------------------------------------
	/**
    * The argument (the users name) should be passed through the consturctor 
    *@param string $name 
    */
	public function __construct( $_name ='')
	{
		//assign name to class property
		 $this->_name = 'Ali';
	
		//check name is valid
		if ( $this->_checkname() == True ) 
		{
			 
          echo $this->_name . " exsits";
			//get drinks for $name
			//return $drinksJson;
		}
		else
		{
			echo  $this->_name .' your name is not in our database';
		}
			
	  //$this->_getDrinksAndNames();				
	}
    /**
    * This method will check the name of the user name against the ini file.
	* and ensure that the names match up. 
    * @param
    * @return bool  
    */
	private function _checkname()
	{
		//make sure name is contained in one of the names in ini file
			$ini = parse_ini_file('drinks.ini');
			$this->_ini = $ini;
		
			#die(var_dump($this->_ini));
				if (array_key_exists($this->_name, $ini)) 
				{
					return True;
				}
				else
				{
				 	return False;
				}
	}
   
	/**
    * This method will get the users drinks of choice from the ini file. 	   
    *@return users drinks and the name in an array.
    *@param    
    */
	private function _getDrinksAndNames()
	{
		 

	
	}
	
    /**
    * This encodes the returns array into a json object. 	   
    *@return the users name and drink choice in an json obj.   
    *@param    
    */
	private function _jsonEncodeArray()
	{
		//encodes the array into a json obj.
		//error message if encoding the array fails. 
	}
	private function _parseini()
	{
	   
		
	     
	    #die(var_dump($ini));
	}
}
?>