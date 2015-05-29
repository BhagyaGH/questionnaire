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

        <div class=\"container\">
            <h1>Question ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "html", null, true);
        echo "</h1>
            <p>How much do you agree with the use of genetic editing of cells in ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
        echo "</p> 
        </div> 

        ";
        // line 18
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 5)) {
            // line 19
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\">
        ";
        } else {
            // line 21
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") + 1))), "html", null, true);
            echo "\">
        ";
        }
        // line 23
        echo "            <input type=\"radio\" name=\"answer\" value=\"SA\"> Strongly Agree<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> Agree<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Neutral<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> Disagree<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Strongly Disagree<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> I don’t Know<br>
            <br>
            <input type=\"submit\" value=\"Submit\">
        </form>
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
        return array (  70 => 23,  64 => 21,  58 => 19,  56 => 18,  50 => 15,  46 => 14,  37 => 8,  31 => 4,  28 => 3,);
    }
}
