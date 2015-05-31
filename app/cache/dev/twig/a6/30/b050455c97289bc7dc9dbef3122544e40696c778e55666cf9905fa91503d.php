<?php

/* GeneQuestionnaireBundle:Default:question_spanish.html.twig */
class __TwigTemplate_a630b050455c97289bc7dc9dbef3122544e40696c778e55666cf9905fa91503d extends Twig_Template
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
        echo "    Modificacion de genes humanos
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
            <p>¿Qué tan a favor estás del uso de edición genética de células en: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Estoy completamente de acuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> Estoy de acuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Mi opinión es neutral<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> Estoy en desacuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Estoy completamente en desacuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> No lo sé<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Siguiente\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 26
            echo "
        <div class=\"container\">
            <p>Si pudieras editar genéticamente de forma segura tu embrión, utilizarías esta tecnología para determinar: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Si<br>
            <input type=\"radio\" name=\"answer\" value=\"NO\"> No<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Siguiente\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 38
            echo "    

        <div class=\"container\">
            <p>Si pudieras editar genéticamente de forma segura tu embrión, utilizarías esta tecnología para determinar: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div>
        <form action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"answer\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Siguiente\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Estoy completamente de acuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> Estoy de acuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Mi opinión es neutral<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> Estoy en desacuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Estoy completamente en desacuerdo<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> No lo sé<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Siguiente\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Siguiente\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_es", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Anterior\">
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
                    <td>Una enfermedad genética que amenaza la vida es aquella que conduce a una muerte prematura.</td>
                </tr>
                <tr>
                    <td>Una enfermedad genética debilitante es aquella que reduce el funcionamiento o la calidad de vida de una persona.</td>
                </tr>
                <tr>
                    <td>Un embrión es un bebé nonato o feto en etapa temprana de desarrollo.</td>
                </tr>
                <tr>
                    <td>Practicar ingeniería genómica en un embrión por lo general significa que todas las generaciones futuras contendrán la versión editada del genoma. Esto significa que la enfermedad o el trastorno NO puede ser transmitido a los hijos.</td>
                </tr>
                <tr>
                    <td>Practicar ingeniería genómica en un niño o un adulto por lo general significa que todas las generaciones futuras no contendrán la versión editada del genoma. Esto significa que la enfermedad o el trastorno NO puede ser transmitido a los hijos.</td>
                </tr>
            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:question_spanish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 87,  164 => 83,  161 => 82,  159 => 81,  154 => 78,  144 => 71,  139 => 69,  135 => 67,  119 => 54,  114 => 52,  110 => 50,  100 => 43,  95 => 41,  90 => 38,  78 => 30,  73 => 28,  69 => 26,  53 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
