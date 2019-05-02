var open = 'fa-eye-slash';
var close = 'fa-eye';
var ele = document.getElementById('password');

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

