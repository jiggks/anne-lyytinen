<!DOCTYPE html>
<html lang="fi">
<head>
    <title>Title</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <script src="js/bootstrap.js"></script>

    <!-- styles -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />

</head>
<body>

<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="nav-toggle" aria-expanded="false">
                <span class="sr-only">Näytä navigaatio</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Psykologi Anne Lyytinen</a>
        </div>

        <!-- Under navigation toggle -->
        <div class="collapse navbar-collapse" id="nav-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Palvelut</a>
                    <ul class="dropdown-menu">
                        <li><a href="/"></a>Psykologipalvelut</li>
                        <li><a href="/">Psykoterapia</a></li>
                        <li><a href="/">Työnohjaus</a></li>
                        <li><a href="/">Palvelut yrityksille ja organisaatioille</a></li>
                    </ul>
                </li>
                <li><a href="/">Minusta</a></li>
                <li><a href="/">Yhteydenotto</a></li>
            </ul>
        </div> <!-- navbar-collapse -->
    </div> <!-- container-fluid -->
</nav>

<!-- basic body -->
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-push-8">kuva (.col-md-4 col-md-push-8)</div>
        <div class="col-md-8 col-md-pull-4">.col-md-8 col-md-push-4</div>
    </div>
    <div class="row">
        <div class="col-md-3">.col-md-4</div>
        <div class="col-md-3">.col-md-4</div>
        <div class="col-md-3">.col-md-4</div>
        <div class="col-md-3">.col-md-4</div>
    </div>
</div>

<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
        </div>
    </div>
</footer>

</body>
</html>