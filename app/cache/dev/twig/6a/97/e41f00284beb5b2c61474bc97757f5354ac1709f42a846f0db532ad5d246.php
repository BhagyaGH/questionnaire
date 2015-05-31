<?php

/* GeneQuestionnaireBundle:Default:question_turkish.html.twig */
class __TwigTemplate_6a97e41f00284beb5b2c61474bc97757f5354ac1709f42a846f0db532ad5d246 extends Twig_Template
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
        echo "
    ";
        // line 9
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 6)) {
            // line 10
            echo "        <div class=\"container\">
            <p>Hücre genetiğini düzeltme yönteminin kullanımına ne kadar katılıyorsunuz ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Kesinlikle Katılıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> Katılıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Bir fikrim yok<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> Katılmıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Kesinlikle Katılmıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> Bilmiyorum<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir sonraki\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 26
            echo "
        <div class=\"container\">
            <p>Güvenli bir şekilde embriyonuzu düzeltebilecek olsaydınız, bu tekniği aşağıdakilerden hangilerini belirlemek için kullanırdınız: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Evet<br>
            <input type=\"radio\" name=\"answer\" value=\"NO\"> Hayır<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir sonraki\">
        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 37
            echo "    

        <div class=\"container\">
            <p>Güvenli bir şekilde embriyonuzu düzeltebilecek olsaydınız, bu tekniği aşağıdakilerden hangilerini belirlemek için kullanırdınız: ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div>
        <form action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"answer\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir sonraki\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Kesinlikle Katılıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> Katılıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> Bir fikrim yok<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> Katılmıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> Kesinlikle Katılmıyorum<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> Bilmiyorum<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir sonraki\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir sonraki\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_tr", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"Bir önceki\">
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
                    <td>Hayati tehlikesi olan genetik bir rahatsızlık erken ölümlere yol açar.</td>
                </tr>
                <tr>
                    <td>Sakat bırakan genetik bir hastalık kişinin iş görmesini veya yaşam kalitesini düşürür.</td>
                </tr>
                <tr>
                    <td>Embriyo, doğmamış bir bebeğin veya ceninin erken safhasıdır.</td>
                </tr>
                <tr>
                    <td>Bir embriyonun gen mühendisliği, gelecek tüm nesillerin düzeltilmiş genoma sahip olacağı anlamına gelir. Bu da hastalığın veya sağlık sorununun o kişinin çocuklarına GEÇEMEYECEĞİ anlamına gelir.</td>
                </tr>
                <tr>
                    <td>Bir çocuğun veya bir yetişkinin gen mühendisliği, genellikle gelecek nesillerin düzeltilmiş genoma sahip OLMAYACAĞI anlamına gelir. Bu da hastalığın veya sağlık sorununun çocuklarına geçebileceği anlamına gelir.</td>
                </tr>
            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:Default:question_turkish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 87,  164 => 83,  161 => 82,  159 => 81,  154 => 78,  143 => 70,  138 => 68,  134 => 66,  118 => 53,  113 => 51,  109 => 49,  99 => 42,  94 => 40,  89 => 37,  78 => 30,  73 => 28,  69 => 26,  53 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
