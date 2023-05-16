var simplemaps_countrymap_mapdata={
  main_settings: {
   //General settings
    width: "500",//'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",

    //State defaults
    state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "yes",

    //Location defaults
    location_description: "Location description",
    location_url: "",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_size: 25,
    location_type: "square",
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",

    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
    hide_eastern_labels: "no",

    //Zoom settings
    zoom: "yes",
    manual_zoom: "yes",
    back_image: "no",
    initial_back: "no",
    initial_zoom: "-1",
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,

    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",

    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "no",
    images_directory: "default",
    fade_time: 0.1,
    link_text: "VER LIBROS",
    popups: "detect",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    COL1283: {
      name: "Amazonas",
      description: "",
      color:"#81C784"
    },
    COL1314: {
      name: "Antioquia",
      description: "",
      color:"#EB2323",
      url:"./regiones/regionAndina.html"
    },
    COL1315: {
      name: "Boyacá",
      description: "",
      color:"#A68D8D"
    },
    COL1316: {
      name: "Córdoba",
      description: "",
      color:"#F1D5C7"
    },
    COL1317: {
      name: "Santander",
      description: "",
      color:"#A569BD",
      url:"./regiones/regionAndina.html"


    },
    COL1318: {
      name: "La Guajira",
      description: "",
      color:"#F1D5C7"
    },
    COL1342: {
      name: "San Andrés y Providencia",
      description: "",
      color:"#81C784"

    },
    COL1397: {
      name: "Caldas",
      description: "",
      color:"#EB2323"
    },
    COL1398: {
      name: "Cundinamarca",
      description: "",
      color:"#A68D8D"
    },
    COL1399: {
      name: "Bogota",
      description: "",
      color:"#A68D8D"

    },
    COL1400: {
      name: "Quindío",
      description: "",
      color:"#EB2323"
    },
    COL1401: {
      name: "Risaralda",
      description: "",
      color:"#EB2323"
    },
    COL1402: {
      name: "Tolima",
      description: "",
      color:"#4ED7EB"
    },
    COL1403: {
      name: "Caquetá",
      description: "",
      color:"#81C784"
    },
    COL1404: {
      name: "Cauca",
      description: "",
      color:"#FEE902"

    },
    COL1405: {
      name: "Huila",
      description: "",
      color:"#4ED7EB"
    },
    COL1406: {
      name: "Nariño",
      description: "",

      color:"#FE6B02"

    },
    COL1407: {
      name: "Putumayo",
      description: "",
      color:"#81C784"

    },
    COL1408: {
      name: "Valle del Cauca",
      description: "",
      color:"#FEE902"

    },
    COL1412: {
      name: "Atlántico",
      description: "",
      color:"#F1D5C7"

    },
    COL1413: {
      name: "Bolívar",
      description: "",
      color:"#F1D5C7"

    },
    COL1414: {
      name: "Cesar",
      description: "",
      color:"#F1D5C7"

    },
    COL1415: {
      name: "Chocó",
      description: "",
      color:"#FE6B02"

    },
    COL1416: {
      name: "Magdalena",
      description: "",
      color:"#F1D5C7"

    },
    COL1417: {
      name: "Sucre",
      description: "",
      color:"#F1D5C7"
    },
    COL1420: {
      name: "Arauca",
      description: "",
      color:"#463C3C"
    },
    COL1421: {
      name: "Norte de Santander",
      description: "",
      color:"#A569BD"

    },
    COL1422: {
      name: "Casanare",
      description: "",
      color:"#463C3C"
    },
    COL1423: {
      name: "Guaviare",
      description: "",
      color:"#463C3C"
    },
    COL1424: {
      name: "Guainía",
      description: "",
      color:"#81C784"
    },
    COL1425: {
      name: "Meta",
      description: "",
      color:"#463C3C"
    },
    COL1426: {
      name: "Vaupés",
      description: "",
      color:"#81C784"
    },
    COL1427: {
      name: "Vichada",
      description: "",
      color:"#463C3C"
    }
  },
  locations: {
    "0": {
      lat: "4.649178",
      lng: "-74.062827",
      name: "Bogotá",
      type: "image",
      description: "<img src=\"/img/escudo_nacional.png\" style=\"width: 200px\" />",
      image_url: "/img/escudo_nacional.png"


    },

    "1": {
      lat: "11.049178",
      lng: "-73.000827",
      name: "region caribe",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/4.png\" style=\"width: 150px\" />"
    },

    "2": {
      lat: "8.249178",
      lng: "-72.900827",
      name: "Región Santanderes ",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/7.png\" style=\"width: 150px\" />"
    },

    "3": {
      lat: "7.049178",
      lng: "-75.900827",
      name: "Región Noroccidental",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/6.png\" style=\"width: 150px\" />"
    },

    "4": {
      lat: "2.949178",
      lng: "-75.900827",
      name: "Alto Magdalena",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/2.png\" style=\"width: 150px\" />",
      url:"https://crazybooks.com.co/books/create"
      
    },

    "5": {
      lat: "1.549178",
      lng: "-76.900827",
      name: "Región Suroccidental",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/5.png\" style=\"width: 150px\" />"
    },

    "6": {
      lat: "6.049178",
      lng: "-77.000777",
      name: "Región Pacífica",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/3.png\" style=\"width: 150px\" />"
    },

    "7": {
      lat: "4.0049178",
      lng: "-70.000827",
      name: "Región Orinoquía",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/8.png\" style=\"width: 150px\" />"
    },

    "8": {
      lat: "5.049178",
      lng: "-73.262827",
      name: "Región Cundiboyacense",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/10.png\" style=\"width: 150px\" />"
    },

    "9": {
      lat: "-1.10",
      lng: "-71.400827",
      name: "Región Amazónica",
      type: "image",
      image_url: "/img/icon.png",
      description: "<img src=\"/img/9.png\" style=\"width: 150px\" />"
    },

    "10": {
      lat: "11.949178",
      lng: "-77.700827",
      name: "Región Insular \n (San Andrés y Providencia)",
      type: "image",
      image_url: "/img/islads.png",
      description: "<img src=\"/img/1.png\" style=\"width: 150px\" />",
    },


  },
  labels: {},
  legend: {
    entries: []
  },
  regions: {}
};
