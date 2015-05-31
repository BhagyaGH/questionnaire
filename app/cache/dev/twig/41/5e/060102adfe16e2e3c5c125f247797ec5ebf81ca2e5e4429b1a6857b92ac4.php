<?php

/* GeneQuestionnaireBundle:Default:index_japanese.html.twig */
class __TwigTemplate_415e060102adfe16e2e3c5c125f247797ec5ebf81ca2e5e4429b1a6857b92ac4 extends Twig_Template
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
        echo "    ヒト遺伝子編集
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        <strong><h4>意志はありますか？</h4></strong>
        <strong><h4>人間性を変えることができる技術についてご意見を教えてください。</h4></strong>

        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_jp");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"アンケートを開始\">
        </form>

        <br>

        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 11, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 12, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 13, array(), "array"), "question"), "html", null, true);
        echo "</p>

    </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:index_japanese.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 19,  55 => 18,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
