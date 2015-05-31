<?php

/* GeneQuestionnaireBundle:Default:index_chinese.html.twig */
class __TwigTemplate_f2fc6555e3ca4e60e2706b6cc50eda1b086a7a1ee61e8ffe27629d27c69a98ec extends Twig_Template
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
        echo "    人类基因编辑
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        <strong><h3>你自己会接受此項基因治疗吗?</h3></strong>
        <strong><h4>你认为一项科技可能会改变人类吗</h4></strong>

        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_ch");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"开始调查\">
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
        return "GeneQuestionnaireBundle:Default:index_chinese.html.twig";
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
