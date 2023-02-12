<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* regist.html.twig */
class __TwigTemplate_4edf977a73d134ebe40b59cd4da37f07a74f762ec0c72b271a0dfde91d7560a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>\t
<html>\t
<head>\t
<meta charset=\"utf-8\">\t
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>\t
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::APP_URL"), "html", null, true);
        echo "js/common.js\"></script>\t
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/style.css\" rel=\"stylesheet\">\t
<title>会員登録</title>\t
</head>\t
<body>\t
<input type=\"hidden\" name=\"entry_url\" id=\"entry_url\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "\">\t
<form method=\"post\" action=\"confirm.php\">\t
<table>\t
<tr>\t
<th>お名前(氏名)<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"family_name\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name", []), "html", null, true);
        echo "\">\t
<input type=\"text\" name=\"first_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name", []), "html", null, true);
        echo "\">\t
";
        // line 19
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "family_name", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "first_name", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>お名前(かな)</th>\t
<td>\t
<input type=\"text\" name=\"family_name_kana\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "family_name_kana", []), "html", null, true);
        echo "\">\t
<input type=\"text\" name=\"first_name_kana\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "first_name_kana", []), "html", null, true);
        echo "\">\t
</td>\t
</tr>\t
<tr>\t
<th>性別<span class=\"red\">*</span></th>\t
<td>\t
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sexArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<input type=\"radio\" name=\"sex\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" id=\"sex_";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "sex", []) == $context["index"])) {
                echo " checked=\"checked\" ";
            }
            echo ">\t
<label for=\"sex_";
            // line 35
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t
";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "sex", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>生年月日<span class=\"red\">*</span></th>\t
<td>\t
<select name=\"year\" >\t
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 45
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "year", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t
</select>\t
<select name='month'>\t
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monthArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 50
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "month", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t
</select>\t
<select name='day'>\t
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<option value=\"";
            // line 55
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["dataArr"] ?? null), "day", []) == $context["index"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t
</select>\t
";
        // line 58
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "year", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "month", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 60
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "day", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>郵便番号<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"zip1\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip1", []), "html", null, true);
        echo "\" id=\"zip1\" size=\"3\" maxlength=\"3\"> -\t
<input type=\"text\" name=\"zip2\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "zip2", []), "html", null, true);
        echo "\" id=\"zip2\" size=\"4\" maxlength=\"4\">\t
<input type=\"button\" name=\"address_search\" value=\"〒から住所を入力\" id=\"address_search\">\t
";
        // line 69
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip1", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "zip2", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>住所<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"address\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "address", []), "html", null, true);
        echo "\" id=\"address\" size=\"40\">\t
";
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "address", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>メールアドレス<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"email\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "email", []), "html", null, true);
        echo "\" size=\"40\">\t
";
        // line 84
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "email", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>電話番号<span class=\"red\">*</span></th>\t
<td>\t
<input type=\"text\" name=\"tel1\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel1", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -\t
<input type=\"text\" name=\"tel2\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel2", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\"> -\t
<input type=\"text\" name=\"tel3\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "tel3", []), "html", null, true);
        echo "\" size=\"6\" maxlength=\"6\">\t
";
        // line 93
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel1", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 94
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel2", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
";
        // line 95
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "tel3", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>交通手段<span class=\"red\">*</span></th>\t
<td>\t
";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trafficArr"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["label"]) {
            echo "\t
<input type=\"checkbox\" name=\"traffic[]\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" id=\"traffic_";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["index"], $this->getAttribute(($context["dataArr"] ?? null), "traffic", []))) {
                echo " checked=\"checked\" ";
            }
            echo ">\t
<label for=\"traffic_";
            // line 103
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</label>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t
";
        // line 105
        if ((twig_length_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "traffic", [])) > 0)) {
            echo "<br><span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errArr"] ?? null), "traffic", []), "html", null, true);
            echo "</span>";
        }
        echo "\t
</td>\t
</tr>\t
<tr>\t
<th>備考</th>\t
<td>\t
<textarea name=\"contents\" rows=\"4\" cols=\"40\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataArr"] ?? null), "contents", []), "html", null, true);
        echo "</textarea>\t
</td>\t
</tr>\t
</table>\t
<div>\t
<input type=\"submit\" name=\"confirm\" value=\"登録確認\">\t
</div>\t
</form>\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "regist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 111,  379 => 105,  376 => 104,  366 => 103,  356 => 102,  350 => 101,  337 => 95,  329 => 94,  321 => 93,  317 => 92,  313 => 91,  309 => 90,  296 => 84,  292 => 83,  279 => 77,  275 => 76,  262 => 70,  254 => 69,  249 => 67,  245 => 66,  232 => 60,  224 => 59,  216 => 58,  212 => 56,  198 => 55,  192 => 54,  187 => 51,  173 => 50,  167 => 49,  162 => 46,  148 => 45,  142 => 44,  128 => 37,  125 => 36,  115 => 35,  105 => 34,  99 => 33,  90 => 27,  86 => 26,  73 => 20,  65 => 19,  61 => 18,  57 => 17,  48 => 11,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "regist.html.twig", "/Applications/MAMP/htdocs/DT/templates/member/regist.html.twig");
    }
}
