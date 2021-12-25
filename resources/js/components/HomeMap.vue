<template>
    <div>
        <div id="map-container"></div>
    </div>
</template>

<script>
import 'ol/ol.css';
import GeoJSON from 'ol/format/GeoJSON';
import Map from 'ol/Map';
import VectorLayer from 'ol/layer/Vector';
import VectorSource from 'ol/source/Vector';
import View from 'ol/View';
import TileLayer from 'ol/layer/Tile';
import XYZSource from 'ol/source/XYZ';
import {bbox} from 'ol/loadingstrategy';

let vectorSource = new VectorSource({
            format: new GeoJSON(),
            loader: function (extent, resolution, projection) {tm
                var proj = projection.getCode();
                var url = 'http://unitopo.local/api/gis/poi';
                var xhr = new XMLHttpRequest();
                xhr.open('GET', url);
                var onError = function () {
                    vectorSource.removeLoadedExtent(extent);
                };
                xhr.onerror = onError;
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        vectorSource.addFeatures(
                            vectorSource.getFormat().readFeatures(xhr.responseText));
                    } else {
                        onError();
                    }
                };
                xhr.send();
            },
            strategy: bbox
        });

    export default {
        mounted() {
            this.$nextTick(function () {
                initMap();
            })
        }
    }
    function initMap() {
        var myMap = new Map({
            target: 'map-container',
            layers: [
                new TileLayer({
                    source: new XYZSource({
                        url: 'http://tile.thunderforest.com/outdoors/{z}/{x}/{y}.png?apikey=0509574ee01f4147a6d1078fc6a10ca2'
                    })
                }),
                new VectorLayer({
                    source: new VectorSource({
                        format: new GeoJSON(),
                        url: 'http://unitopo.local/api/gis/poi'
                    })
                })
            ],
            view: new View({
                center: [0, 0],
                zoom: 2
            })
        });
    }
</script>

<style>
    #map-container{
        position: absolute;
        width: 100%;
        height: calc(100% - 40px);
    }
</style>
