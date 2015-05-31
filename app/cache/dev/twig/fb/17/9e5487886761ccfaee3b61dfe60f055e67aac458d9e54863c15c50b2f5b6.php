<?php

/* GeneQuestionnaireBundle:Default:final_japanese.html.twig */
class __TwigTemplate_fb179e5487886761ccfaee3b61dfe60f055e67aac458d9e54863c15c50b2f5b6 extends Twig_Template
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
        echo "    
        <div class=\"container\">
            <h4>ご協力ありがとうございました。</h4>
            <h4>研究チームへのご連絡、このアンケートの結果の通知を希望の場合はメールでご連絡ください team@humanediting.org</h4>
        </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_japanese.html.twig";
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
