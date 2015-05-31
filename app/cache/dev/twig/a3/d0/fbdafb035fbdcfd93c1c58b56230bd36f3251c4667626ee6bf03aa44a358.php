<?php

/* GeneQuestionnaireBundle:Default:index_english.html.twig */
class __TwigTemplate_a3d0fbdafb035fbdcfd93c1c58b56230bd36f3251c4667626ee6bf03aa44a358 extends Twig_Template
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
        echo "    <div class=\"container\">
        <h3><strong>Would you do it?</strong></h3>
        <h4><strong>Have your say on a technology that could change humanity</strong></h4>

        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_english");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Start Survey\">
        </form>
            
        <br>
        <p style=\"font-size:90%\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 11, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p style=\"font-size:90%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 12, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p style=\"font-size:90%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 13, array(), "array"), "question"), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:index_english.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  58 => 18,  54 => 17,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
