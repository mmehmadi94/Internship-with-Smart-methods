<!DOCTYPE html>

<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Robot Control Panel</title>
	<link rel="stylesheet" href="styles.css">
	<script src ="https://kit.fontawesome.com/b99e675b6e.js"> </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Jquery
$(document).ready(function(){
    $('.buttons').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});

</script>
</head>

	<body>
  <div class="wrapper">

		<!-- Navigation side -->
		<div class="sidebar">

				<h2><img src="logo.png" alt="Smart Methods logo"></h2>

				<ul>
						<li><a href="#"><i class="fas fa-home"></i>Home</a></li>
						<li><a href="#"><i class="fas fa-address-card"></i>About Robot</a></li>
						<li><a href="#"><i class="fas fa-project-diagram"></i>Control Panel</a></li>
						<li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
				</ul>

				<div class="social_media">
					<a href="https://twitter.com/smart_methods"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/smartmethods/"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-facebook-f"></i></a>
			</div>
		</div>
		 	<!-- Main Content -->
      <div class="main_content">

		  <div class="header" >Welcome!! Have a nice day.</div>


 		<div class="info">
			<h2>Control Panel</h2>


 					<table class="table_buttons">
 						<tr>
 							<td> </td>
 							<td><input class="buttons" type="submit" value="forward" > </td>
 						</tr>

 				  <tr>
             <td><input class="buttons" type="submit" value="left" > </td>
             <td><input class="buttons" type="submit" value="pause" style="background-color: #941044;"> </td>
             <td> <input class="buttons" type="submit" value="right" name="right" ></td>
           </tr>

 					<tr>
 						<td></td>
 						<td> <input class="buttons" type="submit" value="backward" > </td>
 					</tr>
          </table>

         </div>
     </div>

 </div>
 </body>

</html>
