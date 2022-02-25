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

/* remart/template/extension/module/arrivel.twig */
class __TwigTemplate_132d93fbc88acdc86bd6c5352cc438886b6ad6b13cbdf4ea2b03810cc12c06d9 extends \Twig\Template
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
        echo "<div class=\"arrivalpro onspro next-prevb\">
<div class=\"head-t\"> 
  ";
        // line 3
        $context["temp"] = 0;
        // line 4
        $context["setCol"] = 7;
        // line 5
        echo "<h4 class=\"heading\"><span>";
        echo ($context["hArrivel"] ?? null);
        echo "</span></h4>
</div>

<div id=\"arrivel\" class=\"owl-theme owl-carousel\">
 ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "         ";
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 11
            echo "
        ";
            // line 12
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 13
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 15
            echo " 
  <div class=\"product-layout leftpro col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image col-sm-5 col-lg-5 col-xs-4\"><a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                 ";
            // line 20
            $context["t"] = 0;
            // line 21
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 22
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 23
                    echo "                  ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 24
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 24);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                  ";
                        // line 25
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "          <!-- End -->
      </div>
     <div class=\"caption text-left col-sm-7 col-lg-7 col-xs-8 on_sale\">
      
      <h4  class=\"protitle\"><a href=\"";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
            echo "</a></h4>
        
         ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36)) {
                // line 37
                echo "        <div class=\"price\">
          ";
                // line 38
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39);
                    echo "
          ";
                } else {
                    // line 41
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
                    echo "</span>
          ";
                }
                // line 43
                echo "         ";
                // line 46
                echo "        </div>
        ";
            }
            // line 48
            echo "        ";
            // line 49
            echo "
      </div>
     


    </div>
</div>
 
  ";
            // line 57
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 58
                echo "            </div>
        ";
            }
            // line 60
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "   ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 62
            echo "        
    ";
        }
        // line 64
        echo "    </div>

</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#arrivel\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320,1],
    [480,2],
    [768, 1],
    [1200, 1],
    [1410, 1],
    [1600, 1]
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
        return "remart/template/extension/module/arrivel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 64,  192 => 62,  189 => 61,  183 => 60,  179 => 58,  177 => 57,  167 => 49,  165 => 48,  161 => 46,  159 => 43,  151 => 41,  145 => 39,  143 => 38,  140 => 37,  138 => 36,  131 => 34,  125 => 30,  119 => 29,  112 => 27,  109 => 26,  107 => 25,  100 => 24,  97 => 23,  92 => 22,  87 => 21,  85 => 20,  74 => 18,  69 => 15,  65 => 13,  63 => 12,  60 => 11,  57 => 10,  53 => 9,  45 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/arrivel.twig", "");
    }
}
