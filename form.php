<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'courtneyehancock.com' // Put you mail domain here
	,
	'Contact Form' // Put your site name / form name here
	,
	'ceh.courtney@gmail.com' // Where will the form notification be sent?
	,
	'noreply@courtneyehancock.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
