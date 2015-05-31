<?php

/* GeneQuestionnaireBundle:Default:question_english.html.twig */
class __TwigTemplate_ea8ace3dbf476905f5b4bc1e360cdcc695c4d6b3b3b7fcd3a519f86aaa24da8b extends Twig_Template
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
        echo "    ";
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 9
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
                // line 10
                echo "            <div class=\"container\">
                <p>How much do you agree with the use of genetic editing of cells in ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Next\">
            </form>

        ";
            } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
                // line 25
                echo "
            <div class=\"container\">
                <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Next\">

            </form>

        ";
            } else {
                // line 42
                echo "
            <div class=\"container\">
                <p>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
                echo "</p> 
            </div> 
            <form action=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\" method=\"post\">
                <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
                <br><br>
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Finish Survey\">
            </form>

        ";
            }
            // line 53
            echo "
    ";
        } else {
            // line 55
            echo "
        <div class=\"container\">
            <p>If you could safely genetically edit your embryo would you use this technology to determine:</p> 
        </div> 
        <form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer1\" value=\"YES\" required value=\"YES\"> Yes
            <input type=\"radio\" name=\"answer1\" value=\"NO\"> No<br><br>
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 6, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer2\" value=\"YES\" required value=\"YES\"> Yes
            <input type=\"radio\" name=\"answer2\" value=\"NO\"> No<br><br>
            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 7, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"radio\" name=\"answer3\" value=\"YES\" required value=\"YES\"> Yes
            <input type=\"radio\" name=\"answer3\" value=\"NO\"> No<br><br>
            ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 8, array(), "array"), "question"), "html", null, true);
            echo "<br>
            <input type=\"text\" name=\"answer4\" size=\"35\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Next\">
        </form>

    ";
        }
        // line 76
        echo "
    <br>

    ";
        // line 79
        if (((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")) == null)) {
            // line 80
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
                // line 81
                echo "        ";
            } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
                // line 82
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Back\">
            </form>
        ";
            } else {
                // line 86
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
                echo "\">
                <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Back\">
            </form>
        ";
            }
            // line 90
            echo "        <br>
        <div class=\"table-responsive\">
            <b>As background …</b>
            <table class=\"table table-striped\">
                <tbody>
                    <tr>
                        <td>A life threatening genetic disease is one that will lead to a premature death.</td>
                    </tr>
                    <tr>
                        <td>A debilitating genetic disease is one that reduces a person’s function or quality of life.</td>
                    </tr>
                    <tr>
                        <td>An embryo is an early stage of an unborn baby or foetus.</td>
                    </tr>
                    <tr>
                        <td>Genome engineering an embryo will generally mean that all future generations would have the edited version of the genome. This means the disease or condition could NOT be passed on to their children.</td>
                    </tr>
                    <tr>
                        <td>Genome engineering a child or adult will generally mean that all future generations will NOT have the edited version of the genome. This means the disease or condition could be passed on to their children.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 114
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => 5, "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Back\">
        </form>
    ";
        }
        // line 118
        echo "
";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:question_english.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 118,  210 => 114,  184 => 90,  176 => 86,  168 => 82,  165 => 81,  162 => 80,  160 => 79,  155 => 76,  145 => 69,  139 => 66,  133 => 63,  127 => 60,  123 => 59,  117 => 55,  113 => 53,  103 => 46,  98 => 44,  94 => 42,  78 => 29,  73 => 27,  69 => 25,  54 => 13,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
