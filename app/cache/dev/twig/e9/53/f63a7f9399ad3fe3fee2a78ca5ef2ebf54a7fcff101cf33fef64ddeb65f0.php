<?php

/* GeneQuestionnaireBundle:Default:question_french.html.twig */
class __TwigTemplate_e953f63a7f9399ad3fe3fee2a78ca5ef2ebf54a7fcff101cf33fef64ddeb65f0 extends Twig_Template
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
        echo "    Génie Génétique
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
            <p>À quel point êtes-vous d’accord avec la manipulation génétique des cellules ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Entièrement d’accord<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> D’accord<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Neutre<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> En désaccord<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Particulièrement en désaccord<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> Je ne sais pas<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Next\">
        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 25
            echo "
        <div class=\"container\">
            <p>Si vous pouviez modifier génétiquement votre fœtus en toute sécurité, utiliseriez-vous cette technologie pour: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Oui<br>
            <input type=\"radio\" name=\"answer\" value=\"NO\"> Non<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Suivant\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 37
            echo "    

        <div class=\"container\">
            <p>Si vous pouviez modifier génétiquement votre fœtus en toute sécurité, utiliseriez-vous cette technologie pour: ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div>
        <form action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"answer\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Suivant\">
        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 10)) {
            // line 49
            echo "
        <div class=\"container\">
            <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Entièrement d’accord<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> D’accord<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Neutre<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> En désaccord<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Particulièrement en désaccord<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> Je ne sais pas<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Suivant\">

        </form>

    ";
        } else {
            // line 66
            echo "
        <div class=\"container\">
            <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_fr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
             <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Suivant\">

        </form>

    ";
        }
        // line 78
        echo "
    <br>
    
    ";
        // line 81
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_fr", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Précédent\">
        </form>
    ";
        }
        // line 87
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
        return array (  172 => 87,  164 => 83,  161 => 82,  159 => 81,  154 => 78,  143 => 70,  138 => 68,  134 => 66,  118 => 53,  113 => 51,  109 => 49,  99 => 42,  94 => 40,  89 => 37,  77 => 29,  72 => 27,  68 => 25,  53 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
