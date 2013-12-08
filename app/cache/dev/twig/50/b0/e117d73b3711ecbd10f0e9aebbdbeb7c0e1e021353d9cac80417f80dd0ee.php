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
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- Main stylesheet -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shim.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon/favicon.png"), "html", null, true);
        echo "\">

</head>

<body>

<!-- Header starts -->
<header>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-4 col-sm-3\">
                <!-- Logo -->
                ";
        // line 45
        echo twig_include($this->env, $context, "MetaLeagueSiteBundle:Default:logo.html.twig");
        echo "
            </div>

            <div class=\"col-md-8 col-sm-9\">
                <!-- Navigation -->
                ";
        // line 50
        echo twig_include($this->env, $context, "MetaLeagueSiteBundle:Default:navigation.html.twig");
        echo "

                ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo "</p>
                ";
        }
        // line 55
        echo "            </div>

        </div>
    </div>
</header>

<!-- Seperator -->

<div class=\"sep\"></div>

";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
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
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script> <!-- jQuery -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap -->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script> <!-- Custom codes -->

";
        // line 155
        $this->displayBlock('scripts', $context, $blocks);
        // line 156
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

    // line 65
    public function block_body($context, array $blocks = array())
    {
    }

    // line 155
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 155,  247 => 65,  242 => 24,  236 => 7,  230 => 156,  228 => 155,  223 => 153,  219 => 152,  215 => 151,  128 => 66,  126 => 65,  114 => 55,  108 => 53,  106 => 52,  101 => 50,  93 => 45,  77 => 32,  70 => 28,  65 => 25,  63 => 24,  58 => 22,  54 => 21,  48 => 18,  44 => 17,  31 => 7,  23 => 1,);
    }
}
