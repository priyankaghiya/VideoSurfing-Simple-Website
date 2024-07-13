<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script>
      new Darkmode().showWidget(); //by default to display in the dark mode. (Currently it is expired.)
    </script>
     <!-- This will get displayed when you open this website, for that tab icon will be total image and text would be this. -->
    <link rel="shortcut icon" href="../images/total.jpg" type="image/jpg"/>
    <title>Search for your Interest</title>
  </head>

  <body class="allcontent">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- To Display the main header for the website. -->
    <div class="header">
      <div class="header-data">
        <div class="alert alert-dark" role="alert">
          <h1>New Video Sharing Platform </h1>
        </div>
      </div>
    </div>
    <!-- Block second -->
    <div class="merging">
      <div class="row">
        <!-- Image and Button to display the Motivational Speaker. -->
        <div class="col-sm-12 col-lg-3">
          <img class="img-fluid rounded"src="../images/SM.jpg" alt="...">
          <div class="btn-Center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SandipMahesvari">Motivational Speaker</button>
          </div>
        </div>
        <!-- Image and Button to display the Educational Speaker. -->
        <div class="col-sm-12 col-lg-3">
          <img class="img-fluid rounded"src="../images/knowledgegate.jpg" alt="...">
            <div class="btn-Center">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#KnowledgeGate">Educator</button>
            </div>
        </div>
        <!-- Image and Button to display the Comedian. -->
        <div class="col-sm-12 col-lg-3">
          <img class="img-fluid rounded"src="../images/aditimittal.jpg" alt="...">
            <div class="btn-Center">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adittimital">Comedian</button>
            </div>
        </div>
        <!-- Image and Button to display the Dance Group. -->
        <div class="col-sm-12 col-lg-3">
          <img class="img-fluid rounded"src="../images/teamnach.jpg" alt="...">
            <div class="btn-Center">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#teamNach">Entertainment</button>
            </div>
        </div>
      </div>
    </div>
     <!-- Footer  -->
    <div class="footer">
      <div class="footer-data">
        <center><h3>Made With ❤️ Priyanka Ghiya</h3></center>
      </div>
    </div>
    <!-- Modal to display Motivational Speaker Videos. -->
    <div class="modal fade" id="SandipMahesvari" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelForSM" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="SandipModel">Motivational Speech BY Sandip Maheshvari</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="450" height="315" src="https://www.youtube.com/embed/3gqQevdM7xM" title="Motivational" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Model to display Educational Speaker Videos. -->
    <div class="modal fade" id="KnowledgeGate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelForKG" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="knowledgeGate">Operating System By Sanchit Jain</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="450" height="315" src="https://www.youtube.com/embed/xAvC-MJ_Sz8" title="Learning" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Model to display Comedian Videos -->
    <div class="modal fade" id="adittimital" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelForCom" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="aditiModel">Hilarious talks by Aditi Mittal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="450" height="315" src="https://www.youtube.com/embed/PXSA0ZQr_c4" title="Comedy" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
          </div>
        </div>
      </div>
    </div>

    <!-- Model to display Dance Videos -->
    <div class="modal fade" id="teamNach" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelForTN" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TeamModel">Lamborgini Dance By Team Nach</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="450" height="315" src="https://www.youtube.com/embed/4f34A2OrYog" title="Team Naach" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js">
  </body>
</html>
