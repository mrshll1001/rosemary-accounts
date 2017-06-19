initialiseHiddenMaps();

// ***********
// Event for revealing a single map upon click
// ***********
$('.map-reveal').click(function(e){
  $(this).parent().parent().find('.hidden-map').toggle();
});

/* ====================================
 * Initialises all hidden location maps
 * ====================================
 */
function initialiseHiddenMaps()
{
  // Find all classes of hidden-map and iterate
  $('.hidden-map').each(function(i, obj){
    // -- Pull out the lat, long, id
      var id = $(obj).attr('id');
      var lat = Number($(obj).data('latitude'));
      var long = Number($(obj).data('longitude'));

      // -- Pass to addMap() function
      var map = addMap(id, lat, long, 25, false);
      // Add the tiles, and marker with the icon
      addOSMTiles(map);
      addMarkerToMap(map, lat, long);

      // -- Hide
      $(obj).hide()
  });
}

/* ====================================
 * Adds a single map to a div with given id, latitude, and longitude.
 * ====================================
 */
function addMap(id, lat, long, zoom, scrollWheelZoom)
{
  // Convert lat and long to numbers
  // Add the map variable
  return L.map(id, {scrollWheelZoom:scrollWheelZoom}).setView([lat, long], zoom);

}

/* =========================
 * Adds OSM Tiles to a map
 * =========================
 */
function addOSMTiles(map)
{

  L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoibXJzaGxsMTAwMSIsImEiOiJjajB4emhxMmEwMDB1MzJtcWVtNDQ5czM4In0.2kVl7ECJxVnQYBqZGxzkZw', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
}

/*=====================================
 * Adds a single marker to a map variable
 *=====================================
 */
function addMarkerToMap(map, lat, long)
{
  var markerIcon = L.icon({
    iconUrl: "/img/ic_marker_green.svg",
    iconSize: [60, 60],
  });

  var marker = L.marker([lat, long], {icon: markerIcon}).addTo(map);
}
