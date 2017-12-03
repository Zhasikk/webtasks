function change(event){
  let x=document.querySelector('#bigImage');
  x.innerHTML="<img src="+event.currentTarget.src+">";
}
