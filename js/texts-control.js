var r_text = new Array ();
r_text[0] = "The highest form of love is to be the <i>protector</i> of another person's <i>solitude</i>";
r_text[1] = "There is zero correlation between being the best talker and having the best ideas.";
r_text[2] = "Beware of those who seek constant crowds; they are nothing alone.";
r_text[3] = "Solitude matters and for some people it's the air they breath.";
r_text[4] = "Wise men speak because they have something to say; Fools because they have to say something.";

var i = Math.floor(r_text.length * Math.random());
$(document).ready(function() {
	$('#r_text').html(r_text[i]); 
});