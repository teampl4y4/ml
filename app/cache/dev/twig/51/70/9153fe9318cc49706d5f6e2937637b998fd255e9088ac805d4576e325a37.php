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
        return array (  67 => 31,  62 => 29,  55 => 28,  47 => 26,  45 => 25,  19 => 1,  242 => 152,  237 => 62,  232 => 24,  226 => 7,  220 => 153,  218 => 152,  213 => 150,  209 => 149,  205 => 148,  118 => 63,  116 => 62,  101 => 50,  93 => 45,  77 => 32,  70 => 28,  65 => 25,  63 => 24,  58 => 22,  54 => 21,  48 => 18,  44 => 17,  31 => 7,  23 => 1,);
    }
}