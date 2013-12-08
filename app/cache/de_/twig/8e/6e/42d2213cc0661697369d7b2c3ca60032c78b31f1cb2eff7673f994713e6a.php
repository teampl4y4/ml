<?php

/* MetaLeagueSiteBundle:Default:index.html.twig */
class __TwigTemplate_8e6e42d2213cc0661697369d7b2c3ca60032c78b31f1cb2eff7673f994713e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"js/jquery.flexslider-min.js\"></script> <!-- Flex slider -->
    <script src=\"js/jquery.carouFredSel-6.1.0-packed.js\"></script> <!-- Carousel for recent posts -->
    <script src=\"js/jquery.refineslide.min.js\"></script> <!-- Refind slider -->
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<!-- Recent posts carousel starts -->


";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["games"]) ? $context["games"] : $this->getContext($context, "games"))) > 0)) {
            // line 14
            echo "<div class=\"recent-posts\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"title\">Meta<span class=\"color\">League</span> Options</h4>
                <div class=\"carousel_nav pull-left\">
                    <!-- Carousel navigation -->
                    <a class=\"prev\" id=\"car_prev\" href=\"#\"><i class=\"icon-chevron-left\"></i></a>
                    <a class=\"next\" id=\"car_next\" href=\"#\"><i class=\"icon-chevron-right\"></i></a>
                </div>
                <div class=\"clearfix\"></div>
                <ul class=\"rps-carousel\">
                    ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : $this->getContext($context, "games")));
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 27
                echo "                    <li>
                        <div class=\"rp-item\">
                            <!-- Image. -->
                            <div class=\"rp-image\">
                                <a href=\"#\"><img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "teaserImage"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name"), "html", null, true);
                echo " fantasy leagues\"/></a>
                            </div>
                            <div class=\"rp-details clear-fix\">
                                <!-- Title and para -->
                                <h5><a href=\"#\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "name"), "html", null, true);
                echo "</a></h5>
                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
                <br>
            </div>
        </div>
    </div>
</div>

<div class=\"sep\"></div>
";
        }
        // line 49
        echo "
<!-- Recent Posts ends -->

<!-- Below slider starts -->
<div class=\"slider-features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"onethree\">
                    <div class=\"onethree-left\">
                        <!-- Font awesome icon -->
                        <div class=\"img\"><i class=\"icon-cloud\"></i></div>
                    </div>
                    <div class=\"onethree-right\">
                        <!-- Title and meta -->
                        <h5><a href=\"#\">Proin porttitor decided eros</a></h5>
                        <p class=\"meta\">Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris.</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"onethree\">
                    <div class=\"onethree-left\">
                        <div class=\"img\"><i class=\"icon-gift\"></i></div>
                    </div>
                    <div class=\"onethree-right\">
                        <h5><a href=\"#\">Curatur rhoncus condim eros</a></h5>
                        <p class=\"meta\">Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris.</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"onethree\">
                    <div class=\"onethree-left\">
                        <div class=\"img\"><i class=\"icon-home\"></i></div>
                    </div>
                    <div class=\"onethree-right\">
                        <h5><a href=\"#\">Proin porttitor decided eros</a></h5>
                        <p class=\"meta\">Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris.</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Below slider ends -->


<!-- CTA Starts -->

<div class=\"container\">
    <div class=\"cta\">
        <div class=\"row\">
            <div class=\"col-md-5 col-sm-5\">
                <div class=\"ctas\">
                    <!-- Title and Para -->
                    <h5>Professional Product Ever Made in Internet</h5>
                    <p>Sed diam nisi, pulvinar vitae molestie vitae molestie hendreri hendrerit, venenatis eget mauris.</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4\">
                <div class=\"ctas\">
                    <!-- List -->
                    <ul>
                        <li>Very Cheap in Market. Check it today.</li>
                        <li>Professional and Powerful. Don't miss it.</li>
                        <li>1000% Guanrantee. No Worries. No Probs.</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <div class=\"ctas\">
                    <!-- Button -->
                    <div class=\"button\"><a href=\"#\">Buy it Today for \$99</a></div>
                    <p>limited period offer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Ends -->

<!-- Service style #2 starts -->

<div class=\"container\">
    <div class=\"service-two\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h4 class=\"title\">Service</h4>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h5>Nullam in est urna. In  vesti dui ante mosti ecomdo  adipiscing enim. Curabitur rhoncus.</h5>
                <p>Vestilum comdo vestibulum dui ante mostie gridas condimum <a href=\"#\">Risus eget viverra.</a></p>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <!-- Service heading with font awesome icon -->
                <h5><i class=\"icon-gift\"></i> Invitae adipiscing</h5>
                <!-- Service para -->
                <p>Proin porttitor eros a ante moles gravida diam mi vestilum  vesti dui ante mosti ecomdo vestibulum dui ante mostie vestibulum dui ante mostie grida adipiscing rhoncus condimum.</p>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h5><i class=\"icon-bullhorn\"></i> Proin porttitor</h5>
                <p>Proin porttitor eros a ante moles gravida diam mi vestilum vesti dui ante mostie comdo vestibulum dui ante mostie vestibulum dui ante mostie grida adipiscing rhoncus condimum.</p>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h5><i class=\"icon-fire\"></i> Mostie comdovesti</h5>
                <p>Proin porttitor eros a ante moles gravida diam mi vestilum vesti dui ante mostie comdo vestibulum dui ante mostie vestibulum dui ante mostie grida adipiscing rhoncus condimum.</p>
            </div>
        </div>
    </div>
    <hr />
</div>

<div class=\"container fsliders\">
    <div class=\"row\">

        <!-- Testimonial -->
        <div class=\"col-md-4\">
            <h5>Testimonials</h5>
            <div class=\"testi-flex flexslider\">
                <ul class=\"slides\">
                    <!-- Each slider should be enclosed inside li tag -->
                    <li>
                        <p>Cras enim ipsum luctus at condimentum eleifend. Nullam euismod pelleque condimentum purus libero cursus. Aenean consequat condintum nisi convallis urna.</p>
                        <!-- Author name -->
                        <p class=\"author pull-right\">- <span class=\"color\">Ashok</span>, CEO</p>
                        <div class=\"clearfix\"></div>
                    </li>
                    <li>
                        <p> Nullam in est urna. In vitae condimentum adipiscing enim. Duis eget condimentum risus ac orci sit amet id orci. Etiam ac ante at lorem ultrices elementum.</p>
                        <p class=\"author pull-right\">- <span class=\"color\">Ravi Kumar</span>, CTO</p>
                        <div class=\"clearfix\"></div>
                    </li>
                    <li>
                        <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit.  Curabitur condimentum lacinia nulla vel tellus elementum non mollis justo aliquam. </p>
                        <p class=\"author pull-right\">- <span class=\"color\">Babu</span>, CFO</p>
                        <div class=\"clearfix\"></div>
                    </li>
                    <li>
                        <p>Proin porttitor eros a ante molestie gravida commodo dui adipiscing. Mi pretium condimentum dapibus. Nullam in est urna. In vitae adipiscing enim.</p>
                        <p class=\"author pull-right\">- <span class=\"color\">Raju</span>, CEO</p>
                        <div class=\"clearfix\"></div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tabs -->
        <div class=\"col-md-4\">
            <div class=\"tabs\">
                <h5>Tabs</h5>
                <ul class=\"nav nav-tabs\">
                    <!-- Use unique name in anchor tag -->
                    <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a></li>
                    <li><a href=\"#profile\" data-toggle=\"tab\">Profile</a></li>
                    <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a></li>
                </ul>
                <!-- Tab conten -->
                <div class=\"tab-content\">
                    <!-- \"ID\" should match \"href\" value in abouve \"nav tabs\" -->
                    <div class=\"tab-pane active\" id=\"home\">In ut nulla est. Sed a  mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem  . Fusce  leo vitae velit interdum at laoreet justo ullamcorper.</div>
                    <div class=\"tab-pane\" id=\"profile\">Suspendisse id lectus at lorem  posuere. Duis gravida lacus a urna cursus varius. Donec congue odio vitae eros condimentum nec  augue . Integer  enim, porta non  at, ligula.</div>
                    <div class=\"tab-pane\" id=\"messages\">Lorem ipsum elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et  fames ac turpis egestas.    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class=\"col-md-4\">
            <h5>Our Team</h5>
            <div class=\"about-flex flexslider\">
                <ul class=\"slides\">
                    <li>
                        <!-- Image, Name and Designation -->
                        <h6><img src=\"img/photos/user-small.jpg\" alt=\"\" class=\"alignleft\" />Ashok, CEO <span class=\"meta\">Info Systems</span></h6>
                        <div class=\"clearfix\"></div>
                        <hr />
                        <!-- Para -->
                        <p>Cras enim ipsum luctus at condimentum eleifend. Nullam euismod pelleque purus libero cursus. Aenean consequat condintum nisi convallis urna.</p>
                    </li>
                    <li>
                        <!-- Image, Name and Designation -->
                        <h6><img src=\"img/photos/user-small.jpg\" alt=\"\" class=\"alignleft\" />Ravi Kumar, CTO <span class=\"meta\">Babu Systems</span></h6>
                        <div class=\"clearfix\"></div>
                        <hr />
                        <!-- Para -->
                        <p>Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et  fames ac turpis egestas. </p>
                    </li>
                    <li>
                        <!-- Image, Name and Designation -->
                        <h6><img src=\"img/photos/user-small.jpg\" alt=\"\" class=\"alignleft\" />Babu Kannan, Manager <span class=\"meta\">Ravi Systems</span></h6>
                        <div class=\"clearfix\"></div>
                        <hr />
                        <!-- Para -->
                        <p>Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem  . Fusce  leo vitae velit interdum at laoreet justo ullamcorper.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- [Ends] Testimonial (flexslider), About & Twitter Slider (FlexSlider) -->

<!-- Newsletter starts -->

<div class=\"container newsletter\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"well\">
                <h5>Please fill out the below form</h5>
                <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet.</p>
                <form class=\"form-inline\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Subscribe</button>
                </form>


                <p>If you have any questions, let me know <a href=\"mailto:something@gmail.com\">something@gmail.com</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter ends -->


<!-- Clients starts -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- Clients images -->
            <div class=\"clients\">
                <img src=\"img/clients/amazon_b.png\" alt=\"\" />
                <img src=\"img/clients/google_b.png\" alt=\"\" />
                <img src=\"img/clients/twitter_b.png\" alt=\"\" />
                <img src=\"img/clients/facebook_b.png\" alt=\"\" />
                <img src=\"img/clients/skype_b.png\" alt=\"\" />
                <img src=\"img/clients/youtube_b.png\" alt=\"\" />
            </div>
        </div>
    </div>
</div>

<!-- Clients ends -->

";
    }

    public function getTemplateName()
    {
        return "MetaLeagueSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 27,  63 => 26,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 40,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 13,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 35,  80 => 19,  73 => 31,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}