<?php

/* GeneQuestionnaireBundle:Default:final_chinese.html.twig */
class __TwigTemplate_1d0c1b979af71f4d47aa281c9cafc9a8f51343631c8d66324e133ce456a8bed8 extends Twig_Template
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
        echo "    
        <div class=\"container\">
            <h4>谢谢您的参与。</h4>
            <h4>如果你想联系我們的研究团队，或获悉此工作的的结果，请发送电子邮件 team@humanediting.org</h4>
        </div>
    
";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:final_chinese.html.twig";
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
