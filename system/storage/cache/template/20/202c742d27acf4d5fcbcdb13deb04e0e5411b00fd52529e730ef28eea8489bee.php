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

/* remart/template/extension/module/onsaleproduct.twig */
class __TwigTemplate_e8e5033d6b29205c146f7a626eae359cf50a125408432d178467001c33a7cf8a extends \Twig\Template
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
        echo "<div class=\"bestsell onspro next-prevb\">
    <div class=\"head-t\"><h4 class=\"heading\"><span>";
        // line 2
        echo ($context["onsale_title"] ?? null);
        echo "</span></h4></div>
";
        // line 3
        $context["temp"] = 0;
        // line 4
        $context["setCol"] = 6;
        // line 5
        echo "  <div id=\"onsale\" class=\"owl-theme owl-carousel\">
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "         ";
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 8
            echo "
        ";
            // line 9
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 10
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 12
            echo "  <div class=\"product-layout col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image col-sm-5 col-lg-5 col-xs-4\"><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                 ";
            // line 16
            $context["t"] = 0;
            // line 17
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 18
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 19
                    echo "                  ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 20
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 20);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                  ";
                        // line 21
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 22
                        echo "                    ";
                    }
                    // line 23
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          <!-- End -->
      </div>
     <div class=\"caption text-left col-sm-7 col-lg-7 col-xs-8 on_sale\">
      
      <h4  class=\"protitle\"><a href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
            echo "</a></h4>
        
         ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32)) {
                // line 33
                echo "        <div class=\"price\">
          ";
                // line 34
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
                    echo "
          ";
                } else {
                    // line 37
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 37);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                    echo "</span>
          ";
                }
                // line 39
                echo "         ";
                // line 42
                echo "        </div>
        ";
            }
            // line 44
            echo "        ";
            // line 45
            echo "
      </div>
     


    </div>
  </div>
   ";
            // line 52
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 53
                echo "            </div>
        ";
            }
            // line 55
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
  ";
        // line 57
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 58
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 61
        echo "</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#onsale\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [480, 2],
    [576, 2],
    [768, 1],
    [992, 1],
    [1200, 1]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/onsaleproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 61,  190 => 58,  188 => 57,  185 => 56,  179 => 55,  175 => 53,  173 => 52,  164 => 45,  162 => 44,  158 => 42,  156 => 39,  148 => 37,  142 => 35,  140 => 34,  137 => 33,  135 => 32,  128 => 30,  122 => 26,  116 => 25,  109 => 23,  106 => 22,  104 => 21,  97 => 20,  94 => 19,  89 => 18,  84 => 17,  82 => 16,  71 => 14,  67 => 12,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  51 => 6,  48 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/onsaleproduct.twig", "");
    }
}
