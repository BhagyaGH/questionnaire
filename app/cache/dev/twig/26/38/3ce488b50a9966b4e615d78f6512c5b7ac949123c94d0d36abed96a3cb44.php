<?php

/* GeneQuestionnaireBundle:Default:index_hindi.html.twig */
class __TwigTemplate_26383ce488b50a9966b4e615d78f6512c5b7ac949123c94d0d36abed96a3cb44 extends Twig_Template
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
        echo "    मानव जीन संपादन
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"container\">
        <h3><strong>क्या आप करने के लिए सहमत है?</strong></h3>
        <h4><strong>मानवता को बदल सकता है कि एक तकनीक पर आपका कोई कहना है</strong></h4>

        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_hn");
        echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"सर्वेक्षण शुरू करें\">
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
        return "GeneQuestionnaireBundle:Default:index_hindi.html.twig";
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
