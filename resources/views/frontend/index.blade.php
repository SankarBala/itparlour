<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{asset('css/frontend.css')}}" rel="stylesheet" type="text/css"/>



    <link href="style.css" rel="stylesheet"/>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="phone" href="#"><span class="glyphicon glyphicon-phone-alt"> </span> 01742725606 </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">HOME</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="#about">ABOUT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <h1>IT PARLOUR</h1>
            <p>Web & Internet Technology</p>
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" size="50" placeholder="What you want" required>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES WE OFFER</h2>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>Web Design</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>Web Development</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>Wordpress Development</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>Search Engine Optimization</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>Digital Marketing</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4>Graphics Design</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>Mobile App Development</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>Content Development</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4>Data Entry</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>


<!-- Container (Product section) -->
<div id="services" class="container-fluid text-center">
    <h2>READY MADE PRODUCT WE HAVE</h2>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>E-commerce & Shop Management Software</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>School Management Software</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>Shop Management Software</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>Hotel & Resturent Management Software</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>Domain</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4>Hosting</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2>
    <h4>What we have created</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row text-center slideanim">
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="logo.png" alt="Paris" width="50%"/>
                <p><strong>Paris</strong></p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
    </div>
    <br>
</div>


<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Actual price depends on your product type and service quality.</h4>
    </div>
    <div class="row slideanim">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p><strong>20</strong> Lorem</p>
                    <p><strong>15</strong> Ipsum</p>
                    <p><strong>5</strong> Dolor</p>
                    <p><strong>2</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$19</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Basic</h1>
                </div>
                <div class="panel-body">
                    <p><strong>20</strong> Lorem</p>
                    <p><strong>15</strong> Ipsum</p>
                    <p><strong>5</strong> Dolor</p>
                    <p><strong>2</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$19</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Pro</h1>
                </div>
                <div class="panel-body">
                    <p><strong>50</strong> Lorem</p>
                    <p><strong>25</strong> Ipsum</p>
                    <p><strong>10</strong> Dolor</p>
                    <p><strong>5</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$29</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Premium</h1>
                </div>
                <div class="panel-body">
                    <p><strong>100</strong> Lorem</p>
                    <p><strong>50</strong> Ipsum</p>
                    <p><strong>25</strong> Dolor</p>
                    <p><strong>10</strong> Sit</p>
                    <p><strong>Endless</strong> Amet</p>
                </div>
                <div class="panel-footer">
                    <h3>$49</h3>
                    <h4>per month</h4>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About us</h2><br>
            <h4>
                <mark>IT PARLOUR</mark>
                basically a software development industry.
            </h4>
            <br>
            <p> Except software development we also serve different web related and online services
                like SEO, Facebook, Marketing, Google Marketing, Youtube Marketing, Email & SMS Marketing, Graphics
                Design etc. </p>
            <br>
            <button class="btn btn-default btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>


<!-- Container ( Section) -->
<div id="portfolio" class="container-fluid text-center">
    <h2>OUR TEAM</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span>
                </h4>
            </div>
            <div class="item">
                <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
            </div>
            <div class="item">
                <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span>
                </h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
    <h2 class="text-center">CONTACT WITH US</h2>
    <div class="row">
        <div class="col-sm-4">
            Google maps
        </div>
        <div class="col-sm-3">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Madaripur-7900</p>
            <p><span class="glyphicon glyphicon-phone"></span> +8801742725606</p>
            <p><span class="glyphicon glyphicon-envelope"></span> icare@itparlour.com</p>
        </div>
        <div class="col-sm-5 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Write your messege"
                      rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="text-center">
    <p>Developed By <a href="https://github.com/sankarbala" target="_blank" title="Know about me">Sankar Bala</a></p>
</footer>

<script src="script.js"></script>
</body>
</html>



