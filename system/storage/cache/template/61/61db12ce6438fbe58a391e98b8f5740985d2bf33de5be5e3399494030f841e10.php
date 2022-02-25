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

/* remart/template/product/category.twig */
class __TwigTemplate_3fe87d4d85b60793f9e4507096a0b5eab92b61ff4a91c12bf6932a0309d4bff9 extends \Twig\Template
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
<div id=\"product-category\" class=\"container fnb\">
       
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
            echo "    <li><a href=\"";
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
        echo "  </ul>

      ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 21
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 22
            echo "      <div class=\"cate-top hidden-xs\"> 
         <h2>";
            // line 23
            echo ($context["heading_title"] ?? null);
            echo "</h2>
         <div class=\"row\">
          <!-- <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
            ";
            // line 26
            if (($context["thumb"] ?? null)) {
                // line 27
                echo "          <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive center-block\" />
        ";
            }
            // line 29
            echo "      </div> -->
      <div class=\"";
            // line 30
            if (($context["thumb"] ?? null)) {
                echo " col-lg-10 col-md-9 col-sm-8 col-xs-12 ";
            } else {
                echo " col-xs-12 ";
            }
            echo "\">
         ";
            // line 31
            if (($context["description"] ?? null)) {
                // line 32
                echo "          ";
                echo ($context["description"] ?? null);
                echo "
        ";
            }
            // line 34
            echo "      </div>
      </div>
      </div>
      ";
        }
        // line 38
        echo "      <div class=\"appres\"></div>
    <div class=\"refines\">
      <div class=\"head-t\">
      <h4 class=\"heading\"><span>";
        // line 41
        echo ($context["text_refine"] ?? null);
        echo "</span></h4><hr>
    </div>
      ";
        // line 43
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
            // line 44
            echo "          <ul class=\"list-unstyled list-inline\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 46
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 46);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "          </ul>
      ";
        } else {
            // line 50
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 51
                echo "          <ul class=\"list-unstyled list-inline\">
            ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["category"]);
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 53
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 53);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 53);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      ";
        }
        // line 58
        echo "    </div>

      ";
        // line 60
        if (($context["products"] ?? null)) {
            // line 61
            echo "      <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 67
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 73
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 77
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 81
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 81) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 82
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 82);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 82);
                    echo "</option>
                            ";
                } else {
                    // line 84
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
                            ";
                }
                // line 86
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 92
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 95
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 95) == ($context["limit"] ?? null))) {
                    // line 96
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 96);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 96);
                    echo "</option>
                            ";
                } else {
                    // line 98
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                    echo "</option>
                            ";
                }
                // line 100
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    </select>
                </div>
            </div>
        </div>
      <div class=\"row cpagerow rless\"> ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 106
                echo "        <div class=\"product-layout product-list col-xs-12 cless\">
          <div class=\"product-thumb transition\">
            <div class=\"zi\">
                <div class=\"image\"><a href=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 109);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" class=\"img-responsive center-block\" /></a>
                        <!-- Webiarch Images Start -->
                                  ";
                // line 111
                $context["t"] = 0;
                // line 112
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 113
                    echo "                                    ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 114
                        echo "                                     <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 114);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 114);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                    ";
                        // line 115
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 116
                        echo "                                    ";
                    }
                    // line 117
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                  <!-- Webiarch Images End -->
                  ";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 120)) {
                        // line 121
                        echo "                          <h1 class=\"product-flag newpros\"><span>sale</span></h1>
                    ";
                    }
                    // line 123
                    echo "                ";
                }
                // line 124
                echo "                       ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 124)) {
                    echo "<span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 124);
                    echo "%</span>";
                }
                // line 125
                echo "
                </div>

      <div class=\"caption\">
        <div class=\"cap\">
       
        <div class=\"opbtn\">

          <h4  class=\"col-xs-12 protitle\"><a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "</a></h4>


         <div class=\"rat\">
        ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "          <div class=\"rating\">
            ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 140
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 140) < $context["i"])) {
                            // line 141
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 145
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 149
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 150
                    echo "          <div class=\"rating text-center\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 151
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "</div>
        ";
                }
                // line 154
                echo "      </div>

       <p class=\"catlist-des\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 156);
                echo "</p>

        ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "        <div class=\"price\">
          ";
                    // line 160
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 161);
                        echo "
          ";
                    } else {
                        // line 163
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                        echo "</span>
          ";
                    }
                    // line 165
                    echo "         ";
                    // line 168
                    echo "        </div>
        ";
                }
                // line 170
                echo "
      </div>


        </div>

        ";
                // line 176
                echo "      
      
        <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
                // line 180
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 180);
                echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
                echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
                // line 181
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
                echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
        <button type=\"button\"  onclick=\"cart.add('";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 183);
                echo "');\" class=\"cartb\"><svg><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 184
                echo "</span></button>
      </div>
     
    </div>

    <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 190);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 191
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
            // line 201
            echo " 
      </div>
      <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 204
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 205
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 208
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 209
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 211
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 214
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 215
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 217
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 217,  601 => 215,  596 => 214,  588 => 211,  582 => 209,  579 => 208,  573 => 205,  569 => 204,  564 => 201,  547 => 191,  543 => 190,  535 => 184,  531 => 183,  523 => 181,  516 => 180,  510 => 176,  502 => 170,  498 => 168,  496 => 165,  488 => 163,  482 => 161,  480 => 160,  477 => 159,  475 => 158,  470 => 156,  466 => 154,  462 => 152,  455 => 151,  450 => 150,  442 => 149,  436 => 145,  430 => 141,  427 => 140,  423 => 139,  420 => 138,  418 => 137,  409 => 133,  399 => 125,  392 => 124,  389 => 123,  385 => 121,  382 => 120,  380 => 119,  377 => 118,  371 => 117,  368 => 116,  366 => 115,  359 => 114,  356 => 113,  351 => 112,  349 => 111,  338 => 109,  333 => 106,  329 => 105,  323 => 101,  317 => 100,  309 => 98,  301 => 96,  298 => 95,  294 => 94,  289 => 92,  282 => 87,  276 => 86,  268 => 84,  260 => 82,  257 => 81,  253 => 80,  247 => 77,  238 => 73,  229 => 67,  223 => 64,  218 => 61,  216 => 60,  212 => 58,  209 => 57,  202 => 55,  191 => 53,  187 => 52,  184 => 51,  179 => 50,  175 => 48,  164 => 46,  160 => 45,  157 => 44,  155 => 43,  150 => 41,  145 => 38,  139 => 34,  133 => 32,  131 => 31,  123 => 30,  120 => 29,  110 => 27,  108 => 26,  102 => 23,  99 => 22,  97 => 21,  93 => 20,  89 => 18,  78 => 16,  74 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/category.twig", "");
    }
}
