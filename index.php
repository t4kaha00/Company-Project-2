<!DOCTYPE html>
<html>
<head>
  <style>
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #FAFAFA;
    margin: 30px auto; /* 5% from the top and centered */
    padding: 15px;
    border: 1px solid #888;
    width: auto; /* Could be more or less, depending on screen size */
    height: auto;
    vertical-align: middle;

    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
  /*.image-full-div {
    width: 500px;
    height: auto;
  }*/
  .image-full-div img {
    width: 100%;
    height: 100%;
  }
  #crop_tool {
    background: rgba(255, 255, 255, 0.5);
    width: 100px;
    height: 100px;
    /*border: 1px dashed black;*/
    position: absolute;
  }
  #container {
    width: 30%;
  }
  /*#img_name {
    width: auto;
    height: auto;
  }*/
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.Jcrop.js"></script>
<script src="js/jquery.Jcrop.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/three.WindowResize.js"></script>
<script src="js/OrbitControls.js"></script>
<script src="js/TrackballControls.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</head>
<body>
  <!-- The Popup Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content" id="modal-content">
      <span class="close">&times;</span>
      <br><br>

      <img id="img_modal"/>
      <form>
          <input type="hidden" id="x" name="x" />
          <input type="hidden" id="y" name="y" />
          <input type="hidden" id="w" name="w" />
          <input type="hidden" id="h" name="h" />
          <input type="hidden" id="photo_url" name="photo_url" />
      </form>
    </div>
  </div>

  <!-- For 3D canvas view -->
  <div id="container"></div>

  <img id="img_name" src="insert_img.jpg" name="img_name" />
  <br>
  <input id="img_input" type="file" name="file" accept="image/*" onchange="previewImage(event)"/>
  <br><br>
  <button id="crop_btn">Crop</button>
  <br><br>
  <select id="option_resize">
    <option value="200">200 X 200</option>
    <option value="300">300 X 300</option>
    <option value="400">400 X 400</option>
    <option value="1000">1000 X 1000</option>
    <option value="2  000">2000 X 2000</option>
  </select>
  <button id="button_resize">Resize</button>
  <br><br>
  <button id="button_grayscale">Convert to B&W</button>
  <input type="button" value="Preview in 3D" id="button_3d"/>
  </body>
