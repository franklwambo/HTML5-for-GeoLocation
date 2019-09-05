<html>
<script>
function getLocation()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}
function showPosition(position)
{
    var lat = position.coords.latitude;
    var long = position.coords.longitude;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert("GPS Location successfully captured, click ok to proceed");
        }
    };
    xmlhttp.open("GET", "save_gps.php?lat=" + lat + "&long=" + long, true);
    xmlhttp.send();
}
getLocation();
</script>
</html>