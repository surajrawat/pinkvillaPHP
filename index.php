<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pinterest</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
  </head>
  <body>

  	<section>
        <div class="wf-container">
  		<?php 
  		$url = 'https://cdn.pinkvilla.com/feed/fashion-section.json'; 
		$data = json_decode(file_get_contents($url));
		usort($data, function($a, $b) {

			return $a->viewCount > $b->viewCount ? -1 : 1;
		});
		//print_r($data);
  		foreach ($data as $key => $object) { ?>

            <div class="wf-box">
                <a href="<?=$object->path;?>" target="_blank"><img src="<?=$object->image->url;?>"></a>
                <div class="content">
                	<div class="title">
	                    <a href=""><p><?=$object->title;?></p></a>
                	</div>
                	<a class="options"><i class="fas fa-ellipsis-h"></i></a>
                </div>
            </div>

    	<?php } ?>
        </div>

    </section>

 

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="pinterest_grid.js"></script> 
    <script src="app.js"></script>
  </body>
</html>
