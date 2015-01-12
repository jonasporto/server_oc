    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>    

function getLocation(){ navigator.geolocation.getCurrentPosition(handleSuccess); }
function handleSuccess(position){ console.log(position);}
getLocation();