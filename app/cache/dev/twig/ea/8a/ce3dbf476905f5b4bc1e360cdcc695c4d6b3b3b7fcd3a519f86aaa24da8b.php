<?php

/* GeneQuestionnaireBundle:Default:question_english.html.twig */
class __TwigTemplate_ea8ace3dbf476905f5b4bc1e360cdcc695c4d6b3b3b7fcd3a519f86aaa24da8b extends Twig_Template
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
                <p>How much do you agree with the use of genetic editing of cells in ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input type=\"submit\" value=\"Next\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 27
            echo "
            <div class=\"container\">
                <p>If you could safely genetically edit your embryo would you use this technology to determine: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\"> Yes<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> No<br>
                <br>
                <input type=\"submit\" value=\"Next\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 39
            echo "    

            <div class=\"container\">
                <p>If you could safely genetically edit your embryo would you use this technology to determine: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Next\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input type=\"submit\" value=\"Next\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Next\">

            </form>

        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
            // line 80
            echo "        ";
        } else {
            // line 81
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"Back\">
            </form>
        ";
        }
        // line 85
        echo "
        <br>

        <div class=\"table-responsive\">
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
    </div>
</div>

</body>

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
        return array (  168 => 85,  160 => 81,  157 => 80,  155 => 79,  152 => 78,  142 => 71,  137 => 69,  133 => 67,  117 => 54,  112 => 52,  108 => 50,  99 => 44,  94 => 42,  89 => 39,  77 => 31,  72 => 29,  68 => 27,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
