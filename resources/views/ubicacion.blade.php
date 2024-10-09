<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ubicacion.css') }}">
    <link rel="shortcut icon" href="/img/logo I KAN blanco.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I KAN</title>
</head>

<body>

    @extends('layouts.app')
    <br><br><br><br>







    <center>
        <div style="width: 100%; background:#b2b2b2d8; color:white">
            <div class="">
                <h3>Tiendas oficiales</h3>
            </div>
        </div>
        </div>
    </center>


    <title>Locator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        gmpx-store-locator {
            width: 100%;
            height: 100%;

            /* These parameters customize the appearance of Locator Plus. See the documentation at
           https://github.com/googlemaps/extended-component-library/blob/main/src/store_locator/README.md
           for more information. */
            --gmpx-color-surface: #fff;
            --gmpx-color-on-surface: #212121;
            --gmpx-color-on-surface-variant: #757575;
            --gmpx-color-primary: #1967d2;
            --gmpx-color-outline: #e0e0e0;
            --gmpx-fixed-panel-width-row-layout: 28.5em;
            --gmpx-fixed-panel-height-column-layout: 65%;
            --gmpx-font-family-base: "Roboto", sans-serif;
            --gmpx-font-family-headings: "Roboto", sans-serif;
            --gmpx-font-size-base: 0.875rem;
            --gmpx-hours-color-open: #188038;
            --gmpx-hours-color-closed: #d50000;
            --gmpx-rating-color: #ffb300;
            --gmpx-rating-color-empty: #e0e0e0;
        }
    </style>
    <script>
        const CONFIGURATION = {
            "locations": [{
                    "title": "KOAJ C. C. CAMPANARIO POPAYÁN",
                    "address1": "Carrera 9 # 24A - 21 Centro comercial Campanario Local 117-118",
                    "address2": "Comuna 1, Popayán, Cauca, Colombia",
                    "coords": {
                        "lat": 2.4594453610111042,
                        "lng": -76.59389049388312
                    },
                    "placeId": "ChIJT87YZZ0DMI4RFFVTSDKb0qE"
                },
                {
                    "title": "Studio F",
                    "address1": "Cra. 15",
                    "address2": "Comuna 1, Popayán, Cauca, Colombia",
                    "coords": {
                        "lat": 2.460467681938863,
                        "lng": -76.59443164907378
                    },
                    "placeId": "ChIJMUIQUJ0DMI4RkqjKRC3soAY"
                },
                {
                    "title": "Calzatodo C.C. Campanario LC 50-51",
                    "address1": "Cra. 9 #24AN-21",
                    "address2": "Popayán, Cauca, Colombia",
                    "coords": {
                        "lat": 2.459154909099955,
                        "lng": -76.59515882778625
                    },
                    "placeId": "ChIJYzEX4HcDMI4RBW6hC-CVRYs"
                }
            ],
            "mapOptions": {
                "center": {
                    "lat": 38.0,
                    "lng": -100.0
                },
                "fullscreenControl": true,
                "mapTypeControl": false,
                "streetViewControl": false,
                "zoom": 4,
                "zoomControl": true,
                "maxZoom": 17,
                "mapId": ""
            },
            "mapsApiKey": "AIzaSyAQGgiVYsDYvyPfI5x1EbsKOsS75UJSkfA",
            "capabilities": {
                "input": true,
                "autocomplete": true,
                "directions": true,
                "distanceMatrix": true,
                "details": true,
                "actions": false
            }
        };
    </script>
    <script type="module">
        document.addEventListener('DOMContentLoaded', async () => {
            await customElements.whenDefined('gmpx-store-locator');
            const locator = document.querySelector('gmpx-store-locator');
            locator.configureFromQuickBuilder(CONFIGURATION);
        });
    </script>
    </head>

    <body>
        <!-- Please note unpkg.com is unaffiliated with Google Maps Platform. -->
        <script type="module" src="https://unpkg.com/@googlemaps/extended-component-library@0.6"></script>

        <!-- Uses components from the Extended Component Library; see
        https://github.com/googlemaps/extended-component-library for more information
        on these HTML tags and how to configure them. -->
        <gmpx-api-loader key="AIzaSyAQGgiVYsDYvyPfI5x1EbsKOsS75UJSkfA"
            solution-channel="GMP_QB_locatorplus_v10_cABCDE"></gmpx-api-loader>
        <gmpx-store-locator map-id="DEMO_MAP_ID"></gmpx-store-locator>

        <!-- <title>Locator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            
        }

        gmpx-store-locator {
            width: 88%;
            height: 70%;
            margin-left: 120px;
            

            /* These parameters customize the appearance of Locator Plus. See the documentation at
           https://github.com/googlemaps/extended-component-library/blob/main/src/store_locator/README.md
           for more information. */
            --gmpx-color-surface: #fff;
            --gmpx-color-on-surface: #212121;
            --gmpx-color-on-surface-variant: #757575;
            --gmpx-color-primary: #1967d2;
            --gmpx-color-outline: #e0e0e0;
            --gmpx-fixed-panel-width-row-layout: 28.5em;
            --gmpx-fixed-panel-height-column-layout: 65%;
            --gmpx-font-family-base: "Roboto", sans-serif;
            --gmpx-font-family-headings: "Roboto", sans-serif;
            --gmpx-font-size-base: 0.875rem;
            --gmpx-hours-color-open: #188038;
            --gmpx-hours-color-closed: #d50000;
            --gmpx-rating-color: #ffb300;
            --gmpx-rating-color-empty: #e0e0e0;
        }
    </style>
    <script>
        const CONFIGURATION = {
            "locations": [{
                    "title": "AMERICANINO POPAYÁN CAMPANARIO",
                    "address1": "Carrera 9 # 27AN21 Centro Comercial Campanario",
                    "address2": "Comuna 1, Popayán, Cauca, Colombia",
                    "coords": {
                        "lat": 2.459566284292291,
                        "lng": -76.59435858213956
                    },
                    "placeId": "ChIJF61Qm5QDMI4RsFE8nRP72_w"
                },
                {
                    "title": "Royal Films",
                    "address1": "Cra. 9a #24AN-21",
                    "address2": "Comuna 1, Popayán, Cauca, Colombia",
                    "coords": {
                        "lat": 2.459163394778142,
                        "lng": -76.59475170491086
                    },
                    "placeId": "ChIJEapXY50DMI4RR8YQ0gDfg64"
                }
            ],
            "mapOptions": {
                "center": {
                    "lat": 38.0,
                    "lng": -100.0
                },
                "fullscreenControl": true,
                "mapTypeControl": false,
                "streetViewControl": false,
                "zoom": 4,
                "zoomControl": true,
                "maxZoom": 17,
                "mapId": ""
            },
            "mapsApiKey": "AIzaSyCXfk4vbT0CeYlEAlmaonHde4EmsAWvoSs",
            "capabilities": {
                "input": true,
                "autocomplete": true,
                "directions": true,
                "distanceMatrix": true,
                "details": true,
                "actions": false
            }
        };
    </script>
    <script type="module">
        document.addEventListener('DOMContentLoaded', async () => {
            await customElements.whenDefined('gmpx-store-locator');
            const locator = document.querySelector('gmpx-store-locator');
            locator.configureFromQuickBuilder(CONFIGURATION);
        });
    </script>

    

























        <script>
            let submenu = document.getElementById("submenu");

            function toggleMenu() {
                submenu.classList.toggle("open-menu");
            }
        </script>

        <!-- <footer>
            <div class="container-ft">
                <div class="footer-content">
                    <div class="footer-div">
                        <div class="social-media">
                            <div class="logft">
                                <img src="/img/logo I KAN blanco.png" alt="">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <h1>Siguenos</h1>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank"><i
                                            class="fab fa-facebook-square"> facebook</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://co.pinterest.com/"><i class="fab fa-pinterest">
                                            Pinterest</i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"> Youtube</i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram">
                                            Instagram</i></a>
                                </li>
                            </ul>
                            <div class="social-icons">
                                <li>
                                    <h1>Somos I KAN</h1>
                                </li>
                                <ul>
                                    <li>Quienes Somos</li>
                                </ul>
                                <ul>
                                    <li>Preguntas frecuentes</li>
                                </ul>
                                <ul>
                                    <li>Comunicate con nosoos</li>
                                </ul>
                            </div>
                            <div class="social-icons">
                                <li>
                                    <h1>Politicas</h1>
                                </li>
                                <ul>
                                    <li>Politica de tratamiento de datos</li>
                                </ul>
                                <ul>
                                    <li>Terminos y condiciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <div class="ulti">
            <li>Todos los derechos reservados 2024. I kan Colombia</li>
        </div> -->








    </body>

</html>


<!--
  Copyright 2023 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
