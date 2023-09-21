<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Juice Blender</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
    rel="stylesheet"
  />
    <script src='main.js'></script>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");


* {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

.banner{
  width: 100%;
  height: 100vh;
  background-image: 
  linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.75)),url(herobanner1.jpg);
  background-size: cover;
  background-position: center;
}

.navbar {
  width: 85%;
  margin: auto;
  padding: 35px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar ul li{
  list-style: none;
  display: inline-block;
  margin: 0 20px;
  position: relative;
}

.navbar ul li a{
  text-decoration: none;
  text-transform: uppercase;
  font-size: 1.5em;
}

.navbar ul li::after{
  content: '';
  height: 6px;
  width: 0;
  background: #009688;
  position: absolute;
  left: 0;
  bottom: -10px;
  border-radius: 4px;
  transition: 0.3s;
}

.navbar ul li:hover::after{
  width: 100%;
}


.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  font-size: 2.5rem;
  font-weight: 600;
  line-height: 3rem;
  color: grey;
  mix-blend-mode: multiply;
}


.btn:hover {
  background-color: var(--primary-color-dark);
}

a {
  text-decoration: none;
}

img {
  width: 100%;
  display: flex;
}

body {
  font-family: "Poppins", sans-serif;
}

nav {
  max-width: var(--max-width);
  margin: auto;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}

.nav__logo {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
}

.nav__links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.link a {
  font-weight: 500;
  color: var(--text-light);
  transition: 0.3s;
}

.link a:hover {
  color: var(--text-dark);
}

.header__container .section__header {
  text-align: center;
  font-size: 3rem;
  line-height: 4rem;
  margin-top: 20vh;
}

.booking__container {
  border-radius: 2rem;
  border: 1px solid var(--extra-light);
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
  background-color: rgb(223, 228, 152);
  opacity: 0.9;
}

.booking__nav {
  max-width: 600px;
  margin: auto;
  display: flex;
  align-items: center;
  background-color: var(--extra-light);
  border-radius: 5px;
}

.booking__nav span {
  flex: 1;
  padding: 1rem 2rem;
  font-weight: 500;
  color: var(--text-light);
  text-align: center;
  border-radius: 5px;
  cursor: pointer;
}

.booking__nav span:nth-child(2) {
  color: var(--white);
  background-color: var(--primary-color);
}

.booking__container form {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(4, 1fr) auto;
  gap: 1rem;
}

.booking__container .input__content {
  width: 100%;
}

.booking__container .form__group {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.booking__container .form__group span {
  padding: 10px;
  font-size: 1.5rem;
  color: var(--text-dark);
  background-color: var(--extra-light);
  border-radius: 1rem;
}

.booking__container .input__group {
  width: 100%;
  position: relative;
}

.booking__container label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 1.2rem;
  font-weight: 500;
  color: black;
  pointer-events: none;
  transition: 0.3s;
}

.booking__container input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  outline: none;
  border: none;
  border-bottom: 1px solid var(--primary-color);
  color: var(--text-dark);
}

.booking__container input:focus ~ label {
  font-size: 0.8rem;
  top: 0;
}

.booking__container .form__group p {
  margin-top: 0.5rem;
  font-size: 0.8rem;
  color: black;
}

.booking__container .btn {
  padding: 1rem;
  font-size: 1.5rem;
}

.search_div {
  display: flex;
  justify-content: space-between;
  width: 50%;
  height: 60px;
  border: 2px solid black;
  display: flex;
  flex-direction: row;
}

.search_input {
  width: 80%;
  border-radius: 5%;
  background-color: Whitesmoke;
  font-weight: bold;
  font-size: 1rem;
}
.search_button  {
  width: 10%;
  border-radius: 5%;
  font-size: 0.7rem;
  font-weight: bolder;
}

.info__container {
  max-width: 100%;
  margin-top: 14vh;
  display: flex;
  flex-direction: column;
  width: 100vw;
  height: 60vh;
  background-color: grey;
}

.container__cards {
  display: flex;
  width: 100%;
}

.container__col2 {
  flex: 1;
}

.container__col2 p {
  font-size: 1vw;
  font-weight: 300;
  letter-spacing: 4px;
  width: 50%;
  word-spacing: 3px;
}

.reiser_table {
  border-collapse: collapse;
  width: 100%;
}

.reiser_table th,
.reiser_table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.reiser_table th {
  background-color: #333;
  color: white;
}

.reiser_table tbody tr {
  background-color: #f2f2f2;
}

/* Media query for smaller screens */
@media screen and (max-width: 768px) {

  .navbar ul li a{
  text-decoration: none;
  text-transform: uppercase;
  font-size: 0.8em;
}

  .info__container {
    flex-direction: column; /* Stack columns vertically */
    height: auto; /* Remove fixed height */
    margin-top: 10vh; /* Adjust margin for smaller screens */
  }

  .container__col1 {
    flex: 1; /* Take full width for smaller screens */
    max-width: 100%; /* Remove max-width for smaller screens */
    padding-right: 0; /* Remove padding for smaller screens */
  }


  .reiser_table {
    font-size: 0.8em; /* Adjust table font size for smaller screens */
  }

  .search_div {
  display: flex;
  justify-content: space-between;
  width: 100%;
  height: 60px;
  border: 2px solid black;
  display: flex;
  flex-direction: row;
}
}

    </style>

</head>
<body>
  <div class="banner">
    <div class="navbar">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Book a flight</a></li>
        <li><a href="travel_student.html">Travel as a student</a></li>
        <li><a href="reise_session/login.php">Login</a></li>
      </ul>
    </div>

      <header class="section__container header__container">
        <h1 class="section__header">Finn og bestill<br />En lærerik klassetur</h1>
      </header>
  
      <!-- <section class="section__container booking__container">
        <div class="booking__nav">
          <span>0-10 Elever</span>
          <span>11-20 Elever</span>
          <span>21+elever</span>
        </div>
        <form>
          <div class="form__group">
            <span><i class="ri-map-pin-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Location</label>
              </div>
              <p>Where are you going (countrie)?</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-user-3-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="number" />
                <label>Travellers</label>
              </div>
              <p>Add guests</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Departure</label>
              </div>
              <p>Add date</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Return</label>
              </div>
              <p>Add date</p>
            </div>
          </div>
          <button class="btn"><i class="ri-search-line"></i></button>
        </form>
      </section> -->

      <div class="info__container">
  <form action="" method="GET">
    <div class="search_div">
      <input type="text" name="search" required value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>" class="search_input" placeholder="Search data">
      <button type="submit" class="search_button">Search</button>
    </div>
  </form>

  <div class="container__cards">
    <div class="container__col2">
      <h1>Reiser</h1><br>
      <?php
      // Tilkoblingsinformasjon
      $servernavn = "localhost";
      $brukernavn = "root";
      $passord = "";
      $dbnavn = "reiser";

      // Oppretter en kobling
      $tilkobling = mysqli_connect($servernavn, $brukernavn, $passord, $dbnavn);

      // Sjekker om koblingen fungerer
      if ($tilkobling->connect_error) {
        die("Noe gikk galt: " . $tilkobling->connect_error);
      }
      // Angi UTF-8 som tegnsett og æ, ø, og å vises riktig
      $tilkobling->set_charset("utf8");
      ?>

      <?php
      // Get the user's search input
      $searchInput = isset($_GET['search']) ? $_GET['search'] : '';

      // SQL select-setning henter data fra databasen med en WHERE-klausul
      $sql = sprintf("SELECT idreise, land, `by`, klasse, kontakt, dato FROM reise WHERE land LIKE '%%%s%%' OR klasse LIKE '%%%s%%' OR dato LIKE '%%%s%%'", mysqli_real_escape_string($tilkobling, $searchInput), mysqli_real_escape_string($tilkobling, $searchInput), mysqli_real_escape_string($tilkobling, $searchInput));

      $datasett = $tilkobling->query($sql);
      ?>

      <table class="reiser_table">
        <thead>
          <tr>
            <th>Land</th>
            <th>By</th>
            <th>Klasse</th>
            <th>Kontakt Person</th>
            <th>Dato</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($rad = mysqli_fetch_array($datasett)) { ?>
            <tr>
              <td><?php echo $rad["land"]; ?></td>
              <td><?php echo $rad["by"]; ?></td>
              <td><?php echo $rad["klasse"]; ?></td>
              <td><?php echo $rad["kontakt"]; ?></td>
              <td><?php echo $rad["dato"]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

      <?php if (mysqli_num_rows($datasett) === 0) { ?>
        <p>No results found.</p>
      <?php } ?>
    </div>
  </div>
</div>

</body>
</html>