<!DOCTYPE html>
<html>
<head>
	<title>ivhomecare | Blogs</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="../style/layout.css">

  	<style>
  		.nav-item{
  			margin: 5px;
  		}
  		.nav-link{
  			color: #000;
  		}
  		.nav-link:hover{
  			color: #0e996a;
  		}
  		.dropdown-toggle{
  			text-decoration: none;
  			color: #000;
  			border: none;
  			background-color: unset;
  		}
  		.dropdown-toggle:hover{
  			color: #0e996a;
  		}

  		.dropdown-item{
  			margin: 5px;
  		}

  		.dropdown-item:hover{
  			color: #0e996a;
  		}

  		.main{
  			background: url("assets/images/main-banner.jpg");
  			background-attachment: scroll;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
  			padding: 200px;
  		}

  		.ecard{
  			box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  			margin: 5px;
  			width: 280px;
  			height: 180px;
  			display: flex;
  			justify-content: center;
  			align-items: center;
  			padding: 5px;
  		}
  		.ecard i{ font-size: 40px; margin: 5px; padding: 10px; color: #003c46; }
  		.ecard h5{margin: 5px; padding: 10px; color: #003c46;}
  		.bcard{
  			box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  			margin: 5px;
  		}
  		.bcard .imaged{
  			/*width: 250px;*/
  		}

  		.blogcontent {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Limit to three lines */
        -webkit-box-orient: vertical;
        text-overflow: ellipsis; /* Add ellipsis (...) for overflow */
    }

    	.morebtn{
    		text-decoration: none;
    		color: #0e996a;
    		transition: 0.4s;
    	}
    	.morebtn:hover{
    		letter-spacing: 1px;
    	}


  			/* CSS for screens less than 500px wide */
		@media screen and (max-width: 500px) {
  .p-5 {
    padding: 20px !important; /* Adjust padding as needed */
  }
  .searchbox input {
		width: 180px; 
		}
}



  	</style>
</head>
<body>



<div class="container-fluid m-0 p-0">

 <?php 
 	include 'header.php';
 ?>

	<div class="row m-0 mt-5 p-2 d-flex justify-content-center">
		<div class="col-md-7 m-0 py-5 d-flex flex-wrap justify-content-start">
			<h1 class="m-0 row" style="color:#fa7c5b;">Blogs</h1>
		</div>
		<div class="col-md-7 m-0  d-flex flex-wrap justify-content-start">
<?php 
include '../config/database.php';

$sql = "SELECT id,title, heading, description, images, content, created FROM blogs ORDER BY created DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="bcard row m-2 p-0 d-flex justify-content-start">
            <div class="col-md-5 m-0 p-0 d-flex justify-content-start align-items-center">
                <img src="../assets/blog/<?php echo htmlspecialchars($row['images']); ?>" style="width:100%; height:100%; object-fit: cover;">
            </div>
            <div class="col-md-7 m-0 p-4">
                <h6><?php echo htmlspecialchars($row['heading']); ?></h6>
                <p><?php echo htmlspecialchars($row['created']); ?></p>
                <div class="blogcontent text-secondary m-0"><?php echo $row['content']; ?></div><br>
                <a href='blog.php?id=<?php echo urlencode($row["id"]); ?>' class="morebtn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>

            </div>
        </div>
        <?php
    }
} else {
    echo "No blog posts found.";
}

$conn->close();
?>

	</div>
</div>
	 <?php 
 	include 'footer.php';
 ?>
</div>
</body>
</html>