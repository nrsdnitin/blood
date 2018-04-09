<!DOCTYPE html>

<!--
Copyright 2017 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33848682-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag() {
  window.dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-33848682-1');
</script>

<meta charset="utf-8">
<meta name="description" content="Simplest possible examples of HTML, CSS and JavaScript.">
<meta name="author" content="//samdutton.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta itemprop="name" content="simpl.info: simplest possible examples of HTML, CSS and JavaScript">
<meta itemprop="image" content="/images/icons/icon192.png">
<meta id="theme-color" name="theme-color" content="#fff">

<title>Geolocation</title>
 

<style>
p#data {
	border: none;
	max-height: 20em;
}
	
	
	a {
  color: #15c;
  font-weight: 300;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a#viewSource {
  border-top: 1px solid #999;
  display: block;
  margin: 1.3em 0 0 0;
  padding: 1em 0 0 0;
}

div#links a {
  display: block;
  line-height: 1.3em;
  margin: 0 0 1.5em 0;
}

@media (min-width: 1000px) {
  /* hack! to detect non-touch devices */
  div#links a {
    line-height: 0.8em;
  }
}

h1 a {
  font-weight: 300;
  white-space: nowrap;
}

audio {
  max-width: 100%;
}

body {
  font-family: sans-serif;
  font-weight: 300;
  margin: 0;
  padding: 1em;
  word-break: break-word;
}

button {
  background-color: #d84a38;
  border: none;
  border-radius: 2px;
  color: white;
  font-family: sans-serif;
  font-size: 0.8em;
  margin: 0 0 1em 0;
  padding: 0.6em;
}

button:active {
  background-color: #cf402f;
}

button:hover {
  background-color: #cf402f;
}

button[disabled] {
  color: #ccc;
}

button[disabled]:hover {
  background-color: #d84a38;
}

canvas {
  background-color: #ccc;
  max-width: 100%;
  width: 100%;
}

code {
  font-family: sans-serif;
  font-weight: 400;
}

div#container {
  margin: 0 auto 0 auto;
  max-width: 40em;
  padding: 1em 1.5em 1.3em 1.5em;
}

div#highlight {
  background-color: #eee;
  font-size: 1.2em;
  margin: 0 0 50px 0;
  padding: 0.5em 2em;
}

div#links {
  padding: 0.5em 0 0 0;
}

h1 {
  border-bottom: 1px solid #ccc;
  font-family: sans-serif;
  font-weight: 500;
  margin: 0 0 0.8em 0;
  padding: 0 0 0.2em 0;
}

h2 {
  color: #444;
  font-size: 1em;
  font-weight: 500;
  line-height: 1.2em;
  margin: 0 0 0.8em 0;
}

h3 {
  border-top: 1px solid #eee;
  color: #666;
  font-size: 0.9em;
  font-weight: 500;
  margin: 20px 0 10px 0;
  padding: 10px 0 0 0;
  white-space: nowrap;
}

html {
/* avoid annoying page width change
when moving from the home page */
overflow-y: scroll;
}

img {
  border: none;
  max-width: 100%;
}

input {
  font-family: sans-serif;
}

input[type=radio] {
  position: relative;
  top: -1px;
}

input[type=radio] {
  position: relative;
  top: -1px;
}

label {
  font-family: sans-serif;
}

ol {
  padding: 0 0 0 20px;
}

p {
  color: #444;
  font-weight: 300;
  line-height: 1.6em;
}

p#data {
  border-top: 1px dotted #666;
  font-family: Courier New, monospace;
  line-height: 1.3em;
  max-height: 1000px;
  overflow-y: auto;
  padding: 1em 0 0 0;
}

p.borderBelow {
  border-bottom: 1px solid #eee;
  padding: 0 0 20px 0;
}

section p:last-of-type {
  margin: 0;
}

section {
  border-bottom: 1px solid #eee;
  margin: 0 0 30px 0;
  padding: 0 0 20px 0;
}

section:last-of-type {
  border-bottom: none;
  padding: 0 0 1em 0;
}

select {
  margin: 0 1em 1em 0;
  position: relative;
  top: -1px;
}

h1 span {
  white-space: nowrap;
}

strong {
  font-weight: 500;
}

ul {
  padding: 0 0 0 20px;
}

section p:last-of-type {
  margin: 0;
}

section {
  border-bottom: 1px solid #eee;
  margin: 0 0 30px 0;
  padding: 0 0 20px 0;
}

section:last-of-type {
  border-bottom: none;
  padding: 0 0 1em 0;
}

select {
  margin: 0 1em 1em 0;
  position: relative;
  top: -1px;
}

h1 span {
  white-space: nowrap;
}

strong {
  font-weight: 500;
}

video {
  background: #222;
  margin: 0 0 20px 0;
  width: 100%;
}

@media (max-width: 650px) {
  h1 {
    font-size: 24px;
  }
}

@media (max-width: 550px) {
  button:active {
    background-color: darkRed;
  }
  h1 {
    font-size: 22px;
  }
}

@media (max-width: 450px) {
  h1 {
    font-size: 20px;
  }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

<div id="container">

  

  
 <input type="button" id="target" value="Submit"/>
	 <input id="location_latitude" type="text" class="form-control" name="location_latitude" value="No" required>
                       <input id="location_longitude" type="text" class="form-control" name="location_longitude" value="No" required>
	
	
	<div id="map"   style="width:100%; height: 83%; position: absolute">
  <script >
	
	$( "#target" ).click(function() {
  
	 var startPos;
  var nudge = document.getElementById("target");

  var showNudgeBanner = function() {
    nudge.style.display = "block";
  };

  var hideNudgeBanner = function() {
    nudge.style.display = "none";
  };

  var nudgeTimeoutId = setTimeout(showNudgeBanner, 5000);

  var geoSuccess = function(position) {
    hideNudgeBanner();
    // We have the location, don't display banner
    clearTimeout(nudgeTimeoutId);

    // Do magic with location
    startPos = position;
    document.getElementById('map').innerHTML = startPos.coords.latitude;
    document.getElementById('map').innerHTML = startPos.coords.longitude;
  };
  var geoError = function(error) {
    switch(error.code) {
      case error.TIMEOUT:
        // The user didn't accept the callout
        showNudgeBanner();
        break;
    }
		
  };
});
	    
	
	 
	
	

  </script>

  <a href="https://github.com/samdutton/simpl/blob/gh-pages/geolocation" title="View source for this page on GitHub" id="viewSource">View source on GitHub</a>

</div></body>
</html>