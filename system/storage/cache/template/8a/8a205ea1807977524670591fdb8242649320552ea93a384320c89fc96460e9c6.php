<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* remart/template/information/information.twig */
class __TwigTemplate_01ea71c29c9767106e7d42412de11f347a300cb386cfcebec9e2df69eb10c344 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-information\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-xs-12 acpage";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
      ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"head-t\">
      <h4 class=\"heading\"><span>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</span></h4><hr>
    </div>
      ";
        // line 22
        echo ($context["description"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 23
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 25
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  106 => 23,  101 => 22,  96 => 20,  91 => 18,  88 => 17,  77 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/information/information.twig", "");
    }
}
