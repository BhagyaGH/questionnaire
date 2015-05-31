<?php

/* GeneQuestionnaireBundle::base.html.twig */
class __TwigTemplate_94c6e39510674f67ca9e73c51917323b3c1215785de30e00f068c8802b44bf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'name' => array($this, 'block_name'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "    </head>

    <body>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">
                        ";
        // line 38
        $this->displayBlock('name', $context, $blocks);
        // line 41
        echo "                    </a>
                </div>

                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <div class=\"navbar-form navbar-right\">
                        ";
        // line 46
        $this->displayBlock('progress', $context, $blocks);
        // line 49
        echo "                    </div>
                </div>
            </div>
        </nav>

        <div class=\"jumbotron\">
            <div class=\"container\">
                ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "            </div>
        </div>

        <div id=\"footer\">
            ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
            <link rel=\"icon\" href=\"../../favicon.ico\">

            <title>Human Gene Editing</title>

            <!-- Bootstrap core CSS -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom styles for this template -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/jumbotron.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
            <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/assets/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
              <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
    }

    // line 38
    public function block_name($context, array $blocks = array())
    {
        // line 39
        echo "                            Project name
                        ";
    }

    // line 46
    public function block_progress($context, array $blocks = array())
    {
        // line 47
        echo "                            
                        ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "                    <!-- Main jumbotron for a primary marketing message or call to action -->
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>

                ";
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "                &copy; Copyright 2015 by PPGE.
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
        return array (  162 => 68,  159 => 67,  150 => 57,  147 => 56,  142 => 47,  139 => 46,  134 => 39,  131 => 38,  119 => 23,  112 => 19,  106 => 16,  93 => 5,  90 => 4,  83 => 78,  78 => 76,  70 => 70,  68 => 67,  62 => 63,  60 => 56,  51 => 49,  49 => 46,  42 => 41,  40 => 38,  31 => 31,  29 => 4,  24 => 1,);
    }
}
