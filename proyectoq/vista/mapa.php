<!DOCTYPE html>
<html>
  <head>
    <title>Waypoints in Directions</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/mapa.css" />
    <script src="assets/js/mapa.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="map"></div>
      <div id="sidebar">
        <div>
          <b>Inicio:</b>
          <select id="start">
            <option value="Halifax, NS">Halifax, NS</option>
            <option value="Boston, MA">Boston, MA</option>
            <option value="New York, NY">New York, NY</option>
            <option value="Miami, FL">Miami, FL</option>
          </select>
          <br />
          <b>Paradas:</b> <br />
   <br />
          <select multiple id="waypoints">
            <option value="montreal, quebec">Montreal, QBC</option>
            <option value="toronto, ont">Toronto, ONT</option>
            <option value="chicago, il">Chicago</option>
            <option value="winnipeg, mb">Winnipeg</option>
            <option value="fargo, nd">Fargo</option>
            <option value="calgary, ab">Calgary</option>
            <option value="spokane, wa">Spokane</option>
          </select>
          <br />
          <b>Fin:</b>
          <select id="end">
            <option value="Vancouver, BC">Vancouver, BC</option>
            <option value="Seattle, WA">Seattle, WA</option>
            <option value="San Francisco, CA">San Francisco, CA</option>
            <option value="Los Angeles, CA">Los Angeles, CA</option>
          </select>
          <br />
          <input type="submit" id="submit" />
        </div>
        <div id="directions-panel"></div>
      </div>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAopHItpjooVl8RRMDZEwFw1U-cW_uf4gQ&callback=initMap&v=weekly"
      async
    ></script>
  </body>
</html>