function bla(){

	var fname = document.getElementById("name").value;//console.log(fname);
	if(fname==""){
		document.getElementById("name").style.border = "2px solid red";
		return;
	}
	document.getElementById("name").style.border = "";
	var lname = document.getElementById("surname").value;
	if(lname==""){
		document.getElementById("surname").style.border = "2px solid red";
		return;
	}
	document.getElementById("surname").style.border = "";
	var fac = document.getElementById("faculty").value;
	if(fac==-1){
		return;
	}
	document.getElementById("name").value="";
	document.getElementById("surname").value="";
	document.getElementById("faculty").value="-1";
	let z = document.createElement('tr');
	let x = document.createElement('td');
	let c = document.createElement('td');
	let v = document.createElement('td');
	let y = document.createElement('b');
	x.innerHTML = fname;
	c.innerHTML = lname;
	y.innerHTML = fac;
	v.appendChild(y);z.appendChild(v);z.appendChild(x);z.appendChild(c);
	var table = document.getElementById('students');
	table.appendChild(z);
	}
document.getElementById("addStudent").addEventListener('click',bla);
