<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Quiz film Avatar</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            if($totalCorrect == 5){
            	echo "<div id='results'>$totalCorrect / 5 Bravo ! </div>";
            } elseif ($totalCorrect == 4) {
            	echo "<div id='results'>$totalCorrect / 5 Bien joué </div>";
            } elseif ($totalCorrect == 3) {
            	echo "<div id='results'>$totalCorrect / 5 Pas trop mal </div>";  
            } elseif ($totalCorrect == 2) { 
            	echo "<div id='results'>$totalCorrect / 5 À revoir </div>"; }
            else {
            	echo "<div id='results'>$totalCorrect / 5 Tu es nul </div>";
            }
        ?>
	
	</div>
</body>

</html>