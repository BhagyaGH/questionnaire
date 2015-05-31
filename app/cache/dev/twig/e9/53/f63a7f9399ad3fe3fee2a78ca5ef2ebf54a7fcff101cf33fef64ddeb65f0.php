<?php

/* GeneQuestionnaireBundle:Default:question_french.html.twig */
class __TwigTemplate_e953f63a7f9399ad3fe3fee2a78ca5ef2ebf54a7fcff101cf33fef64ddeb65f0 extends Twig_Template
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
                <p>À quel point êtes-vous d’accord avec la manipulation génétique des cellules ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Entièrement d’accord<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> D’accord<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutre<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> En désaccord<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Particulièrement en désaccord<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> Je ne sais pas<br>
                <br>
                <input type=\"submit\" value=\"Next\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 27
            echo "
            <div class=\"container\">
                <p>Si vous pouviez modifier génétiquement votre fœtus en toute sécurité, utiliseriez-vous cette technologie pour: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Oui<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> Non<br>
                <br>
                <input type=\"submit\" value=\"Suivant\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 39
            echo "    

            <div class=\"container\">
                <p>Si vous pouviez modifier génétiquement votre fœtus en toute sécurité, utiliseriez-vous cette technologie pour: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Suivant\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Entièrement d’accord<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> D’accord<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Neutre<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> En désaccord<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Particulièrement en désaccord<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> Je ne sais pas<br>
                <br>
                <input type=\"submit\" value=\"Suivant\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Suivant\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_fr", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"Précédent\">
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
                        <td>Une maladie génétique dangereuse est une maladie pouvant mener à une mort prématurée.</td>
                    </tr>
                    <tr>
                        <td>Une maladie génétique handicapante est une maladie qui réduit les fonctionnalités d’une personne ou sa qualité de vie.</td>
                    </tr>
                    <tr>
                        <td>Un embryon est le stage embryonnaire d’un fœtus.</td>
                    </tr>
                    <tr>
                        <td>L’ingénierie génétique sur un embryon aura généralement pour conséquence la version modifiée de ces gènes pour les générations futures. Ceci signifie que la maladie ou le problème ne sera PAS transmis aux enfants.</td>
                    </tr>
                    <tr>
                        <td>L’ingénierie génétique sur un enfant ou un adulte aura généralement pour conséquence de ne PAS transmettre aux générations futures la version éditée de ce gène. Ceci signifie que ni la maladie ni le problème ne sera transmis à leurs enfants.</td>
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
        return "GeneQuestionnaireBundle:Default:question_french.html.twig";
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
