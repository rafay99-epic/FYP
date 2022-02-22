<!DOCTYPE html>
<html>

<head>
    <title>View Live location</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="./socket.io.js"></script>
    <script src="./SensorOnOff.js"></script>

</head>

<body>
    <form action="" method="">
        <h2>Live Locations of Parking Space</h2>

        <table style="width:100%">
            <tr>
                <th>Sensors</th>
                <th>On/Off</th>
            </tr>
            <tr>
                <td id="sensor1"></td>
                <td id="sensor1On/Off"></td>

            </tr>
            <tr>
                <td id="sensor2"></td>
                <td id="sensor2On/Off"></td>
            </tr>
            <tr>
                <td id="sensor3"></td>
                <td id="sensor3On/Off"></td>
            </tr>
            <tr>
                <td id="sensor4"></td>
                <td id="sensor4On/Off"></td>
            </tr>
            <tr>
                <td id="sensor5"></td>
                <td id="sensor5On/Off"></td>
            </tr>
        </table>

    </form>

</body>

</html>
