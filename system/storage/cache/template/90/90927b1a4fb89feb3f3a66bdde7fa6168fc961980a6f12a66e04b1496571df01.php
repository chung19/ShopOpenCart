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

/* remart/template/product/product.twig */
class __TwigTemplate_167f15efcb76760a205cb3b506a910bfbb82cf0eb592f678dfc55d750571564a extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
 
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
            $context["class"] = "col-sm-8 col-md-9 col-xs-12";
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
        echo "
    <div id=\"content\" class=\"";
        // line 13
        echo ($context["class"] ?? null);
        echo "\">

    <ul class=\"breadcrumb\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>

      ";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"productbg\">
      <div class=\"row\">
        ";
        // line 24
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "        ";
            $context["class"] = "col-lg-6 col-md-12 col-xs-12 col-sm-12 proimg sticky";
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "        ";
            $context["class"] = "col-sm-6 col-md-12 col-lg-5 col-xs-12 proimg sticky";
            // line 28
            echo "        ";
        }
        // line 29
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
        ";
        // line 30
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 31
            echo "                        <ul class=\"thumbnails\">
                            ";
            // line 32
            if (($context["thumb"] ?? null)) {
                // line 33
                echo "                            <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                    <img data-zoom-image=\"";
                // line 34
                echo ($context["popup"] ?? null);
                echo "\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" id=\"zoom_03\" class=\"img-responsive center-block\" alt=\"image\">
                                </a>
                            </li>
                            ";
            }
            // line 38
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 39
                echo "                            <div class=\"row\">
                            <li id=\"gallery_01\" class=\"owl-carousel\">
                                ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 42
                    echo "                                <a data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 42);
                    echo "\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 42);
                    echo "\"  href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 42);
                    echo "\" class=\"col-xs-12\">
                                    <img src=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 43);
                    echo "\" class=\"img-responsive center-block\" alt=\"additional image\">
                                </a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            </li>
                            </div>
                            ";
            }
            // line 49
            echo "                        </ul>
          ";
        }
        // line 51
        echo "        </div>
        ";
        // line 52
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 53
            echo "        ";
            $context["class"] = "col-lg-6 col-md-12 col-xs-12 col-sm-12";
            // line 54
            echo "        ";
        } else {
            // line 55
            echo "        ";
            $context["class"] = "col-lg-7 col-md-6 col-xs-12 col-sm-6";
            // line 56
            echo "        ";
        }
        // line 57
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo " pro-content\">
          <h1>";
        // line 58
        echo ($context["heading_title"] ?? null);
        echo "</h1><hr class=\"producthr\">
          <ul class=\"list-unstyled\">
            ";
        // line 60
        if (($context["manufacturer"] ?? null)) {
            // line 61
            echo "            <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 63
        echo "            <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 64
        if (($context["reward"] ?? null)) {
            // line 65
            echo "            <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 67
        echo "            <li><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span> ";
        echo ($context["stock"] ?? null);
        echo "</li>
            <hr class=\"producthr\">
          </ul>
          ";
        // line 70
        if (($context["price"] ?? null)) {
            // line 71
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 72
            if ( !($context["special"] ?? null)) {
                // line 73
                echo "            <li class=\"text-decor-bold\">
              <h2 class=\"pro-price\">";
                // line 74
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 77
                echo "            <ul class=\"list-inline\">
            <li class=\"text-decor-bold\">
              <h2>";
                // line 79
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            <li><span class=\"price-old\">";
                // line 81
                echo ($context["price"] ?? null);
                echo "</span></li></ul>
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
            ";
            // line 86
            if (($context["points"] ?? null)) {
                // line 87
                echo "            <li class=\"text-decor-bold points\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 89
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 90
                echo "            <li>
              <hr class=\"producthr\">
            </li>
            ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 94
                    echo "            <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 94);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 94);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "            ";
            }
            // line 97
            echo "          </ul>
          ";
        }
        // line 99
        echo "          <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 100
            echo "            <hr class=\"producthr\">
            <h3>";
            // line 101
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 103
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 103) == "select")) {
                    // line 104
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 104)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 105);
                    echo "</label>
              <select name=\"option[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 107
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 109
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 109);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 109);
                        echo "
                ";
                        // line 110
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110)) {
                            // line 111
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                            echo ")
                ";
                        }
                        // line 112
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "              </select>
            </div>
            ";
                }
                // line 117
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 117) == "radio")) {
                    // line 118
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 118)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 119);
                    echo "</label>
              <div id=\"input-option";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 120);
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 121
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 123);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 123);
                        echo "\" />
                    ";
                        // line 124
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 124)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 124);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 124);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 124);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 124);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 125
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 125);
                        echo "
                    ";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 127);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127);
                            echo ")
                    ";
                        }
                        // line 128
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo " </div>
            </div>
            ";
                }
                // line 133
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 134)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 135);
                    echo "</label>
              <div id=\"input-option";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 137
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 139);
                        echo "\" />
                    ";
                        // line 140
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 140)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 140);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 140);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 141
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 141);
                        echo "
                    ";
                        // line 142
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142)) {
                            // line 143
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 143);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143);
                            echo ")
                    ";
                        }
                        // line 144
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo " </div>
            </div>
            ";
                }
                // line 149
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "text")) {
                    // line 150
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 150)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 151);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 152);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 152);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 155
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 155) == "textarea")) {
                    // line 156
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 156)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "</label>
              <textarea name=\"option[";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 158);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 158);
                    echo "</textarea>
            </div>
            ";
                }
                // line 161
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "file")) {
                    // line 162
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btnup btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "\" />
            </div>
            ";
                }
                // line 168
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "date")) {
                    // line 169
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 172);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn datebtn\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 178
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 178) == "datetime")) {
                    // line 179
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 179)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 180);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 182);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 188
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 188) == "time")) {
                    // line 189
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 189)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 190);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 192);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn datebtn\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 198
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "            
            ";
        }
        // line 201
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 202
            echo "            
            <h3>";
            // line 203
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 206
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 208
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 208);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 208);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 214
        echo "            <hr class=\"producthr\">
            <!-- Quantity option -->
            <div class=\"form-group\">
            <div class=\"\">
                <div class=\"op-box qtlabel\">
                    <label class=\"control-label text-decorop\" for=\"input-quantity\">";
        // line 219
        echo ($context["entry_qty"] ?? null);
        echo " :</label>
                </div>
              <div class=\"op-box qty-plus-minus\">
              <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-minus\"></span>
               </button>
              <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 225
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 226
        echo ($context["product_id"] ?? null);
        echo "\" />
               <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                  <span class=\"glyphicon glyphicon-plus\"></span>
               </button>
               </div>
               </div><hr class=\"producthr\">
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 232
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
             <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 233
        echo ($context["button_wishlist"] ?? null);
        echo "\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pwish\" /></svg></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 234
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcom\"/></svg></button>
              <hr class=\"producthr\">
            </div>
            <!-- Quantity option end -->
            ";
        // line 238
        if ((($context["minimum"] ?? null) > 1)) {
            // line 239
            echo "            <div class=\"alert alert-info palert\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 240
        echo "</div>
          ";
        // line 241
        if (($context["review_status"] ?? null)) {
            // line 242
            echo "          <div class=\"rating\">
            <li>";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 244
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 245
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </li>
              <li class=\"proreview\">
                <a id=\"ratecount\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 247
            echo ($context["reviews"] ?? null);
            echo "</a>
              </li>
              <li>
                <a id=\"ratep\" href=\"#rt\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 250
            echo ($context["text_write"] ?? null);
            echo "</a>
              </li>
            <hr class=\"producthr\">
             <!-- AddToAny BEGIN -->
                        <div class=\"a2a_kit a2a_kit_size_32 a2a_default_style\">
                            <a class=\"a2a_button_facebook\"></a>
                            <a class=\"a2a_button_twitter\"></a>
                            <a class=\"a2a_button_google_plus\"></a>
                            <a class=\"a2a_button_pinterest\"></a>
                            <a class=\"a2a_button_linkedin\"></a>
                            <a class=\"a2a_dd\" href=\"https://www.addtoany.com/share\"></a>
                        </div>
                        <script async src=\"https://static.addtoany.com/menu/page.js\"></script>
            <!-- AddToAny END -->
          </div>
          ";
        }
        // line 265
        echo " </div>
      </div>
<div class=\"product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 269
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 270
        if (($context["attribute_groups"] ?? null)) {
            // line 271
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 273
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 274
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 276
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 278
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 279
        if (($context["attribute_groups"] ?? null)) {
            // line 280
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 283
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 285);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 289));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 290
                    echo "                <tr>
                  <td>";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 291);
                    echo "</td>
                  <td>";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 292);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "              </table>
            </div>
            ";
        }
        // line 300
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 301
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"co-heading\">";
            // line 304
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 305
            if (($context["review_guest"] ?? null)) {
                // line 306
                echo "                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 308
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 309
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 314
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <!-- <div class=\"help-block\">";
                // line 316
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                  </div>
                </div>
                <div class=\"form-group required\">

                  <div class=\"radi\">
                                          <label class=\"control-label\" for=\"input-review\">";
                // line 322
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                  <div class=\"form-rating\">

                      <div class=\"form-rating-container pull-left\">
                        <input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-5\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-4\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-3\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-2\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-1\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                      </div>
                    </div></div>
                </div>

                ";
                // line 355
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 358
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 362
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 364
            echo "              </form>
            </div>
            ";
        }
        // line 366
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 369
        if (($context["products"] ?? null)) {
            // line 370
            echo "      <div class=\"relpro fnb\">
        <div class=\"head-t\">
            <h4 class=\"heading-home text-left pull-left\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
            // line 372
            echo ($context["text_related"] ?? null);
            echo "<hr></span></h4>
    </div>
      <div class=\"row xspspace rless\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 376
            $context["i"] = 0;
            // line 377
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 378
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 379
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 380
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 381
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 382
                    echo "        ";
                } else {
                    // line 383
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 384
                    echo "        ";
                }
                // line 385
                echo "     <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 387
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 387);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 387);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 387);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 387);
                echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Webiarch Images Start -->
                        ";
                // line 389
                $context["t"] = 0;
                // line 390
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 390));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 391
                    echo "                          ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 392
                        echo "                           <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 392);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 392);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                        // line 393
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 394
                        echo "                          ";
                    }
                    // line 395
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 396
                echo "        <!-- Webiarch Images End -->
       ";
                // line 397
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 397)) {
                    // line 398
                    echo "          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 398)) {
                        // line 399
                        echo "        <h1 class=\"product-flag newpros\"><span>sale</span></h1>
       ";
                    }
                    // line 401
                    echo "      ";
                }
                // line 402
                echo "       <!-- ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 402)) {
                    echo "<h1 class=\"new-product\"><span>NEW</span></h1>";
                }
                echo " -->
        ";
                // line 403
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 403)) {
                    // line 404
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 404);
                    echo "%</span>
        ";
                }
                // line 406
                echo "

    

      </div>
      <div class=\"caption text-center\">
         
         <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
                // line 416
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 416)) {
                    // line 417
                    echo "          <div class=\"rating text-center\">
            ";
                    // line 418
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 419
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 419) < $context["i"])) {
                            // line 420
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 424
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 428
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 429
                    echo "          <div class=\"rating text-center\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 430
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 431
                    echo "</div>
        ";
                }
                // line 433
                echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
                // line 435
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 435);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 435);
                echo "</a></h4>

         ";
                // line 437
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 437)) {
                    // line 438
                    echo "        <div class=\"price col-xs-12 text-center\">
          ";
                    // line 439
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 439)) {
                        // line 440
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 440);
                        echo "
          ";
                    } else {
                        // line 442
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 442);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 442);
                        echo "</span>
          ";
                    }
                    // line 444
                    echo "         ";
                    // line 447
                    echo "        </div>
        ";
                }
                // line 449
                echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
                // line 453
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 453);
                echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
                echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
                // line 454
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 454);
                echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
                echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
                // line 456
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 456);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 457
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
                // line 462
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 462);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 463
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div>  
      </div>
      
    </div>
  </div>
        <!-- ";
                // line 470
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 471
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 472
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 473
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 474
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 475
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 476
                echo " -->
        ";
                // line 477
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 478
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "        </div>
      </div>
    </div>
        ";
        }
        // line 483
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 484
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 486
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 486);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 486);
                    echo "</a>,
        ";
                } else {
                    // line 487
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 487);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 487);
                    echo "</a> ";
                }
                // line 488
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 490
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 491
        echo ($context["column_right"] ?? null);
        echo "</div>
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
      \$('.alert-dismissible, .text-danger').remove();
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
        \$('#content').parent().before('<div class=\"a-one\"><div class=\"alert alert-success alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use> </svg> ' + json.success + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');
          setTimeout(function() {
              \$('#cart > button').html('<div class=\"cimg\"><svg width=\"35px\" height=\"35px\"><use xlink:href=\"#hcart\"></use></svg><span id=\"carts\">' + json['total'] + '</span></div><div class=\"discri text-left\"><div id=\"cart-text\" class=\"text-capitalize mcart hidden-sm-down\">my cart</div></div>');
          }, 100);
          \$('.a-one').delay(5000).fadeOut();
          \$('#cart > ul').load('index.php?route=common/cart/info ul li')
          \$(\"button.close\").click(function() {
              \$(\".a-one\").remove();
          })
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
        // line 571
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 576
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 582
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

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 727
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 731
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

\$(document).ready(function() {
  \$('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>
<!-- related -->
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#related\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [400,2],
    [600,2],
    [767, 2],
    [992, 2],
    [1199, 3],
    [1410, 3],
    [1600, 4]
    ],
      // autoPlay: 1000,
     navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>
<!-- related over -->
<!-- zoom product start -->
<!-- zoom product start -->
<script>
     if (jQuery(window).width() >= 1200){
        //initiate the plugin and pass the id of the div containing gallery images
            \$(\"#zoom_03\").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
        //pass the images to Fancybox
            \$(\"#zoom_03\").bind(\"click\", function (e) {
            var ez = \$('#zoom_03').data('elevateZoom');
            \$.fancybox(ez.getGalleryList());
            return false;
            });
    }
</script>
<!--ZOOM END-->

<!--slider for product-->
<script type=\"text/javascript\"><!--
\$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 3],
        [370,4],
        [450, 4],
        [550, 6],
        [768, 6],
        [992, 4],
        [1200, 4],
        [1600, 6]
        ],
   autoPlay: 1000,
  autoPlay: true,
  navigation: false,
  navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
  pagination: false
});
--></script>
<!--over slider for product-->


";
        // line 830
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "remart/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1773 => 830,  1671 => 731,  1664 => 727,  1516 => 582,  1507 => 576,  1499 => 571,  1416 => 491,  1411 => 490,  1402 => 488,  1395 => 487,  1385 => 486,  1381 => 485,  1376 => 484,  1373 => 483,  1367 => 479,  1361 => 478,  1359 => 477,  1356 => 476,  1352 => 475,  1350 => 474,  1347 => 473,  1345 => 472,  1342 => 471,  1340 => 470,  1330 => 463,  1326 => 462,  1318 => 457,  1314 => 456,  1306 => 454,  1299 => 453,  1293 => 449,  1289 => 447,  1287 => 444,  1279 => 442,  1273 => 440,  1271 => 439,  1268 => 438,  1266 => 437,  1259 => 435,  1255 => 433,  1251 => 431,  1244 => 430,  1239 => 429,  1231 => 428,  1225 => 424,  1219 => 420,  1216 => 419,  1212 => 418,  1209 => 417,  1207 => 416,  1195 => 406,  1189 => 404,  1187 => 403,  1180 => 402,  1177 => 401,  1173 => 399,  1170 => 398,  1168 => 397,  1165 => 396,  1159 => 395,  1156 => 394,  1154 => 393,  1147 => 392,  1144 => 391,  1139 => 390,  1137 => 389,  1126 => 387,  1122 => 385,  1119 => 384,  1116 => 383,  1113 => 382,  1110 => 381,  1107 => 380,  1104 => 379,  1101 => 378,  1096 => 377,  1094 => 376,  1087 => 372,  1083 => 370,  1081 => 369,  1076 => 366,  1071 => 364,  1065 => 362,  1056 => 358,  1050 => 355,  1014 => 322,  1005 => 316,  1000 => 314,  992 => 309,  988 => 308,  984 => 306,  982 => 305,  978 => 304,  973 => 301,  970 => 300,  965 => 297,  958 => 295,  949 => 292,  945 => 291,  942 => 290,  938 => 289,  931 => 285,  927 => 283,  923 => 282,  919 => 280,  917 => 279,  913 => 278,  909 => 276,  903 => 274,  900 => 273,  894 => 271,  892 => 270,  888 => 269,  882 => 265,  863 => 250,  857 => 247,  848 => 245,  841 => 244,  837 => 243,  834 => 242,  832 => 241,  829 => 240,  823 => 239,  821 => 238,  812 => 234,  806 => 233,  800 => 232,  791 => 226,  787 => 225,  778 => 219,  771 => 214,  765 => 210,  754 => 208,  750 => 207,  746 => 206,  740 => 203,  737 => 202,  734 => 201,  730 => 199,  724 => 198,  711 => 192,  704 => 190,  697 => 189,  694 => 188,  681 => 182,  674 => 180,  667 => 179,  664 => 178,  651 => 172,  644 => 170,  637 => 169,  634 => 168,  626 => 165,  618 => 164,  614 => 163,  607 => 162,  604 => 161,  592 => 158,  586 => 157,  579 => 156,  576 => 155,  564 => 152,  558 => 151,  551 => 150,  548 => 149,  543 => 146,  535 => 144,  528 => 143,  526 => 142,  521 => 141,  505 => 140,  499 => 139,  495 => 137,  489 => 136,  485 => 135,  478 => 134,  475 => 133,  470 => 130,  462 => 128,  455 => 127,  453 => 126,  448 => 125,  432 => 124,  426 => 123,  422 => 121,  416 => 120,  412 => 119,  405 => 118,  402 => 117,  397 => 114,  390 => 112,  383 => 111,  381 => 110,  374 => 109,  370 => 108,  366 => 107,  360 => 106,  354 => 105,  347 => 104,  344 => 103,  340 => 102,  336 => 101,  333 => 100,  330 => 99,  326 => 97,  323 => 96,  312 => 94,  308 => 93,  303 => 90,  300 => 89,  292 => 87,  290 => 86,  287 => 85,  279 => 84,  276 => 83,  271 => 81,  266 => 79,  262 => 77,  256 => 74,  253 => 73,  251 => 72,  248 => 71,  246 => 70,  237 => 67,  229 => 65,  227 => 64,  220 => 63,  210 => 61,  208 => 60,  203 => 58,  198 => 57,  195 => 56,  192 => 55,  189 => 54,  186 => 53,  184 => 52,  181 => 51,  177 => 49,  172 => 46,  163 => 43,  154 => 42,  150 => 41,  146 => 39,  143 => 38,  134 => 34,  127 => 33,  125 => 32,  122 => 31,  120 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  101 => 24,  95 => 21,  91 => 19,  80 => 17,  76 => 16,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/product.twig", "");
    }
}
