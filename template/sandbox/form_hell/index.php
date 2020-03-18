<?php
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((!empty($_POST['fname'])) && (empty ($_POST['honeypot']))) {

     // Edit or Replace this try/catch statement to work with the current PHT configuration
       include 'dbconnect.inc.php';

// If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
	    $age = $_POST['age'];
        $email = $_POST['email'];
	    $ename = $_POST['ename'];
        $ephone = $_POST['ephone'];
        $events = $_POST['events'];
        $gender = $_POST['gender'];
        $comment = $_POST['comment'];

        // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
        try
        {
            $sql = 'INSERT INTO events SET
          fname = :fname,
          lname = :lname,
		    age = :age,
          email = :email,
		  ename = :ename,
          ephone = :ephone,
		  events = :events,
          gender = :gender,
          comment = :comment';
            $s = $pdo->prepare($sql);
            $s->bindValue(':fname', $fname);
            $s->bindValue(':lname', $lname);
			$s->bindValue(':age', $age);
            $s->bindValue(':email', $email);
			$s->bindValue(':ename', $ename);
            $s->bindValue(':ephone', $ephone);
            $s->bindValue(':events', $events);
            $s->bindValue(':gender', $gender);
            $s->bindValue(':comment', $comment);
            $s->execute();
        }
        catch (PDOException $e)
        {
            $error = 'Error adding submitted: ' . $e->getMessage();
            include 'error.html.php';
            exit();
        }
        // load the thank you page after the INSERT runs
    include 'success.html.php';

        // Add an else to load the initial page if the initial (line 19) if statement is false

} else {
    include 'reservations.html.php'; //Modify this to include the initial file for this folder
}
?>