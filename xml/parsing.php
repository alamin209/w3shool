<!DOCTYPE html>

<body>
<p id="demo"></p>
<p id="demo1"></p>

<script>
   var txt, parse ,xmlDoc;
  txt="<bookstore>" +"<book>"+
      "<author>alamin</author>"+
      "<name>AKLIM</name>"+
        "<profession>less</profession>"+
      "</book>"+"<book>"+
      "<author>aklima</author>"+
      "<name>AKLIM</name>"+
      "<profession>less</profession>"+
      "</book>"+"</bookstore>";

    parse=new DOMParser();
  xmlDoc=parse.parseFromString(txt,"text/xml");
  document.getElementById("demo").innerHTML=

      xmlDoc.getElementsByTagName("author")[1].childNodes[0].nodeValue;


</script>

<script>
var i,x,txt, parse ,xmlDoc;
    parse=new DOMParser();
    xmlDoc=parse.parseFromString(txt,"text/xml");
    var txt1="";
    x=xmlDoc.getElementsByTagName("author");
    for (i=0;i< x.length; i++)
    {
        txt1 +=x[i].childNodes[0].nodeValue+"</br>";

    }
    document.getElementById("demo1").innerHTML = txt1;




</script>


</body>

</html>