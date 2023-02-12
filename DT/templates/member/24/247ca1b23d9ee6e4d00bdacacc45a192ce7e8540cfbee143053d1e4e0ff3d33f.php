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

/* list.html.twig */
class __TwigTemplate_f8b81cabf0d7a884edb4eb7c6914c68b59b3724450178659173910c5d635f26c extends \Twig\Template
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
<title>会員一覧</title>\t
</head>\t
<body>\t
<table border=\"1\">\t
<tr>\t
<th>ID</th>\t
<th>お名前</th>\t
<th>メール</th>\t
<th>性別</th>\t
<th>登録日時</th>\t
<th>編集リンク</th>\t
</tr>\t
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            echo "\t
<tr>\t
<td>\t
<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?mem_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "mem_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "mem_id", []), "html", null, true);
            echo "</a>\t
</td>\t
<td>\t
<span style=\"font-size:60%;\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name_kana", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name_kana", []), "html", null, true);
            echo "</span><br>\t
";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "family_name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "first_name", []), "html", null, true);
            echo "\t
</td>\t
<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "email", []), "html", null, true);
            echo "</td>\t
<td>";
            // line 27
            if (($this->getAttribute($context["value"], "sex", []) == "1")) {
                echo "男性";
            } elseif (($this->getAttribute($context["value"], "sex", []) == "2")) {
                echo "女性";
            }
            echo "</td>\t
<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "regist_date", []), "html", null, true);
            echo "</td>\t
<td>\t
<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_constant("member\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "update.php?mem_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "mem_id", []), "html", null, true);
            echo "\">編集</a>\t
</td>\t
</tr>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t
</table>\t
</body>\t
</html>";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  96 => 30,  91 => 28,  83 => 27,  79 => 26,  72 => 24,  66 => 23,  56 => 20,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "/Applications/MAMP/htdocs/DT/templates/member/list.html.twig");
    }
}
