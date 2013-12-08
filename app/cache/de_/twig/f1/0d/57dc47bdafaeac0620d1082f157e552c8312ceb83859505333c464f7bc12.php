<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f10d57dc47bdafaeac0620d1082f157e552c8312ceb83859505333c464f7bc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  90 => 43,  53 => 21,  76 => 32,  20 => 2,  34 => 14,  242 => 24,  236 => 7,  228 => 155,  223 => 153,  215 => 151,  126 => 62,  114 => 55,  77 => 32,  70 => 31,  65 => 29,  58 => 28,  23 => 4,  104 => 49,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 155,  247 => 65,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 66,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 156,  227 => 81,  224 => 71,  221 => 77,  219 => 152,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 68,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 24,  63 => 24,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 14,  56 => 19,  87 => 25,  21 => 2,  26 => 12,  93 => 45,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 14,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 7,  142 => 59,  138 => 54,  136 => 56,  121 => 61,  117 => 44,  105 => 40,  91 => 27,  62 => 24,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 28,  47 => 18,  40 => 10,  37 => 10,  22 => 2,  246 => 90,  157 => 24,  145 => 70,  139 => 66,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 53,  101 => 50,  98 => 48,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 17,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 68,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 60,  112 => 59,  109 => 34,  106 => 52,  103 => 32,  99 => 31,  95 => 28,  92 => 38,  86 => 28,  82 => 35,  80 => 19,  73 => 27,  64 => 25,  60 => 20,  57 => 22,  54 => 21,  51 => 18,  48 => 12,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
