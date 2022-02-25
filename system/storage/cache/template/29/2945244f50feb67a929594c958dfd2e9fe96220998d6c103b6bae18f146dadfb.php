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

/* remart/template/product/search.twig */
class __TwigTemplate_e7b5967d4f04c190d8ed1ed14b3bd2e2d722b91e965471d3b2d2ad43772be060 extends \Twig\Template
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
<div id=\"product-search\" class=\"container cleft fnb\">
        
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

      <h1 class=\"co-heading\">";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"search-page\">
      <label class=\"control-label\" for=\"input-search\">";
        // line 24
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-6\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 27
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
        </div>
        <div class=\"col-md-4 col-sm-6 catsearch\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 31
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 33
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 33) == ($context["category_id"] ?? null))) {
                // line 34
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 34);
                echo "</option>
            ";
            } else {
                // line 36
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 36);
                echo "</option>
            ";
            }
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 39
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 39) == ($context["category_id"] ?? null))) {
                    // line 40
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 40);
                    echo "</option>
            ";
                } else {
                    // line 42
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 42);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 42);
                    echo "</option>
            ";
                }
                // line 44
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 45
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 45) == ($context["category_id"] ?? null))) {
                        // line 46
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 46);
                        echo "</option>
            ";
                    } else {
                        // line 48
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 48);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 48);
                        echo "</option>
            ";
                    }
                    // line 50
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          </select>
        </div>
        <div class=\"col-md-4 col-sm-12 cin\">
          <label class=\"checkbox-inline\">
            ";
        // line 57
        if (($context["sub_category"] ?? null)) {
            // line 58
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 60
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 62
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
      </div>
      <p>
        <label class=\"checkbox-inline\">
            </br>
          ";
        // line 68
        if (($context["description"] ?? null)) {
            // line 69
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 71
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 73
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "  </br></label>
      </p>
      <input type=\"button\" value=\"";
        // line 75
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
    </div>

      
      ";
        // line 79
        if (($context["products"] ?? null)) {
            // line 80
            echo "        <div class=\"brand\">
      <h2 class=\"co-heading\">  </br>";
            // line 81
            echo ($context["ctext_search"] ?? null);
            echo "</h2>
     <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 85
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 88
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 94
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 98
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 102
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 102) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 103
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 103);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 103);
                    echo "</option>
                            ";
                } else {
                    // line 105
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 105);
                    echo "</option>
                            ";
                }
                // line 107
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 113
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 116
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 116) == ($context["limit"] ?? null))) {
                    // line 117
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 117);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 117);
                    echo "</option>
                            ";
                } else {
                    // line 119
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 119);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 119);
                    echo "</option>
                            ";
                }
                // line 121
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                    </select>
                </div>
            </div>
        </div>
      <div class=\"row cpagerow rless\"> ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 127
                echo "        <div class=\"product-layout product-list col-xs-12 cless\">
          <div class=\"product-thumb transition\">
            <div class=\"zi\">
                <div class=\"image\"><a href=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 130);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 130);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" class=\"img-responsive center-block\" /></a>
                        <!-- Webiarch Images Start -->
                                  ";
                // line 132
                $context["t"] = 0;
                // line 133
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 134
                    echo "                                    ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 135
                        echo "                                     <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 135);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 135);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                    ";
                        // line 136
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 137
                        echo "                                    ";
                    }
                    // line 138
                    echo "                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                  <!-- Webiarch Images End -->
                  ";
                // line 140
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141)) {
                        // line 142
                        echo "                          <h1 class=\"product-flag newpros\"><span>sale</span></h1>
                    ";
                    }
                    // line 144
                    echo "                ";
                }
                // line 145
                echo "                       ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 145)) {
                    echo "<span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 145);
                    echo "%</span>";
                }
                // line 146
                echo "
                </div>

      <div class=\"caption\">
        <div class=\"cap\">
       
        <div class=\"opbtn\">

          <h4  class=\"col-xs-12 protitle\"><a href=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                echo "</a></h4>


         <div class=\"rat\">
        ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "          <div class=\"rating\">
            ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 161
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 161) < $context["i"])) {
                            // line 162
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 166
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 170
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 171
                    echo "          <div class=\"rating text-center\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 172
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "</div>
        ";
                }
                // line 175
                echo "      </div>

       <p class=\"catlist-des\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 177);
                echo "</p>

        ";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "        <div class=\"price\">
          ";
                    // line 181
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 181)) {
                        // line 182
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 182);
                        echo "
          ";
                    } else {
                        // line 184
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 184);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 184);
                        echo "</span>
          ";
                    }
                    // line 186
                    echo "         ";
                    // line 189
                    echo "        </div>
        ";
                }
                // line 191
                echo "
      </div>


        </div>

        ";
                // line 197
                echo "      
      
        <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
                // line 201
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 201);
                echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
                echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
                // line 202
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 202);
                echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
                echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
        <button type=\"button\"  onclick=\"cart.add('";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 204);
                echo "');\" class=\"cartb\"><svg><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 205
                echo "</span></button>
      </div>
     
    </div>

    <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 211);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 212
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
            // line 222
            echo " 
      </div>
       <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-12 text-left\">";
            // line 225
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-12 text-right tot\">";
            // line 226
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 229
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 231
        echo "          </div>
      ";
        // line 232
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 233
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
  url = 'index.php?route=product/search';

  var search = \$('#content input[name=\\'search\\']').prop('value');

  if (search) {
    url += '&search=' + encodeURIComponent(search);
  }

  var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

  if (category_id > 0) {
    url += '&category_id=' + encodeURIComponent(category_id);
  }

  var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

  if (sub_category) {
    url += '&sub_category=true';
  }

  var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

  if (filter_description) {
    url += '&description=true';
  }

  location = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
  if (e.keyCode == 13) {
    \$('#button-search').trigger('click');
  }
});

\$('select[name=\\'category_id\\']').on('change', function() {
  if (this.value == '0') {
    \$('input[name=\\'sub_category\\']').prop('disabled', true);
  } else {
    \$('input[name=\\'sub_category\\']').prop('disabled', false);
  }
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 282
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 282,  641 => 233,  637 => 232,  634 => 231,  628 => 229,  622 => 226,  618 => 225,  613 => 222,  596 => 212,  592 => 211,  584 => 205,  580 => 204,  572 => 202,  565 => 201,  559 => 197,  551 => 191,  547 => 189,  545 => 186,  537 => 184,  531 => 182,  529 => 181,  526 => 180,  524 => 179,  519 => 177,  515 => 175,  511 => 173,  504 => 172,  499 => 171,  491 => 170,  485 => 166,  479 => 162,  476 => 161,  472 => 160,  469 => 159,  467 => 158,  458 => 154,  448 => 146,  441 => 145,  438 => 144,  434 => 142,  431 => 141,  429 => 140,  426 => 139,  420 => 138,  417 => 137,  415 => 136,  408 => 135,  405 => 134,  400 => 133,  398 => 132,  387 => 130,  382 => 127,  378 => 126,  372 => 122,  366 => 121,  358 => 119,  350 => 117,  347 => 116,  343 => 115,  338 => 113,  331 => 108,  325 => 107,  317 => 105,  309 => 103,  306 => 102,  302 => 101,  296 => 98,  287 => 94,  278 => 88,  272 => 85,  265 => 81,  262 => 80,  260 => 79,  253 => 75,  247 => 73,  243 => 71,  239 => 69,  237 => 68,  227 => 62,  223 => 60,  219 => 58,  217 => 57,  211 => 53,  205 => 52,  199 => 51,  193 => 50,  185 => 48,  177 => 46,  174 => 45,  169 => 44,  161 => 42,  153 => 40,  150 => 39,  145 => 38,  137 => 36,  129 => 34,  126 => 33,  122 => 32,  118 => 31,  109 => 27,  103 => 24,  98 => 22,  93 => 20,  89 => 18,  78 => 16,  74 => 15,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/search.twig", "");
    }
}
