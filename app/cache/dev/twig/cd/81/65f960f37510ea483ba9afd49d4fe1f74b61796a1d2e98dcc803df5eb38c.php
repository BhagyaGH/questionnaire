<?php

/* GeneQuestionnaireBundle:Default:index_french.html.twig */
class __TwigTemplate_cd8165f960f37510ea483ba9afd49d4fe1f74b61796a1d2e98dcc803df5eb38c extends Twig_Template
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
        <strong><h3>Le feriez-vous?</h3></strong>
        <strong><h4>Donnez votre opinion sur une technologie qui pourrait changer l’humanité</h4></strong>

        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_fr");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Commencer l’enquête\">
        </form>


        <br>

        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 11, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 12, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 13, array(), "array"), "question"), "html", null, true);
        echo "</p>

    </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:index_french.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  61 => 21,  57 => 20,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
