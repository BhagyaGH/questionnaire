<?php

/* GeneQuestionnaireBundle:Default:index_chinese.html.twig */
class __TwigTemplate_f2fc6555e3ca4e60e2706b6cc50eda1b086a7a1ee61e8ffe27629d27c69a98ec extends Twig_Template
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
            <h4>你自己会接受此項基因治疗吗?</h4>
            <h4>你认为一项科技可能会改变人类吗</h4>

            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_ch");
        echo "\">
                <input type=\"submit\" value=\"开始调查\">
            </form>
        </div>

        <br>

        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 11, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 12, array(), "array"), "question"), "html", null, true);
        echo "</p>
        <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), 13, array(), "array"), "question"), "html", null, true);
        echo "</p>

    </body>

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
        return array (  66 => 25,  62 => 24,  58 => 23,  48 => 16,  36 => 7,  31 => 4,  28 => 3,);
    }
}
