// TODO
// Get all the latlng points
var locations = findAllLocations();
// Initialise the map with the first point as the centre
var map = addMap("where-map", locations[0].lat, locations[0].lng, 10, true);
addOSMTiles(map);

// Add all the points.
locations.forEach(function(obj)
{
  addMarkerToMap(map, obj.lat, obj.lng);
})


// Add buttons on the bottom to pan map to different places.


/** ============================
 * Returns all lat lngs in an array
 *=============================
 */
function findAllLocations()
{
  var locations = [];

  // Iterate over each of the hidden lat long points and grab them
  $('.location-marker').each(function(i, obj)
  {
    // Add lat/lng to array
    locations.push({ lat: Number($(obj).data('latitude')), lng: Number($(obj).data('longitude')) });
  });

  return locations;


}
