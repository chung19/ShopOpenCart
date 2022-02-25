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

/* remart/template/extension/module/special.twig */
class __TwigTemplate_eb42b19aa50449f10f1806088d9b51222068c6d8c15b81e4890a5ec697bc09db extends \Twig\Template
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
        echo "<div class=\"special next-prevb\">
 <div class=\"head-t\"><h4><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</span></h4><hr></div>
 <div class=\"row\">
<div id=\"special\" class=\"owl-theme owl-carousel fnb\"> 
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  <div class=\"multi-row\">
  <div class=\"product-layout col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                        ";
            // line 11
            $context["t"] = 0;
            // line 12
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 13
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 14
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 14);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 15
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 16
                    echo "                          ";
                }
                // line 17
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        <!-- Webiarch Images End -->
       ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19)) {
                // line 20
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "        <h1 class=\"product-flag newpros\"><span>sale</span></h1>
       ";
                }
                // line 23
                echo "      ";
            }
            // line 24
            echo "       <!-- ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 24)) {
                echo "<h1 class=\"new-product\"><span>NEW</span></h1>";
            }
            echo " -->
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 25)) {
                // line 26
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 26);
                echo "%</span>
        ";
            }
            // line 28
            echo "
    

      </div>
      <div class=\"caption text-center\">
         
         <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 37)) {
                // line 38
                echo "          <div class=\"rating text-center\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 40
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40) < $context["i"])) {
                        // line 41
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 45
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 49
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 50
                echo "          <div class=\"rating text-center\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 51
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "</div>
        ";
            }
            // line 54
            echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
            echo "</a></h4>

         ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58)) {
                // line 59
                echo "        <div class=\"price col-xs-12 text-center\">
          ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                    echo "
          ";
                } else {
                    // line 63
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                    echo "</span>
          ";
                }
                // line 65
                echo "         ";
                // line 68
                echo "        </div>
        ";
            }
            // line 70
            echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
            // line 74
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
            echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
            echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
            // line 75
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 75);
            echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
            echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 78
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 84
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div>  
      </div>
      
    </div>
</div> 
            </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo " 
        </div>
         
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#special\").owlCarousel({
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
        return "remart/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 92,  258 => 84,  254 => 83,  246 => 78,  242 => 77,  234 => 75,  227 => 74,  221 => 70,  217 => 68,  215 => 65,  207 => 63,  201 => 61,  199 => 60,  196 => 59,  194 => 58,  187 => 56,  183 => 54,  179 => 52,  172 => 51,  167 => 50,  159 => 49,  153 => 45,  147 => 41,  144 => 40,  140 => 39,  137 => 38,  135 => 37,  124 => 28,  118 => 26,  116 => 25,  109 => 24,  106 => 23,  102 => 21,  99 => 20,  97 => 19,  94 => 18,  88 => 17,  85 => 16,  83 => 15,  76 => 14,  73 => 13,  68 => 12,  66 => 11,  55 => 9,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/special.twig", "");
    }
}
