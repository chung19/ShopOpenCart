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

/* remart/template/extension/module/ocproduct.twig */
class __TwigTemplate_831a270a0a8e56e8c6fecd3b8ff7ea5efb1011f86a49e27d779e710f45328431 extends \Twig\Template
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
        echo "    <div class=\"timerpro onspro next-prevb\">
      <div class=\"head-t\"><h4 class=\"heading\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</span></h4><hr></div>
<div class=\"row rless\"> 
  <div id=\"count\" class=\"owl-theme owl-carousel fnb\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
            echo "\" class=\"img-responsive\" /></a>
         <!-- Webiarch Images Start -->
                        ";
            // line 10
            $context["t"] = 0;
            // line 11
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 12
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 13
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 13);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 14
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 15
                    echo "                          ";
                }
                // line 16
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        <!-- Webiarch Images End -->
          ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 18)) {
                // line 19
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 19);
                echo "%</span>
        ";
            }
            // line 21
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21)) {
                // line 22
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "               <h3 class=\"sale\">sale</h3>
          ";
                }
                // line 25
                echo "      ";
            }
            echo "   

      </div>
      <div class=\"caption text-center\">
         
         ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 30)) {
                // line 31
                echo "          <div class=\"rating\">
            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 33
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 33) < $context["i"])) {
                        // line 34
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    } else {
                        // line 38
                        echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                    }
                    // line 42
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 43
                echo "          <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "</div>
        ";
            }
            // line 47
            echo "
         <h4 class=\"protitle\"><a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
            echo "</a></h4>
      
         ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50)) {
                // line 51
                echo "        <div class=\"price\">
          ";
                // line 52
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                    echo "
          ";
                } else {
                    // line 55
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                    echo "</span>
          ";
                }
                // line 57
                echo "         ";
                // line 60
                echo "        </div>
        ";
            }
            // line 62
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 62)) {
                echo "<div id=\"Countdown";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 62);
                echo "\" class=\"box-timer\"></div> ";
            }
            // line 63
            echo "        ";
            // line 64
            echo "           <!--  <div class=\"button-group\">

      <div class=\"absbtn\">
        <div class=\"addtocart\"><button class=\"btn-block\" type=\"button\" onclick=\"cart.add('";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
            echo "');\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pcart\"></use></svg></button></div>
        <div class=\"wish\"><button type=\"button\" title=\"";
            // line 68
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
            echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
            echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
            // line 69
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
            echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
            echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      </div>
    </div> -->

      </div>
    

   ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 77)) {
                // line 78
                echo "            <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$('#Countdown";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
                echo "').countdown({
                       until: new Date(";
                // line 81
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "Y");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "m");
                echo "-1, ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "d");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "H");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "i");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 81), "s");
                echo "),
                        labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                        labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                    });
                    //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                });
            </script>
            ";
            }
            // line 89
            echo "            </div>
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
    \$(\"#count\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [360, 1],
    [450, 2],
    [650, 3],
    [768, 1],
    [992, 1],
    [1200, 1],
    [1590, 1]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 92,  278 => 89,  257 => 81,  253 => 80,  249 => 78,  247 => 77,  233 => 69,  226 => 68,  222 => 67,  217 => 64,  215 => 63,  208 => 62,  204 => 60,  202 => 57,  194 => 55,  188 => 53,  186 => 52,  183 => 51,  181 => 50,  174 => 48,  171 => 47,  167 => 45,  160 => 44,  155 => 43,  147 => 42,  141 => 38,  135 => 34,  132 => 33,  128 => 32,  125 => 31,  123 => 30,  114 => 25,  110 => 23,  107 => 22,  104 => 21,  98 => 19,  96 => 18,  93 => 17,  87 => 16,  84 => 15,  82 => 14,  75 => 13,  72 => 12,  67 => 11,  65 => 10,  54 => 8,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/ocproduct.twig", "");
    }
}
