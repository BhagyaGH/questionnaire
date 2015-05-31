<?php

/* GeneQuestionnaireBundle:Default:question_chinese.html.twig */
class __TwigTemplate_e05baaba2e6821b947538fab9509b4b78ef3a81a201674dfdd3770ac46971e6c extends Twig_Template
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
        ";
        // line 11
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
            // line 12
            echo "            <div class=\"container\">
                <p>您是否赞同对于细胞的基因编辑呢 ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> 非常同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 不同意<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 坚决反对<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 不知道<br>
                <br>
                <input type=\"submit\" value=\"下一个\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 28
            echo "
            <div class=\"container\">
                <p>如果您可以安全的进行胚胎基因改造，你会使用这项技术改变什么: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\"> 有<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> 无<br>
                <br>
                <input type=\"submit\" value=\"下一个\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 40
            echo "    

            <div class=\"container\">
                <p>如果您可以安全的进行胚胎基因改造，你会使用这项技术改变什么: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"下一个\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
            // line 51
            echo "
            <div class=\"container\">
                <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> 非常同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 不同意<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 坚决反对<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 不知道<br>
                <br>
                <input type=\"submit\" value=\"下一个\">

            </form>

        ";
        } else {
            // line 68
            echo "
            <div class=\"container\">
                <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <br>

                <input type=\"submit\" value=\"下一个\">

            </form>

        ";
        }
        // line 81
        echo "
        ";
        // line 82
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
            // line 83
            echo "        ";
        } else {
            // line 84
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"前面的\">
            </form>
        ";
        }
        // line 88
        echo "
        <br>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <td>危及生命的遗传疾病将会导致人们的过早死亡。</td>
                    </tr>
                    <tr>
                        <td>使人衰弱. 的遗传疾病会损害人体机能，影响生活质量。</td>
                    </tr>
                    <tr>
                        <td>胚胎是婴儿和胎儿的早期形态。</td>
                    </tr>
                    <tr>
                        <td>对胚胎实行基因工程大致地意味着将来所有的下一代都将是基因工程的产物。这就意味着病症或遗传现象将不会遗传给下一代。</td>
                    </tr>
                    <tr>
                        <td>对于孩子或成人实行基因工程将意味着对下一代不会产生基因工程的产物。这就意味着疾病或遗传现象将会传给下一代。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:question_chinese.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 88,  163 => 84,  160 => 83,  158 => 82,  155 => 81,  143 => 72,  138 => 70,  134 => 68,  118 => 55,  113 => 53,  109 => 51,  100 => 45,  95 => 43,  90 => 40,  78 => 32,  73 => 30,  69 => 28,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
