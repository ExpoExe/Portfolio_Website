// JavaScript Document

$(document).ready(function(){
	
	var cNote = document.getElementById('cAudio');
	var dNote = document.getElementById('dAudio');
	var eNote = document.getElementById('eAudio');
	var fNote = document.getElementById('fAudio');
	var gNote = document.getElementById('gAudio');
	var aNote = document.getElementById('aAudio');
	var bNote = document.getElementById('bAudio');
	
	$('#container').hide(0).delay(500).slideDown(800);
	
	//hover effects
	$('#cNote').hover(
	function(){$(this).css({'background-color' : '#93dcc3', 'border-color' : '#93dcc3', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#66CDAA'})}
	);
	
	$('#dNote').hover(
	function(){$(this).css({'background-color' : '#9bd0c7', 'border-color' : '#9bd0c7', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#71BCB0'})}
	);
	
	$('#eNote').hover(
	function(){$(this).css({'background-color' : '#a4c4cb', 'border-color' : '#a4c4cb', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#7DABB6'})}
	);
	
	$('#fNote').hover(
	function(){$(this).css({'background-color' : '#abb8d0', 'border-color' : '#abb8d0', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#889ABC'})}
	);
	
	$('#gNote').hover(
	function(){$(this).css({'background-color' : '#b3abd3', 'border-color' : '#b3abd3', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#9388C1'})}
	);
	
	$('#aNote').hover(
	function(){$(this).css({'background-color' : '#bb9fd7', 'border-color' : '#bb9fd7', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#9F77C7'})}
	);
	
	$('#bNote').hover(
	function(){$(this).css({'background-color' : '#c393dc', 'border-color' : '#c393dc', 'cursor' : 'pointer'})}, 
	function(){$(this).css({'background-color' : 'transparent', 'border-color' : '#AA66CD'})}
	);
	
	//music play effects
	$(document).on('keypress', function(e) {
		switch ((e.keyCode || e.which)){
			case 113:
				$('#cNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				cNote.currentTime = 0;
				cNote.play();
				break;
			case 119:
				$('#dNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				dNote.currentTime = 0;
				dNote.play();
				break;
			case 101:
				$('#eNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				eNote.currentTime = 0;
				eNote.play();
				break;
			case 114:
				$('#fNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				fNote.currentTime = 0;
				fNote.play();
				break;
			case 116:
				$('#gNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				gNote.currentTime = 0;
				gNote.play();
				break;
			case 121:
				$('#aNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				aNote.currentTime = 0;
				aNote.play();
				break;
			case 117:
				$('#bNote').animate({opacity: 0.75}, 200).animate({opacity: 1}, 200);
				bNote.currentTime = 0;
				bNote.play();
				break;
		}
	});
	
	$('#cNote').click(function(){
    cNote.currentTime = 0;
    cNote.play();
	});
	
	$('#dNote').mousedown(function(){
    dNote.currentTime = 0;
    dNote.play();
	});
	
	$('#eNote').mousedown(function(){
    eNote.currentTime = 0;
    eNote.play();
	});
	
	$('#fNote').mousedown(function(){
    fNote.currentTime = 0;
    fNote.play();
	});
	
	$('#gNote').mousedown(function(){
    gNote.currentTime = 0;
    gNote.play();
	});
	
	$('#aNote').mousedown(function(){
    aNote.currentTime = 0;
    aNote.play();
	});
	
	$('#bNote').mousedown(function(){
    bNote.currentTime = 0;
    bNote.play();
	});
	
});
