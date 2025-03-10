<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourBestie<3</title>
    <style>
body {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header { display: flex; justify-content: space-between; align-items: center; background: #007bff; color: white; padding: 15px; }
        .header h1 { margin: 0; padding-left: 20px; font-size: 24px; }
        .profile { width: 40px; height: 40px; border-radius: 50%; background: white; cursor: pointer; display: flex; justify-content: center; align-items: center; overflow: hidden; margin-right: 20px; }
        .profile img { width: 100%; height: 100%; border-radius: 50%; }
        .dropdown { display: none; position: absolute; right: 20px; top: 60px; background: white; border: 1px solid #ddd; border-radius: 5px; }
        .dropdown a { display: block; padding: 10px; text-decoration: none; color: black; }
        .dropdown a:hover { background: #f0f0f0; }
        .control-panel { display: flex; justify-content: center; gap: 20px; padding: 10px; }
        .control-panel a { text-decoration: none; color:rgb(40, 12, 155); font-weight: bold; padding: 5px 10px; border-radius: 5px; }
        .control-panel a:hover { background: #e0e0e0; }
        .container { display: flex; justify-content: center; gap: 20px; margin-top: 20px; }
        .search-container { text-align: center; margin: 20px 0; }
        .search-bar { width: 50%; padding: 10px; font-size: 16px; border: 1px solid #ddd; border-radius: 5px; }
        .container { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px; margin-top: 20px; }
        .country { border: 1px solid #ddd; padding: 30px; border-radius: 10px; width: 200px; height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: space-between; text-align: center; }
        .country img { max-width: 100%; height: 100px; border-radius: 5px; }
        .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;  
    margin-top: 20px;
}

.country:hover {
            background:rgb(32, 56, 138);
            color: white;
        }

        .country img {
    max-width: 100%;
    height: 100px;
    border-radius: 5px;
}
button:hover {
    background-color: #0056b3;
}
        .country {
    border: 1px solid #ddd;
    padding: 30px;
    border-radius: 10px;
    width: 200px;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    text-align: center;
}
        .popup, .overlay { display: none; position: fixed; z-index: 1000; }
        .popup { top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
        .overlay { top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); }
        .stars span { cursor: pointer; font-size: 20px; color: #ddd; }
        .stars span.selected { color: gold; 
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>TourBestie</h1>
        <div class="profile" onclick="toggleDropdown()"> 👤
        </div>
    </div>


    <div class="control-panel">
        <a href="#" onclick="openHelpPopup()">Help</a>
        <a href="https://www.google.com/maps" target="_blank">Maps</a>
        <a href="https://www.ivisa.com" target="_blank">Visa Details</a>
        <a href="https://www.skyscanner.com" target="_blank">Book Flights</a>
        <a href="https://www.timeanddate.com/time/map/" target="_blank">Time Zones</a>
    </div>
    <div class="dropdown" id="dropdown">
        <a href="#" onclick="openPopup()">Bucket List</a>
        <a href="#">Logout</a>
    </div>
    <div class="search-container">
        <input type="text" id="searchBar" class="search-bar" onkeyup="filterCountries()" placeholder="Search for a country...">
    </div>
    <div class="container" id="countryContainer">
        <div class="country" data-name="Japan">
            <h3>Japan</h3> <br>
        <a href="https://www.google.com/maps/place/Japan/@31.6587296,115.6223994,4z/data=!3m1!4b1!4m6!3m5!1s0x34674e0fd77f192f:0xf54275d47c665244!8m2!3d36.204824!4d138.252924!16zL20vMDNfM2Q?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="japan.jpg" width="250" height="250"> </a>
            <button onclick="addToBucketList('Japan')">Add to Bucket List</button>
            <div class="stars" data-country="Japan"> </div>
        </div><div class="country" data-name="France">
    <h3>France</h3>
    <br>
    <a href="https://www.google.com/maps/place/France">
        <img src="pariss.jpg" width="250" height="250">  
    </a>
    <button onclick="addToBucketList('France')">Add to Bucket List</button>
    <div class="stars" data-country="France"></div>
</div>

        <div class="country" data-name="india">
    <h3>India</h3> <br>
         <a href="https://www.google.com/maps/place/India/@3.9719614,2.9511596,3z/data=!3m1!4b1!4m15!1m8!3m7!1s0x30635ff06b92b791:0xd78c4fa1854213a6!2sIndia!3b1!8m2!3d20.593684!4d78.96288!16zL20vMDNyazA!3m5!1s0x30635ff06b92b791:0xd78c4fa1854213a6!8m2!3d20.593684!4d78.96288!16zL20vMDNyazA?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="india.jpg" width="250" height="250"> </a>
    <button onclick="addToBucketList('India')">Add to Bucket List</button>
    <div class="stars" data-country="India"></div>
</div>

<div class="country" data-name="singapore">
    <h3>Singapore</h3> 
    <br>
        <a href="https://www.google.com/maps/place/Singapore/@1.314665,103.514556,10z/data=!3m1!4b1!4m6!3m5!1s0x31da11238a8b9375:0x887869cf52abf5c4!8m2!3d1.352083!4d103.819836!16zL20vMDZ0MnQ?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="singapore.jpg" width="250" height="250"> </a>

    <button onclick="addToBucketList('Singapore')">Add to Bucket List</button>
    <div class="stars" data-country="Singapore"></div>
</div>

<div class="country" data-name="switzerland">
    <h3>Switzerland</h3> <br>
        <a href="https://www.google.com/maps/place/Switzerland/@46.7865744,5.5832767,7z/data=!3m1!4b1!4m6!3m5!1s0x478c64ef6f596d61:0x5c56b5110fcb7b15!8m2!3d46.818188!4d8.227512!16zL20vMDZtenA?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="switz.jpg" width="250" height="250"> </a>
    <button onclick="addToBucketList('Switzerland')">Add to Bucket List</button>
    <div class="stars" data-country="Switzerland"></div>
</div> <br> 

<div class="country" data-name="germany">
    <h3>Germany</h3> <br>
        <a href="https://www.google.com/maps/place/Germany/@49.6113517,-8.5611906,5z/data=!3m1!4b1!4m6!3m5!1s0x479a721ec2b1be6b:0x75e85d6b8e91e55b!8m2!3d51.165691!4d10.451526!16zL20vMDM0NWg?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="german.jpg" width="250" height="250"> </a>
    <button onclick="addToBucketList('Germany')">Add to Bucket List</button>
    <div class="stars" data-country="Germany"></div>
</div>

<div class="country" data-name="thailand">
    <h3>Thailand</h3> <br>
        <a href="https://www.google.com/maps/place/Thailand/@12.3082565,81.6071701,5z/data=!3m1!4b1!4m6!3m5!1s0x304d8df747424db1:0x9ed72c880757e802!8m2!3d15.870032!4d100.992541!16zL20vMDdmMXg?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="thai.jpg" width="300" height="250"> </a>
    <button onclick="addToBucketList('Thailand')">Add to Bucket List</button>
    <div class="stars" data-country="Thailand"></div>
</div>

<div class="country" data-name="dubai">
    <h3>Dubai</h3> <br>
        <a href="https://www.google.com/maps/place/Dubai+-+United+Arab+Emirates/@25.0762804,54.8978029,10z/data=!3m1!4b1!4m6!3m5!1s0x3e5f43496ad9c645:0xbde66e5084295162!8m2!3d25.2048493!4d55.2707828!16zL20vMDFmMDhy?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="dubai.jpg" width="250" height="250"> </a>
    <button onclick="addToBucketList('Dubai')">Add to Bucket List</button>
    <div class="stars" data-country="Dubai"></div>
</div>
    
<div class="country" data-name="australia">
    <h3>Australia</h3> <br>
        <a href="https://www.google.com/maps/place/Australia/@-18.5265798,86.6651732,3z/data=!3m1!4b1!4m6!3m5!1s0x2b2bfd076787c5df:0x538267a1955b1352!8m2!3d-25.274398!4d133.775136!16zL20vMGNoZ2h5?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="australia.jpg" width="250" height="250"> </a>
    <button onclick="addToBucketList('Australia')">Add to Bucket List</button>
    <div class="stars" data-country="Australia"></div>
</div>

<div class="country" data-name="south Korea">
    <h3>South Korea</h3>  <br> 
        <a href="https://www.google.com/maps/place/South+Korea/@35.711803,122.5780349,6z/data=!3m1!4b1!4m6!3m5!1s0x356455ebcb11ba9b:0x91249b00ba88db4b!8m2!3d35.907757!4d127.766922!16zL20vMDZxZDM?entry=ttu&g_ep=EgoyMDI1MDMwNC4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D">
        <img src="sk.jpg" width="300" height="250"> </a>
    <button onclick="addToBucketList('South Korea')">Add to Bucket List</button>
    <div class="stars" data-country="South Korea"></div>
</div>

    </div>
    
    <div class="overlay" id="overlay" onclick="closePopup()"></div>
    <div class="popup" id="popup">
        <h3>My Bucket List</h3>
        <ul id="bucketList"></ul>
        <button onclick="closePopup()">Close</button>
    </div>
    
    <div class="overlay" id="helpOverlay" onclick="closeHelpPopup()"></div>
    <div class="popup" id="helpPopup">
        <h2>How to Use TourBestie</h2> <br>
        <p>Click on a country to view details.</p> <br>
        <p>Click "Add to Bucketlist" to save a destination to your bucket list.</p> <br>
        <p>Click the profile icon to view your saved destinations.</p> <br>
        <button onclick="closeHelpPopup()">Close</button> <br>
    </div>
    
    <script>
        function filterCountries() {
            let input = document.getElementById('searchBar').value.toLowerCase();
            let countries = document.querySelectorAll('.country');
            
            countries.forEach(country => {
                let countryName = country.getAttribute('data-name').toLowerCase();
                if (countryName.includes(input)) {
                    country.style.display = "flex";
                } else {
                    country.style.display = "none";
                }
            });
        }
    </script>

    <script>
        function toggleDropdown() {
            let dropdown = document.getElementById("dropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        function openPopup() {
            document.getElementById("popup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }

        function addToBucketList(country) {
            let list = document.getElementById("bucketList");
            if (!document.getElementById("item-" + country)) {
                let li = document.createElement("li");
                li.id = "item-" + country;
                li.innerHTML = `${country} <span class='stars' data-country='${country}'></span>`;
                list.appendChild(li);
                generateStars(document.querySelector(`[data-country='${country}']`));
            }
        }
        
        function generateStars(container) {
            container.innerHTML = '';
            for (let i = 1; i <= 5; i++) {
                let star = document.createElement("span");
                star.innerHTML = "&#9733;";
                star.dataset.rating = i;
                star.onclick = function() { setRating(container.dataset.country, i); };
                container.appendChild(star);
            }
            applyStoredRating(container);
        }
        
        function setRating(country, rating) {
            localStorage.setItem("rating-" + country, rating);
            applyStoredRating(document.querySelector(`[data-country='${country}']`));
        }

        function applyStoredRating(container) {
            let rating = localStorage.getItem("rating-" + container.dataset.country) || 0;
            container.querySelectorAll("span").forEach(star => {
                star.classList.toggle("selected", star.dataset.rating <= rating);
            });
        }

        function openHelpPopup() {
            document.getElementById("helpPopup").style.display = "block";
            document.getElementById("helpOverlay").style.display = "block";
        }

        function closeHelpPopup() {
             document.getElementById("helpPopup").style.display = "none";
             document.getElementById("helpOverlay").style.display = "none";
        }

        function setRating(country, rating) {
             localStorage.setItem("rating-" + country, rating);
             applyStoredRating(document.querySelector(`[data-country='${country}']`));
             alert("Rating recorded!");  
        }


        document.querySelectorAll(".stars").forEach(generateStars);
    </script>
</body>
</html>
