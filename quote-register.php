<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REGISTER: SolarX Installation Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/solarx logo.png" rel="icon">
  <link href="assets/img/solarx logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="">
  var subjectObject = {
"Batangas": {
    "Agoncillo": [],
    "Alitagtag": [],
    "Balayan": [],
    "Balete": [],
    "Batangas City": [],
    "Bauan": [],
    "Calaca": [],
    "Calatagan": [],
    "Cuenca": [],
    "Ibaan": [],
    "Laurel": [],
    "Lemery": [],                                    
    "Lian": [],
    "Lipa": [],
    "Lobo": [],
    "Mabini": [],
    "Malvar": [],
    "Mataasnakahoy": [],
    "Nasugbu": [],
    "Padre Garcia": [],
    "Rosario": [],
    "San Jose": [],
    "San Juan": [],
    "San Luis": [],
    "San Nicolas": [],
    "San Pascual": [],
    "Santa Teresita": [],
    "Santo Tomas": [],
    "Taal": [],
    "Talisay": [],
    "Tanauan": [],
    "Taysan": [],
    "Tingloy": [],
    "Tuy": []
},
  "Laguna": {
    "Alaminos": [],
    "Bay": [],
    "Binan": [],
    "Cabuyao": [],
    "Calamba": [],
    "Calauan": [],
    "Cavinti": [], 
    "Famy": [],
    "Kalayaan": [],
    "Liliw": [],
    "Los Banos": [],
    "Luisiana": [],
    "Lumban": [],
    "Mabitac": [],
    "Magdalena": [],
    "Majayjay": [],
    "Nagcarlan": [],
    "Paete": [],
    "Pagsanjan": [],
    "Pakil": [],
    "Pangil": [],
    "Pila": [],
    "Rizal": [],
    "San Pablo": [],
    "San Pedro": [],
    "Santa Cruz": [],
    "Santa Maria": [],
    "Santa Rosa": [],
    "Siniloan": [],
    "Victoria": [] 
  },

  "NCR": {

    "Caloocan City": [],                                  
    "Las Piñas City": [],
    "Makati City": [],
    "Malabon City": [],
    "Mandaluyong City": [],
    "Manila City": [],
    "Marikina City": [],
    "Muntinlupa City": [],
    "Navotas City": [],
    "Parañaque City": [],
    "Pasay City": [],
    "Pasig City": [],
    "Quezon City": [],
    "San Juan City": [],
    "Taguig City": [],
    "Valenzuela City": []

  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
}
</script>


</head>

<body>


<!--=========main=======-->
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <h3> <b><a href="index.html"> SolarX Installation Services </b></a> </h3>
              </div><!-- End Home -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register</h5>
                    <p class="text-center small">Enter your personal details for your purchase</p>
                  </div>

                  <form class="row g-3 needs-validation" action="insert.php" method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="First_Name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="Last_Name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>



                    <div class="col-12">
                      <label for="yourName" class="form-label">Contact Number</label>
                      <input type="text" name="Mobile_Number" class="form-control" id="yourNumber" required>
                      <div class="invalid-feedback">Please, enter your number!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="Email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>
             
                Province: <select name="Province" id="subject">
                <option value="" selected="selected">Select Province</option>
                </select>

                City: <select name="City" id="topic">
                <option value="" selected="selected">Please select province first</option>
                </select>

                  <div class="col-12">
                      <label for="yourName" class="form-label">Baranggay</label>
                      <input type="text" name="Baranggay" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your baranggay!</div>
                    </div>


                    <hr>

                      <div class="col-12">
                  <label for="validationDefault03" class="form-label">Budget</label>
                  <select name="Budget" class="form-select" id="validationDefault03" required>
                    <option selected disabled value="">Select</option>
                    
                    <option>P 0 - 100,000</option>
                    <option>P 100,001 - 250,000</option>
                    <option>P 250,001 or higher</option>
                  </select>
                </div>

                      <div class="col-12">
                  <label for="validationDefault03" class="form-label">Power Consumption</label>
                  <select  name="Power_Consumption" class="form-select" id="validationDefault03" required>
                    <option selected disabled value="">Select</option>
                    <option>1.0 - 2.5 KW</option>
                    <option>2.6 - 6.0 KW</option>
                    <option>6.1 KW or higher</option>
                  </select>
                </div>
                    
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="terms.html"><u>Terms and Conditions</u></a></label>>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>

                    <div class="col-12"> 
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                     </div>
                  </form>
                </div>
              </div>
              <div class="credits">
                <a>Designed by JAABLEE</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>
</html>
