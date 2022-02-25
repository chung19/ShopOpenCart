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

/* remart/template/common/search.twig */
class __TwigTemplate_7455eea692e3fbe9f07ce3ef769d67aa55321755a656f78a2bb3a832267ad0c6 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"\">
\t<!-- Winter Search Start  -->
\t<div class=\"winter-search-container\">
\t<div class=\"winter-category-container\">
\t\t<select class=\"form-control\" id=\"winter-search-category\">
\t\t\t<option value=\"0\">";
        // line 6
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 8
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                // line 9
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 9);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 9);
                echo "</option>
\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 11);
                echo "</option>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 14
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 14) == ($context["category_id"] ?? null))) {
                    // line 15
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 15);
                    echo "\" selected=\"selected\"><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 15);
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 17);
                    echo "\"><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 17);
                    echo "</option>
\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 20
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 20) == ($context["category_id"] ?? null))) {
                        // line 21
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 21);
                        echo "\" selected=\"selected\">
\t\t\t\t\t\t\t\t<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->";
                        // line 22
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 22);
                        echo "
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
                    } else {
                        // line 25
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 25);
                        echo "\"><!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 25);
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</select>
\t</div>
\t<!-- Winter Search End  -->
    <div class=\"search-box input-group\">
  \t<input type=\"text\" name=\"search\" value=\"";
        // line 34
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg winter-search\" />
  \t<span class=\"input-group-btn\">
    \t<button type=\"button\" class=\"btn btn-default btn-lg\"><svg height=\"20px\" width=\"20px\"><use xlink:href=\"#hsearch\"></use></svg>search</button>
  \t</span>
  </div>
  </div>
  \t<!-- Winter Search Start  -->
 \t<div class=\"winter-search\">
        <div class=\"winter-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
        <div class=\"winter-search-result\"><!-- search results --></div>
    </div>
    <!-- Winter Search End  -->
</div>";
    }

    public function getTemplateName()
    {
        return "remart/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 34,  140 => 30,  134 => 29,  128 => 28,  122 => 27,  114 => 25,  108 => 22,  103 => 21,  100 => 20,  95 => 19,  87 => 17,  79 => 15,  76 => 14,  71 => 13,  63 => 11,  55 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/search.twig", "");
    }
}
