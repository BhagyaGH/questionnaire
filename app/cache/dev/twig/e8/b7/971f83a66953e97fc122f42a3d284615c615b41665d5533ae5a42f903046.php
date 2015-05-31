<?php

/* GeneQuestionnaireBundle:Default:final_spanish.html.twig */
class __TwigTemplate_e8b7971f83a66953e97fc122f42a3d284615c615b41665d5533ae5a42f903046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GeneQuestionnaireBundle::base.html.twig");

        $this->blocks = array(
            'name' => array($this, 'block_name'),
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
    public function block_name($context, array $blocks = array())
    {
        // line 4
        echo "    Modificacion de genes humanos
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "   
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
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
