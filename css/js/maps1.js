

 function initialize() {      
   var styleArray = [ 
  { 
   "featureType": "all", 
   "elementType": "labels.text.fill", 
   "stylers": [ 
    { 
     "saturation": 36 
    }, 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 40 
    } 
   ] 
  }, 
  { 
   "featureType": "all", 
   "elementType": "labels.text.stroke", 
   "stylers": [ 
    { 
     "visibility": "on" 
    }, 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 16 
    } 
   ] 
  }, 
  { 
   "featureType": "all", 
   "elementType": "labels.icon", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#35383d" 
    }, 
    { 
     "lightness": "0" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative", 
   "elementType": "geometry.stroke", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 17 
    }, 
    { 
     "weight": 1.2 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative", 
   "elementType": "labels", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.country", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.country", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.country", 
   "elementType": "labels.text", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.province", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.locality", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    }, 
    { 
     "saturation": "-100" 
    }, 
    { 
     "lightness": "30" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.neighborhood", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "administrative.land_parcel", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "landscape", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    }, 
    { 
     "gamma": "0.00" 
    }, 
    { 
     "lightness": "74" 
    } 
   ] 
  }, 
  { 
   "featureType": "landscape", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 20 
    } 
   ] 
  }, 
  { 
   "featureType": "landscape", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#35383d" 
    } 
   ] 
  }, 
  { 
   "featureType": "landscape.man_made", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "lightness": "3" 
    } 
   ] 
  }, 
  { 
   "featureType": "poi", 
   "elementType": "all", 
   "stylers": [ 
    { 
     "visibility": "off" 
    } 
   ] 
  }, 
  { 
   "featureType": "poi", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 21 
    } 
   ] 
  }, 
  { 
   "featureType": "poi.government", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#ff0000" 
    } 
   ] 
  }, 
  { 
   "featureType": "road", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "visibility": "simplified" 
    } 
   ] 
  }, 
  { 
   "featureType": "road.highway", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#2a2d32" 
    }, 
    { 
     "lightness": "0" 
    } 
   ] 
  }, 
  { 
   "featureType": "road.highway", 
   "elementType": "geometry.stroke", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 29 
    }, 
    { 
     "weight": 0.2 
    } 
   ] 
  }, 
  {
"featureType": "road.arterial", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 18 
    } 
   ] 
  }, 
  { 
   "featureType": "road.arterial", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#2a2d32" 
    } 
   ] 
  }, 
  { 
   "featureType": "road.local", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 16 
    } 
   ] 
  }, 
  { 
   "featureType": "road.local", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#2a2d32" 
    } 
   ] 
  }, 
  { 
   "featureType": "transit", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 19 
    } 
   ] 
  }, 
  { 
   "featureType": "transit", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#35383d" 
    } 
   ] 
  }, 
  { 
   "featureType": "water", 
   "elementType": "geometry", 
   "stylers": [ 
    { 
     "color": "#000000" 
    }, 
    { 
     "lightness": 17 
    } 
   ] 
  }, 
  { 
   "featureType": "water", 
   "elementType": "geometry.fill", 
   "stylers": [ 
    { 
     "color": "#272a2f" 
    } 
   ] 
  } 
   ]; 
   var myLatlng = new google.maps.LatLng(40.671641, -73.950472);
   var point1 = new google.maps.LatLng(40.671641, -73.950472); 
     var icon = 'http://pixel-mafia.com/demo/helpers/marker-01.png'
    
   var mapOptions = { 
  zoom: 11, 
  scrollwheel: false, 
  center: myLatlng, 
  mapTypeId: google.maps.MapTypeId.ROADMAP, 
  styles: styleArray 
   };      
   var map = new google.maps.Map(document.getElementById('map-canvas1'), mapOptions); 
   var marker = new google.maps.Marker({ 
    position: point1, 
    map: map, 
    title: 'New York!', 
    icon: icon 
   });
 }      
 google.maps.event.addDomListener(window, 'load', initialize);             






