<div class="container">
    <div class="row">
        <form role="form" style="margin-top: 30px;">
            
        </style>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Enter Message</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        </div>
    </div>
    <form class="col-md-12" style="margin-top: 30px;">
    <div class="row text-center">
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-primary btn-block">Facebook</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-info btn-block">Twitter</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-danger btn-block">Google+</button>
        </div>
    </div>
    <hr />
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
    </div>
</form>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="blog-stripe">
                <a href="#">
                    <img src="http://placehold.it/500x400" alt="" class="feature">
                </a>
                <div class="block-title">
                    <h2 class="text-center">Featured article title</h2>
                    <p class="author text-center"><small>Author name</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <ul class="all-blogs">
                <li class="media">
                    <a class="pull-left" href="#">
                        <img src="http://placehold.it/200x100" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Latest Google Updates</h4>
                        <p class="author">Mike Smith</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/200x100" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Newest bootstrap version</h4>
                        <p class="author">Dave Hesler</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/200x100" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Android rolls our another update</h4>
                        <p class="author">Michael Davis</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/200x100" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Survey results are out</h4>
                        <p class="author">Mike Smith</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
.feature {
    display: block;
    width: 100%;
    margin: 0;
}

.author {
    font-style: italic;
    line-height: 1.3;
    color: #aab6aa;
}

.blog-stripe .block-title {
    background: black;
    width: 100%;
    color: white;
    height: 100px;
    padding-top: 20px;
    margin-top: 30px;
}

.all-blogs .media {
    margin-left: -40px;
    padding-bottom: 20px;
    border-bottom: 1px solid #CCCCCC;
}
</style>

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>

    </body>

    </html>


</body>
</html>