<!--header-->
<div class="header">
    <div class="container">
        <div class="header-top">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <h1><a href="index.php">The Picnic Place</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/picnic-place/index.php') echo 'class="active"'; ?>><a href="index.php">Home <span
                                        class="sr-only">(current)</span></a></li>
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/picnic-place/about.php') echo 'class="active"'; ?>><a href="about.php">About</a></li>
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/picnic-place/contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
                            <li <?php if (strpos($_SERVER['REQUEST_URI'], '/picnic-place/animals.php') !== false || strpos($_SERVER['REQUEST_URI'], '/picnic-place/animal-detail.php') !== false) echo 'class="active"'; ?>><a href="animals.php">Animals</a></li>
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/picnic-place/amenities.php') echo 'class="active"'; ?>><a href="amenities.php">Amenities</a></li>
                            <li><a href="admin/index.php">Admin</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>
