$(function()
{
	var sure=2000;//Slider Oto Dönme Time
	var toplamLi =$(".slider ul li").length;
	var liWidth=820;
	var toplamWidth= liWidth* toplamLi;
	var liDeger=0;

	$(".slider ul").css("width",toplamWidth+"px");

	$("a.sonraki").click(function(){

			if (liDeger<toplamLi-1) 
			{
				liDeger++;
				yeniWidth=liWidth*liDeger;
				$(".slider ul").animate(
					{marginLeft: "-" + yeniWidth +"px"},1000);
			}
			else
			{
				liDeger=0;
			    $(".slider ul").animate(
					{marginLeft:"0"},1000);
			}
			return false;

	});
	$("a.onceki").click(function(){

			if (liDeger>0) 
			{
				liDeger--;
				yeniWidth=liWidth*liDeger;
				$(".slider ul").animate(
					{marginLeft: "-" + yeniWidth +"px"},1000);
			}
			return false;

	});

	/*Otomatik Dönmee*/


	$.Slider =function()
	{
		if (liDeger<toplamLi-1) 
		{
			liDeger++;
			yeniWidth=liWidth*liDeger;
			$(".slider ul").animate(
					{marginLeft: "-" + yeniWidth +"px"},1000);
		}
		else
		{
			liDeger=0;
			$(".slider ul").animate(
			{marginLeft:"0"},1000);

		}
	}

	var don= setInterval("$.Slider()",sure);


	$("#slider").hover(function()
	{
		clearInterval(don);
	},
		function()
	{
		don=setInterval("$.Slider()",sure);
	});
		
});