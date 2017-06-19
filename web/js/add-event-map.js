var startLat = 54.9734;
var startLong = -1.6140;

var map = L.map("mock-map", {scrollWheelZoom:true}).setView([startLat, startLong], 15);
var marker = null;


// Add the tiles, and marker with the icon
L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoibXJzaGxsMTAwMSIsImEiOiJjajB4emhxMmEwMDB1MzJtcWVtNDQ5czM4In0.2kVl7ECJxVnQYBqZGxzkZw', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

map.on('click', function(ev)
{
  updateMap(ev.latlng.lat, ev.latlng.lng);
  getAddressInfo(ev.latlng.lat, ev.latlng.lng);

});

/**
 * Adds a marker to the map
 */
function updateMap(lat, lng)
{
  var markerIcon = L.icon({
    iconUrl: "/img/ic_marker_green.svg",
    iconSize: [60, 60],
  });

  if (marker == null)
  {
    marker = L.marker([lat, lng], {icon: markerIcon}).addTo(map);
  } else
  {
    marker.setLatLng([lat,lng]);
  }

  map.panTo([lat, lng]);
}

/**
 * Retrieves address information via ajax
 */
function getAddressInfo(lat, lng)
{
  $.get("https://nominatim.openstreetmap.org/reverse?format=json&lat="+lat+"&lon="+lng+"&zoom=18&addressdetails=1", function(data, status)
  {
    updateLocationFields(data.display_name, lat, lng);
  });
}

/**
 * Updates the shown and hidden location fields
 */
function updateLocationFields(addressString, lat, lng)
{
  // Visually update the address field
  $('#event_post_locationName').val(addressString);

  // Update the hidden lat and long fields for the server
  $('#event_post_locationLatitude').val(lat);
  $('#event_post_locationLongitude').val(lng);
}
