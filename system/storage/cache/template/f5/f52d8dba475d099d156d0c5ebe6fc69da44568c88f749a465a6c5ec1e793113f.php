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

/* remart/template/extension/module/webiquickview.twig */
class __TwigTemplate_2735d0a4e32ce51afa9d5aa95302a08ff962849a06fd44ad9022651c6991ffbc extends \Twig\Template
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
<div id=\"product-product\" class=\"container product-quickview-detail\">
   <div id=\"page-preloader\" class=\"visible\">
      <div class=\"preloader\">
          <div id=\"loading-center-absolute\">
                <div class=\"object\" id=\"object_one\"></div>
          </div>
      </div>
  </div> 
  <div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <div class=\"row\"> ";
        // line 19
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-xs-12 col-sm-6 col-xs-12 proimg sticky";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-xs-12 col-sm-6 col-xs-12 proimg sticky";
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 25
            echo "
            <div class=\"swiper-viewport\">
              <div id=\"carousel-product-images\" class=\"swiper-container\">
                <div class=\"swiper-wrapper\">";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                echo "                  <div class=\"swiper-slide text-center\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 29);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive center-block\" /></div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</div>
              </div>
              <div class=\"swiper-pagination carousel-product-images show\"></div>
              <div class=\"swiper-pager\">
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
              </div>
            </div>
      <script type=\"text/javascript\"><!--
            \$('#carousel-product-images').swiper({
              mode: 'horizontal',
              slidesPerView: 1,
              pagination: '.carousel-product-images',
              paginationClickable: true,
              nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
              autoplay: 2500,
              loop: true
            });
            --></script>
         
          ";
        }
        // line 52
        echo "        </div>
        ";
        // line 53
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 54
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-xs-12 col-sm-6 col-xs-12 pro-content";
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "        ";
            $context["class"] = "col-lg-6 col-md-6 col-xs-12 col-sm-6 col-xs-12 pro-content";
            // line 57
            echo "        ";
        }
        // line 58
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
           <h1>";
        // line 59
        echo ($context["heading_title"] ?? null);
        echo "</h1>
           <ul class=\"list-unstyled\">
            ";
        // line 61
        if (($context["manufacturer"] ?? null)) {
            // line 62
            echo "            <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 64
        echo "            <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 65
        if (($context["reward"] ?? null)) {
            // line 66
            echo "            <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 68
        echo "            <li><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
            <hr class=\"producthr\">
          </ul>
          ";
        // line 71
        if (($context["price"] ?? null)) {
            // line 72
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 73
            if ( !($context["special"] ?? null)) {
                // line 74
                echo "            <li class=\"text-decor-bold\">
              <h2 class=\"pro-price\">";
                // line 75
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 78
                echo "            <!-- <li><span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span></li> -->
            <li class=\"text-decor-bold\">
              <h2>";
                // line 80
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            ";
            }
            // line 83
            echo "            <!-- ";
            if (($context["tax"] ?? null)) {
                // line 84
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 85
            echo " -->
           
          </ul>
          ";
        }
        // line 89
        echo "          <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 90
            echo "            <h3>";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 92
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 92) == "select")) {
                    // line 93
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 93)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 94);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 94);
                    echo "</label>
              <select name=\"option[";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 95);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 95);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 96
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 97));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 98
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 98);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 98);
                        echo "
                ";
                        // line 99
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 99)) {
                            // line 100
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 100);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 100);
                            echo ")
                ";
                        }
                        // line 101
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "              </select>
            </div>
            ";
                }
                // line 106
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 106) == "radio")) {
                    // line 107
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 107)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 108);
                    echo "</label>
              <div id=\"input-option";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 109);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 110
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                        echo "\" />
                    ";
                        // line 113
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 113)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 113);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 113);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 114
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 114);
                        echo "
                    ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115)) {
                            // line 116
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 116);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 116);
                            echo ")
                    ";
                        }
                        // line 117
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo " </div>
            </div>
            ";
                }
                // line 122
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "checkbox")) {
                    // line 123
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 123)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                    echo "</label>
              <div id=\"input-option";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 125));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 126
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" />
                    ";
                        // line 129
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 130
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 130);
                        echo "
                    ";
                        // line 131
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131)) {
                            // line 132
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132);
                            echo ")
                    ";
                        }
                        // line 133
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo " </div>
            </div>
            ";
                }
                // line 138
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 138) == "text")) {
                    // line 139
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 139)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 140);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 141);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 144
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 144) == "textarea")) {
                    // line 145
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 145)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 146);
                    echo "</label>
              <textarea name=\"option[";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 147);
                    echo "</textarea>
            </div>
            ";
                }
                // line 150
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 150) == "file")) {
                    // line 151
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 151)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 152);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 154);
                    echo "\" />
            </div>
            ";
                }
                // line 157
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "date")) {
                    // line 158
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 161);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 167
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 167) == "datetime")) {
                    // line 168
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 168)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 169);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 171);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 177
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "time")) {
                    // line 178
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 181);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 187
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "            ";
        }
        // line 189
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 190
            echo "            
            <h3>";
            // line 191
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 194
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 196
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 196);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 196);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 202
        echo "             ";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 203
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 205
        echo "            <hr>
             <!-- Quantity option -->
            <div class=\"form-group\">
            <div class=\"\">
                <div class=\"op-box qtlabel\">
                    <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 210
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                </div>
              <div class=\"op-box qty-plus-minus\">
              <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-minus\"></span>
               </button>
              <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 216
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 217
        echo ($context["product_id"] ?? null);
        echo "\" />
               <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-plus\"></span>
               </button>
               </div>
               </div><hr class=\"producthr\">
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 223
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
             <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 224
        echo ($context["button_wishlist"] ?? null);
        echo "\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pwish\" /></svg></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 225
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcom\"/></svg></button>
              
            </div>
            <!-- Quantity option end -->
           </div>
          </div>
      </div>
        ";
        // line 232
        if (($context["tags"] ?? null)) {
            // line 233
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 235
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 235);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 235);
                    echo "</a>,
        ";
                } else {
                    // line 236
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 236);
                    echo "</a> ";
                }
                // line 237
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 239
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger', window.parent.document ).remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$('.breadcrumb', window.parent.document ).after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

        \$('#cart > button', window.parent.document ).html('<div class=\"cimg\"><svg width=\"33px\" height=\"33px\"><use xlink:href=\"#hcart\"></use></svg></div><div class=\"discri\"><div id=\"cart-text\" class=\"text-capitalize mcart hidden-sm-down\">my cart</div><div id=\"carts\">' + json['total'] + '</div></div>');
        
        \$('html, body',  window.parent.document ).animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul', window.parent.document ).load('index.php?route=common/cart/info ul li');
         window.parent.\$.magnificPopup.close();
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 319
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 324
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 330
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 397
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 401
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});
  \$(\"body > *\").hide();
 \$(document).ready(function() {
    \$(\"body > *\").hide();
   \$(\"body > div#product-product\").show();
    \$('.thumbnails').magnificPopup({
      type:'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
 });
//--></script>

<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>
";
        // line 519
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/webiquickview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1089 => 519,  968 => 401,  961 => 397,  891 => 330,  882 => 324,  874 => 319,  790 => 239,  781 => 237,  774 => 236,  764 => 235,  760 => 234,  755 => 233,  753 => 232,  741 => 225,  735 => 224,  729 => 223,  720 => 217,  716 => 216,  707 => 210,  700 => 205,  694 => 203,  691 => 202,  685 => 198,  674 => 196,  670 => 195,  666 => 194,  660 => 191,  657 => 190,  654 => 189,  651 => 188,  645 => 187,  632 => 181,  625 => 179,  618 => 178,  615 => 177,  602 => 171,  595 => 169,  588 => 168,  585 => 167,  572 => 161,  565 => 159,  558 => 158,  555 => 157,  547 => 154,  539 => 153,  535 => 152,  528 => 151,  525 => 150,  513 => 147,  507 => 146,  500 => 145,  497 => 144,  485 => 141,  479 => 140,  472 => 139,  469 => 138,  464 => 135,  456 => 133,  449 => 132,  447 => 131,  442 => 130,  426 => 129,  420 => 128,  416 => 126,  410 => 125,  406 => 124,  399 => 123,  396 => 122,  391 => 119,  383 => 117,  376 => 116,  374 => 115,  369 => 114,  353 => 113,  347 => 112,  343 => 110,  337 => 109,  333 => 108,  326 => 107,  323 => 106,  318 => 103,  311 => 101,  304 => 100,  302 => 99,  295 => 98,  291 => 97,  287 => 96,  281 => 95,  275 => 94,  268 => 93,  265 => 92,  261 => 91,  256 => 90,  253 => 89,  247 => 85,  239 => 84,  236 => 83,  230 => 80,  224 => 78,  218 => 75,  215 => 74,  213 => 73,  210 => 72,  208 => 71,  199 => 68,  191 => 66,  189 => 65,  182 => 64,  172 => 62,  170 => 61,  165 => 59,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  148 => 54,  146 => 53,  143 => 52,  119 => 30,  106 => 29,  102 => 28,  97 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  78 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  53 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/webiquickview.twig", "");
    }
}
