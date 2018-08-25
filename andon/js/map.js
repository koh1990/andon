//即時関数
(function(){
    "use strict";
    //地図情報
    var mapData    = { pos: { lat: 38.246785, lng: 140.332663 }, zoom: 16 };
    //マーカー情報(情報ウインドウ含む)
    var markerData = [
        { pos: { lat: 38.246785, lng: 140.332663 }, title: "andon", icon: {url: 'https://and-on.info/wp/wp-content/themes/andon/img/ico_map.png', scaledSize: new google.maps.Size(55, 60)  }, infoWindowOpen: false, infoWindowContent: "<p class='spot'>andon</p>" },
    ];
    //地図の設定と作成
    var map = new google.maps.Map(document.getElementById('map'), {
        center: mapData.pos,
        zoom:   mapData.zoom,
        mapTypeControl: false,
        panControl: false,
        zoomControl: false,
        scaleControl: false,
        streetViewControl: false,
        styles: [
    {
        "featureType": "all",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#1f313c"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "gamma": 0.01
            },
            {
                "lightness": 20
            },
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -31
            },
            {
                "lightness": -33
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.8
            },
            {
                "color": "#1f313c"
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
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#1f313c"
            },
            {
                "lightness": "25"
            },
            {
                "gamma": "0.66"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": 20
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 20
            },
            {
                "saturation": -20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#1f313c"
            },
            {
                "lightness": "15"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#1f313c"
            },
            {
                "lightness": "22"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "lightness": -20
            }
        ]
    }
]
    });
    for( var i=0; i < markerData.length; i++ )
    {
        //即時関数
        (function(){
            //マーカーの設定と作成
            var marker = new google.maps.Marker({
                position: markerData[i].pos,
                title:    markerData[i].title,
                icon:     markerData[i].icon,
                map: map
            });
            if( markerData[i].infoWindowContent )
            {
                //情報ウインドウの設定と作成
                var infoWindow = new google.maps.InfoWindow({
                    content: markerData[i].infoWindowContent
                });
                //情報ウインドウのオープンをマーカーのクリックイベントに登録
                marker.addListener('click', function(){
                    infoWindow.open(map, marker);
                });
                //情報ウインドウのオープン
                if( markerData[i].infoWindowOpen )
                {
                    infoWindow.open(map, marker);
                }
            }
        }());
    }
}());