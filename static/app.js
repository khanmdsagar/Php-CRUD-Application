var addmenu = document.getElementById('addmenu');
var dialog = document.getElementById('idialogbg');
var closebtn = document.getElementById('closebtn');

addmenu.addEventListener('click', function(){
	dialog.style.display = 'flex';
})

closebtn.addEventListener('click', function(){
	dialog.style.display = 'none';
})
