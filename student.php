<?php
	class Student {
		
		/* student constructor */
		function __construct() {
			$this->surname = '';
			$this->first_name = '';
			$this->emails = array();
			$this->grades = array();
		}
		
		/* method for adding an email to student email array */
		function add_email($which,$address) {
	    	$this->emails[$which] = $address;
		}

		/* method for adding a grade to the student grade array */
		function add_grade($grade) {
    		$this->grades[] = $grade;
		}
		
		/* calculates the average grade of a student */
		function average(){
			$total = 0;
			foreach($this->grades as $value){
				$total += $value;
			}
			return $total / count($this->grades);
		}

		/* to string method which prints the student's first name, surname, average grade, and emails */
		function toString() {
			$result = $this->first_name . ' ' . $this->surname;
			$result .= ' ('.$this->average().")\n";
			foreach($this->emails as $which=>$what)
				$result .= $which . ': '. $what. "\n";
			$result .= "\n";
			return '<pre>'.$result.'</pre>';
		}
	}
?>