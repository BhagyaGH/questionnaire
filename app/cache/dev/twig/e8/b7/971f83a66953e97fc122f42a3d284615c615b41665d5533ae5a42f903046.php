<?php

/* GeneQuestionnaireBundle:Default:final_spanish.html.twig */
class __TwigTemplate_e8b7971f83a66953e97fc122f42a3d284615c615b41665d5533ae5a42f903046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GeneQuestionnaireBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GeneQuestionnaireBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <head>
        <meta charset=\"utf-8\"> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>

        <div class=\"container\">
            <h4>Gracias por completar el cuestionario.</h4>
            <h4>Si te gustaria contactar al equipo cientifico o recibir informacion sobre los resultados de este proyecto, por favor manda un email a team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_spanish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
