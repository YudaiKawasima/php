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

/* category_menu.html.twig */
class __TwigTemplate_1db5c35bf4c0e69f3b133cee69c7b9b50c23fb071371559d089606ddb84160ee extends \Twig\Template
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
        echo "<div id=\"category\">\t
<ul>\t
";
        // line 3
        echo "\t
<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
        echo "list.php\">全て</a></li>\t
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cateArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            echo "\t
";
            // line 6
            echo "\t
<li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_constant("shopping\\Bootstrap::ENTRY_URL"), "html", null, true);
            echo "list.php?ctg_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ctg_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "category_name", []), "html", null, true);
            echo "</a></li>\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t
</ul>\t
</div>";
    }

    public function getTemplateName()
    {
        return "category_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  50 => 7,  47 => 6,  41 => 5,  37 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "category_menu.html.twig", "/Applications/MAMP/htdocs/DT/templates/shopping/category_menu.html.twig");
    }
}
