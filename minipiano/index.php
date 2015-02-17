<?php ?>

<html>
<head>
<title>Mini Piano</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="scripts/jquery.js"></script>

</head>

<body>

<audio id="cAudio">
    <source src="media/c_note.mp3" type="audio/mpeg"></source>
    <source src="media/c_note.ogg" type="audio/ogg"></source>
    <source src="media/c_note.wav" type="audio/wav"></source>  
</audio>
<audio id="dAudio">
    <source src="media/d_note.mp3" type="audio/mpeg"></source>
    <source src="media/d_note.ogg" type="audio/ogg"></source>
    <source src="media/d_note.wav" type="audio/wav"></source>  
</audio>
<audio id="eAudio">
    <source src="media/e_note.mp3" type="audio/mpeg"></source>
    <source src="media/e_note.ogg" type="audio/ogg"></source>
    <source src="media/e_note.wav" type="audio/wav"></source>  
</audio>
<audio id="fAudio">
    <source src="media/f_note.mp3" type="audio/mpeg"></source>
    <source src="media/f_note.ogg" type="audio/ogg"></source>
    <source src="media/f_note.wav" type="audio/wav"></source>  
</audio>
<audio id="gAudio">
    <source src="media/g_note.mp3" type="audio/mpeg"></source>
    <source src="media/g_note.ogg" type="audio/ogg"></source>
    <source src="media/g_note.wav" type="audio/wav"></source>  
</audio>
<audio id="aAudio">
    <source src="media/a_note.mp3" type="audio/mpeg"></source>
    <source src="media/a_note.ogg" type="audio/ogg"></source>
    <source src="media/a_note.wav" type="audio/wav"></source>  
</audio>
<audio id="bAudio">
    <source src="media/b_note.mp3" type="audio/mpeg"></source>
    <source src="media/b_note.ogg" type="audio/ogg"></source>
    <source src="media/b_note.wav" type="audio/wav"></source>  
</audio>

<h1>Mini Piano Project</h1>

<div id="container">
    <div id="cNote"><h1>C</h1></div>
    <div id="dNote"><h1>D</h1></div>
    <div id="eNote"><h1>E</h1></div>
    <div id="fNote"><h1>F</h1></div>
    <div id="gNote"><h1>G</h1></div>
    <div id="aNote"><h1>A</h1></div>
    <div id="bNote"><h1>B</h1></div>
    <h2><br>You can use your keyboard keys 'Q' through 'U' to play the respective notes.<br>
			Or you can click on the notes to play them!</h2>
</div>

</body>
</html>
