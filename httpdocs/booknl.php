<?php

        $conn = mysqli_connect('localhost', 'cl28-pkb-books', 'x7z.!Fqtz', 'cl28-pkb-books');
        if(!$conn) {
            echo('<span style="color: #F00;">There was an error connecting to the database!</span>');
        } 

$no = $_GET['no'];


$query = "SELECT * FROM books WHERE bookID = $no";

if ($result = mysqli_query($conn, $query)) {
    
    $row = mysqli_fetch_array($result);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Books - PK Balakrishnan</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="books.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html"><span class="glyphicon glyphicon-home"></span>  PK Balakrishnan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" id="buy_books" href="http://onlinestore.dcbooks.com/author/balakrishnan-p-k/1" role="button">Buy Books</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="books.html">Books</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="gallery.html">Gallery</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

        <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row" id="page_header">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $row[book_name]; ?>
                    <small><?php echo $row[second_title]; ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-3">
                <img class="img-responsive" src="<?php echo $row[image]; ?>" alt="">
            </div>

            <div class="col-md-9">
                <font size="4">
                <p><strong>Introduction</strong></p>
                <p><?php echo $row[introduction]; ?></p>
                <p><strong>Publisher :</strong> <?php echo $row[publisher]; ?></p>
                <p><strong>First Published :</strong> <?php echo $row[first_published]; ?></p>
                
                    <br>
                </font>
            </div>

        </div>
        
        <hr>
        
        <div class="row">
        
        <h2><strong><?php echo $row[type]; ?> : </strong></h2>
        <font size="4">
        <?php echo $row[description]; ?>
        </font>
        
        
        </div>
        <!-- /.row -->

    

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Avinash Prabhakaran 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
    </div>
    <!-- /.container -->

    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
    


</body>

</html>