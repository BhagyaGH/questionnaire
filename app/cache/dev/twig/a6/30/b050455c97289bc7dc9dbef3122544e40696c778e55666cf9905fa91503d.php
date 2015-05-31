<?php

/* GeneQuestionnaireBundle:Default:question_spanish.html.twig */
class __TwigTemplate_a630b050455c97289bc7dc9dbef3122544e40696c778e55666cf9905fa91503d extends Twig_Template
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
                <p>¿Qué tan a favor estás del uso de edición genética de células en: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Estoy completamente de acuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Estoy de acuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Mi opinión es neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Estoy en desacuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Estoy completamente en desacuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> No lo sé<br>
                <br>
                <input type=\"submit\" value=\"Siguiente\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 28
            echo "
            <div class=\"container\">
                <p>Si pudieras editar genéticamente de forma segura tu embrión, utilizarías esta tecnología para determinar: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Si<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> No<br>
                <br>
                <input type=\"submit\" value=\"Siguiente\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 40
            echo "    

            <div class=\"container\">
                <p>Si pudieras editar genéticamente de forma segura tu embrión, utilizarías esta tecnología para determinar: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Siguiente\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Estoy completamente de acuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Estoy de acuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Mi opinión es neutral<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Estoy en desacuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Estoy completamente en desacuerdo<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> No lo sé<br>
                <br>
                <input type=\"submit\" value=\"Siguiente\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_es", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <br>

                <input type=\"submit\" value=\"Siguiente\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_es", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"Anterior\">
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
    </div>
</div>

</body>

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
        return array (  171 => 88,  163 => 84,  160 => 83,  158 => 82,  155 => 81,  143 => 72,  138 => 70,  134 => 68,  118 => 55,  113 => 53,  109 => 51,  100 => 45,  95 => 43,  90 => 40,  78 => 32,  73 => 30,  69 => 28,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
