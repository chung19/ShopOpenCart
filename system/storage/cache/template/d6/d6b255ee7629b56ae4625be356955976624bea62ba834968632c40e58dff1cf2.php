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

/* remart/template/common/winter_search.twig */
class __TwigTemplate_0b10e2e8214a6075784b23b3bb831cbc28e949df61a2de845bc007f8f3f879af extends \Twig\Template
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
        if ((($context["total_product"] ?? null) > 0)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                echo "\t \t
\t<div class=\"product-thumb winter-cat col-sm-6 col-xs-12\">
\t \t<div class=\"\">
\t        <div class=\"product-info col-lg-4 col-sm-4 col-xs-5 image\">
\t        \t<a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
                echo "\">
\t        \t\t<img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />
\t        \t</a>
\t       \t</div>
\t       \t<div class=\"winter-dis col-lg-8 col-sm-8 col-xs-7\">
\t       \t\t<h4 class=\"acpage\"><a href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a></h4>
\t       \t\t<p class=\"list-des\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 13);
                echo "</p>


\t\t\t\t       ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t       
\t\t\t\t         <!-- <p class=\"discription\">";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18);
                    echo "</p> -->
\t\t\t\t        <div class=\"price\">
\t\t\t\t          ";
                    // line 20
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                        // line 21
                        echo "\t\t\t\t          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21);
                        echo "
\t\t\t\t          ";
                    } else {
                        // line 23
                        echo "\t\t\t\t          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 23);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                        echo "</span>
\t\t\t\t          ";
                    }
                    // line 25
                    echo "\t\t\t\t         ";
                    // line 28
                    echo "\t\t\t\t        </div>
\t\t\t\t        ";
                }
                // line 30
                echo "\t\t\t\t        </div>



\t       \t</div>
\t    </div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 39
            echo "\t<div><p>There is no product that matches the search criteria.</p></div>
";
        }
    }

    public function getTemplateName()
    {
        return "remart/template/common/winter_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  109 => 30,  105 => 28,  103 => 25,  95 => 23,  89 => 21,  87 => 20,  82 => 18,  79 => 17,  77 => 16,  71 => 13,  65 => 12,  54 => 8,  50 => 7,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/winter_search.twig", "");
    }
}
