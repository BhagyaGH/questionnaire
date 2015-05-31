<?php

/* GeneQuestionnaireBundle:Default:question_chinese.html.twig */
class __TwigTemplate_e05baaba2e6821b947538fab9509b4b78ef3a81a201674dfdd3770ac46971e6c extends Twig_Template
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
    ";
        // line 9
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 10
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
                // line 11
                echo "            <div class=\"container\">
                <p>您是否赞同对于细胞的基因编辑呢 ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 非常同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 不同意<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 坚决反对<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 不知道<br>
                <br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">

            </form>

        ";
            } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
                // line 27
                echo "
            <div class=\"container\">
                <p>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 非常同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 不同意<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 坚决反对<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 不知道<br>
                <br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">
            </form>

        ";
            } else {
                // line 43
                echo "
            <div class=\"container\">
                <p>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
                <br><br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">
            </form>

        ";
            }
            // line 54
            echo "
    ";
        } else {
            // line 56
            echo "
        <div class=\"container\">
            <p>如果您可以安全的进行胚胎基因改造，你会使用这项技术改变什么:</p> 
        </div> 
        <form action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer1\" value=\"YES\" required value=\"YES\"> 有<br>
            <input type=\"radio\" name=\"answer1\" value=\"NO\"> 无<br><br>
            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 6, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer2\" value=\"YES\" required value=\"YES\"> 有<br>
            <input type=\"radio\" name=\"answer2\" value=\"NO\"> 无<br><br>
            ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 7, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer3\" value=\"YES\" required value=\"YES\"> 有<br>
            <input type=\"radio\" name=\"answer3\" value=\"NO\"> 无<br><br>
            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 8, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"text\" name=\"answer4\" size=\"35\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">
        </form>

    ";
        }
        // line 77
        echo "
    <br>

    ";
        // line 80
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 81
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
                // line 82
                echo "        ";
            } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
                // line 83
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
            </form>
        ";
            } else {
                // line 87
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
            </form>
        ";
            }
            // line 91
            echo "        <br>
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
    ";
        } else {
            // line 114
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
        </form>
    ";
        }
        // line 118
        echo "
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
        return array (  219 => 118,  211 => 114,  186 => 91,  178 => 87,  170 => 83,  167 => 82,  164 => 81,  162 => 80,  157 => 77,  147 => 70,  141 => 67,  135 => 64,  129 => 61,  125 => 60,  119 => 56,  115 => 54,  105 => 47,  100 => 45,  96 => 43,  81 => 31,  76 => 29,  72 => 27,  56 => 14,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
