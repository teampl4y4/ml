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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
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
        return array (  242 => 24,  236 => 7,  228 => 155,  223 => 153,  215 => 151,  126 => 65,  114 => 55,  77 => 32,  70 => 28,  65 => 25,  58 => 22,  23 => 1,  104 => 49,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 155,  247 => 65,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 66,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 156,  227 => 81,  224 => 71,  221 => 77,  219 => 152,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 53,  102 => 32,  71 => 19,  67 => 27,  63 => 24,  59 => 14,  47 => 13,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 45,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 17,  35 => 5,  31 => 7,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 50,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 52,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 35,  80 => 19,  73 => 31,  64 => 17,  60 => 13,  57 => 11,  54 => 21,  51 => 14,  48 => 18,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
