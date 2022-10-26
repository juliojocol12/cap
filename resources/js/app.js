require('./bootstrap');
function setFadeIn(){
	document.body.className = 'body fade-in'
	setTimeout(setFadeOut, 500);
}

function setFadeOut(){
	document.body.className = 'body';
}