<DOCTYPE! html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./JS/FileSaver.js" charset="utf-8"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script

    
   <script>
          
          

  
    </script>
    
    
    <style>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">    
    #smallwrapper {
       
		width: 1000px;
        
    }
    .clear:after {
                        content: "";
                        display: table;
                        clear: both;
                }
    a {
        font-family: 'Oswald', sans-serif;
        font-size: 300%;
        font-weight: 600;
        color:darkorange;
    }
    c{
        font-family: 'Oswald', sans-serif;
        font-size: 300%;
        font-weight: 600;
        color:dimgray;
     }
    #pagetitle{
        text-align: center;
        margin-top: 10px;
  }
    #leftarea{
        float:left;
        width: 250px;
        margin-top:20px;
        margin-bottom: 50px;
        margin-left:200px;
        margin-right:40px;
        height: 250px;
        box-shadow: 0px 5px 10px #888888;
        border: 1px solid black;
    }
    #middlearea{
        float:left;
        width: 300px;
        margin-top:20px;
        margin-right:10px;
        margin-left: 40px;
        margin-bottom: 20px;
        height: 300px;
        
    }
    #rightarea{
        float:left;
        width: 300px;
        margin-top:30px;
        margin-right:40px;
        margin-bottom:50px;
        margin-left:10px;
        margin-right: 40px;
    }

    p.style{
        font-weight: 600;
        font-size: 120%;
        color:dimgray;
        font-family: 'Oswald', sans-serif;
    }
    .button{
        background-color: darkorange;
        cursor: pointer;
    }

  

    .graybutton2{
        background-color: darkgray;
        color:white;
        border:none;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        font-size:16px;
        margin-top:30px;
        margin-left:5px;
        cursor: pointer;
        float:left;
      }

    
    
    .addtoptext{
         font-weight:600;
         font-family:'Oswald', sans-serif;
         text-align: center;
         color:darkgray;
    }
    .addbottomtext{
        font-weight:600;
        color: darkgrey;
        text-align:center;
        font-family: 'Oswald', sans-serif;
    }
    .text1{
        width: 300px;
        height: 25px;
    }
    .text2{
       width:300px;
       height:25px;
    }
    #imagehandler{
/*                display: block;*/
                width: 250px;
/*                max-height: 0px;*/
                height: 250px;
    }
    #file1{
        width:120px;
        height:50px;
        margin-left:40px;
        margin-top: 0px;
        float:left;
        margin-right:30px;
    }
    #file2{
        border: none;
        padding:10px 15px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin-top: 30px;
        float:left;
        margin-right:5px;
        cursor: pointer;
        
    }
    #carousal{
        width:800px;
        height:250px;
        margin-left: 100px;
    }
    .carousel-inner{
        width: 900px;
        height: 500px;
        margin:auto;
        margin-bottom: 30px;
    }
  
  
</style>
    <title>MemeCreator</title>
     </head>
    
    
    
    
    

   <body>
       <form method="post" enctype="multipart/form-data">
       <br/>
           <div id="smallwrapper" class="clear">
           
           <div id="pagetitle">
             <a>Meme </a>
             <c> Creator</c>
           </div>
           
          
           
	       <canvas id="leftarea" style="display: transparent">
               <img alt="Image Preview" id="imagehandler" src="">
           </canvas>
        <div id="middlearea">
               <p class="style">choose from popular<br>meme templates below or<br>upload your own image</p><br>   
                
            
            
            
             <label class="btn btn-primary" id="file1">
                 <input type="file" id="selectedImage"  name="image" style="display: none">
                   upload image
                </label>
             
<!--           <button type="button" class="graybutton1">Finish and<br>add to stash</button>-->
               <label class="btn btn-primary" id="file2">
                   <input type="submit" name="submit" value="submit" style="display: none">
                   Finish and<br>add to stash
               </label>
           <button type="button" class="graybutton2" disabled onclick="saveFile()" id="saveBtn">Finish and<br>save to drive</button>
           </div>
          
           <div id="rightarea" class="clear">
              <p class="addtoptext">Add top next:</p>
<!--              <textarea onkeyup="test()" id="txtContents" class="text1" name="text" style="background:transparent"></textarea>-->
               <input type="text" id="txtContents" class="text1" name="text">
               
               
               <br><br><br><br><br>
               <p class="addbottomtext">Add Bottom Text:</p>
               <input type="text" class="text2" id="bottom-line" name="bottomtext">
         
          </div>

       
               
    <script>
        var c = document.querySelector("#leftarea");
		function redraw(image, top, bottom){
		var c = document.querySelector("#leftarea");
		  var ctx = c.getContext("2d");
		  ctx.strokeStyle="black";
		  ctx.fillStyle="white";
		  ctx.textAlign ="center";
		  ctx.font = "36pt impact";
		  ctx.lineWidth = 3;  //stroke thickness!!
		  ctx.drawImage(image,0,0,c.width,c.height);
		  if (top != null) {
			ctx.fillText(top, c.width / 2, 50);
			ctx.strokeText(top, c.width / 2, 50);
		  }

		  if (bottom != null) {
			ctx.fillText(bottom, c.width / 2, c.height - 20);
			ctx.strokeText(bottom, c.width / 2, c.height - 20);
		  }
		}




		function textChanged(E){
		  var id = E.target.id;
		  var text = E.target.value;

		  if(id=="txtContents") {
			window.topText = text
		  }
		  else {
			window.bottomText = text
		  }
		  redraw(window.imageSrc, window.topText, window.bottomText)
		}

		function fileSelectHandler(E){
		  var file = E.target.files[0];

		  var reader = new FileReader();
		  reader.onload = function(fileObject){
			var data = fileObject.target.result;
			var image = new Image();
			image.onload=function() {
			  window.imageSrc = this;
				c.height = this.height;
				c.width = this.width;
				document.getElementById('saveBtn').disabled = false;
				//document.getElementById('stashSave').disabled = false;
				redraw(window.imageSrc, null, null);
			};

			image.src = data;

		  };
		  reader.readAsDataURL(file);
		}

		function saveFile() {
		  var link = document.createElement('a');
		  link.href = document.querySelector('canvas').toDataURL();
		  link.download = 'Download.jpg';
		  document.body.appendChild(link);
		  link.click();
		  // window.open(document.querySelector('canvas').toDataURL());
		}
			function uploadEx() {
                var canvas = document.getElementById("leftarea");
                var dataURL = canvas.toDataURL("image/png");
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
 
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'upload_data.php', true);
 
                xhr.upload.onprogress = function(e) {
                    if (e.lengthComputable) {
                        var percentComplete = (e.loaded / e.total) * 100;
                        console.log(percentComplete + '% uploaded');
                        alert('Succesfully uploaded');
                    };
                };
 
                xhr.onload = function() {
 
                };
                xhr.send(fd);
            }
		//document.querySelector('button').addEventListener('click', saveFile, false);


		var top = document.getElementById('txtContents');
		var bottom = document.getElementById('bottom-line');
		top.oninput = textChanged;
		bottom.oninput = textChanged;
		document.getElementById('selectedImage').addEventListener('change', fileSelectHandler, false);
				
		var dataURL = canvas.toDataURL();
  //$.post("canvasdata.php", { data: dataURL } );

  var ajaxHandler = new XMLHttpRequest();
  ajaxHandler.open("POST", "canvasdata.php", true);
  //ajaxHandler.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  //ajaxHandler.send("name=test&data="+dataURL);
  var formData = new FormData();
  formData.append("name", "test");
  formData.append("data", dataURL);
  ajaxHandler.send(formData);
</script>           
               
               
               
        
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
</div>
<div class="container">
<!--  <h2>Carousel Example</h2>  -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="frog.jpg" alt="Los Angeles" style="width:800px;">
      </div>
      <div class="item">
         <img src="cat.jpg" alt="Chicago" style="width:800px;">
     </div>
      <div class="item">
        <img src="qie.jpg" alt="New york" style="width:800px;">
      </div>
        <div class="item">
         <img src="butterfly.jpg" alt="New York" style="width:800px">
      </div>
       <div class="item">
          <img src="cutty.jpg" alt="New york" style="width:800px;">    
      </div>
        
        
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
           
           
           
           
           
           
           
           
<?php
    $host = '127.0.0.1';
    $user = 'test';
    $pass = '';
    $db = 'counterMeme';
    $port = 3306;

      if(isset($_POST['submit']))          {
    $mysqli = new mysqli($host, $user, $pass, $db, $port);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }
      
    $mainPicture = base64_encode(file_get_contents(addslashes($_FILES["image"]["tmp_name"])));
    $text = mysqli_real_escape_string($mysqli, $_REQUEST['text']);
    $bottomtext = mysqli_real_escape_string($mysqli, $_REQUEST['bottomtext']);
    if(!$mainPicture){
        echo "No main Picture found<br>";
    }
    if(!$text){
        echo "No text, please enter some random stuff.";
    }
    if(!$bottomtext){
        echo "No bottom text, please add some random shit";
    }          
          
      if (!($stmt = $mysqli->prepare("INSERT INTO memes(picture, smackdownID, upvotes, downvotes, timestamp, tags, bottomText, topText) VALUES (?,?,?,?,?,?,?,?)"))) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
      
       $null = NULL;
     
       if (!$stmt->bind_param("sbbbbbss",  $mainPicture, $null, $null, $null, $null, $null, $bottomtext, $text)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    }
       $stmt->send_long_data(2, $mainPicture);
       $stmt->send_long_data(3, $text);
       $stmt->send_long_data(4, $bottomtext);
      
       if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "<br>\n";
    } else {
        echo "Successfully uploaded the images";
    }
          
           $querynick="Select * from memes where memeID = 25";
           
           $result=$mysqli->query($querynick);
          if($result->num_rows >0){
           while($row=$result->fetch_assoc()){
               echo "<img src='data:image;base64," . $row['picture']."'/>";
            }
         
          }
          else
          {
              echo "fail";
          }
      }
           
          
           
      ?>
       
           
        </form> 
       
       
       
    
    </body>



</html>