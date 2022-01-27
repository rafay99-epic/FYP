<!DOCTYPE html>
<html>
<head>
	<title>View Live location</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js'></script>
    <script>

    var socket = io();

    socket.on('data', function(data) {
        console.log(data);
        document.getElementById('sample').style.opacity = data+"%"; 
    });

    </script>
</head>
<body>
     <form action="" method="">
     	<h2>Live Locations of Parking Space</h2>
       
     </form>
</body>
</html>