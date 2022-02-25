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

/* remart/template/extension/module/latest.twig */
class __TwigTemplate_b4b345e3bc29d117d32f26a115c85245d60d24e15bc941dd5de73ac36a83f098 extends \Twig\Template
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
        echo "
<div class=\"tab-pane\" id=\"tlatest\">
    <div class=\"row\">
  <div id=\"latest\" class=\"owl-theme owl-carousel fnb\">
";
        // line 5
        $context["temp"] = 0;
        // line 6
        $context["setCol"] = 2;
        // line 7
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "
  ";
            // line 9
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 10
            echo "
  ";
            // line 11
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 12
                echo "      <div class=\"multi-row\">
  ";
            }
            // line 14
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
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
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 20
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 21
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 21);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 22
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 23
                    echo "                          ";
                }
                // line 24
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        <!-- Webiarch Images End -->
       ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26)) {
                // line 27
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "        <h1 class=\"product-flag newpros\"><span>sale</span></h1>
       ";
                }
                // line 30
                echo "      ";
            }
            // line 31
            echo "       <!-- ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 31)) {
                echo "<h1 class=\"new-product\"><span>NEW</span></h1>";
            }
            echo " -->
        ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 32)) {
                // line 33
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 33);
                echo "%</span>
        ";
            }
            // line 35
            echo "
      </div>
      <div class=\"caption text-center\">
         
         <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42)) {
                // line 43
                echo "          <div class=\"rating text-center\">
            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 45
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 45) < $context["i"])) {
                        // line 46
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 50
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 54
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 55
                echo "          <div class=\"rating text-center\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "</div>
        ";
            }
            // line 59
            echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
            echo "</a></h4>

         ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63)) {
                // line 64
                echo "        <div class=\"price col-xs-12 text-center\">
          ";
                // line 65
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66);
                    echo "
          ";
                } else {
                    // line 68
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
                    echo "</span>
          ";
                }
                // line 70
                echo "         ";
                // line 73
                echo "        </div>
        ";
            }
            // line 75
            echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
            // line 79
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
            echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
            echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
            // line 80
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
            echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
            echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 83
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 89
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div>  
      </div>
      
    </div>
  </div>

    ";
            // line 97
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 98
                echo "            </div>
        ";
            }
            // line 100
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
  ";
        // line 102
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 103
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 106
        echo "        </div>
  </div>
</div>



<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#latest\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [576, 3],
    [700, 3],
    [768, 2],
    [900, 3],
    [1200, 3],
    [1410, 4]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 106,  299 => 103,  297 => 102,  294 => 101,  288 => 100,  284 => 98,  282 => 97,  271 => 89,  267 => 88,  259 => 83,  255 => 82,  247 => 80,  240 => 79,  234 => 75,  230 => 73,  228 => 70,  220 => 68,  214 => 66,  212 => 65,  209 => 64,  207 => 63,  200 => 61,  196 => 59,  192 => 57,  185 => 56,  180 => 55,  172 => 54,  166 => 50,  160 => 46,  157 => 45,  153 => 44,  150 => 43,  148 => 42,  139 => 35,  133 => 33,  131 => 32,  124 => 31,  121 => 30,  117 => 28,  114 => 27,  112 => 26,  109 => 25,  103 => 24,  100 => 23,  98 => 22,  91 => 21,  88 => 20,  83 => 19,  81 => 18,  70 => 16,  66 => 14,  62 => 12,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  47 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/latest.twig", "");
    }
}
