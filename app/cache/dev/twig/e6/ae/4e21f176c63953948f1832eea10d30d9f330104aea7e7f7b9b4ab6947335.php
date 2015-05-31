<?php

/* GeneQuestionnaireBundle:Default:final_turkish.html.twig */
class __TwigTemplate_e6ae4e21f176c63953948f1832eea10d30d9f330104aea7e7f7b9b4ab6947335 extends Twig_Template
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
            <h4>Anketi tamamladığınız için teşekkürler.</h4>
            <h4>Araştırma grubumuza ulaşmak isterseniz ya da bu çalışmanın sonuçları hakkında bilgi edinmek isterseniz lütfen bize elektronik posta atınız team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_turkish.html.twig";
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
