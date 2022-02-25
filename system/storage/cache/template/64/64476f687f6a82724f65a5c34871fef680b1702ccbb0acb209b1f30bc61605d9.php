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

/* remart/template/product/manufacturer_list.twig */
class __TwigTemplate_ef3b6e19e7c03af0341903bf8d26e13d1725c4e813cd50befb4cf8053ef2e640 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
       
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
            $context["class"] = "col-sm-8 col-md-9 col-xs-12";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">

 <ul class=\"breadcrumb\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </ul>

      ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"head-t\">
      <h4 class=\"heading\"><span>";
        // line 22
        echo ($context["cheading_title"] ?? null);
        echo "</span></h4><hr>
    </div>
      ";
        // line 24
        if (($context["categories"] ?? null)) {
            // line 25
            echo "      <p><strong>";
            echo ($context["text_index"] ?? null);
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "        &nbsp;&nbsp;&nbsp;<a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                echo "</a> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        <div class=\"row\">
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "      <div class=\"col-lg-6 col-xs-12\">
    <div class=\"brand-list\">
      <h2 id=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"bname\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                echo "</h2>
      ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 33), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 34
                        echo "      <div class=\"brands-content\">
      <div class=\"row\"> ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 36
                            echo "        <div class=\"col-sm-6 col-xs-12\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 36);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 36);
                            echo "</a></div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 37
                        echo " </div>
      </div></div>
  </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "      ";
                }
                // line 42
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      ";
        } else {
            // line 44
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 46
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 49
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 52,  204 => 50,  199 => 49,  191 => 46,  185 => 44,  182 => 43,  176 => 42,  173 => 41,  164 => 37,  153 => 36,  149 => 35,  146 => 34,  141 => 33,  139 => 32,  133 => 31,  129 => 29,  125 => 28,  112 => 26,  105 => 25,  103 => 24,  98 => 22,  93 => 20,  89 => 18,  78 => 16,  74 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/manufacturer_list.twig", "");
    }
}
