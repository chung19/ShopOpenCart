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

/* remart/template/extension/module/bestproduct.twig */
class __TwigTemplate_e5ef00e6ebc0209bcd6257802173f19088dd61f17126cb7ff20b6720d07fcb43 extends \Twig\Template
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
        echo "<div class=\"bestseller onspro next-prevb\">
  <div class=\"head-t\"><h4 class=\"heading\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 2
        echo ($context["bestpro_title"] ?? null);
        echo "</span></h4><hr></div>
";
        // line 3
        $context["temp"] = 0;
        // line 4
        $context["setCol"] = 3;
        // line 5
        echo "<div class=\"row\">
  <div id=\"bestleft\" class=\"owl-theme owl-carousel\">
 ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "        ";
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 9
            echo "
        ";
            // line 10
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 11
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 13
            echo "<!-- writ code Here -->
  <div class=\"product-layout col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image col-sm-5 col-lg-5 col-xs-4\"><a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 16);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                 ";
            // line 18
            $context["t"] = 0;
            // line 19
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 20
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 21
                    echo "                  ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 22
                        echo "                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 22);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                  ";
                        // line 23
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 24
                        echo "                    ";
                    }
                    // line 25
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "          <!-- End -->
      </div>
     <div class=\"caption text-left col-sm-7 col-lg-7 col-xs-8 on_sale\">
       <h4  class=\"protitle\"><a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
            echo "</a></h4>

      ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 33)) {
                // line 34
                echo "          <div class=\"rating\">
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 36) < $context["i"])) {
                        // line 37
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 41
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 45
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 46
                echo "          <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 47
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        </div>
        ";
            }
            // line 51
            echo "       
         ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52)) {
                // line 53
                echo "        <div class=\"price\">
          ";
                // line 54
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 54)) {
                    // line 55
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                    echo "
          ";
                } else {
                    // line 57
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                    echo "</span>
          ";
                }
                // line 59
                echo "         ";
                // line 62
                echo "        </div>
        ";
            }
            // line 64
            echo "        ";
            // line 65
            echo "
      </div>
  </div>
  </div>
<!-- writ code Here End -->
 ";
            // line 70
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 71
                echo "            </div>
        ";
            }
            // line 73
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
  ";
        // line 76
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 77
            echo "        </div>
    ";
        }
        // line 79
        echo "</div>
</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#bestleft\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [480, 2],
    [768, 1],
    [992, 1],
    [1200, 2],
    [1410, 2],
    [1600, 2]
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
        return "remart/template/extension/module/bestproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 79,  241 => 77,  239 => 76,  236 => 75,  229 => 73,  225 => 71,  223 => 70,  216 => 65,  214 => 64,  210 => 62,  208 => 59,  200 => 57,  194 => 55,  192 => 54,  189 => 53,  187 => 52,  184 => 51,  180 => 49,  173 => 47,  168 => 46,  160 => 45,  154 => 41,  148 => 37,  145 => 36,  141 => 35,  138 => 34,  136 => 33,  129 => 31,  124 => 28,  118 => 27,  111 => 25,  108 => 24,  106 => 23,  99 => 22,  96 => 21,  91 => 20,  86 => 19,  84 => 18,  73 => 16,  68 => 13,  64 => 11,  62 => 10,  59 => 9,  56 => 8,  52 => 7,  48 => 5,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/bestproduct.twig", "");
    }
}
