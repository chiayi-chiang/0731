<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Test: <input type="text" id="txtTest" />
<hr>
<div id="debug"></div>
<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "LongRequest_Server.php", true);
    //當有進展時，funtion will be new running，and give new data
    xhr.onprogress = function (e) {
        document.getElementById("debug").innerHTML += xhr.responseText+"<hr>";
    }
    xhr.send(null);
</script>

<script>
    var data = " \r\n";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "LongRequest_Server.php", true);

    xhr.onprogress = function (e) {
        //document.getElementById("debug").innerHTML = xhr.responseText;
        responseText = xhr.responseText;
        lastEvent = responseText.replace(data, "");
        document.getElementById("debug").innerHTML = lastEvent;
        data = responseText;
    }
    xhr.send(null);
</script>

</body>
</html>
