<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a84dfa044ef00adacdcd291bac45d8009c47094c1fd3e82b18237bc71adcba77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

<!-- Header starts -->
<header>
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-4 col-sm-3\">
                <!-- Logo -->
                ";
        // line 43
        echo twig_include($this->env, $context, "MetaLeagueSiteBundle:Default:logo.html.twig");
        echo "
            </div>

            <div class=\"col-md-8 col-sm-9\">
                <!-- Navigation -->
                ";
        // line 48
        echo twig_include($this->env, $context, "MetaLeagueSiteBundle:Default:navigation.html.twig");
        echo "
            </div>

        </div>
    </div>
</header>

<!-- Seperator -->

<div class=\"sep\"></div>

";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 60
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["key"] => $context["message"]) {
                // line 61
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
            ";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
<div>
    ";
        // line 68
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 70
        echo "</div>
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "MetaLeague | Fantasy eSports | Login";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 68
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 69
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  162 => 68,  157 => 24,  151 => 7,  145 => 70,  143 => 68,  139 => 66,  126 => 62,  121 => 61,  116 => 60,  112 => 59,  98 => 48,  90 => 43,  76 => 32,  69 => 28,  64 => 25,  62 => 24,  57 => 22,  53 => 21,  47 => 18,  43 => 17,  30 => 7,  22 => 1,);
    }
}
