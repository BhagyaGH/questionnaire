<?php

/* GeneQuestionnaireBundle:Default:final_french.html.twig */
class __TwigTemplate_bdf80a8d47a163d0df08d0a98d39951b377edda562d264f5cd5dc3e0937fb651 extends Twig_Template
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
        echo "    Génie Génétique
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
        <div class=\"container\">
            <h4>Merci d’avoir rempli ce formulaire.</h4>
            <h4>Si vous souhaitez contacter notre équipe de recherche, ou connaître les résultats de cette enquête, envoyer-nous un email team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_french.html.twig";
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
