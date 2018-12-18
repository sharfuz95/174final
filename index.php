<?php include "inc/html-top.inc";?>

	<link type="text/css" rel="stylesheet" href="css/home.css">

	</head>

	<body>

		<div class="banner">
	        <?php include 'inc/header.inc';?>

	        <?php include 'inc/nav.inc';?>
	    </div>

	    <main>
	        <div class="homeContent">

	            <section class="homeInformation">
		            
		            <section class="homeContentBlock" id="about">
		                <h2> About</h2>
		             <p>   Classical art is the art which is associated with the classical period. In the Classical period there was a revolution in Greek statuary, usually associated with the introduction of democracy and the end of the aristocratic culture associated with the kouroi. The Classical period saw changes in the style and function of sculpture. Poses became more naturalistic and the technical skill of Greek sculptors in depicting the human form in a variety of poses greatly increased. From about 500 BC statues began to depict real people. The statues of Harmodius and Aristogeiton set up in Athens to mark the overthrow of the tyranny were said to be the first public monuments to actual people. </p>

		             <p>
		             	The most famous works of the Classical period for contemporaries were the colossal Statue of Zeus at Olympia and the Statue of Athena Parthenos in the Parthenon. Both were chryselephantine and executed by Phidias or under his direction, and are now lost, although smaller copies (in other materials) and good descriptions of both still exist. Their size and magnificence prompted emperors to seize them in the Byzantine period, and both were removed to Constantinople, where they were later destroyed in fires.
		             </p>
		            </section>
		        

		            <section class = "homeContentBlock" id="history">
		                <h2>History</h2>
		                <p> In the early 5th century Greek artists began consciously to attempt to render human and animal forms realistically. This entailed careful observation of the model as well as understanding the mechanics of anatomy - how a body adjusts to a pose which is not stiffly frontal but with the weight shifted to one side of the body, and how a body behaves in violent motion. The successors to the archaic kouroi, mainly athlete figures, are thus regularly shown 'at ease', one leg relaxed, with a complementary shift in the shoulders, and the whole emphasized by contrasts of rigid and relaxed in limbs.  </p>

		                <p>The new style is best expressed in the Parthenon marbles of about 450-435 BC but there was a preceding style of some importance - the Early Classical, sometimes called the Severe Style, which is exemplified in the sculptures for the Temple of Zeus at Olympia. Here the figures are mainly lifelike but drapery forms are plainer (a change from the archaic Ionian chiton to the more austere peplos for women), and there are deliberate attempts at depiction of emotion in faces and of different ages in rendering of bodies </p>
		            </section>

		            

		        </section>

		        <section class="homeJoin">
		            <div class="homeContentBlock" id="join">
		                <h2> Want to Help Further? Sign Up Below to Volunteer:</h2>
		                    <form method="post"action="connect.php">
		                        <label>First name: (Required)</label><br>
		                        <input type="text" name="firstname">
		                        <br>
		                        <label>Last name:</label><br>
		                        <input type="text" name="lastname">
		                        <br>
		                        <label>Email: (Required)</label><br>
		                        <input type="text" name="email">
		                        <br>
		                        <label>Where You Currently Live:</label><br>
		                        <input type="text" name="location">
		                        <br>
		                        <button type="submit" value="Submit"> Join Newsletter </button>

		                    </form>
		            </div>
		        </section>
    
        	</div>

        </main>

        <?php include 'inc/footer.inc';?>


    	<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="js/menu-highlighter.js"></script>

	</body>

</html>