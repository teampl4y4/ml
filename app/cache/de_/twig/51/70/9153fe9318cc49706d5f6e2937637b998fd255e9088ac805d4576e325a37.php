<?php

/* MetaLeagueSiteBundle:Default:navigation.html.twig */
class __TwigTemplate_51709153fe9318cc49706d5f6e2937637b998fd255e9088ac805d4576e325a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar bs-docs-nav\" role=\"banner\">
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

                ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 28
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"color\"><span class=\"color\">Register</span></a></li>
                ";
        }
        // line 31
        echo "            </ul>
        </nav>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "MetaLeagueSiteBundle:Default:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 24,  236 => 7,  228 => 155,  223 => 153,  215 => 151,  126 => 65,  114 => 55,  77 => 32,  70 => 28,  65 => 25,  58 => 22,  23 => 1,  104 => 49,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 155,  247 => 65,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 66,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 156,  227 => 81,  224 => 71,  221 => 77,  219 => 152,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 31,  63 => 24,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 45,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 17,  31 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 29,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 26,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 53,  101 => 50,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 28,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 52,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 35,  80 => 19,  73 => 31,  64 => 17,  60 => 6,  57 => 11,  54 => 21,  51 => 14,  48 => 18,  45 => 25,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
