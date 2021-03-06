<?php
	
	#deel 1
	
	$dagNr = "1";
    $dagVDweek = "";
	

	if ( $dagNr == "1" ) 
	{
		$dagVDweek = "maandag";
	}
	
	if ( $dagNr == "2" ) 
	{
		$dagVDweek = "dinsdag";
	}	

	if ( $dagNr == "3" ) 
	{
		$dagVDweek = "woensdag";
	}
	
	if ( $dagNr == "4" ) 
	{
		$dagVDweek = "donderdag";
	}
	if ( $dagNr == "5" ) 
	{
		$dagVDweek = "vrijdag";
	}
	if ( $dagNr == "6" ) 
	{
		$dagVDweek = "zaterdag";
	}
	if ( $dagNr == "7" ) 
	{
		$dagVDweek = "zondag";
	}
    
#deel2

$capDagVDweek   =   strtoupper ($dagVDweek);

$replaceAAA     =   str_replace('A','a',$capDagVDweek);
    

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Bijvoorbeeld, wanneer <code>$getal</code> gelijk is aan 1 dan wordt de string <code>'maandag'</code> op het scherm getoond</li>
                <p><?php echo $dagVDweek; ?></p>
            </ul>  

    		<h1 class="extra">Opdracht conditional statements: deel 2</h1>

    		<ul>
                <li>Maak een kopie van deel 1</li>
    			<li>Zet de naam van de dag (bv <code>'maandag'</code>) doormiddel van een string-functie dan naar hoofdletters om (bv <code>'MAANDAG'</code>).</li>
                <li>Zet alle letters in hoofdletters, behalve de 'a'</li>
                <li>Zet alle letters in hoofdletters, behalve de laatste 'a'</li>
                <p><?php echo $replaceAAA; ?></p>
    		</ul>

        </section>

    </body>
</html>
