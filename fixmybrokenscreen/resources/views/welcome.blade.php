<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Movies</title>
<style>
  body{
    background:#e1e8f2; 
  }
  .w-20 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20% !important;
            flex: 0 0 20% !important;
    max-width: 20%;
  }

  .card , .page-link{border:none !important;}
  .card:hover img{
        box-shadow:  0 0 12px 1px #00000052;;
  }
  .card-body {
    padding: 10px;
  }
  .card-title {
      margin-bottom: 5px;
      color:black;
      font-weight:bold;
      font-size:18px;
  }
  @media (max-width:1024px){
    .w-20 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.3% !important;
            flex: 0 0 33.3% !important;
    max-width: 33.3%;
  }
  } 
  @media (max-width:768px){
    .w-20 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50% !important;
            flex: 0 0 50% !important;
    max-width: 50%;
  }
  }
</style>
</head>
<body translate="no" >
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie List</title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   <div class="container mt-5 d-none">
    <div class="row" id="search-bar">
      <div class="col-6">
        <form id="search" class="form-inline">
          <label class="sr-only" for="inlineFormInputName2">Name</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="search-input" placeholder="search name...">
          <button type="submit" class="btn bt-primary mb-2">Search</button>
        </form>
      </div>
      <div class="col-6 d-flex justify-content-end" id="modeSwitch">
        <i class="listItem fa fa-bars mr-2 fa-lg" aria-hidden="true"></i>
        <i class="cardItem fa fa-th fa-lg" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <!-- data-panel -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <h4 class="text-uppercase pb-4" style="color:#acb4c7">Top Rated Movies</h4>
      </div>
    </div>
    <div class="row" id="data-panel">
      <!-- print movie list here -->
    </div>
  </div>

<div class="align-items-baseline container d-flex justify-content-end mt-2">
  <span style="color:#acb4c7;font-weight:bold;font-size:18px;">Page</span>
  <nav aria-label="Page navigation"> 
    <ul class="pagination justify-content-end" id="pagination">
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
    </ul>
  </nav>
</div>
 
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
<script src="http://localhost/fixmybrokenscreen/resources/js/movies.js"></script>
      <script id="rendered-js" >
//# sourceURL=pen.js
</script>
<script>
  window.console = window.console || function(t) {};
</script>

<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</body>
</html>
 
