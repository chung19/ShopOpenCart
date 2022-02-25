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

/* remart/template/product/special.twig */
class __TwigTemplate_3419b49db0944d42dd88cb42ff0c01e1eab4d1c82c29664b8a7d32c846605a29 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-manufacturer\" class=\"container cleft fnb\">
        
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
   ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9  col-xs-12 colright";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">

      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>

  ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "

     <h1 class=\"co-heading\">";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
     <div class=\"appres\"></div>
      ";
        // line 24
        if (($context["products"] ?? null)) {
            // line 25
            echo "      <div class=\"brand\">
      <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 29
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 38
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 42
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 46
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 46) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 47
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 47);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 47);
                    echo "</option>
                            ";
                } else {
                    // line 49
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 49);
                    echo "</option>
                            ";
                }
                // line 51
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 57
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 60
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 60) == ($context["limit"] ?? null))) {
                    // line 61
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 61);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 61);
                    echo "</option>
                            ";
                } else {
                    // line 63
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 63);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 63);
                    echo "</option>
                            ";
                }
                // line 65
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </select>
                </div>
            </div>
        </div>
     <div class=\"row cpagerow rless\"> ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "        <div class=\"product-layout product-list col-xs-12 cless\">
          <div class=\"product-thumb transition\">
            <div class=\"zi\">
                <div class=\"image\"><a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 74);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "\" class=\"img-responsive center-block\" /></a>
                        <!-- Webiarch Images Start -->
                                  ";
                // line 76
                $context["t"] = 0;
                // line 77
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 78
                    echo "                                    ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 79
                        echo "                                     <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 79);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                    ";
                        // line 80
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 81
                        echo "                                    ";
                    }
                    // line 82
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                  <!-- Webiarch Images End -->
                  ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "                          <h1 class=\"product-flag newpros\"><span>sale</span></h1>
                    ";
                    }
                    // line 88
                    echo "                ";
                }
                // line 89
                echo "                       ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 89)) {
                    echo "<span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 89);
                    echo "%</span>";
                }
                // line 90
                echo "
                </div>

      <div class=\"caption\">
        <div class=\"cap\">
       
        <div class=\"opbtn\">

          <h4  class=\"col-xs-12 protitle\"><a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                echo "</a></h4>


         <div class=\"rat\">
        ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "          <div class=\"rating\">
            ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 105
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 105) < $context["i"])) {
                            // line 106
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 110
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 114
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 115
                    echo "          <div class=\"rating text-center\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 116
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "</div>
        ";
                }
                // line 119
                echo "      </div>

       <p class=\"catlist-des\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 121);
                echo "</p>

        ";
                // line 123
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 123)) {
                    // line 124
                    echo "        <div class=\"price\">
          ";
                    // line 125
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 125)) {
                        // line 126
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126);
                        echo "
          ";
                    } else {
                        // line 128
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 128);
                        echo "</span>
          ";
                    }
                    // line 130
                    echo "         ";
                    // line 133
                    echo "        </div>
        ";
                }
                // line 135
                echo "
      </div>


        </div>

        ";
                // line 141
                echo "      
      
        <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
                // line 145
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
                echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
                // line 146
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146);
                echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
                echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
        <button type=\"button\"  onclick=\"cart.add('";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                echo "');\" class=\"cartb\"><svg><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 149
                echo "</span></button>
      </div>
     
    </div>

    <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 156
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
            // line 166
            echo " 
    </div>
    <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 169
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 170
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
      ";
        }
        // line 173
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 174
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 176
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 179
        echo "    </div>
      ";
        // line 180
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 181
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 183
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "remart/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 183,  491 => 181,  487 => 180,  484 => 179,  476 => 176,  470 => 174,  467 => 173,  461 => 170,  457 => 169,  452 => 166,  435 => 156,  431 => 155,  423 => 149,  419 => 148,  411 => 146,  404 => 145,  398 => 141,  390 => 135,  386 => 133,  384 => 130,  376 => 128,  370 => 126,  368 => 125,  365 => 124,  363 => 123,  358 => 121,  354 => 119,  350 => 117,  343 => 116,  338 => 115,  330 => 114,  324 => 110,  318 => 106,  315 => 105,  311 => 104,  308 => 103,  306 => 102,  297 => 98,  287 => 90,  280 => 89,  277 => 88,  273 => 86,  270 => 85,  268 => 84,  265 => 83,  259 => 82,  256 => 81,  254 => 80,  247 => 79,  244 => 78,  239 => 77,  237 => 76,  226 => 74,  221 => 71,  217 => 70,  211 => 66,  205 => 65,  197 => 63,  189 => 61,  186 => 60,  182 => 59,  177 => 57,  170 => 52,  164 => 51,  156 => 49,  148 => 47,  145 => 46,  141 => 45,  135 => 42,  126 => 38,  117 => 32,  111 => 29,  105 => 25,  103 => 24,  98 => 22,  93 => 20,  89 => 18,  78 => 16,  74 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/special.twig", "");
    }
}
