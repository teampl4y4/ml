<?php

/* ::base.html.twig */
class __TwigTemplate_50b0e117d73b3711ecbd10f0e9aebbdbeb7c0e1e021353d9cac80417f80dd0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"\">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href=\"style/bootstrap.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"style/font-awesome.css\">

    <!-- Main stylesheet -->
    <link href=\"style/style.css\" rel=\"stylesheet\">
    <link href=\"style/blue.css\" rel=\"stylesheet\">

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src=\"js/html5shim.js\"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"img/favicon/favicon.png\">

</head>

<body>

<!-- Header starts -->
<header>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-4 col-sm-3\">
                <!-- Logo. Use class \"color\" to add color to the text. -->
                <div class=\"logo\">
                    <h1><a href=\"#\">Meta<span class=\"color bold\">League</span></a></h1>
                    <p class=\"meta\">Fantasy eSports</p>
                </div>
            </div>

            <div class=\"col-md-8 col-sm-9\">

                <!-- Navigation -->
                <div class=\"navbar bs-docs-nav\" role=\"banner\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".bs-navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>

                        <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"/\">Home</a></li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Leagues <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"404-1.html\">League of Legends 5v5</a></li>
                                        <li><a href=\"about1.html\">League of Legends Survivor Pool</a></li>
                                        <li><a href=\"faq.html\">Counter-Strike 5v5</a></li>
                                        <li><a href=\"faq.html\">Counter-Strike Survivor Pool</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"contactus1.html\" class=\"color\"><span class=\"color\">Login</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>


            </div>

        </div>
    </div>
</header>

<!-- Seperator -->

<div class=\"sep\"></div>

";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "
<!-- Footer starts -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">

                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <div class=\"widget\">
                            <h5>Contact</h5>
                            <hr />
                            <p>Praesent ultricies enim ac ipsum aliquet . Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. </p>
                            <hr />
                            <i class=\"icon-home\"></i> &nbsp; 123, Some Area. Los Angeles, CA, 54321.
                            <hr />
                            <i class=\"icon-phone\"></i> &nbsp; +239-3823-3434
                            <hr />
                            <i class=\"icon-envelope-alt\"></i> &nbsp; <a href=\"mailto:#\">someone@company.com</a>
                            <hr />
                            <div class=\"social\">
                                <a href=\"#\"><i class=\"icon-facebook facebook\"></i></a>
                                <a href=\"#\"><i class=\"icon-twitter twitter\"></i></a>
                                <a href=\"#\"><i class=\"icon-linkedin linkedin\"></i></a>
                                <a href=\"#\"><i class=\"icon-google-plus google-plus\"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"widget\">
                            <h5>About Us</h5>
                            <hr />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum. Curabitur pulvinar ornare vulputate scelerisque scelerisque ut consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi fermentum quis hendrerit magna vestibulum..</p>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"widget\">
                            <h5>Links Goes Here</h5>
                            <hr />
                            <div class=\"two-col\">
                                <div class=\"col-left\">
                                    <ul>
                                        <li><a href=\"#\">Condimentum</a></li>
                                        <li><a href=\"#\">Etiam at</a></li>
                                        <li><a href=\"#\">Fusce vel</a></li>
                                        <li><a href=\"#\">Vivamus</a></li>
                                        <li><a href=\"#\">Pellentesque</a></li>
                                        <li><a href=\"#\">Vivamus</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-right\">
                                    <ul>
                                        <li><a href=\"#\">Condimentum</a></li>
                                        <li><a href=\"#\">Etiam at</a></li>
                                        <li><a href=\"#\">Fusce vel</a></li>
                                        <li><a href=\"#\">Vivamus</a></li>
                                        <li><a href=\"#\">Pellentesque</a></li>
                                        <li><a href=\"#\">Vivamus</a></li>
                                    </ul>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <hr />
                <!-- Copyright info -->
                <p class=\"copy\">Copyright &copy; 2012 | <a href=\"#\">Your Site</a> - <a href=\"#\">Home</a> | <a href=\"#\">About Us</a> | <a href=\"#\">Service</a> | Designed by <a href=\"http://responsivewebinc.com/bootstrap-themes\">Bootstrap Themes</a></p>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class=\"totop\"><a href=\"#\"><i class=\"icon-chevron-up\"></i></a></span>

<!-- JS -->
<script src=\"js/jquery.js\"></script> <!-- jQuery -->
<script src=\"js/bootstrap.js\"></script> <!-- Bootstrap -->
<script src=\"js/custom.js\"></script> <!-- Custom codes -->

";
        // line 184
        $this->displayBlock('scripts', $context, $blocks);
        // line 185
        echo "
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "MetaLeague | Fantasy eSports";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
    }

    // line 184
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 184,  236 => 94,  231 => 24,  225 => 7,  219 => 185,  217 => 184,  126 => 95,  124 => 94,  53 => 25,  51 => 24,  31 => 7,  23 => 1,  102 => 47,  93 => 40,  82 => 35,  73 => 31,  67 => 27,  63 => 26,  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}