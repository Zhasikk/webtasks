function onClick(){
	const  s11 = document.querySelector("#s11").value;
	const  s12 = document.querySelector("#s12").value;
	const  s13 = document.querySelector("#s13").value;
	const  s21 = document.querySelector("#s21").value;
	const  s22 = document.querySelector("#s22").value;
	const  s23 = document.querySelector("#s23").value;
	const  s31 = document.querySelector("#s31").value;
	const  s32 = document.querySelector("#s32").value;
	const  s33 = document.querySelector("#s33").value;
  let g = s11*s22*s33+s12*s23*s31+s21*s32*s13-s13*s22*s31-s12*s21*s33-s23*s32*s11;
	document.querySelector("#result").innerHTML = g;
}
document.querySelector("#determinant").addEventListener('click',onClick);
