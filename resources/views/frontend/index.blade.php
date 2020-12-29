<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>IT PARLOUR | Your IT Assistant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href="{{asset('css/frontend.css')}}" rel="stylesheet"/>
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
            <a class="phone" href="#">
                @if ($data->mobile)
                    <span class="glyphicon glyphicon-phone-alt"></span> {{$data->mobile}}
                @endif
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">HOME</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#products">PRODUCTS</a></li>
{{--                <li><a href="#pricing">PRICING</a></li>--}}
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="home" class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <h1>IT PARLOUR</h1>
            <p>Web & Internet Technology</p>
            <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" size="50" placeholder="What you want" required/>
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
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_057.png" alt=""/>
            <h4>Web Design & Development</h4>
            <p>Now a days website is parfect media to promote your business. Website represent your existance.
                A good quality website can develop your business quickly.
            </p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_058.png" alt=""/>
            <h4>Mobile Apps Development</h4>
            <p>In 2020 mobile is very essential. Mobile is always at hand. So a mobile app is very effective way to be
                connected with your disire customer.</p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_059.png" alt=""/>
            <h4>Wordpress Development</h4>
            <p>Wordpress is the easiest way to make a website. If you have a few buget or need to customize yourself in
                future you should choose wordpress.</p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_003.png" alt=""/>
            <h4>Graphics Design</h4>
            <p>Beauty is the power of duty. A nice looking design can impress anyone at a short time. So you should
                design your logo and others graphics awesome.</p>
        </div>
    </div>
    <br>

    <div class="row slideanim">
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_016.png" alt=""/>
            <h4>Digital Marketing</h4>
            <p>Now a days most of the people are engaged to digital media like sms, email, social media, blog and many
                others. So be updated with marketing in digital media.</p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_040.png" alt=""/>
            <h4>Search Engine Optimization</h4>
            <p>To get a well ranked to search engine you should analize and optimise your website or social pages. We
                can do optimize your site in the proper way.</p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_011.png" alt=""/>
            <h4>Content Development</h4>
            <p>Content is the main product of your digital presentation. Always make sure good quality and seo friendly
                content. We can help you to make these kind of content.</p>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_025.png" alt=""/>
            <h4>Domain & Hosting</h4>
            <p>We provide domain & hosting at a very low cost. We also manage and backup your data with high
                security.</p>
        </div>
    </div>
    <br>
</div>

<!-- Container (Product section) -->
<div id="products" class="container-fluid text-center">
    <h2>READY MADE PRODUCT WE HAVE</h2>
    <br>
    <div class="row slideanim">
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_014.png" alt=""/>
            <h4>E-commerce & POS Software</h4>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_018.png" alt=""/>
            <h4>Hotel & Resturant Software</h4>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_017.png" alt=""/>
            <h4>Blogging Website & CMS</h4>
        </div>
        <div class="col-sm-3">
            <img src="images/thumbnails/demo_019.png" alt=""/>
            <h4>Transport & Ticketing Software</h4>
        </div>
    </div>
    <br>
</div>


<!-- Container (Pricing Section) -->
{{--<div id="pricing" class="container-fluid">--}}
{{--    <div class="text-center">--}}
{{--        <h2>Pricing</h2>--}}
{{--        <h4>Actual price depends on your product type and service quality.</h4>--}}
{{--    </div>--}}
{{--    <div class="row slideanim">--}}
{{--        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="panel panel-default text-center">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h1>Web Development</h1>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <p><strong>Wordpress website</strong> Start from <strong>$100</strong></p>--}}
{{--                    <p><strong>Custom website</strong> Start from <strong>$200</strong></p>--}}
{{--                    <p><strong>Custom SPA website</strong> Start from <strong>$250</strong></p>--}}
{{--                    <h4><strong>Ready Made</strong></h4>--}}
{{--                    <p><strong>E-commerce & POS $300</strong></p>--}}
{{--                    <p><strong>Hotel & Resturant $300</strong></p>--}}
{{--                    <p><strong>Transport & Ticketing $300</strong></p>--}}

{{--                </div>--}}
{{--                <div class="panel-footer">--}}
{{--                    <h4>Maintain <strong>$30</strong> Per month</h4>--}}

{{--                    <button class="btn btn-lg">Details</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="panel panel-default text-center">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h1>Digital Marketing</h1>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <h4><strong>We need digital marketing partner</strong></h4>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}

{{--                </div>--}}
{{--                <div class="panel-footer">--}}
{{--                    <h4><strong>&nbsp;</strong></h4>--}}

{{--                    <button class="btn btn-lg">Request partnership</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="panel panel-default text-center">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h1>Domain & Hosting</h1>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <h4><strong>We need service provider</strong></h4>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}
{{--                    <p><strong></strong> &nbsp; <strong></strong></p>--}}

{{--                </div>--}}
{{--                <div class="panel-footer">--}}
{{--                    <h4><strong>&nbsp;</strong></h4>--}}

{{--                    <button class="btn btn-lg">Apply</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 col-sm-6 col-xs-12">--}}
{{--            <div class="panel panel-default text-center">--}}
{{--                <div class="panel-heading">--}}
{{--                    <h1>Other Services</h1>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <p><strong></strong> Graphics Designer<strong></strong></p>--}}
{{--                    <p><strong></strong> Virtual Assistant <strong></strong></p>--}}
{{--                    <p><strong></strong> Brand Promoter<strong></strong></p>--}}
{{--                    <p><strong></strong> Content Writer <strong></strong></p>--}}
{{--                    <p><strong></strong> SEO Master <strong></strong></p>--}}
{{--                    <p><strong></strong> Data Entry <strong></strong></p>--}}
{{--                    <p><strong></strong> Security Checker <strong></strong></p>--}}

{{--                </div>--}}
{{--                <div class="panel-footer">--}}
{{--                    <h4><strong>&nbsp;</strong></h4>--}}

{{--                    <button class="btn btn-lg">Details</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About us</h2><br>
            <h4>
                <mark>IT PARLOUR</mark>
                basically a IT Firm.
            </h4>
            <p> We serve web design and development as well as different software development and mobile app
                development, graphics design, content development, search engine Optimization, various web related and
                online services
                like Facebook Marketing, Youtube Marketing, Google Marketing, Email & SMS Marketing and others digital
                marketing etc. </p>

        </div>
        <div class="col-sm-4">
            <img src="images/thumbnails/demo_001.png" width="80%"/>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
    <h2 class="text-center">CONTACT WITH US</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p>
                @if ($data->address)
                    <span class="glyphicon glyphicon-map-marker"></span> {{$data->address}}
                @endif
            </p>
            <p>
                @if ($data->mobile)
                    <span class="glyphicon glyphicon-phone"></span> {{$data->mobile}}
                @endif
            </p>
            <p>
                @if ($data->email)
                    <span class="glyphicon glyphicon-envelope"></span> {{$data->email}}
                @endif
            </p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Write your messege"
                      rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <input class="btn btn-default pull-right" id="msg_submit" type="button" value="Send"/>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="text-center">
    <p>Developed By <a href="https://github.com/sankarbala" target="_blank" title="Know about me">Sankar Bala</a></p>
</footer>

<script src="{{asset('js/frontend.js')}}"></script>
<script>

    const msg_btn = document.querySelector('#msg_submit');

    msg_btn.addEventListener('click', () => {
        const msg_name = document.querySelector('#name').value;
        const msg_email = document.querySelector('#email').value;
        const msg_message = document.querySelector('#message').value;

        axios.post('{{route('messages.store')}}', {
            name: msg_name,
            email: msg_email,
            message: msg_message

        }).then(data => {
            if (data.data.data === "accepted") {
                document.querySelector('#name').value = "";
                document.querySelector('#email').value = "";
                document.querySelector('#message').value = "";
                document.querySelector('#msg_submit').value = "Saved";
            } else {
                console.log('failed')
            }
        }).catch(error => {
            console.log(error);
        })

    });

</script>

</body>
</html>



