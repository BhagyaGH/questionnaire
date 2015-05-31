<?php

/* GeneQuestionnaireBundle:Default:question_hindi.html.twig */
class __TwigTemplate_8e9e503883f4fb5bc9dfb6796556187dbd8aac505bd4c8c464b263e9ae417857 extends Twig_Template
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
        echo "    मानव जीन संपादन
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
            <p>आपकोशिकाओं(cell)केआनुवंशिकसंपादन(genetic editing)केउपयोगकेbaare me साथकितनेसहमतहै ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> दृढ़तापूर्वकसहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> सहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> तटस्थ<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> असहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> दृढ़तापूर्वकअसहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> मुझेनहींपता<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"अगला\">
        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") < 9)) {
            // line 25
            echo "
        <div class=\"container\">
            <p>अगरआपसुरक्षितरूपसेअपनेभ्रुणकाआनुवंशिकसंपादनकरसकतेहैतोक्याआपइसतकनीककाप्रयोगयहनिर्धारितकरनेकेलिएकरेंगे: ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div> 
        <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"YES\" required value=\"YES\"> हाँ<br>
            <input type=\"radio\" name=\"answer\" value=\"NO\"> नहीं<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"अगला\">

        </form>

    ";
        } elseif (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") == 9)) {
            // line 37
            echo "    

        <div class=\"container\">
            <p>अगरआपसुरक्षितरूपसेअपनेभ्रुणकाआनुवंशिकसंपादनकरसकतेहैतोक्याआपइसतकनीककाप्रयोगयहनिर्धारितकरनेकेलिएकरेंगे: ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question"), "html", null, true);
            echo "</p> 
        </div>
        <form action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"answer\">
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"अगला\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"radio\" name=\"answer\" value=\"SA\" required value=\"SA\"> दृढ़तापूर्वकसहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"A\"> सहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"N\"> तटस्थ<br>
            <input type=\"radio\" name=\"answer\" value=\"D\"> असहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"SD\"> दृढ़तापूर्वकअसहमत<br>
            <input type=\"radio\" name=\"answer\" value=\"IDK\"> मुझेनहींपता<br>
            <br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"अगला\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_save_answer_hn", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\" method=\"post\">
             <textarea name=\"answer\" rows=\"4\" cols=\"50\"></textarea>
            <br><br>
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"अगला\">

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gene_questionnaire_question_hn", array("id" => ($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id") - 1), "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))), "html", null, true);
            echo "\">
            <input class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"पिछला\">
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
                    <td>जीवनको भय स्वरुपआनुवांशिकबीमारी अकालमृत्युकोन्यौतादेसकतीहै| एकदुर्बलआनुवंशिकरोगव्यक्तिके जीवनकीकार्यकरनेकी क्षमताऔर गुणवत्ताकोकमकरदेताहै|</td>
                </tr>
                <tr>
                    <td>भ्रूण,अजन्मेबच्चेया गर्भ काप्रारंभिकचरण है।</td>
                </tr>
                <tr>
                    <td>एम्ब्रीओ इंजीनियरिंगजीनोमकामतलबहोगाकि भविष्यकी सब पीढ़ियाँमें जीनोमकेसंपादितसंस्करणहोगे| इसकामतलबहैयहबीमारीयाहालतउनके बच्चों तक नहीं जायेगी </td>
                </tr>
                <tr>
                    <td>एकबच्चेयावयस्क काजीनोमइंजीनियरिंगकामतलब भविष्यकिसब पीढ़ियोंमें जीनोमकेसंपादितसंस्करणनहीं आएँगे</td>
                </tr>
                <tr>
                    <td>इसकाअर्थयहहैकिइसबीमारीयाहालतउनकेबच्चोंमेंआगे जा सकती है|</td>
                </tr>
            </tbody>
        </table>
    </div>

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
        return array (  172 => 87,  164 => 83,  161 => 82,  159 => 81,  154 => 78,  143 => 70,  138 => 68,  134 => 66,  118 => 53,  113 => 51,  109 => 49,  99 => 42,  94 => 40,  89 => 37,  77 => 29,  72 => 27,  68 => 25,  53 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
