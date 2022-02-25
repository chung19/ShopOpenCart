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

/* remart/template/extension/module/bestseller.twig */
class __TwigTemplate_0be5065076d7ecbde493a52ebd915923ad6059093dae5496f136810d610ab8d2 extends \Twig\Template
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
        echo "<div class=\"tab-pane\" id=\"bestseller\">
    <div class=\"row\">
  <div id=\"best\" class=\"owl-theme owl-carousel fnb\">
";
        // line 4
        $context["temp"] = 0;
        // line 5
        $context["setCol"] = 2;
        // line 6
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "
  ";
            // line 8
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 9
            echo "  ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 10
                echo "      <div class=\"multi-row\">
  ";
            }
            // line 12
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
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
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 18
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 19
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 19);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 20
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 21
                    echo "                          ";
                }
                // line 22
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        <!-- Webiarch Images End -->
       ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24)) {
                // line 25
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "        <h1 class=\"product-flag newpros\"><span>sale</span></h1>
       ";
                }
                // line 28
                echo "      ";
            }
            // line 29
            echo "       <!-- ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 29)) {
                echo "<h1 class=\"new-product\"><span>NEW</span></h1>";
            }
            echo " -->
        ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 30)) {
                // line 31
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 31);
                echo "%</span>
        ";
            }
            // line 33
            echo "

    

      </div>
      <div class=\"caption text-center\">
         
         <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 43)) {
                // line 44
                echo "          <div class=\"rating text-center\">
            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 46
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 46) < $context["i"])) {
                        // line 47
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 51
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 55
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 56
                echo "          <div class=\"rating text-center\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 57
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "</div>
        ";
            }
            // line 60
            echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
            echo "</a></h4>

         ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64)) {
                // line 65
                echo "        <div class=\"price col-xs-12 text-center\">
          ";
                // line 66
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67);
                    echo "
          ";
                } else {
                    // line 69
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
                    echo "</span>
          ";
                }
                // line 71
                echo "         ";
                // line 74
                echo "        </div>
        ";
            }
            // line 76
            echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
            // line 80
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
            echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
            echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
            // line 81
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
            echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
            echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 84
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 90
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div>  
      </div>
      
    </div>
  </div>

    ";
            // line 98
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 99
                echo "            </div>
        ";
            }
            // line 101
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
  ";
        // line 103
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 104
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 107
        echo "  </div>

</div>
</div>
</div>
</div>
</div>

<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#best\").owlCarousel({
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
        return "remart/template/extension/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 107,  299 => 104,  297 => 103,  294 => 102,  288 => 101,  284 => 99,  282 => 98,  271 => 90,  267 => 89,  259 => 84,  255 => 83,  247 => 81,  240 => 80,  234 => 76,  230 => 74,  228 => 71,  220 => 69,  214 => 67,  212 => 66,  209 => 65,  207 => 64,  200 => 62,  196 => 60,  192 => 58,  185 => 57,  180 => 56,  172 => 55,  166 => 51,  160 => 47,  157 => 46,  153 => 45,  150 => 44,  148 => 43,  136 => 33,  130 => 31,  128 => 30,  121 => 29,  118 => 28,  114 => 26,  111 => 25,  109 => 24,  106 => 23,  100 => 22,  97 => 21,  95 => 20,  88 => 19,  85 => 18,  80 => 17,  78 => 16,  67 => 14,  63 => 12,  59 => 10,  56 => 9,  54 => 8,  51 => 7,  46 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/bestseller.twig", "");
    }
}
