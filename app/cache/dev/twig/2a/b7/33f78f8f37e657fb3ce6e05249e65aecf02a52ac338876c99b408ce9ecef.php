<?php

/* GeneQuestionnaireBundle:Default:index_turkish.html.twig */
class __TwigTemplate_2ab733f78f8f37e657fb3ce6e05249e65aecf02a52ac338876c99b408ce9ecef extends Twig_Template
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
        <strong><h3>Bu tekniği siz kullanır mısınız?</h3></strong>
        <strong><h4>İnsanlığı değiştirebilecek bir teknoloji üzerinde görüşünüzü bildiriniz.</h4></strong>

        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_tr");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Ankete başlayınız\">
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
        return "GeneQuestionnaireBundle:Default:index_turkish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 19,  55 => 18,  47 => 13,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
