<html>
<head>
    <style>

        #div1 ,#div2{
            width: 350px;
            height: 70px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }

    </style>

    <script>
        function allowDrop(ev) {
            ev.preventDefault();

        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);

        }


        function drop(ev) {
            ev.preventDefault();
            var data =ev.dataTransfer.getData("text");
            // ev.target.appendChild(document.getElementById(data))
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>

<body>
<p>Data will appear in the database </p>

<div id="div1" ondrop="drop(event)"   ondragover="allowDrop(event)"  >
<img id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">
</div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>
