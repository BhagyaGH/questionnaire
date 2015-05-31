<?php

/* GeneQuestionnaireBundle:Default:question_japanese.html.twig */
class __TwigTemplate_30246756e625a811b9c4f051a7a0f3ca4d9c5a2942c20a5c4dd59669b794419b extends Twig_Template
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
                <p>細胞の中で遺伝子を組み替えすることにどのくらい同意しますか ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 強く同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 反対<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 強く反対<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 分からない<br>
                <br>
                <input type=\"submit\" value=\"次\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 28
            echo "
            <div class=\"container\">
                <p>もし問題なく安全に 胚を変化させることが出来たら、以下に対し使用しますか：";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> はい<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> いいえ<br>
                <br>
                <input type=\"submit\" value=\"次\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 40
            echo "    

            <div class=\"container\">
                <p>もし問題なく安全に 胚を変化させることが出来たら、以下に対し使用しますか：";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"次\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> 強く同意<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> 同意<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> 中立<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> 反対<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> 強く反対<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> 分からない<br>
                <br>
                <input type=\"submit\" value=\"次\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_jp", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <br>

                <input type=\"submit\" value=\"次\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_jp", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"前\">
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
    </div>
</div>

</body>

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
        return array (  171 => 88,  163 => 84,  160 => 83,  158 => 82,  155 => 81,  143 => 72,  138 => 70,  134 => 68,  118 => 55,  113 => 53,  109 => 51,  100 => 45,  95 => 43,  90 => 40,  78 => 32,  73 => 30,  69 => 28,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
