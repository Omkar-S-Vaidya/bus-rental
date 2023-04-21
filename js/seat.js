var index=1;
show(index);
function plus1(n)
{
	show(index+=n)
}
function show(n)
{
	var i;
	var x= document.getElementsByClassName("myslide1");
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
show1(index);
function plus2(n)
{
	show1(index+=n)
}
function show1(n)
{
	var i;
	var x= document.getElementsByClassName("myslide2");
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
show2(index);
function plus3(n)
{
	show2(index+=n)
}
function show2(n)
{
	var i;
	var x= document.getElementsByClassName("myslide3");
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