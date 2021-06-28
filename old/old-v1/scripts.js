var items = new Array("Home","Education","Publications","Presentations","Contact");
var urls = new Array("index.html","education.html","publications.html","presentations.html","contact.html");

var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var date = new Date(Date.parse(document.lastModified));
var d = date.getDate();
var m = months[date.getMonth()];
var y = date.getYear() + ((date.getYear()<=2000)?1900:0);
var s = "<div class='lastmodified'>(Page last updated: <b>" + m + " " + d + ", " + (y<10?"0"+y:y) + "</b>)</div>";

var cur = document.location.href.split("/").pop();
var me = "<ul id='menu'>";
for (i=0; i<items.length; i++)
  {
  me += "<li><a ";
  if (urls[i] == cur || (urls[i] == "index.html" && cur == ""))
    {me += "class='current' ";}
  me += "href='" + urls[i] + "'>" + items[i] + "</a></li>";
  if (i < items.length - 1) 
    {me += "<div>/</div>";}
  }
me += "</ul>";
var head = "<h1>Homepage of Thijs Laarhoven</h1>" + me + "<p style='margin: -32px'></p><div style='float: right;'>" + s + "</div><p style='margin: -20px'></p><br/>";