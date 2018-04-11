<!DOCTYPE html>
<html>
<head>
    <script>
        function  validationFrom()
        {

            // var name=document.forms['myform']['alamin'].value;
            var x = document.forms["myForm"]["fname"].value;

            if (x=="") {
                alert("NAme must be fil up");
                return false;
            }
            else
            {
                alert(x);

            }
        }
    </script>
</head>
    <body>
    <form name="myForm" action="" method="post"     onsubmit="return validationFrom()">
        Name:<input type="text" name="fname">
        <input type="submit" value="submit"  >
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--///over flow example and underflow-->
<input id="name" type="number" min="100">
<button onclick="chekingvalue()"  > oK Go</button>

<p id="demo"></p>
<script>
function chekingvalue() {
    var txt="";
    if (document.getElementById("name").validity.rangeUnderflow)
    {
        txt="Value is too small";
    }

    document.getElementById("demo").innerHTML=txt;
}
</script>


<!--///over flow example and overflow-->
<input id="name1" type="number" max="100">
<button onclick="chekingvalue1()"  > oK Go</button>

<p id="demo1"></p>
<script>
    function chekingvalue1() {
        var txt="";
        if (document.getElementById("name1").validity.rangeOverflow)
        {
            txt="Value is too large";
        }

        document.getElementById("demo1").innerHTML=txt;
    }
</script>
<!--///propartise example is given below-->





     <script>


    </script>