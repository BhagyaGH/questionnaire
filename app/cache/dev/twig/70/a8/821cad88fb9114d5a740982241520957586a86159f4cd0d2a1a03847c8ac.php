<?php

/* GeneQuestionnaireBundle:Default:final_hindi.html.twig */
class __TwigTemplate_70a8821cad88fb9114d5a740982241520957586a86159f4cd0d2a1a03847c8ac extends Twig_Template
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
            <h4>प्रश्नावली को पूरा करने के लिए आपका बहुत धन्यवाद।</h4>
            <h4>आप अनुसंधान टीम से संपर्क करने के लिए या इस काम से परिणाम के बारे में सूचित किया जाना चाहते हैं, तो कृपया ईमेल- team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_hindi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
