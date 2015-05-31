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
            'progress' => array($this, 'block_progress'),
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
    public function block_progress($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 9
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
                // line 10
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/genequestionnaire/img/" . $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id")) . ".png")), "html", null, true);
                echo "\" >
        ";
            } else {
                // line 12
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/genequestionnaire/img/" . ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 4)) . ".png")), "html", null, true);
                echo "\" >
        ";
            }
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/img/5.png"), "html", null, true);
            echo "\" >
    ";
        }
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "
    ";
        // line 21
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 22
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
                // line 23
                echo "            <div class=\"container\">
                <p>您是否赞同对于细胞的基因编辑呢 ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 26
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
                // line 39
                echo "
            <div class=\"container\">
                <p>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 43
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
                // line 55
                echo "
            <div class=\"container\">
                <p>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
                <br><br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">
            </form>

        ";
            }
            // line 66
            echo "
    ";
        } else {
            // line 68
            echo "
        <div class=\"container\">
            <p>如果您可以安全的进行胚胎基因改造，你会使用这项技术改变什么:</p> 
        </div> 
        <form action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_ch", array("id" => $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer1\" value=\"YES\" required value=\"YES\"> 有
            <input type=\"radio\" name=\"answer1\" value=\"NO\"> 无<br><br>
            ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 6, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer2\" value=\"YES\" required value=\"YES\"> 有
            <input type=\"radio\" name=\"answer2\" value=\"NO\"> 无<br><br>
            ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 7, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer3\" value=\"YES\" required value=\"YES\"> 有
            <input type=\"radio\" name=\"answer3\" value=\"NO\"> 无<br><br>
            ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 8, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"text\" name=\"answer4\" size=\"35\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"下一个\">
        </form>

    ";
        }
        // line 89
        echo "
    <br>

    ";
        // line 92
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 93
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
                // line 94
                echo "        ";
            } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
                // line 95
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
            </form>
        ";
            } else {
                // line 99
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
            </form>
        ";
            }
            // line 103
            echo "        <br>
        <div class=\"table-responsive\">
            <b>背景...</b>
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
            // line 127
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_ch", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前面的\">
        </form>
    ";
        }
        // line 131
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
        return array (  253 => 131,  245 => 127,  219 => 103,  211 => 99,  203 => 95,  200 => 94,  197 => 93,  195 => 92,  190 => 89,  180 => 82,  174 => 79,  168 => 76,  162 => 73,  158 => 72,  152 => 68,  148 => 66,  138 => 59,  133 => 57,  129 => 55,  114 => 43,  109 => 41,  105 => 39,  89 => 26,  84 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  70 => 19,  62 => 15,  59 => 14,  53 => 12,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
