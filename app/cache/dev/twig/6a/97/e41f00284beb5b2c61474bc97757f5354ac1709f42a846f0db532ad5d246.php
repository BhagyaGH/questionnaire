<?php

/* GeneQuestionnaireBundle:Default:question_turkish.html.twig */
class __TwigTemplate_6a97e41f00284beb5b2c61474bc97757f5354ac1709f42a846f0db532ad5d246 extends Twig_Template
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
                <p>Hücre genetiğini düzeltme yönteminin kullanımına ne kadar katılıyorsunuz ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Kesinlikle Katılıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Katılıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Bir fikrim yok<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Katılmıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Kesinlikle Katılmıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> Bilmiyorum<br>
                <br>
                <input type=\"submit\" value=\"Bir sonraki\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 28
            echo "
            <div class=\"container\">
                <p>Güvenli bir şekilde embriyonuzu düzeltebilecek olsaydınız, bu tekniği aşağıdakilerden hangilerini belirlemek için kullanırdınız: ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Evet<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> Hayır<br>
                <br>
                <input type=\"submit\" value=\"Bir sonraki\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 40
            echo "    

            <div class=\"container\">
                <p>Güvenli bir şekilde embriyonuzu düzeltebilecek olsaydınız, bu tekniği aşağıdakilerden hangilerini belirlemek için kullanırdınız: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Bir sonraki\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> Kesinlikle Katılıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> Katılıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> Bir fikrim yok<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> Katılmıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> Kesinlikle Katılmıyorum<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> Bilmiyorum<br>
                <br>
                <input type=\"submit\" value=\"Bir sonraki\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_tr", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"Bir sonraki\">

            </form>

        ";
        }
        // line 79
        echo "
        ";
        // line 80
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 1)) {
            // line 81
            echo "        ";
        } else {
            // line 82
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_tr", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"Bir önceki\">
            </form>
        ";
        }
        // line 86
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
    </div>
</div>

</body>

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
        return array (  169 => 86,  161 => 82,  158 => 81,  156 => 80,  153 => 79,  143 => 72,  138 => 70,  134 => 68,  118 => 55,  113 => 53,  109 => 51,  100 => 45,  95 => 43,  90 => 40,  78 => 32,  73 => 30,  69 => 28,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,);
    }
}
