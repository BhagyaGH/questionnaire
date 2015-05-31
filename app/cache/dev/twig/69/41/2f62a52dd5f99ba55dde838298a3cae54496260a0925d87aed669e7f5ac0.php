<?php

/* GeneQuestionnaireBundle:Default:final_english.html.twig */
class __TwigTemplate_69412f62a52dd5f99ba55dde838298a3cae54496260a0925d87aed669e7f5ac0 extends Twig_Template
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
        echo "    Human Gene Editing
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    
        <div class=\"container\">
            <h4>Thank you for completing the questionnaire</h4>
            <h4>If you would like to contact the research team or be informed of results from this work, please email team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_english.html.twig";
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
