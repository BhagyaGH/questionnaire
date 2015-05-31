<?php

/* GeneQuestionnaireBundle:User:user.html.twig */
class __TwigTemplate_7409d7e62079e84d159ec01ef52995837b6597ae360e672256aecbdcadc729b1 extends Twig_Template
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
        <h2>Tell us about yourself...</h2>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gene_questionnaire_user_save");
        echo "\" method=\"post\">
            <div>
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 0, array(), "array"), "question"), "html", null, true);
        echo "
                <br>
                <select name=\"sex\" onclick=\"show1()\">
                    <option value=\"M\">Male</option>
                    <option value=\"F\">Female</option>
                </select>
            </div>
            <div id=\"birthyear\" style=\"display:none;\">    
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 1, array(), "array"), "question"), "html", null, true);
        echo "
                <br>
                <select id=\"year\" name=\"year\" onclick=\"show2()\">
                    <option value=\"2007\">2015</option>
                    <option value=\"2006\">2014</option>
                    <option value=\"2005\">2013</option>
                    <option value=\"2004\">2012</option>
                    <option value=\"2003\">2011</option>
                    <option value=\"2002\">2010</option>
                    <option value=\"2001\">2009</option>
                    <option value=\"2000\">2008</option>
                    <option value=\"2007\">2007</option>
                    <option value=\"2006\">2006</option>
                    <option value=\"2005\">2005</option>
                    <option value=\"2004\">2004</option>
                    <option value=\"2003\">2003</option>
                    <option value=\"2002\">2002</option>
                    <option value=\"2001\">2001</option>
                    <option value=\"2000\">2000</option>
                    <option value=\"1999\">1999</option>
                    <option value=\"1998\">1998</option>
                    <option value=\"1997\">1997</option>
                    <option value=\"1996\">1996</option>
                    <option value=\"1995\">1995</option>
                    <option value=\"1994\">1994</option>
                    <option value=\"1993\">1993</option>
                    <option value=\"1992\">1992</option>
                    <option value=\"1991\">1991</option>
                    <option value=\"1990\">1990</option>
                    <option value=\"1989\">1989</option>
                    <option value=\"1988\">1988</option>
                    <option value=\"1987\">1987</option>
                    <option value=\"1986\">1986</option>
                    <option value=\"1985\">1985</option>
                    <option value=\"1984\">1984</option>
                    <option value=\"1983\">1983</option>
                    <option value=\"1982\">1982</option>
                    <option value=\"1981\">1981</option>
                    <option value=\"1980\">1980</option>
                    <option value=\"1979\">1979</option>
                    <option value=\"1978\">1978</option>
                    <option value=\"1977\">1977</option>
                    <option value=\"1976\">1976</option>
                    <option value=\"1975\">1975</option>
                    <option value=\"1974\">1974</option>
                    <option value=\"1973\">1973</option>
                    <option value=\"1972\">1972</option>
                    <option value=\"1971\">1971</option>
                    <option value=\"1970\">1970</option>
                    <option value=\"1969\">1969</option>
                    <option value=\"1968\">1968</option>
                    <option value=\"1967\">1967</option>
                    <option value=\"1966\">1966</option>
                    <option value=\"1965\">1965</option>
                    <option value=\"1964\">1964</option>
                    <option value=\"1963\">1963</option>
                    <option value=\"1962\">1962</option>
                    <option value=\"1961\">1961</option>
                    <option value=\"1960\">1960</option>
                    <option value=\"1959\">1959</option>
                    <option value=\"1958\">1958</option>
                    <option value=\"1957\">1957</option>
                    <option value=\"1956\">1956</option>
                    <option value=\"1955\">1955</option>
                    <option value=\"1954\">1954</option>
                    <option value=\"1953\">1953</option>
                    <option value=\"1952\">1952</option>
                    <option value=\"1951\">1951</option>
                    <option value=\"1950\">1950</option>
                    <option value=\"1949\">1949</option>
                    <option value=\"1948\">1948</option>
                    <option value=\"1947\">1947</option>
                    <option value=\"1946\">1946</option>
                    <option value=\"1945\">1945</option>
                    <option value=\"1944\">1944</option>
                    <option value=\"1943\">1943</option>
                    <option value=\"1942\">1942</option>
                    <option value=\"1941\">1941</option>
                    <option value=\"1940\">1940</option>
                    <option value=\"1939\">1939</option>
                    <option value=\"1938\">1938</option>
                    <option value=\"1937\">1937</option>
                    <option value=\"1936\">1936</option>
                    <option value=\"1935\">1935</option>
                    <option value=\"1934\">1934</option>
                    <option value=\"1933\">1933</option>
                    <option value=\"1932\">1932</option>
                    <option value=\"1931\">1931</option>
                    <option value=\"1930\">1930</option>
                    <option value=\"1929\">1929</option>
                    <option value=\"1928\">1928</option>
                    <option value=\"1927\">1927</option>
                    <option value=\"1926\">1926</option>
                    <option value=\"1925\">1925</option>
                    <option value=\"1924\">1924</option>
                    <option value=\"1923\">1923</option>
                    <option value=\"1922\">1922</option>
                    <option value=\"1921\">1921</option>
                    <option value=\"1920\">1920</option>
                    <option value=\"1919\">1919</option>
                    <option value=\"1918\">1918</option>
                    <option value=\"1917\">1917</option>
                    <option value=\"1916\">1916</option>
                    <option value=\"1915\">1915</option>
                    <option value=\"1914\">1914</option>
                    <option value=\"1913\">1913</option>
                    <option value=\"1912\">1912</option>
                    <option value=\"1911\">1911</option>
                    <option value=\"1910\">1910</option>
                    <option value=\"1909\">1909</option>
                    <option value=\"1908\">1908</option>
                    <option value=\"1907\">1907</option>
                    <option value=\"1906\">1906</option>
                    <option value=\"1905\">1905</option>
                    <option value=\"1904\">1904</option>
                    <option value=\"1903\">1903</option>
                    <option value=\"1902\">1902</option>
                    <option value=\"1901\">1901</option>
                    <option value=\"1900\">1900</option>
                </select>
            </div>

            <div id=\"country\" style=\"display:none;\">
                ";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 2, array(), "array"), "question"), "html", null, true);
        echo "
                <br>
                <select name=\"country\" onclick=\"show3()\">
                    <option value=\"AU\">Australia</option>
                    <option value=\"BE\">Belgium</option>
                    <option value=\"CA\">Canada</option>
                    <option value=\"CN\">China</option>
                    <option value=\"DE\">Germany</option>
                    <option value=\"ES\">Spain</option>
                    <option value=\"FR\">France</option>
                    <option value=\"GB\">United Kingdom</option>
                    <option value=\"GR\">Greece</option>
                    <option value=\"HK\">Hong Kong</option>
                    <option value=\"ID\">Indonesia</option>
                    <option value=\"IE\">Ireland</option>
                    <option value=\"IL\">Israel</option>
                    <option value=\"IN\">India</option>
                    <option value=\"IT\">Italy</option>
                    <option value=\"JP\">Japan</option>
                    <option value=\"NZ\">New Zealand</option>
                    <option value=\"PE\">Peru</option>
                    <option value=\"PT\">Portugal</option>
                    <option value=\"SE\">Sweden</option>
                    <option value=\"SG\">Singapore</option>
                    <option value=\"TH\">Thailand</option>
                    <option value=\"TR\">Turkey</option>
                    <option value=\"US\">United States of America</option>
                    <option value=\"ZA\">South Africa</option>
                    <option value=\"AD\">Andorra</option>
                    <option value=\"AE\">United Arab Emirates</option>
                    <option value=\"AF\">Afghanistan</option>
                    <option value=\"AG\">Antigua and Barbuda</option>
                    <option value=\"AI\">Anguilla</option>
                    <option value=\"AL\">Albania</option>
                    <option value=\"AM\">Armenia</option>
                    <option value=\"AO\">Angola</option>
                    <option value=\"AQ\">Antarctica</option>
                    <option value=\"AR\">Argentina</option>
                    <option value=\"AS\">American Samoa</option>
                    <option value=\"AT\">Austria</option>
                    <option value=\"AW\">Aruba</option>
                    <option value=\"AZ\">Azerbaijan</option>
                    <option value=\"BA\">Bosnia and Herzegovina</option>
                    <option value=\"BB\">Barbados</option>
                    <option value=\"BD\">Bangladesh</option>
                    <option value=\"BF\">Burkina Faso</option>
                    <option value=\"BG\">Bulgaria</option>
                    <option value=\"BH\">Bahrain</option>
                    <option value=\"BI\">Burundi</option>
                    <option value=\"BJ\">Benin</option>
                    <option value=\"BL\">Saint Barthelemy</option>
                    <option value=\"BM\">Bermuda</option>
                    <option value=\"BN\">Brunei</option>
                    <option value=\"BO\">Bolivia</option>
                    <option value=\"BS\">Bahamas, The</option>
                    <option value=\"BT\">Bhutan</option>
                    <option value=\"BV\">Bouvet Island</option>
                    <option value=\"BW\">Botswana</option>
                    <option value=\"BY\">Belarus</option>
                    <option value=\"BZ\">Belize</option>
                    <option value=\"CC\">Cocos (Keeling) Islands</option>
                    <option value=\"CD\">Congo, Democratic Republic of the</option>
                    <option value=\"CF\">Central African Republic</option>
                    <option value=\"CG\">Congo, Republic of the</option>
                    <option value=\"CH\">Switzerland</option>
                    <option value=\"CI\">Cote d'Ivoire</option>
                    <option value=\"CK\">Cook Islands</option>
                    <option value=\"CL\">Chile</option>
                    <option value=\"CM\">Cameroon</option>
                    <option value=\"CO\">Colombia</option>
                    <option value=\"CR\">Costa Rica</option>
                    <option value=\"CU\">Cuba</option>
                    <option value=\"CV\">Cape Verde</option>
                    <option value=\"CW\">Curacao</option>
                    <option value=\"CX\">Christmas Island</option>
                    <option value=\"CY\">Cyprus</option>
                    <option value=\"CZ\">Czech Republic</option>
                    <option value=\"DJ\">Djibouti</option>
                    <option value=\"DK\">Denmark</option>
                    <option value=\"DM\">Dominica</option>
                    <option value=\"DO\">Dominican Republic</option>
                    <option value=\"DZ\">Algeria</option>
                    <option value=\"EC\">Ecuador</option>
                    <option value=\"EE\">Estonia</option>
                    <option value=\"EG\">Egypt</option>
                    <option value=\"EH\">Western Sahara</option>
                    <option value=\"ER\">Eritrea</option>
                    <option value=\"ET\">Ethiopia</option>
                    <option value=\"FI\">Finland</option>
                    <option value=\"FJ\">Fiji</option>
                    <option value=\"FK\">Falkland Islands (Islas Malvinas)</option>
                    <option value=\"FM\">Micronesia, Federated States of</option>
                    <option value=\"FO\">Faroe Islands</option>
                    <option value=\"FX\">France, Metropolitan</option>
                    <option value=\"GA\">Gabon</option>
                    <option value=\"GD\">Grenada</option>
                    <option value=\"GE\">Georgia</option>
                    <option value=\"GF\">French Guiana</option>
                    <option value=\"GG\">Guernsey</option>
                    <option value=\"GH\">Ghana</option>
                    <option value=\"GI\">Gibraltar</option>
                    <option value=\"GL\">Greenland</option>
                    <option value=\"GM\">Gambia, The</option>
                    <option value=\"GN\">Guinea</option>
                    <option value=\"GP\">Guadeloupe</option>
                    <option value=\"GQ\">Equatorial Guinea</option>
                    <option value=\"GS\">South Georgia and the Islands</option>
                    <option value=\"GT\">Guatemala</option>
                    <option value=\"GU\">Guam</option>
                    <option value=\"GW\">Guinea-Bissau</option>
                    <option value=\"GY\">Guyana</option>
                    <option value=\"HM\">Heard Island and McDonald Islands</option>
                    <option value=\"HN\">Honduras</option>
                    <option value=\"HR\">Croatia</option>
                    <option value=\"HT\">Haiti</option>
                    <option value=\"HU\">Hungary</option>
                    <option value=\"IM\">Isle of Man</option>
                    <option value=\"IO\">British Indian Ocean Territory</option>
                    <option value=\"IQ\">Iraq</option>
                    <option value=\"IR\">Iran</option>
                    <option value=\"IS\">Iceland</option>
                    <option value=\"JE\">Jersey</option>
                    <option value=\"JM\">Jamaica</option>
                    <option value=\"JO\">Jordan</option>
                    <option value=\"KE\">Kenya</option>
                    <option value=\"KG\">Kyrgyzstan</option>
                    <option value=\"KH\">Cambodia</option>
                    <option value=\"KI\">Kiribati</option>
                    <option value=\"KM\">Comoros</option>
                    <option value=\"KN\">Saint Kitts and Nevis</option>
                    <option value=\"KP\">Korea, North</option>
                    <option value=\"KR\">Korea, South</option>
                    <option value=\"KW\">Kuwait</option>
                    <option value=\"KY\">Cayman Islands</option>
                    <option value=\"KZ\">Kazakhstan</option>
                    <option value=\"LA\">Laos</option>
                    <option value=\"LB\">Lebanon</option>
                    <option value=\"LC\">Saint Lucia</option>
                    <option value=\"LI\">Liechtenstein</option>
                    <option value=\"LK\">Sri Lanka</option>
                    <option value=\"LR\">Liberia</option>
                    <option value=\"LS\">Lesotho</option>
                    <option value=\"LT\">Lithuania</option>
                    <option value=\"LU\">Luxembourg</option>
                    <option value=\"LV\">Latvia</option>
                    <option value=\"LY\">Libya</option>
                    <option value=\"MA\">Morocco</option>
                    <option value=\"MC\">Monaco</option>
                    <option value=\"MD\">Moldova</option>
                    <option value=\"ME\">Montenegro</option>
                    <option value=\"MF\">Saint Martin</option>
                    <option value=\"MG\">Madagascar</option>
                    <option value=\"MH\">Marshall Islands</option>
                    <option value=\"MK\">Macedonia</option>
                    <option value=\"ML\">Mali</option>
                    <option value=\"MM\">Burma</option>
                    <option value=\"MN\">Mongolia</option>
                    <option value=\"MO\">Macau</option>
                    <option value=\"MP\">Northern Mariana Islands</option>
                    <option value=\"MQ\">Martinique</option>
                    <option value=\"MR\">Mauritania</option>
                    <option value=\"MS\">Montserrat</option>
                    <option value=\"MT\">Malta</option>
                    <option value=\"MU\">Mauritius</option>
                    <option value=\"MV\">Maldives</option>
                    <option value=\"MW\">Malawi</option>
                    <option value=\"MX\">Mexico</option>
                    <option value=\"MY\">Malaysia</option>
                    <option value=\"MZ\">Mozambique</option>
                    <option value=\"NA\">Namibia</option>
                    <option value=\"NC\">New Caledonia</option>
                    <option value=\"NE\">Niger</option>
                    <option value=\"NF\">Norfolk Island</option>
                    <option value=\"NG\">Nigeria</option>
                    <option value=\"NI\">Nicaragua</option>
                    <option value=\"NL\">Netherlands</option>
                    <option value=\"NO\">Norway</option>
                    <option value=\"NP\">Nepal</option>
                    <option value=\"NR\">Nauru</option>
                    <option value=\"NU\">Niue</option>
                    <option value=\"OM\">Oman</option>
                    <option value=\"PA\">Panama</option>
                    <option value=\"PF\">French Polynesia</option>
                    <option value=\"PG\">Papua New Guinea</option>
                    <option value=\"PH\">Philippines</option>
                    <option value=\"PK\">Pakistan</option>
                    <option value=\"PL\">Poland</option>
                    <option value=\"PM\">Saint Pierre and Miquelon</option>
                    <option value=\"PN\">Pitcairn Islands</option>
                    <option value=\"PR\">Puerto Rico</option>
                    <option value=\"PS\">Gaza Strip</option>
                    <option value=\"PS\">West Bank</option>
                    <option value=\"PW\">Palau</option>
                    <option value=\"PY\">Paraguay</option>
                    <option value=\"QA\">Qatar</option>
                    <option value=\"RE\">Reunion</option>
                    <option value=\"RO\">Romania</option>
                    <option value=\"RS\">Serbia</option>
                    <option value=\"RU\">Russia</option>
                    <option value=\"RW\">Rwanda</option>
                    <option value=\"SA\">Saudi Arabia</option>
                    <option value=\"SB\">Solomon Islands</option>
                    <option value=\"SC\">Seychelles</option>
                    <option value=\"SD\">Sudan</option>
                    <option value=\"SH\">Saint Helena, Ascension, and Tristan da Cunha</option>
                    <option value=\"SI\">Slovenia</option>
                    <option value=\"SJ\">Svalbard</option>
                    <option value=\"SK\">Slovakia</option>
                    <option value=\"SL\">Sierra Leone</option>
                    <option value=\"SM\">San Marino</option>
                    <option value=\"SN\">Senegal</option>
                    <option value=\"SO\">Somalia</option>
                    <option value=\"SR\">Suriname</option>
                    <option value=\"SS\">South Sudan</option>
                    <option value=\"ST\">Sao Tome and Principe</option>
                    <option value=\"SV\">El Salvador</option>
                    <option value=\"SX\">Sint Maarten</option>
                    <option value=\"SY\">Syria</option>
                    <option value=\"SZ\">Swaziland</option>
                    <option value=\"TC\">Turks and Caicos Islands</option>
                    <option value=\"TD\">Chad</option>
                    <option value=\"TF\">French Southern and Antarctic Lands</option>
                    <option value=\"TG\">Togo</option>
                    <option value=\"TJ\">Tajikistan</option>
                    <option value=\"TK\">Tokelau</option>
                    <option value=\"TL\">Timor-Leste</option>
                    <option value=\"TM\">Turkmenistan</option>
                    <option value=\"TN\">Tunisia</option>
                    <option value=\"TO\">Tonga</option>
                    <option value=\"TT\">Trinidad and Tobago</option>
                    <option value=\"TV\">Tuvalu</option>
                    <option value=\"TW\">Taiwan</option>
                    <option value=\"TZ\">Tanzania</option>
                    <option value=\"UA\">Ukraine</option>
                    <option value=\"UG\">Uganda</option>
                    <option value=\"UM\">United States Minor Outlying Islands</option>
                    <option value=\"UY\">Uruguay</option>
                    <option value=\"UZ\">Uzbekistan</option>
                    <option value=\"VA\">Holy See (Vatican City)</option>
                    <option value=\"VC\">Saint Vincent and the Grenadines</option>
                    <option value=\"VE\">Venezuela</option>
                    <option value=\"VG\">British Virgin Islands</option>
                    <option value=\"VI\">Virgin Islands</option>
                    <option value=\"VN\">Vietnam</option>
                    <option value=\"VU\">Vanuatu</option>
                    <option value=\"WF\">Wallis and Futuna</option>
                    <option value=\"WS\">Samoa</option>
                    <option value=\"XK\">Kosovo</option>
                    <option value=\"YE\">Yemen</option>
                    <option value=\"YT\">Mayotte</option>
                    <option value=\"ZM\">Zambia</option>
                    <option value=\"ZW\">Zimbabwe</option>
                </select>
            </div>

            <div id=\"ethnicity\" style=\"display:none;\">
                ";
        // line 401
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 3, array(), "array"), "question"), "html", null, true);
        echo "
                <br>
                <select name=\"ethnicity\" onclick=\"show4()\">
                    <option value=\"Mixed Race\">Mixed Race</option>
                    <option value=\"African/African American\">African/African American</option>
                    <option value=\"Asian Indian\">Asian Indian</option>
                    <option value=\"Caucasian (European)\">Caucasian (European)</option>
                    <option value=\"Caucasian (Middle East)\">Caucasian (Middle East)</option>
                    <option value=\"Hispanic, Latino or Spanish\">Hispanic, Latino or Spanish</option>
                    <option value=\"Indigenous Australian\">Indigenous Australian</option>
                    <option value=\"Native American\">Native American</option>
                    <option value=\"North East Asian (Mongol, Tibetan, Korean, Japanese, etc)\">North East Asian (Mongol, Tibetan, Korean, Japanese, etc)</option>
                    <option value=\"Pacific (Polynesian, micronesian, etc)\">Pacific (Polynesian, micronesian, etc)</option>                
                    <option value=\"South East Asian (Chinese, Thai, Malay, Filipino, etc)\">South East Asian (Chinese, Thai, Malay, Filipino, etc)</option>
                </select>
            </div>

            <div id=\"religious\" style=\"display:none;\">
                ";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 4, array(), "array"), "question"), "html", null, true);
        echo "
                <br>

                <input type=\"radio\" name=\"isRel\" id=\"isRel\" value=\"no\" onclick=\"show4_no()\">No
                <br>
                <input type=\"radio\" name=\"isRel\" id=\"isRel\" value=\"yes\" onclick=\"show4_yes()\">Yes

                <div id=\"religious_yes\" style=\"display:none;\">
                    <select name=\"rel\" id=\"rel\" onclick=\"show4_5()\">
                        <option value=\"Christian - Protestant/Anglican\">Christian - Protestant/Anglican</option>
                        <option value=\"Christian - Catholic\">Christian - Catholic</option>
                        <option value=\"Christian - Other\">Christian - Other</option>
                        <option value=\"Muslim\">Muslim</option>
                        <option value=\"Jewish\">Jewish</option>
                        <option value=\"Buddhist\">Buddhist</option>
                        <option value=\"Hindu\">Hindu</option>
                        <option value=\"Shinto\">Shinto</option>
                        <option value=\"Taoism\">Taoism</option>
                        <option value=\"Confucianism\">Confucianism</option>                
                        <option value=\"Sikhism\">Sikhism</option>
                        <option value=\"Jainism\">Jainism</option>
                        <option value=\"Druze\">Druze</option>
                        <option value=\"Other\">Other</option>
                    </select>
                    <input type=\"text\" name=\"otherRel\" id=\"otherRel\" style=\"display:none;\">                
                </div>
            </div>

            <div id=\"education\" style=\"display:none;\">
                ";
        // line 448
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 5, array(), "array"), "question"), "html", null, true);
        echo "
                <br>
                <select name=\"edu\" id=\"edu\" onclick=\"show6()\">
                    <option value=\"No formal schooling\">No formal schooling</option>
                    <option value=\"Finished primary school\">Finished primary school</option>
                    <option value=\"Finished high school\">Finished high school</option>
                    <option value=\"Finished a course following school\">Finished a course following school</option>
                    <option value=\"Finished undergraduate university degree\">Finished undergraduate university degree</option>
                    <option value=\"Finished postgraduate university degree\">Finished postgraduate university degree</option>
                </select>
            </div>

            <div id=\"health\" style=\"display:none;\">
                ";
        // line 461
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 6, array(), "array"), "question"), "html", null, true);
        echo "
                <br>

                <input type=\"radio\" name=\"isHealth\" id=\"isHealth\" value=\"no\" onclick=\"show6_no()\">No
                <br>
                <input type=\"radio\" name=\"isHealth\" id=\"isHealth\" value=\"yes\" onclick=\"show6_yes()\">Yes

                <div id=\"health_yes\" style=\"display:none;\">
                    <select name=\"heal_yes\" id=\"heal_yes\" onclick=\"show6_7()\">
                        <option value=\"Medical Doctor\">Medical Doctor</option>
                        <option value=\"Scientific Researcher\">Scientific Researcher</option>
                        <option value=\"Nurse\">Nurse</option>
                        <option value=\"Allied health worker\">Allied health worker</option>
                        <option value=\"Other role at hospital/medical centre\">Other role at hospital/medical centre</option>
                        <option value=\"Other\">Other</option>
                    </select>
                    <input type=\"text\" name=\"otherHeal\" id=\"otherHeal\" style=\"display:none;\">
                </div>
            </div>

            <div id=\"gene_eng\" style=\"display:none;\">
                ";
        // line 482
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 7, array(), "array"), "question"), "html", null, true);
        echo "
                <br>

                <input type=\"radio\" name=\"gene\" id=\"gene\" value=\"I have never heard of it\" onclick=\"show8()\">I have never heard of it
                <br>
                <input type=\"radio\" name=\"gene\" id=\"gene\" value=\"I have heard a little about it\" onclick=\"show8()\">I have heard a little about it
                <br>
                <input type=\"radio\" name=\"gene\" id=\"gene\" value=\"I have heard a lot about it\" onclick=\"show8()\">I have heard a lot about it
            </div>

            <div id=\"financial\" style=\"display:none;\">
                ";
        // line 493
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 8, array(), "array"), "question"), "html", null, true);
        echo "
                <br>

                <input type=\"radio\" name=\"fin\" id=\"fin\" value=\"Above average wealth\" onclick=\"show9()\">Above average wealth
                <br>
                <input type=\"radio\" name=\"fin\" id=\"fin\" value=\"Average wealth\" onclick=\"show9()\">Average wealth
                <br>
                <input type=\"radio\" name=\"fin\" id=\"fin\" value=\"Below average wealth\" onclick=\"show9()\">Below average wealth

            </div>

            <div id=\"inherited\" style=\"display:none;\">
                ";
        // line 505
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 9, array(), "array"), "question"), "html", null, true);
        echo "
                <br>

                <input type=\"radio\" name=\"inh\" id=\"inh\" value=\"no\" onclick=\"show9_no()\">No
                <br>
                <input type=\"radio\" name=\"inh\" id=\"inh\" value=\"yes\" onclick=\"show9_yes()\">Yes

                <div id=\"inherited_yes\" style=\"display:none;\">
                    ";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 10, array(), "array"), "question"), "html", null, true);
        echo "
                    <br>
                    <select name=\"who\">
                        <option value=\"Me\">Me</option>
                        <option value=\"Another family member(s)\">Another family member(s)</option>
                        <option value=\"Me and a family member(s)\">Me and a family member(s)</option>
                    </select>
                    <br>
                    ";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), 11, array(), "array"), "question"), "html", null, true);
        echo "
                    <br>
                    <select name=\"what\" id=\"what\" onclick=\"show9_10()\">
                        <option value=\"Cystic Fibrosis\">Cystic Fibrosis</option>
                        <option value=\"Huntington’s Disease\">Huntington’s Disease</option>
                        <option value=\"Muscular Dystrophy\">Muscular Dystrophy</option>
                        <option value=\"Sickle Cell Anaemia\">Sickle Cell Anaemia</option>
                        <option value=\"Beta Thalassemia\">Beta Thalassemia</option>
                        <option value=\"Haemophilia\">Haemophilia</option>
                        <option value=\"Tay Sachs Disease\">Tay Sachs Disease</option>
                        <option value=\"Fragile X Syndrome\">Fragile X Syndrome</option>
                        <option value=\"Down’s Syndrome, Edward’s Syndrome, Patau Syndrome\">Down’s Syndrome, Edward’s Syndrome, Patau Syndrome</option>
                        <option value=\"Other\">Other</option>
                    </select>
                    <input type=\"text\" name=\"otherWhat\" id=\"otherWhat\" style=\"display:none;\">
                </div>
            </div>

            <input type=\"submit\" id=\"submitButton\" value=\"Submit\" style=\"display:none;\">

        </form>

    </body>

    <script type='text/javascript'>
        function show1() {
            var field = document.getElementById('birthyear');
            field.style.display = 'block';
        }
        function show2() {
            var field = document.getElementById('country');
            field.style.display = 'block';
        }
        function show3() {
            var field = document.getElementById('ethnicity');
            field.style.display = 'block';
        }

        function show4() {
            var field = document.getElementById('religious');
            field.style.display = 'block';
        }

        function show4_no() {
            document.getElementById('religious_yes').style.display = 'none';
            show5();
        }

        function show4_yes() {
            var field = document.getElementById('religious_yes');
            field.style.display = 'block';
            show5();
        }

        function show4_5() {
            var field = document.getElementById('rel');
            var option = field.options[field.selectedIndex].value;
            if (option === \"Other\") {
                document.getElementById('otherRel').style.display = 'block';
            }
            else {
                document.getElementById('otherRel').style.display = 'none';
                show5();
            }
        }

        function show5() {
            var field = document.getElementById('education');
            field.style.display = 'block';
        }

        function show6() {
            var field = document.getElementById('health');
            field.style.display = 'block';
        }

        function show6_no() {
            document.getElementById('health_yes').style.display = 'none';
            show7();
        }

        function show6_yes() {
            var field = document.getElementById('health_yes');
            field.style.display = 'block';
            show7();
        }

        function show6_7() {
            var field = document.getElementById('heal_yes');
            var option = field.options[field.selectedIndex].value;
            if (option === \"Other\") {
                document.getElementById('otherHeal').style.display = 'block';
            }
            else {
                document.getElementById('otherHeal').style.display = 'none';
                show7();
            }
        }

        function show7() {
            var field = document.getElementById('gene_eng');
            field.style.display = 'block';
        }

        function show8() {
            var field = document.getElementById('financial');
            field.style.display = 'block';
        }

        function show9() {
            var field = document.getElementById('inherited');
            field.style.display = 'block';
        }

        function show9_no() {
            document.getElementById('inherited_yes').style.display = 'none';
            show10();
        }

        function show9_yes() {
            var field = document.getElementById('inherited_yes');
            field.style.display = 'block';
            show10();
        }

        function show9_10() {
            var field = document.getElementById('what');
            var option = field.options[field.selectedIndex].value;
            if (option === \"Other\") {
                document.getElementById('otherWhat').style.display = 'block';
            }
            else {
                document.getElementById('otherWhat').style.display = 'none';
                show10();
            }
        }

        function show10() {
            var field = document.getElementById('submitButton');
            field.style.display = 'block';
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "GeneQuestionnaireBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 521,  578 => 513,  567 => 505,  552 => 493,  538 => 482,  514 => 461,  498 => 448,  466 => 419,  445 => 401,  186 => 145,  60 => 22,  49 => 14,  44 => 12,  36 => 7,  31 => 4,  28 => 3,);
    }
}
