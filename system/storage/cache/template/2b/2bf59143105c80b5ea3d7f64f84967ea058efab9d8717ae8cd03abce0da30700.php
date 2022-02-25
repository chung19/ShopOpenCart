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

/* remart/template/extension/module/featured.twig */
class __TwigTemplate_2df48943d588be239c490ba83bf4ea7fe5a128b03a57fd19e68d629d7eb6d22e extends \Twig\Template
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
  <div class=\"prosp\">
<div id=\"product\" class=\"product\"> 
<div class=\"tab-content pro-tab next-prevb\">
  <div class=\"tab-head head-t\">
  <h4 class=\"heading-home text-left pull-left\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 6
        echo ($context["tab_titlem"] ?? null);
        echo "<hr></span></h4>
  <ul class=\"nav nav-tabs text-xs-right\">
      <li class=\"active\"><a href=\"#tfeature\" data-toggle=\"tab\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</a></li>
      <li class=\"bestseller\"><a href=\"#bestseller\" data-toggle=\"tab\">";
        // line 9
        echo ($context["best_title"] ?? null);
        echo "</a></li>
      <li class=\"letest\"><a href=\"#tlatest\" data-toggle=\"tab\">";
        // line 10
        echo ($context["sep_title"] ?? null);
        echo "</a></li>
  </ul>
  <hr>
</div>
<div class=\"tab-pane active\" id=\"tfeature\">

<div class=\"row rless\">
  <div id=\"feature\" class=\"owl-theme owl-carousel fnb\">
";
        // line 18
        $context["temp"] = 0;
        // line 19
        $context["setCol"] = 2;
        // line 20
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo " 
  ";
            // line 22
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 23
            echo "
  ";
            // line 24
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 25
                echo "      <div class=\"multi-row\">
  ";
            }
            // line 27
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                        ";
            // line 31
            $context["t"] = 0;
            // line 32
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 33
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 34
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 34);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 35
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 36
                    echo "                          ";
                }
                // line 37
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        <!-- Webiarch Images End -->
       ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39)) {
                // line 40
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "        <h1 class=\"product-flag newpros\"><span>sale</span></h1>
       ";
                }
                // line 43
                echo "      ";
            }
            // line 44
            echo "       <!-- ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 44)) {
                echo "<h1 class=\"new-product\"><span>NEW</span></h1>";
            }
            echo " -->
        ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 45)) {
                // line 46
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 46);
                echo "%</span>
        ";
            }
            // line 48
            echo "

    

      </div>
      <div class=\"caption text-center\">
         
         <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 58)) {
                // line 59
                echo "          <div class=\"rating text-center\">
            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 61
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 61) < $context["i"])) {
                        // line 62
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 66
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 70
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 71
                echo "          <div class=\"rating text-center\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "</div>
        ";
            }
            // line 75
            echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
            echo "</a></h4>

         ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                // line 80
                echo "        <div class=\"price col-xs-12 text-center\">
          ";
                // line 81
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                    echo "
          ";
                } else {
                    // line 84
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 84);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                    echo "</span>
          ";
                }
                // line 86
                echo "         ";
                // line 89
                echo "        </div>
        ";
            }
            // line 91
            echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
            // line 95
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
            echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
            echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
            // line 96
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
            echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
            echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 98);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 99
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
            echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
            // line 105
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div>  
      </div>
      
    </div>
  </div>

    ";
            // line 113
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 114
                echo "            </div>
        ";
            }
            // line 116
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
  ";
        // line 118
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 119
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 122
        echo "
      </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#feature\").owlCarousel({
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
        return "remart/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 122,  327 => 119,  325 => 118,  322 => 117,  316 => 116,  312 => 114,  310 => 113,  299 => 105,  295 => 104,  287 => 99,  283 => 98,  275 => 96,  268 => 95,  262 => 91,  258 => 89,  256 => 86,  248 => 84,  242 => 82,  240 => 81,  237 => 80,  235 => 79,  228 => 77,  224 => 75,  220 => 73,  213 => 72,  208 => 71,  200 => 70,  194 => 66,  188 => 62,  185 => 61,  181 => 60,  178 => 59,  176 => 58,  164 => 48,  158 => 46,  156 => 45,  149 => 44,  146 => 43,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  128 => 37,  125 => 36,  123 => 35,  116 => 34,  113 => 33,  108 => 32,  106 => 31,  95 => 29,  91 => 27,  87 => 25,  85 => 24,  82 => 23,  80 => 22,  77 => 21,  72 => 20,  70 => 19,  68 => 18,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/featured.twig", "");
    }
}
