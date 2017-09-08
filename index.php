<html>
	<head>
		<meta charset="UTF-8">
		<title>Lab 01</title>
	</head>
	<body>
		<?php
		include('Student.php');
		
		/* array which holds our student objects */
		$students = array();
		
		/* creating our first student and placing it into our array */
		$first = new Student();
		$first->surname = "Doe";
		$first->first_name = "John";
		$first->add_email('home','john@doe.com');
		$first->add_email('work','jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;

		/* creating our second student and placing it into our array */
		$second = new Student();
		$second->surname = "Einstein";
		$second->first_name = "Albert";
		$second->add_email('home','albert@braniacs.com');
		$second->add_email('work1','a_einstein@bcit.ca');
		$second->add_email('work2','albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;

		/* creating our third student and placing it into our array */
		$third = new Student();
		$third->surname = "Sekhon";
		$third->first_name = "Jason";
		$third->add_email('home','jason_2s@hotmail.com');
		$third->add_grade(100);
		$third->add_grade(100);
		$students['j456'] = $third;
		
		/* sorting our student array */
		ksort($students);

		/* looping through our student array and printing each students data through toString method */
		foreach($students as $student)
			echo $student->toString();

		?>
	</body>
</html>