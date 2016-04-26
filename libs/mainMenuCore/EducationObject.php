<?php
	class EducationObject
	{
		protected $objectId;
		protected $name;
		protected $discription;
		protected $img;
		protected $theme;
		 
	    public function NewEducationObject($type)
	    {
	        if(((int)$type) == 0) 
	        {
	            $lesson = new Lesson();
	            return $lesson;
	        }
	        else 
	        {
	            $Presentation = new Presentation();
	            return $Presentation;
	        }
	    }
	}
?>