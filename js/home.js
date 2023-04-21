var index=1;
show(index);
function plus(n)
{
	show(index+=n)
}
function show(n)
{
	var i;
	var x= document.getElementsByClassName("myslide");
	if(n>x.length)
	{
		index=1;
	}
	if(n<1)
	{
		index=x.length;
	}
	for(i=0;i<x.length;i++)
	{
		x[i].style.display="none";
		x[index-1].style.display="block";
	}
}























