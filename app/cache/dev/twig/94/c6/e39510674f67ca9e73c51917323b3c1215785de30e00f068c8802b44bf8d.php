<?php

/* GeneQuestionnaireBundle::base.html.twig */
class __TwigTemplate_94c6e39510674f67ca9e73c51917323b3c1215785de30e00f068c8802b44bf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'flashes' => array($this, 'block_flashes'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/bootstrap.minbo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen, projection\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen, projection\">
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/js/functions.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                
                </div>
            </div>
        </div>
    </div>

    <hr />

    <div class=\"container-fluid\">
        ";
        // line 32
        $this->displayBlock('flashes', $context, $blocks);
        // line 45
        echo "
        <div class=\"row-fluid\">
            <div class=\"span2\">
                <div class=\"sidebar-nav\">
                    ";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 54
        echo "
                </div>
            </div>
            <div id=\"content\" class=\"span10\">
                ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "
            </div>
        </div>

    </div>
";
    }

    // line 32
    public function block_flashes($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all")) > 0)) {
            // line 34
            echo "                <div class=\"row-fluid\">
                    <div class=\"span12\" id=\"flash\">
                        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 37
                echo "                            <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
                                ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    </div>
                </div>
            ";
        }
        // line 44
        echo "        ";
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        // line 50
        echo "                        <div class=\"well\">
                            <h3>Human Gene Editing</h3>
                        </div>
                    ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "                    <div class=\"hero-unit\">
                        <h1>Hello, world!</h1>
                        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                        <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                        <div class=\"span4\">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  161 => 58,  154 => 50,  151 => 49,  147 => 44,  142 => 41,  133 => 38,  128 => 37,  124 => 36,  120 => 34,  117 => 33,  114 => 32,  105 => 99,  103 => 58,  97 => 54,  95 => 49,  89 => 45,  87 => 32,  68 => 15,  65 => 14,  59 => 11,  55 => 10,  50 => 9,  47 => 8,  41 => 5,  36 => 4,  33 => 3,);
    }
}
