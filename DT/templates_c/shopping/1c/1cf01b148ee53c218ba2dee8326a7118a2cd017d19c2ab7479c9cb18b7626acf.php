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
class __TwigTemplate_991dbb521882fb1284d0519c633bb61ae89ce70265f3839b578845860de63fb7 extends \Twig\Template
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
        echo "<html>\t
<head>\t
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />\t
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::APP_URL"), "html", null, true);
        echo "css/shopping.css\" rel=\"stylesheet\" type=\"text/css\" />\t
</head>\t
<body>\t
<div id=\"wrapper\">\t
";
        // line 8
        echo "\t
";
        // line 9
        echo "\t
<div class=\"header\">\t
<h3>SHOPPING<span>ー商品リストー</span></h3>\t
</div>\t
<div class=\"side\">\t
<p>MENU</p>\t
";
        // line 15
        $this->loadTemplate("category_menu.html.twig", "list.html.twig", 15)->display($context);
        echo "\t
</div>\t
<div id=\"item_list\">\t
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            echo "\t
<div class=\"item\">\t
<ul>\t
";
            // line 21
            echo "\t
<li class=\"name\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "</a></li>\t
";
            // line 23
            echo "\t
";
            // line 24
            echo "\t
<li class=\"image\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "images/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "image", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_name", []), "html", null, true);
            echo "\" /></a></li>\t
<li class=\"price\">&yen;";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "price", []), 0, ".", ","), "html", null, true);
            echo "</li>\t
<li class=\"detail\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "detail.php?item_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "item_id", []), "html", null, true);
            echo "\">詳細</a></li>\t
</ul>\t
</div>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t
</div>\t
</div>\t
</body>\t
</html>\t
";
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
        return array (  112 => 30,  100 => 27,  96 => 26,  84 => 25,  81 => 24,  78 => 23,  70 => 22,  67 => 21,  59 => 18,  53 => 15,  45 => 9,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "/Applications/MAMP/htdocs/DT/templates/shopping/list.html.twig");
    }
}
