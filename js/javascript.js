function myFunction(url,w,h) 
{
    	var left = parseInt((screen.availWidth/2) - (w/2));

        var top = parseInt((screen.availHeight/2) - (h/2));

        var windowFeatures = "width=" + w + ",height=" + h + ",status,resizable,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top;

        Pencerem = window.open(url, "subWind", windowFeatures);

}



