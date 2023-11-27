        // Initialize the platform object:
var platform = new H.service.Platform({
  apikey: "EAzf67CB714wCGH5W_MYZvFHE9IziXm82TWkdS0FNek"
});

// Obtain the default map types from the platform object
var maptypes = platform.createDefaultLayers();

// Instantiate (and display) a map object:
var map = new H.Map(
    document.getElementById("mapContainer"),
    maptypes.vector.normal.map,
    {
        zoom: 13,
        center: { lng: 107.600, lat: -6.919 }
    });

