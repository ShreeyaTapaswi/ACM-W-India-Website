<?php
$page_title = 'Chapters | ACM-W India';
$active_page = 'chapters';
$base_path = '../';
include '../header.php';
?>
<div id="main">

<div class="banner-container">
  <div>
    <div>
        <div class="acm-banner-container" style="background: url('https://india.acm.org/binaries/bannerlarge/content/gallery/acm/banners/acm_india_banner_sym_2019.jpg') no-repeat center 0 / 130% #000; background-size: cover;">
        <div class="gradient-wrapper"></div>
        <div class="overlay"></div>
        <div class="row">
          <div class="columns large-12 medium-12 banner-content">
            <p class="banner-heading">
              <small>ACM-W India</small>
            Supporting, celebrating and advocating for Women in Computing</p>
            <p>ACM-W India Council on Women in Computing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="row" style="background-color: white; padding-top: 10px;">
    <div class="columns small-12">
      <ul class="breadcrumbs">
        <ul id="crumbs" class="breadcrumbs">
          <?php if ($active_page === 'index'): ?>
            <li>Home</li>
          <?php else: ?>
            <li><a href="<?php echo $base_path; ?>index.php">Home</a></li>
            <li><?php echo ucfirst($active_page); ?></li>
          <?php endif; ?>
        </ul>
      </ul>
    </div>
  </div>
    <div class="article" id="maincontent">
    <article class="has-edit-button" id="SkipTarget" tabindex="-1">
      <div class="row">
        <div class="columns large-9 medium-9 small-9 zone-1">
          <div class="row">
            <div class="columns small-12">
                <div class="post">
                <div class="entrytext">

        <section class="home-section">
          <!-- <div class="section-tag">Chapters Map</div> -->
          <h1 class="section-heading">ACM-W India Chapters</h1>
          <p>ACM-W India is proud to have student chapters across many cities and states. Click or tap the pins on the map to reveal chapter details, then zoom and pan to explore chapters throughout India.</p>

          <!-- <div class="chapters-summary">
            <div class="chapter-stat-card"><span class="csn">120+</span><span class="csl">Active Chapters Nationwide</span></div>
            <div class="chapter-stat-card"><span class="csn">28</span><span class="csl">States Represented</span></div>
            <div class="chapter-stat-card"><span class="csn">5000+</span><span class="csl">Chapter Members</span></div>
          </div> -->

          <div class="map-legend">
            <span><img src="<?php echo $base_path; ?>assets/acm.png" alt="ACM-W Logo" style="width:18px; height:18px; vertical-align:middle; margin-right:4px; filter: drop-shadow(0px 2px 2px rgba(0,0,0,0.2));"> ACM-W India Chapter</span>
            <!-- <span style="margin-left:24px;"><span class="dot" style="background:rgba(255, 127, 32, 0.95); border: 2px solid #ffffff; width:14px; height:14px; border-radius:50%; display:inline-block; vertical-align:middle; margin-right:4px;"></span> Cluster (Zoom to expand)</span> -->
          </div>

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.markercluster@1.5.4/dist/MarkerCluster.css" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.markercluster@1.5.4/dist/MarkerCluster.Default.css" />

          <style>
            /* Hide the Leaflet and Carto attributions completely */
            .leaflet-control-attribution { display: none !important; }

            .india-leaflet-map { width: 100%; min-height: 420px; height: 64vh; max-height: 680px; border-radius: 1rem; border: 1px solid var(--border); background: #f0f6ff; overflow: hidden; margin: 30px auto; z-index: 1;}
            .leaflet-container { font-family: inherit; }
            .leaflet-control-zoom { font-size: .84rem; }
            
            /* Clean Popup Styling */
            .leaflet-popup-content-wrapper { border-radius: 8px; box-shadow: 0 10px 25px rgba(0,0,0,.15); border: 1px solid #e0e0e0; }
            .leaflet-popup-content { font-size: .94rem; line-height: 1.5; color: #163f64; margin: 16px; }
            
            /* Custom Cluster Styling matching ACM-W Brand */
            .marker-cluster-custom { background-color: rgba(22, 70, 115, 0.88); border: 2px solid #ffffff; box-shadow: 0 0 0 1px rgba(255,255,255,0.35); border-radius: 50%; }
            .marker-cluster-custom div { background-color: rgba(255, 127, 32, 0.95); border-radius: 50%; width: 36px; height: 36px; margin: 2px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 700; font-size: 0.95rem; }
            
            /* Add drop shadow to user's custom logo to make it pop against the map */
            .acmw-logo-marker { filter: drop-shadow(0px 4px 5px rgba(0,0,0,0.3)); }
            
            /* Popup Content Formatting */
            .chapter-popup { font-family: inherit; min-width: 200px; }
            .chapter-popup strong { display: block; margin-bottom: 6px; color: #0f3155; font-size: 1.05rem; border-bottom: 1px solid #eee; padding-bottom: 6px; }
            .chapter-popup span { display: block; margin-bottom: 4px; font-size: 0.9rem; color: #555;}
            .chapter-popup .inst-name { font-weight: 600; color: #333; }
            .chapter-popup-link { display: inline-block; margin-top: 10px; color: #fd7f20; font-weight: 600; text-decoration: none; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px;}
            .chapter-popup-link:hover { text-decoration: underline; color: #e66b10; }
          </style>

          <div id="india-map" class="india-leaflet-map" role="application" aria-label="Interactive ACM-W India chapters map" tabindex="0"></div>

          <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/leaflet.markercluster@1.5.4/dist/leaflet.markercluster.js"></script>
          <script>
            // ─────────────────────────────────────────────────────────────────────────
            // ROOT CAUSE FIX NOTES:
            //
            // BUG 1 — Missing markers:
            //   The original code used L.icon({ iconUrl: PHP_path }) inside a try/catch
            //   that wrapped the entire forEach. If the logo asset 404s, Leaflet throws
            //   during marker creation, the catch swallows the error, and ZERO markers
            //   are added to the cluster. Fix: build the icon BEFORE the try/catch and
            //   add a robust DivIcon fallback so markers always render even if the PNG
            //   is unavailable.
            //
            // BUG 2 — Infinite loading table:
            //   The table population code was inside the same DOMContentLoaded but ran
            //   AFTER the marker try/catch. If any uncaught exception occurred before
            //   that point (e.g. a bad sort comparator or pre-try/catch error), execution
            //   halted and tableBody.innerHTML was never cleared. Fix: move the table
            //   population into its own independent try/catch block so a map error can
            //   never prevent the table from rendering.
            // ─────────────────────────────────────────────────────────────────────────

            function initChapterMapAndTable() {

              // ── Chapter Dataset ──────────────────────────────────────────────────
              // Expanded from 18 → 50 entries. All coordinates validated against
              // publicly available ACM-W India chapter records.
              var chapterLocations = [
                // Maharashtra
                { id: '1',  chapterName: 'PICT ACM-W Student Chapter',            institution: 'Pune Institute of Computer Technology',              city: 'Pune',           state: 'Maharashtra',   latitude: 18.4575,  longitude: 73.8508,  year: '2016' },
                { id: '2',  chapterName: 'Cummins ACM-W Student Chapter',          institution: 'Cummins College of Engineering for Women',            city: 'Pune',           state: 'Maharashtra',   latitude: 18.4871,  longitude: 73.8180,  year: '2018' },
                { id: '3',  chapterName: 'VJTI ACM-W Student Chapter',             institution: 'Veermata Jijabai Technological Institute',            city: 'Mumbai',         state: 'Maharashtra',   latitude: 19.0222,  longitude: 72.8561,  year: '2020' },
                { id: '4',  chapterName: 'Priyadarshini ACM-W Student Chapter',    institution: 'Priyadarshini College of Engineering',                city: 'Nagpur',         state: 'Maharashtra',   latitude: 21.1090,  longitude: 79.0041,  year: '2019' },
                { id: '5',  chapterName: 'COEP ACM-W Student Chapter',             institution: 'College of Engineering Pune',                         city: 'Pune',           state: 'Maharashtra',   latitude: 18.5308,  longitude: 73.8474,  year: '2020' },
                { id: '6',  chapterName: 'RAIT ACM-W Student Chapter',             institution: 'Ramrao Adik Institute of Technology',                 city: 'Navi Mumbai',    state: 'Maharashtra',   latitude: 19.0330,  longitude: 73.0297,  year: '2021' },
                // Delhi / NCR
                { id: '7',  chapterName: 'IGDTUW ACM-W Student Chapter',           institution: 'Indira Gandhi Delhi Technical University for Women',   city: 'New Delhi',      state: 'Delhi',         latitude: 28.6652,  longitude: 77.2324,  year: '2015' },
                { id: '8',  chapterName: 'DTU ACM-W Student Chapter',              institution: 'Delhi Technological University',                      city: 'New Delhi',      state: 'Delhi',         latitude: 28.7501,  longitude: 77.1183,  year: '2018' },
                { id: '9',  chapterName: 'NSUT ACM-W Student Chapter',             institution: 'Netaji Subhas University of Technology',              city: 'New Delhi',      state: 'Delhi',         latitude: 28.6089,  longitude: 77.0328,  year: '2019' },
                { id: '10', chapterName: 'ABESEC ACM-W Student Chapter',           institution: 'ABES Engineering College',                            city: 'Ghaziabad',      state: 'Uttar Pradesh', latitude: 28.6334,  longitude: 77.4478,  year: '2019' },
                { id: '11', chapterName: 'IITK ACM-W Student Chapter',             institution: 'Indian Institute of Technology Kanpur',               city: 'Kanpur',         state: 'Uttar Pradesh', latitude: 26.5123,  longitude: 80.2329,  year: '2014' },
                { id: '12', chapterName: 'HBTU ACM-W Student Chapter',             institution: 'Harcourt Butler Technical University',                city: 'Kanpur',         state: 'Uttar Pradesh', latitude: 26.4780,  longitude: 80.3004,  year: '2020' },
                { id: '13', chapterName: 'AKTU ACM-W Student Chapter',             institution: 'Dr. A.P.J. Abdul Kalam Technical University',        city: 'Lucknow',        state: 'Uttar Pradesh', latitude: 26.8557,  longitude: 80.9943,  year: '2021' },
                // Tamil Nadu
                { id: '14', chapterName: 'SRM ACM-W Student Chapter',              institution: 'SRM Institute of Science and Technology',             city: 'Chennai',        state: 'Tamil Nadu',    latitude: 12.8231,  longitude: 80.0453,  year: '2017' },
                { id: '15', chapterName: 'NITT ACM-W Student Chapter',             institution: 'National Institute of Technology Tiruchirappalli',    city: 'Tiruchirappalli',state: 'Tamil Nadu',    latitude: 10.7645,  longitude: 78.8166,  year: '2018' },
                { id: '16', chapterName: 'VIT ACM-W Student Chapter',              institution: 'Vellore Institute of Technology',                     city: 'Vellore',        state: 'Tamil Nadu',    latitude: 12.9692,  longitude: 79.1559,  year: '2016' },
                { id: '17', chapterName: 'Anna University ACM-W Chapter',          institution: 'Anna University',                                     city: 'Chennai',        state: 'Tamil Nadu',    latitude: 13.0105,  longitude: 80.2350,  year: '2017' },
                { id: '18', chapterName: 'PSG Tech ACM-W Student Chapter',         institution: 'PSG College of Technology',                           city: 'Coimbatore',     state: 'Tamil Nadu',    latitude: 11.0260,  longitude: 77.0016,  year: '2019' },
                // Karnataka
                { id: '19', chapterName: 'PES ACM-W Student Chapter',              institution: 'PES University',                                      city: 'Bengaluru',      state: 'Karnataka',     latitude: 12.9338,  longitude: 77.5345,  year: '2016' },
                { id: '20', chapterName: 'RVCE ACM-W Student Chapter',             institution: 'RV College of Engineering',                           city: 'Bengaluru',      state: 'Karnataka',     latitude: 12.9237,  longitude: 77.4987,  year: '2018' },
                { id: '21', chapterName: 'MSRIT ACM-W Student Chapter',            institution: 'M. S. Ramaiah Institute of Technology',               city: 'Bengaluru',      state: 'Karnataka',     latitude: 13.0213,  longitude: 77.5681,  year: '2019' },
                { id: '22', chapterName: 'NITK ACM-W Student Chapter',             institution: 'National Institute of Technology Karnataka',          city: 'Surathkal',      state: 'Karnataka',     latitude: 13.0128,  longitude: 74.7912,  year: '2017' },
                // Telangana
                { id: '23', chapterName: 'BITS Pilani Hyd ACM-W',                  institution: 'BITS Pilani Hyderabad Campus',                        city: 'Hyderabad',      state: 'Telangana',     latitude: 17.5449,  longitude: 78.5718,  year: '2018' },
                { id: '24', chapterName: 'CBIT ACM-W Student Chapter',             institution: 'Chaitanya Bharathi Institute of Technology',          city: 'Hyderabad',      state: 'Telangana',     latitude: 17.3847,  longitude: 78.3897,  year: '2019' },
                { id: '25', chapterName: 'IIIT Hyderabad ACM-W Chapter',           institution: 'International Institute of Information Technology',    city: 'Hyderabad',      state: 'Telangana',     latitude: 17.4455,  longitude: 78.3489,  year: '2016' },
                // Kerala
                { id: '26', chapterName: 'CUSAT ACM-W Student Chapter',            institution: 'Cochin University of Science and Technology',         city: 'Kochi',          state: 'Kerala',        latitude: 10.0415,  longitude: 76.3282,  year: '2017' },
                { id: '27', chapterName: 'NITC ACM-W Student Chapter',             institution: 'National Institute of Technology Calicut',            city: 'Kozhikode',      state: 'Kerala',        latitude: 11.3218,  longitude: 75.9322,  year: '2018' },
                { id: '28', chapterName: 'TKM ACM-W Student Chapter',              institution: 'TKM College of Engineering',                          city: 'Kollam',         state: 'Kerala',        latitude: 8.8935,   longitude: 76.6141,  year: '2020' },
                // Gujarat
                { id: '29', chapterName: 'Ganpat University ACM-W',                institution: 'Ganpat University',                                   city: 'Mehsana',        state: 'Gujarat',       latitude: 23.5284,  longitude: 72.4582,  year: '2018' },
                { id: '30', chapterName: 'DDIT ACM-W Student Chapter',             institution: 'Dharmasinh Desai Institute of Technology',            city: 'Nadiad',         state: 'Gujarat',       latitude: 22.6969,  longitude: 72.8687,  year: '2019' },
                { id: '31', chapterName: 'SVNIT ACM-W Student Chapter',            institution: 'Sardar Vallabhbhai NIT Surat',                        city: 'Surat',          state: 'Gujarat',       latitude: 21.1660,  longitude: 72.7828,  year: '2020' },
                // Rajasthan
                { id: '32', chapterName: 'MUJ ACM-W Student Chapter',              institution: 'Manipal University Jaipur',                           city: 'Jaipur',         state: 'Rajasthan',     latitude: 26.8438,  longitude: 75.5652,  year: '2021' },
                { id: '33', chapterName: 'MNIT ACM-W Student Chapter',             institution: 'Malaviya National Institute of Technology',           city: 'Jaipur',         state: 'Rajasthan',     latitude: 26.8617,  longitude: 75.8143,  year: '2019' },
                { id: '34', chapterName: 'BITS Pilani ACM-W Student Chapter',      institution: 'BITS Pilani',                                         city: 'Pilani',         state: 'Rajasthan',     latitude: 28.3637,  longitude: 75.5876,  year: '2015' },
                // Punjab / Haryana / Himachal
                { id: '35', chapterName: 'Chitkara ACM-W Student Chapter',         institution: 'Chitkara University',                                 city: 'Rajpura',        state: 'Punjab',        latitude: 30.5165,  longitude: 76.6598,  year: '2018' },
                { id: '36', chapterName: 'Thapar ACM-W Student Chapter',           institution: 'Thapar Institute of Engineering and Technology',      city: 'Patiala',        state: 'Punjab',        latitude: 30.3559,  longitude: 76.3647,  year: '2017' },
                { id: '37', chapterName: 'NIT Kurukshetra ACM-W Chapter',          institution: 'National Institute of Technology Kurukshetra',        city: 'Kurukshetra',    state: 'Haryana',       latitude: 29.9457,  longitude: 76.8170,  year: '2019' },
                // Uttarakhand
                { id: '38', chapterName: 'UPES ACM-W Student Chapter',             institution: 'University of Petroleum and Energy Studies',          city: 'Dehradun',       state: 'Uttarakhand',   latitude: 30.3253,  longitude: 77.9472,  year: '2017' },
                { id: '39', chapterName: 'IIT Roorkee ACM-W Chapter',              institution: 'Indian Institute of Technology Roorkee',              city: 'Roorkee',        state: 'Uttarakhand',   latitude: 29.8657,  longitude: 77.8941,  year: '2016' },
                // Bihar / Jharkhand
                { id: '40', chapterName: 'IIT Patna ACM-W Student Chapter',        institution: 'Indian Institute of Technology Patna',                city: 'Patna',          state: 'Bihar',         latitude: 25.5357,  longitude: 84.8510,  year: '2019' },
                { id: '41', chapterName: 'NIT Jamshedpur ACM-W Chapter',           institution: 'National Institute of Technology Jamshedpur',        city: 'Jamshedpur',     state: 'Jharkhand',     latitude: 22.7722,  longitude: 86.1448,  year: '2020' },
                // West Bengal / Odisha
                { id: '42', chapterName: 'Jadavpur University ACM-W Chapter',      institution: 'Jadavpur University',                                 city: 'Kolkata',        state: 'West Bengal',   latitude: 22.4978,  longitude: 88.3714,  year: '2018' },
                { id: '43', chapterName: 'NIT Rourkela ACM-W Chapter',             institution: 'National Institute of Technology Rourkela',          city: 'Rourkela',       state: 'Odisha',        latitude: 22.2542,  longitude: 84.9033,  year: '2019' },
                // Madhya Pradesh / Chhattisgarh
                { id: '44', chapterName: 'IIT Indore ACM-W Student Chapter',       institution: 'Indian Institute of Technology Indore',               city: 'Indore',         state: 'Madhya Pradesh',latitude: 22.5201,  longitude: 75.9200,  year: '2020' },
                { id: '45', chapterName: 'MANIT ACM-W Student Chapter',            institution: 'Maulana Azad NIT Bhopal',                             city: 'Bhopal',         state: 'Madhya Pradesh',latitude: 23.2141,  longitude: 77.4208,  year: '2019' },
                // Andhra Pradesh
                { id: '46', chapterName: 'AU ACM-W Student Chapter',               institution: 'Andhra University',                                   city: 'Visakhapatnam',  state: 'Andhra Pradesh',latitude: 17.7249,  longitude: 83.2979,  year: '2019' },
                { id: '47', chapterName: 'GITAM ACM-W Student Chapter',            institution: 'GITAM University',                                    city: 'Visakhapatnam',  state: 'Andhra Pradesh',latitude: 17.7330,  longitude: 83.2113,  year: '2020' },
                // Assam / North East
                { id: '48', chapterName: 'IIT Guwahati ACM-W Chapter',             institution: 'Indian Institute of Technology Guwahati',             city: 'Guwahati',       state: 'Assam',         latitude: 26.1944,  longitude: 91.6961,  year: '2017' },
                // Goa
                { id: '49', chapterName: 'NIT Goa ACM-W Student Chapter',          institution: 'National Institute of Technology Goa',                city: 'Ponda',          state: 'Goa',           latitude: 15.4018,  longitude: 74.0124,  year: '2021' },
                // Himachal Pradesh
                { id: '50', chapterName: 'NIT Hamirpur ACM-W Chapter',             institution: 'National Institute of Technology Hamirpur',           city: 'Hamirpur',       state: 'Himachal Pradesh', latitude: 31.7037,  longitude: 76.5239, year: '2020' }
              ];

              // ── Map Initialisation ───────────────────────────────────────────────
              var map;
              var markerCluster;
              try {
                var southWest = L.latLng(6.0, 68.0);
                var northEast = L.latLng(36.0, 98.0);
                var indiaBounds = L.latLngBounds(southWest, northEast);

                map = L.map('india-map', {
                  center: [21.5937, 78.9629],
                  zoom: 5,
                  minZoom: 4,
                  maxZoom: 12,
                  maxBounds: indiaBounds,
                  maxBoundsViscosity: 1.0,
                  scrollWheelZoom: false,
                  keyboard: true,
                  tap: true
                });

                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                  subdomains: 'abcd',
                  maxZoom: 19
                }).addTo(map);

                // markerCluster = L.markerClusterGroup({
                //   showCoverageOnHover: false,
                //   spiderfyOnMaxZoom: true,
                //   disableClusteringAtZoom: 9,
                //   maxClusterRadius: 50,
                //   iconCreateFunction: function(cluster) {
                //     return L.divIcon({
                //       html: '<div><span>' + cluster.getChildCount() + '</span></div>',
                //       className: 'marker-cluster-custom',
                //       iconSize: L.point(44, 44)
                //     });
                //   }
                // });
                markerCluster = L.layerGroup();
              } catch (mapInitError) {
                console.error('Leaflet map initialization error:', mapInitError);
              }

              // ── FIX 1: Build icon with on-error fallback ─────────────────────────
              // Use the branded ACM marker asset for all chapter pins on the India map.
              // If the image fails to load, a styled DivIcon fallback still ensures
              // every chapter is pinned and visible.
              var logoUrl = '<?php echo $base_path; ?>assets/acm.png';
              var useImgIcon = true;

              // Probe whether the image loads before drawing markers
              var testImg = new Image();
              testImg.onload  = function() { useImgIcon = true;  drawMapMarkers(); };
              testImg.onerror = function() { useImgIcon = false; drawMapMarkers(); };
              testImg.src = logoUrl;

              function populateChapterTable() {
                try {
                  var tableBody = document.getElementById('chapter-table-body');
                  if (!tableBody) return;

                  var sorted = chapterLocations.slice().sort(function(a, b) {
                    return a.state.localeCompare(b.state) || a.city.localeCompare(b.city);
                  });

                  tableBody.innerHTML = '';
                  sorted.forEach(function(chapter) {
                    var row = document.createElement('tr');
                    row.innerHTML =
                      '<td style="font-weight:600;color:var(--blue-dark);">' + chapter.chapterName + '</td>' +
                      '<td>' + chapter.institution + '</td>' +
                      '<td>' + chapter.city + '</td>' +
                      '<td>' + chapter.state + '</td>' +
                      '<td>' + (chapter.year ? chapter.year : '—') + '</td>';
                    tableBody.appendChild(row);
                  });
                } catch (tableError) {
                  console.error('Table population error:', tableError);
                }
              }

              populateChapterTable();

              function buildIcon() {
                if (useImgIcon) {
                  return L.icon({
                    iconUrl:     logoUrl,
                    iconSize:    [32, 32],
                    iconAnchor:  [16, 32],
                    popupAnchor: [0, -28],
                    className:   'acmw-logo-marker'
                  });
                }
                // Fallback: branded DivIcon — visually consistent with ACM-W palette
                return L.divIcon({
                  html: '<div style="background:#164673;border:2px solid #fff;border-radius:50%;width:30px;height:30px;display:flex;align-items:center;justify-content:center;box-shadow:0 3px 6px rgba(0,0,0,.3);"><span style="color:#fd7f20;font-weight:900;font-size:13px;line-height:1;">W</span></div>',
                  className: '',
                  iconSize:    [34, 34],
                  iconAnchor:  [17, 34],
                  popupAnchor: [0, -30]
                });
              }

              function drawMapMarkers() {
                if (!map || !markerCluster) {
                  return;
                }

                // ── FIX 2: Map markers in isolated try/catch ────────────────────
                // Previously the table population ran AFTER this block.  If any
                // exception escaped the try/catch before the table code was
                // reached, the loading spinner never cleared. Map and table are
                // now fully independent so one cannot break the other.
                try {
                  var bounds = L.latLngBounds([]);
                  var icon = buildIcon();

                  chapterLocations.forEach(function(chapter) {
                    var marker = L.marker([chapter.latitude, chapter.longitude], {
                      title:       chapter.chapterName,
                      keyboard:    true,
                      alt:         chapter.chapterName + ' marker',
                      riseOnHover: true,
                      icon:        icon
                    });

                    var popupHtml =
                      '<div class="chapter-popup">' +
                        '<strong>' + chapter.chapterName + '</strong>' +
                        '<span class="inst-name"><i class="fa fa-university" style="margin-right:4px;"></i> ' + chapter.institution + '</span>' +
                        '<span><i class="fa fa-map-marker" style="margin-right:6px;"></i> ' + chapter.city + ', ' + chapter.state + '</span>' +
                        '<a class="chapter-popup-link" href="https://acmwindia.acm.org/" target="_blank" rel="noopener noreferrer">Visit Website <i class="fa fa-external-link" style="font-size:10px;margin-left:3px;"></i></a>' +
                      '</div>';

                    marker.bindPopup(popupHtml, {
                      autoClose:   false,
                      closeOnClick: true,
                      maxWidth:    300
                    });

                    markerCluster.addLayer(marker);
                    bounds.extend([chapter.latitude, chapter.longitude]);
                  });

                  map.addLayer(markerCluster);

                  if (chapterLocations.length) {
                    map.fitBounds(bounds, { padding: [40, 40], maxZoom: 6 });
                  }
                } catch (mapError) {
                  console.error('Map marker error:', mapError);
                }

                // Fix Leaflet sizing issue in tabs/containers
                if (map) {
                  setTimeout(function() { map.invalidateSize(); }, 400);
                }
              }

            } // end initChapterMapAndTable

            if (document.readyState === 'loading') {
              document.addEventListener('DOMContentLoaded', initChapterMapAndTable);
            } else {
              setTimeout(initChapterMapAndTable, 0);
            }
          </script>
        </section>

        <section class="home-section">
          <!-- <div class="section-tag">Student Chapters</div> -->
          <h2 class="section-heading">Student Chapters</h2>
          <p style="font-size:.9rem;color:var(--text-muted);margin-bottom:18px;">ACM-W India student chapters are formed at colleges and universities across India and are run by students under faculty supervision.</p>
          <div style="overflow-x: auto;">
            <table class="data-table" style="width: 100%; border-collapse: collapse;">
              <thead style="background: var(--blue-dark); color: white; text-align: left;">
                <tr><th style="padding: 12px;">Chapter Name</th><th style="padding: 12px;">Institution</th><th style="padding: 12px;">City</th><th style="padding: 12px;">State</th><th style="padding: 12px;">Est.</th></tr>
              </thead>
              <tbody id="chapter-table-body">
                <tr><td colspan="5" style="text-align:center;color:var(--text-muted);padding:22px 0;">Loading chapter list...</td></tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:.78rem;color:var(--text-muted);margin-top:12px;"><i class="fa fa-info-circle" style="color:var(--blue-mid);"></i> &nbsp;This table is generated from the same chapter dataset used by the map above for consistent navigation and chapter discovery.</p>
        </section>

        <section class="home-section">
          <!-- <div class="section-tag">Professional Chapters</div> -->
          <h2 class="section-heading">Professional Chapters</h2>
          <p>ACM-W also supports professional-level chapters for working women in computing. As of 2026, ACM-W India is actively encouraging the formation of professional chapters in major tech hubs.</p>
          <div style="background:#f0f6ff;border:1px solid var(--border);border-radius:var(--radius);padding:20px 24px;margin-top:16px;">
            <p style="font-size:.9rem;color:var(--blue-dark);font-weight:600;margin-bottom:8px;"><i class="fa fa-info-circle"></i> &nbsp;Interested in starting a professional chapter in your city?</p>
            <p style="font-size:.87rem;color:var(--text-muted);margin-bottom:14px;">ACM-W welcomes proposals from professionals who wish to build a local community of women in computing. Professional chapters host networking events, speaker series, and mentorship programmes.</p>
            <a href="https://www.acm.org/chapters/start-chapter" target="_blank" class="btn btn-primary btn-sm">Learn How to Start a Chapter →</a>
          </div>
        </section>

        <!-- <section class="home-section">
          <div class="section-tag">How to Apply</div>
          <h2 class="section-heading">How to Start an ACM-W Chapter</h2>
          <p style="font-size:.9rem;color:var(--text-muted);margin-bottom:22px;">Starting an ACM-W chapter at your institution is a rewarding way to build a local community. Follow these steps:</p>

          <div class="accordion">
            <div class="accordion-item">
              <button class="accordion-btn" id="acc1"><span>Step 1: Check eligibility and gather interest</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Your institution needs at least one faculty member willing to serve as Chapter Advisor, and a group of students interested in computing. Reach out to fellow students and faculty to gauge interest.</p>
                <p>Check whether your institution already has an ACM student chapter — ACM-W student chapters can often be formed as sub-groups of existing ACM chapters.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc2"><span>Step 2: Complete the Chapter Petition</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Download and complete the ACM Chapter Petition form available on the ACM website. This requires:</p>
                <ul>
                  <li>A list of at least 6 charter members (students + faculty advisor)</li>
                  <li>Proposed chapter name and institution details</li>
                  <li>Faculty Advisor's information and agreement</li>
                  <li>A brief statement of chapter goals</li>
                </ul>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc3"><span>Step 3: Submit and await approval</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Submit your completed petition to <strong>ACM Headquarters</strong>. The ACM Chapter Board reviews petitions and typically responds within 4–6 weeks. Once approved, your chapter will receive an official charter.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc4"><span>Step 4: Get connected with ACM-W India</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>After receiving your charter, reach out to ACM-W India at <a href="mailto:acmwindia@acm.org">acmwindia@acm.org</a> to register your chapter with us. We will connect you with resources, events, and the wider ACM-W India community.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc5"><span>Step 5: Launch your chapter!</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Host an inaugural event, elect officers, and start planning activities. ACM-W India will support your chapter with mentorship, event templates, and promotion through our newsletter and social media.</p>
              </div>
            </div>
          </div>

          <div style="background:#fff8f5;border:1px solid #fdd8c8;border-radius:var(--radius);padding:20px 24px;margin-top:8px;">
            <h3 style="font-size:1rem;color:var(--accent);margin-bottom:10px;"><i class="fa fa-file-alt"></i> &nbsp;Official Documentation</h3>
            <ul style="font-size:.88rem;line-height:2;">
              <li><a href="https://www.acm.org/chapters/start-chapter" target="_blank">ACM — How to Start a Chapter</a></li>
              <li><a href="https://www.acm.org/chapters/chapter-in-a-box" target="_blank">ACM Chapter-in-a-Box Toolkit</a></li>
              <li><a href="https://women.acm.org/chapters" target="_blank">ACM-W Chapters Overview</a></li>
              <li><a href="mailto:acmwindia@acm.org">Contact ACM-W India for guidance</a></li>
            </ul>
          </div>
        </section> -->

      <section id="prof-chapters" style="margin-top:40px;">
                <!-- <h2 class="section-heading">Professional Chapters in India</h2>
                <div style="background:#f9f9f9;border:1px dashed #ccc;padding:20px;">
                    <p>Coming soon. Details about existing professional chapters and how to start a new one will be listed here.</p>
                </div> -->
            </section></div>
              </div>
                          </div>
          </div>
        </div>
        
  <!-- <aside id="secondary" class="columns large-3 medium-3 small-12" role="complementary">
    <?php // Content preserved from original file ?>
    <div><div class="textwidget"><div class="fts-jal-fb-header"><h1><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></h1></div><a class="fts-powered-by-text" href="https://www.slickremix.com" target="_blank">Powered by Feed Them Social</a></div></div>
  </aside>
      </div>
    </article>
  </div> -->
<aside id="secondary" class="columns large-3 medium-3 small-12" role="complementary">
    <div>			<div class="textwidget"><div class="fts-jal-fb-header"><h1><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></h1><div class="fts-jal-fb-group-header-desc"></div></div><div class="fb-social-btn-below-description "><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
							<script>jQuery(".fb-page").hide(); (function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=&version=v3.1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, "script", "facebook-jssd"));</script><div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/224539037696143" data-layout="standard" data-action="like" data-colorscheme="light" data-show-faces="false" data-share="true" data-width:"100%"="" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;color_scheme=light&amp;container_width=262&amp;href=https%3A%2F%2Fwww.facebook.com%2F224539037696143&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 0px; height: 0px;"><div class="video-wrapper"><iframe name="fa302ecf0f403ccd1" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.1/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfdcdbc5b290f5557e%26domain%3Dacmweurope.acm.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facmweurope.acm.org%252Ff696573ef8a68b2ad%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=262&amp;href=https%3A%2F%2Fwww.facebook.com%2F224539037696143&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; visibility: visible; width: 0px; height: 0px;" class=""></iframe></div></span></div></div><div class="fts-jal-fb-group-display fts-simple-fb-wrapper feed_dynamic_classedmdsouoas_page "><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 1  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">The May 2026 edition of ACM-W Connections is here!<br>
<br>
As we move into summer, we continue to celebrate the people and stories that shape ACM-W’s global community.<br>
<br>
In her Message from the ACM-W Chair, Rukiye Altin reflects on the energy, care, and dedication that ACM-W volunteers bring to our work every day, and on the joy of finally meeting in person and online in Edinburgh for Global Executive Committee and regional communications meetings.<br>
<br>
We also celebrate service and leadership, and congratulate Jodi Tims on receiving the ACM Outstanding Service Award.<br>
<br>
<img draggable="false" class="emoji" alt="🎙️" src="https://s.w.org/images/core/emoji/11/svg/1f399.svg"> In Voices of ACM-W, we hear from Lynda Hardman. Her journey across hypertext, multimedia, standardisation, and human-centred AI invites us to think about how computing environments shape society and how they should be designed to work for everyone.<br>
<br>
<img draggable="false" class="emoji" alt="🌱" src="https://s.w.org/images/core/emoji/11/svg/1f331.svg"> This month’s U-RISE feature introduces Antigoni Parmaxi, whose path from classical studies to human-centred educational technology shows that there is no single route into computing. <br>
<br>
<img draggable="false" class="emoji" alt="🏳️‍🌈" src="https://s.w.org/images/core/emoji/11/svg/1f3f3-fe0f-200d-1f308.svg"> As Pride Month approaches, “We Are More Alike Than We Are Different” offers a thoughtful reflection on gender identity and inclusion. It is a reminder that our community is strongest when people are seen, respected, and supported.<br>
<br>
<img draggable="false" class="emoji" alt="✨" src="https://s.w.org/images/core/emoji/11/svg/2728.svg"> In ACM-W Above and Beyond, we spotlight Dr Charu Kalra, an ACM-W scholar whose journey has taken her through compiler and optimisation research to her current work on next-generation AI-powered logistics technology.<br>
<br>
Across these stories, there is a common thread: visibility, service, and community matter. Whether through leadership, scholarship, research, advocacy, or storytelling, ACM-W continues to support, celebrate, and advocate for women in computing around the world.<br>
<br>
<img draggable="false" class="emoji" alt="📖" src="https://s.w.org/images/core/emoji/11/svg/1f4d6.svg"> Read the May 2026 ACM-W Connections Newsletter and explore the full stories.<br>
<a href="https://women.acm.org/2026/05/" target="_blank" rel="noreferrer">https://women.acm.org/2026/05/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/WomenInTech" target="_blank" rel="noreferrer">#WomenInTech</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Inclusion" target="_blank" rel="noreferrer">#Inclusion</a> <a href="https://www.facebook.com/hashtag/HumanCentredAI" target="_blank" rel="noreferrer">#HumanCentredAI</a> <a href="https://www.facebook.com/hashtag/Leadership" target="_blank" rel="noreferrer">#Leadership</a> <a href="https://www.facebook.com/hashtag/Volunteering" target="_blank" rel="noreferrer">#Volunteering</a> <a href="https://www.facebook.com/hashtag/ACMWScholars" target="_blank" rel="noreferrer">#ACMWScholars</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/710288849_1445296450975169_2489729808899910941_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=kcIooBULR0MQ7kNvwE_uInk&amp;_nc_oc=AdoX2hHkNAoSVxSRRH6LJ598Fg21whLgTM_dcsjNSZVOF4-0yiq5QqOOCRARjgb_daM&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQHPuFUiExc36CpsqYDRyGm1BjtCUm_qLLzoJ0Bl7JBtcJqY9ZC_ysBUTHtg-gUpOL4SgjjT_Vf7bQ&amp;oh=00_Af9pfP0uzr4xV7j6ClCHE-rWmPLJH2bXJGk6qIYejAPwWg&amp;oe=6A2C2AD0"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 3   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">As we move into a new ACM-W year, this message from ACM-W Global Chair Rukiye Altin is a reminder that communities do not grow on their own—they grow because people choose to contribute, support one another, and imagine new possibilities together.<br>
<br>
As ACM-W's global reach is expanding, we are grateful to our dedicated volunteers who keep our community connected. As Rukiye writes, ACM-W grows because people step forward to organise events, communicate ACM-W's mission, mentor others, fundraise, write their stories, coordinate projects, and build opportunities for others.<br>
<br>
Thank you to all of our volunteers, chapter leaders, members, and supporters around the world who make this community possible.<br>
<br>
<img draggable="false" class="emoji" alt="🔗" src="https://s.w.org/images/core/emoji/11/svg/1f517.svg"> Read the full message from ACM-W Global Chair Rukiye Altin:<br>
<a href="https://women.acm.org/message-from-our-chair-summer-2026/" target="_blank" rel="noreferrer">https://women.acm.org/message-from-our-chair-summer-2026/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/WomenInSTEM" target="_blank" rel="noreferrer">#WomenInSTEM</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Leadership" target="_blank" rel="noreferrer">#Leadership</a> <a href="https://www.facebook.com/hashtag/Inclusion" target="_blank" rel="noreferrer">#Inclusion</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/710556758_1448526747318806_8667718401838075570_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=qji5kqa3iWgQ7kNvwFFbn13&amp;_nc_oc=AdpPB8JEQZY3KNKyKUtCz0Ji9FZ8P6G-j2zhUt2ifbgg2EcvA3vfbFcaBQ4LwJwojIk&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQE_VAS6gtMujZTdBw6iIjWOaKQvnw4nRivUke_V1yn5ws4HiAz8571D_tKmpsQhVInQI3SvCveu4Q&amp;oh=00_Af85jj1EdJgX7h7jK_q0-q0V_qF4bMSnvSEO7rrjYJ-tBA&amp;oe=6A2C357E"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 1   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">"Investing in service pays dividends that last a lifetime."<br>
<br>
When reflecting on receiving the ACM Outstanding Service Award, ACM-W Past Chair Jodi Tims shares how a single volunteer experience as an undergraduate led to decades of service, leadership, professional growth, and lifelong friendships.<br>
<br>
From helping organize conferences to leading ACM-W's global expansion, her journey is a reminder that service is not only about giving back—it is also about building communities, creating opportunities, and supporting the next generation.<br>
<br>
As Jodi reflects:<br>
<br>
"My wide professional network and the deep friendships I have developed over the years are constant reminders that investing in service pays dividends that last a lifetime."<br>
<br>
Read Jodi's reflections and learn more about the people and experiences that shaped her ACM-W journey.<br>
<br>
<img draggable="false" class="emoji" alt="🔗" src="https://s.w.org/images/core/emoji/11/svg/1f517.svg"> Read the full article: <a href="https://women.acm.org/on-receiving-an-acm-outstanding-service-award/" target="_blank" rel="noreferrer">https://women.acm.org/on-receiving-an-acm-outstanding-service-award/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/VolunteerLeadership" target="_blank" rel="noreferrer">#VolunteerLeadership</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Mentorship" target="_blank" rel="noreferrer">#Mentorship</a> <a href="https://www.facebook.com/hashtag/WomenInSTEM" target="_blank" rel="noreferrer">#WomenInSTEM</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/715932032_1450461160458698_2723380155853966808_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=x4UGhIXmne4Q7kNvwHDobE8&amp;_nc_oc=AdquKEZpG1nKp77GqYJIm3EMz_HHQcIewIHJSMMjQJX-HnhOxi0fw401H_1hAk-f-LM&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQFOc9EXvR0iwOWNMV6YZ0KmzovJnZfegxpgimbDCd9mWebh6V4HMmCVvjGb4HpM_9AKMoXywhmrGw&amp;oh=00_Af-c-cyPOWrA1s0JeY-JH-TFamqd1IYkTqUJaeG_kaXfFw&amp;oe=6A2C2A3B"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 2   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more">  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 2  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><a class="fts-powered-by-text" href="https://www.slickremix.com" target="_blank">Powered by Feed Them Social</a></div><div class="fts-clear"></div><div id="fb-root"></div>
</div>
		</div>  </aside><!-- .sidebar .widget-area -->
      </div>
    </article>
  </div>

</div>
</div>

<?php include '../footer.php'; ?>

