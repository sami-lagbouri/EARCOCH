var open = 'glyphicon-eye-open';
var close = 'glyphicon-eye-close';
var ele = document.getElementById('password');
var ele2 = document.getElementById('password2');

document.getElementById('toggleBtn').onclick = function() {
	if( this.classList.contains(open) ) {
  	ele.type="text";
    this.classList.remove(open);
    this.className += ' '+close;
  } else {
  	ele.type="password";
    this.classList.remove(close);
    this.className += ' '+open;
  }
}

document.getElementById('toggleBtn2').onclick = function() {
	if( this.innerHTML == 'Show' ) {
  	this.innerHTML = 'Hide'
  	ele2.type="text";
  } else {
  	this.innerHTML = 'Show'
  	ele2.type="password";
  }
}

