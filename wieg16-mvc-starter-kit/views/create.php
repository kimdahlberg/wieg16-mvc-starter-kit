<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Mitt MVC-projekt</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="/">HEM</a>
            <a class="navbar-brand" href="/create-quote">CREATE</a>



        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h2>Skriv in citat!</h2>

        <section id="create">

            <div class="create-section">
                <div class="container">
                    <form method="post" action='/create'>

                        <div class="col-md-6 form-line">
                            <div class="form-group">
                                <label>Citerare</label>
                                <input type="text" class="form-control" name="name" placeholder=" exempel. Johan Lund">
                            </div>
                            <div class="form-group">
                                <label>Från</label>
                                <input type="text" class="form-control" name="context" placeholder=" exempel. Blue lagoon">
                            </div>
                            <div class="form-group">
                                <label>Årtal</label>
                                <input type="text" class="form-control" name="year" placeholder=" exempel. 1997">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Citat</label>
                                <textarea  class="form-control" name="quote" placeholder="Skriv citat här"></textarea>
                            </div>
                            <div>

                                <button type="submit" class="btn btn-default submit">Posta citat</button>

                            </div>

                        </div>
                    </form>
                </div>
        </section>
    </div>
</div>


    <hr>

	<footer>
		<p>&copy; 2016 Company, Inc.</p>
	</footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>
