<!doctype html>
<html lang="en">
  <head><style>
                    <style> 
             *{
             margin: 0;
             padding: 0;
             font-family: 'New Rocker', cursive;
             width: 100%;
             height: 100vh;
        }
        body {
            background-color: black;
            background-image: url("http://www.info-uh.my.id/Screenshot_2020-10-07-18-21-35-208_com.whatsapp.w4b.png");
            background-repeat: no-repeat;
            background-size: 120% 175%;
        }
        h1{
        -webkit-animation-name: blinker;
        -webkit-animation-duration: 1s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-name: blinker;
        -moz-animation-duration: 1s;
        -moz-animation-timing-function: linear;
        -moz-animation-iteration-count: infinite;
        animation-name: blinker;
        animation-duration: 1s;;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        }
        @-moz-keyframes blinker{
            0%{opacity: 1.0;}
            50%{opacity: 0.0;}
            100%{opacity: 1.0;}
        }
        @-webkit-keyframes blinker{
            0%{opacity: 1.0;}
            50%{opacity:0.0;}
            100%{opacity: 1.0;}
        }
        @keyframes blinker {
            0{opacity: 1.0;}
            50%{opacity:0.0;}1
            100%{opacity:1.0;}
        }
        img{}
        #jam-digital{overflow:hidden; width:350px}
        #hours{float:left; width:100px; height:50px; background-color:; margin-right:25px}
        #minute{float:left; width:100px; height:50px; background-color:}
        #second{float:right; width:100px; height:50px; background-color:; margin-left:25px}
        #jam-digital p{color:red; font-size:20px; text-align:center; margin-top:4px}</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="love you"> <meta name="description" content="Uploader udu.H-Ck3r">
    <meta name="theme-color" content="#000">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="https://l.top4top.io/p_1740td14i0.png">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>Uploader Buat Mastah:v</title>
    <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:200px;height:150px;}
    </style>
  </head>
  <body>
<br><br><br><br><br><br><br>
    <div class="container text-center mx-auto">
    	<h2 class="mt-3">|Z1BeeGans Uploader||MTT</h2>
    
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="File" class="form-control bg-transparent text-lime" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Upload</button>
    	</form><hr>

<footer>

</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
  </body>
</html>