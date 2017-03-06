
 var imgs =[img/image1.jpg","img/image2.jpg","img/image3.jpg","img/image4.jpg","img/image5.jpg"];
 
 function change_pic(i)
 {
	if(i==4)
	{
		i=0;
	}
	else
	{
		i++;
	}
	document.getElementById["defile"].src="imgs[i]";
 }

