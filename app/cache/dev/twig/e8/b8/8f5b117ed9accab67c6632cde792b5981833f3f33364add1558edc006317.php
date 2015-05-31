<?php

/* GeneQuestionnaireBundle:Default:question.html.twig */
class __TwigTemplate_e8b88f5b117ed9accab67c6632cde792b5981833f3f33364add1558edc006317 extends Twig_Template
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
        <title>Human Gene Editing Questionnaire</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/genequestionnaire/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>

    <body>

        ";
        // line 13
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
            // line 14
            echo "
            <div class=\"container\">
                <p>How much do you agree with the use of genetic editing of cells in ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input type=\"submit\" value=\"Submit\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 30
            echo "
            <div class=\"container\">
                <p>If you could safely genetically edit your embryo would you use this technology to determine: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\"> Yes<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> No<br>
                <br>
                <input type=\"submit\" value=\"Submit\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 41
            echo "    

            <div class=\"container\">
                <p>If you could safely genetically edit your embryo would you use this technology to determine: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\"> Strongly Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
                <br>
                <input type=\"submit\" value=\"Submit\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
            </form>

        ";
        }
        // line 76
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
        return "GeneQuestionnaireBundle:Default:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  142 => 71,  137 => 69,  133 => 67,  118 => 55,  113 => 53,  109 => 51,  101 => 46,  96 => 44,  91 => 41,  80 => 34,  75 => 32,  71 => 30,  56 => 18,  51 => 16,  47 => 14,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}
