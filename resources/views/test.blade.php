<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
<script type="text/javascript">
        var la1 = 20.9801037;
        var lo1 = 105.79790820000001;
        var la2 = 20.9714;
        var lo2 = 105.828;
        var R = 6371;
        var dLat = (la2 - la1) * (Math.PI / 180);
        var dLon = (lo2 - lo1) * (Math.PI / 180);
        var la1ToRad = la1 * (Math.PI / 180);
        var la2ToRad = la2 * (Math.PI / 180);
        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(la1ToRad)
            * Math.cos(la2ToRad) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        var d = R * c;
        console.log(d);
</script>
</html>
