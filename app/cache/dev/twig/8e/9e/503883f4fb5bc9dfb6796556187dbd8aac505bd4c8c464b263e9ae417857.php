<?php

/* GeneQuestionnaireBundle:Default:question_hindi.html.twig */
class __TwigTemplate_8e9e503883f4fb5bc9dfb6796556187dbd8aac505bd4c8c464b263e9ae417857 extends Twig_Template
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
                <p>आपकोशिकाओं(cell)केआनुवंशिकसंपादन(genetic editing)केउपयोगकेbaare me साथकितनेसहमतहै ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> दृढ़तापूर्वकसहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> सहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> तटस्थ<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> असहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> दृढ़तापूर्वकअसहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> मुझेनहींपता<br>
                <br>
                <input type=\"submit\" value=\"अगला\">
            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 27
            echo "
            <div class=\"container\">
                <p>अगरआपसुरक्षितरूपसेअपनेभ्रुणकाआनुवंशिकसंपादनकरसकतेहैतोक्याआपइसतकनीककाप्रयोगयहनिर्धारितकरनेकेलिएकरेंगे: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div> 
            <form action=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> Yes<br>
                <input type=\"radio\" name=\"answer\" value=\"NO\"> No<br>
                <br>
                <input type=\"submit\" value=\"अगला\">

            </form>

        ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 39
            echo "    

            <div class=\"container\">
                <p>अगरआपसुरक्षितरूपसेअपनेभ्रुणकाआनुवंशिकसंपादनकरसकतेहैतोक्याआपइसतकनीककाप्रयोगयहनिर्धारितकरनेकेलिएकरेंगे: ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
            </div>
            <form action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"अगला\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> दृढ़तापूर्वकसहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"A\"> सहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"N\"> तटस्थ<br>
                <input type=\"radio\" name=\"answer\" value=\"D\"> असहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"SD\"> दृढ़तापूर्वकअसहमत<br>
                <input type=\"radio\" name=\"answer\" value=\"IDK\"> मुझेनहींपता<br>
                <br>
                <input type=\"submit\" value=\"अगला\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
                <input type=\"text\" name=\"answer\">
                <input type=\"submit\" value=\"अगला\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_hn", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
                <input type=\"submit\" value=\"पिछला\">
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
                        <td>जीवनको भय स्वरुपआनुवांशिकबीमारी  अकालमृत्युकोन्यौतादेसकतीहै| एकदुर्बलआनुवंशिकरोगव्यक्तिके  जीवनकीकार्यकरनेकी  क्षमताऔर  गुणवत्ताकोकमकरदेताहै|</td>
                    </tr>
                    <tr>
                        <td>भ्रूण,अजन्मेबच्चेया गर्भ काप्रारंभिकचरण  है।</td>
                    </tr>
                    <tr>
                        <td>एम्ब्रीओ इंजीनियरिंगजीनोमकामतलबहोगाकि  भविष्यकी  सब  पीढ़ियाँमें  जीनोमकेसंपादितसंस्करणहोगे| इसकामतलबहैयहबीमारीयाहालतउनके  बच्चों  तक नहीं जायेगी </td>
                    </tr>
                    <tr>
                        <td>एकबच्चेयावयस्क काजीनोमइंजीनियरिंगकामतलब  भविष्यकिसब  पीढ़ियोंमें  जीनोमकेसंपादितसंस्करणनहीं आएँगे</td>
                    </tr>
                    <tr>
                        <td>इसकाअर्थयहहैकिइसबीमारीयाहालतउनकेबच्चोंमेंआगे जा सकती है|</td>
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
        return "GeneQuestionnaireBundle:Default:question_hindi.html.twig";
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
