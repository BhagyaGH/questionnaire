<?php

/* ::base.html.twig */
class __TwigTemplate_e0be2ceb3ba2262b53246324f0f64763a665c879293bf412728914a988032822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
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
        return array (  69 => 11,  64 => 10,  53 => 5,  44 => 11,  42 => 10,  35 => 7,  29 => 5,  23 => 1,  225 => 76,  222 => 75,  215 => 67,  212 => 66,  208 => 61,  203 => 58,  194 => 55,  189 => 54,  185 => 53,  181 => 51,  178 => 50,  175 => 49,  155 => 116,  153 => 75,  147 => 71,  145 => 66,  139 => 62,  137 => 49,  126 => 40,  119 => 38,  111 => 36,  105 => 33,  101 => 32,  96 => 31,  94 => 30,  88 => 27,  84 => 26,  78 => 23,  68 => 15,  65 => 14,  59 => 6,  55 => 10,  50 => 9,  47 => 12,  41 => 5,  36 => 4,  33 => 6,);
    }
}
