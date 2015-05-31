<?php

/* GeneQuestionnaireBundle:Default:question_japanese.html.twig */
class __TwigTemplate_30246756e625a811b9c4f051a7a0f3ca4d9c5a2942c20a5c4dd59669b794419b extends Twig_Template
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
    ";
        // line 9
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
            // line 10
            echo "        <div class=\"container\">
            <p>細胞の中で遺伝子を組み替えすることにどのくらい同意しますか ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 強く同意<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> 反対<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> 強く反対<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> 分からない<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"次\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 26
            echo "
        <div class=\"container\">
            <p>もし問題なく安全に 胚を変化させることが出来たら、以下に対し使用しますか：";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> はい<br>
            <input type=\"radio\" name=\"answer\" value=\"NO\"> いいえ<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"次\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 38
            echo "    

        <div class=\"container\">
            <p>もし問題なく安全に 胚を変化させることが出来たら、以下に対し使用しますか：";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div>
        <form action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"answer\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"次\">
        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
            // line 50
            echo "
        <div class=\"container\">
            <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 強く同意<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> 反対<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> 強く反対<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> 分からない<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"次\">

        </form>

    ";
        } else {
            // line 67
            echo "
        <div class=\"container\">
            <p>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"次\">

        </form>

    ";
        }
        // line 79
        echo "
    <br>
    
    ";
        // line 82
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
            // line 83
            echo "    ";
        } else {
            // line 84
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_jp", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"前\">
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
                    <td>致命的な遺伝病は早死に至ります。</td>
                </tr>
                <tr>
                    <td>重大な遺伝病は人の機能や生活水準に影響を及ぼします。</td>
                </tr>
                <tr>
                    <td>胚とは胎児における初期の段階です。</td>
                </tr>
                <tr>
                    <td>胚を作る遺伝子工学は、将来全ての世代が編集されたゲノムを持つことを意味しています。このことは、症病や病態が子供たちに遺伝されないことを意味します。</td>
                </tr>
                <tr>
                    <td>子供や大人に遺伝子工学を使うことは、将来全ての世代が一切編集されたゲノムを持たないことを意味しています。このことは、症病や病態が子供達に遺伝する可能性があることを意味します。</td>
                </tr>
            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:question_japanese.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 88,  165 => 84,  162 => 83,  160 => 82,  155 => 79,  144 => 71,  139 => 69,  135 => 67,  119 => 54,  114 => 52,  110 => 50,  100 => 43,  95 => 41,  90 => 38,  78 => 30,  73 => 28,  69 => 26,  53 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
