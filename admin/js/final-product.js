var index=1;
show(index);
function plus(n){
	show(index=n);
}
function show(n){
	var i;
	var y=document.getElementsByClassName('myslide');
	for(i=0;i<=y.length;i++){
		y[i].style.display="none";
		y[index-1].style.display="block";
	}
}
