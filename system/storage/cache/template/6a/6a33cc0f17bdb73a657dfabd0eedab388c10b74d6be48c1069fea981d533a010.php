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

/* remart/template/product/compare.twig */
class __TwigTemplate_208f80695853eec2127999a132b134b383d5cd8d4fe2aa9a94c0bbeb6bba0022 extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
        
 
  <div class=\"row infobg\">";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 6
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 8
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9  col-xs-12 colright";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 12
            echo "    ";
        }
        // line 13
        echo "    <div id=\"content\" class=\"comp ";
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
        // line 19
        if (($context["success"] ?? null)) {
            // line 20
            echo "   <div class=\"a-one\"><div class=\"alert alert-success alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use></svg> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div></div>
  ";
        }
        // line 24
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      
      <div class=\"head-t\">
         <h4 class=\"heading-home\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 27
        echo ($context["cheading_title"] ?? null);
        echo "<hr></span></h4>
      </div>

      ";
        // line 30
        if (($context["products"] ?? null)) {
            // line 31
            echo "      <div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 35
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 40
            echo ($context["text_name"] ?? null);
            echo "</td>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "            <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo " </tr>
          <tr>
            <td>";
            // line 45
            echo ($context["text_image"] ?? null);
            echo "</td>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "            <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo " </tr>
          <tr>
            <td>";
            // line 50
            echo ($context["text_price"] ?? null);
            echo "</td>
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 52
                echo "            <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "              ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                        echo "
              ";
                    } else {
                        // line 55
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55);
                        echo "
              ";
                    }
                    // line 57
                    echo "              ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " </tr>
          <tr>
            <td>";
            // line 60
            echo ($context["text_model"] ?? null);
            echo "</td>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 62);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " </tr>
          <tr>
            <td>";
            // line 65
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 67);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " </tr>
          <tr>
            <td>";
            // line 70
            echo ($context["text_availability"] ?? null);
            echo "</td>
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 72);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo " </tr>
        ";
            // line 74
            if (($context["review_status"] ?? null)) {
                // line 75
                echo "        <tr>
          <td>";
                // line 76
                echo ($context["text_rating"] ?? null);
                echo "</td>
          ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 78
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 79
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 79) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 80
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 81);
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo " </tr>
        ";
            }
            // line 84
            echo "        <tr>
          <td class=\"com-summary\">";
            // line 85
            echo ($context["text_summary"] ?? null);
            echo "</td>
          ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 87
                echo "          <td class=\"description com-description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 87);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo " </tr>
        <tr>
          <td>";
            // line 90
            echo ($context["text_weight"] ?? null);
            echo "</td>
          ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 92
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 92);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " </tr>
        <tr>
          <td>";
            // line 95
            echo ($context["text_dimension"] ?? null);
            echo "</td>
          ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 97);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 97);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 97);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo " </tr>
          </tbody>
        
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 102
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 104
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 104);
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 108
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 110);
                    echo "</td>
            ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 112
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 112)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 113
                            echo "            <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 113)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
            ";
                        } else {
                            // line 115
                            echo "            <td></td>
            ";
                        }
                        // line 117
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "        <tr>
          <td></td>
          ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 125
                echo "          <td class=\"text-center comb\"><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 125);
                echo "');\" />
            <a href=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 126);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo " </tr>
      </table></div>
      ";
        } else {
            // line 130
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 132
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 135
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 136
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 138
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "remart/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 138,  520 => 136,  515 => 135,  507 => 132,  501 => 130,  496 => 127,  486 => 126,  477 => 125,  473 => 124,  469 => 122,  463 => 121,  455 => 118,  449 => 117,  445 => 115,  439 => 113,  436 => 112,  432 => 111,  428 => 110,  424 => 108,  420 => 107,  412 => 104,  408 => 102,  404 => 101,  399 => 98,  386 => 97,  382 => 96,  378 => 95,  374 => 93,  365 => 92,  361 => 91,  357 => 90,  353 => 88,  344 => 87,  340 => 86,  336 => 85,  333 => 84,  329 => 82,  321 => 81,  313 => 80,  306 => 79,  301 => 78,  297 => 77,  293 => 76,  290 => 75,  288 => 74,  285 => 73,  276 => 72,  272 => 71,  268 => 70,  264 => 68,  255 => 67,  251 => 66,  247 => 65,  243 => 63,  234 => 62,  230 => 61,  226 => 60,  222 => 58,  213 => 57,  205 => 55,  199 => 54,  196 => 53,  193 => 52,  189 => 51,  185 => 50,  181 => 48,  164 => 47,  160 => 46,  156 => 45,  152 => 43,  141 => 42,  137 => 41,  133 => 40,  123 => 35,  117 => 31,  115 => 30,  109 => 27,  102 => 24,  94 => 20,  92 => 19,  89 => 18,  78 => 16,  74 => 15,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/compare.twig", "");
    }
}
