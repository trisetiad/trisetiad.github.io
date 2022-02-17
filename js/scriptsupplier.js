var keyword = document.getElementById('kata_cari');
var tombolCari = document.getElementById('cari');
var container = document.getElementById('container');

keyword.addEventListener('keyup' , function(){

	 var xhr = new XMLHttpRequest();

	 xhr.onreadystatechange = function(){
	 	if (xhr.readyState == 4 && xhr.status == 200){
	 		container.innerHTML = xhr.responseText ;
	 	}
	 }

	 xhr.open('GET' , 'ajax/datasupplier.php?kata_cari='+kata_cari.value, true);
	 xhr.send();

});
