<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e718c2e5452b35666dddae1b90a87b5fdd2a4b20744ad7074e0c8ca247c48cfd extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  157 => 24,  145 => 70,  139 => 66,  90 => 43,  53 => 21,  76 => 32,  37 => 10,  20 => 2,  242 => 24,  236 => 7,  228 => 155,  223 => 153,  215 => 151,  126 => 62,  114 => 55,  77 => 32,  70 => 28,  65 => 25,  58 => 22,  23 => 4,  104 => 49,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 155,  247 => 65,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 66,  111 => 37,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 156,  227 => 81,  224 => 71,  221 => 77,  219 => 152,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 68,  135 => 53,  131 => 52,  119 => 42,  108 => 53,  102 => 32,  71 => 19,  67 => 24,  63 => 24,  59 => 14,  47 => 18,  38 => 6,  94 => 28,  89 => 20,  85 => 33,  79 => 18,  75 => 17,  68 => 14,  56 => 19,  50 => 18,  29 => 5,  87 => 25,  72 => 16,  55 => 28,  21 => 2,  26 => 6,  98 => 48,  93 => 45,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 10,  44 => 14,  35 => 5,  31 => 4,  43 => 17,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 7,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 61,  117 => 44,  115 => 43,  105 => 40,  101 => 50,  91 => 27,  69 => 28,  66 => 15,  62 => 24,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 60,  112 => 59,  109 => 34,  106 => 52,  103 => 32,  99 => 31,  95 => 28,  92 => 38,  86 => 28,  82 => 35,  80 => 19,  73 => 27,  64 => 25,  60 => 20,  57 => 22,  54 => 21,  51 => 18,  48 => 18,  45 => 25,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}