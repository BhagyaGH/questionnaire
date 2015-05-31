<?php

/* GeneQuestionnaireBundle:Default:index_turkish.html.twig */
class __TwigTemplate_2ab733f78f8f37e657fb3ce6e05249e65aecf02a52ac338876c99b408ce9ecef extends Twig_Template
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
            <h4>Bu tekniği siz kullanır mısınız?</h4>
            <h4>İnsanlığı değiştirebilecek bir teknoloji üzerinde görüşünüzü bildiriniz.</h4>

            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_tr");
        echo "\">
                <input type=\"submit\" value=\"Ankete başlayınız\">
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
        return "GeneQuestionnaireBundle:Default:index_turkish.html.twig";
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
