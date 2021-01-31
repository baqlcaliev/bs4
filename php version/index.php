<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <script>
        $(document).ready(function(){
	    $('#carousel-one').carousel();
	    $('#carousel-two').carousel();
        $('#carousel-tree').carousel();
        })
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <title>Ivan Iliev</title>
</head>

<body>
    <?php include 'sections/navigation.php';?>
    <?php include 'slider/carousel-full-width.php';?>
    <?php include 'sections/jumbotron.php';?>
    <?php include 'sections/welcome.php';?>
    <?php include 'sections/tree-cols.php';?>
    <?php include 'sections/two-cols.php';?>
    <?php include 'sections/fixed-background.php';?>
    <?php include 'sections/emoji.php';?>
    <?php include 'sections/team.php';?>
    <?php include 'sections/cards.php';?>
    <?php include 'slider/testimonial.php';?>
    <?php include 'sections/four-rows.php';?>
    <?php include 'sections/footer.php';?>

</body>

</html>