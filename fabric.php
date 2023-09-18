<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"></script>
    <script>
        var canvas;
        function draw(){

            canvas = new fabric.Canvas('c');
            var circle = new fabric.Circle({
                radius: 50, fill: 'green', left: 100, top: 100
                });
                var triangle = new fabric.Triangle({
                width: 100, height: 100, fill: 'blue', left: 50, top: 50
                });
                var triangle1 = new fabric.Triangle({
                width: 100, height: 100, fill: 'red', left: 50, top: 50
                });
                var triangle2 = new fabric.Triangle({
                width: 100, height: 100, fill: 'black', left: 50, top: 50
                });
                fabric.Image.fromURL('https://cdn-icons-png.flaticon.com/512/1502/1502320.png', function(oImg) {
                canvas.add(oImg);
                });

                canvas.add(circle, triangle,triangle1,triangle2);

        }

        function saveImage(){
            var c = canvas.toDataURL("image/png");
            document.getElementById("image").value = c;
            document.getElementById("frm").submit();
            //alert(a);
        }
    </script>
</head>
<body onload="draw();">
    <canvas id="c" width=500 height=500 style="border:1px solid #aaa;"></canvas>

    <form action="canvasSave.php" method="post" id="frm">
        <input type="text" name="image" id="image" value="">
        <button type="button" onclick="saveImage()">이미지 서버에 업로드</button>
    </form>
</body>
</html>