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
		<h1>Citat Banken</h1>

		<p><a class="btn btn-primary btn-lg" href="/create-quote" id=create role="button">Lägg till citat</a><p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th><h3>Citerare</h3></th>
                    <th><h3>Från</h3></th>
                    <th><h3>Årtal</h3></th>
                    <th><h3>Citat</h3></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($allquote as $quote):  ?>
                    <tr>
                        <td><?= $quote['name'] ?></td>
                        <td><?= $quote['context'] ?></td>
                        <td><?= $quote['year'] ?></td>
                        <td><?= $quote['quote'] ?></td>
                        <td><a class="btn btn-primary" href="/update-quote?id=<?= $quote['id'] ?>">Uppdatera</a> <a class="btn btn-danger" href="/delete?id=<?= $quote['id'] ?>">Ta bort</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
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