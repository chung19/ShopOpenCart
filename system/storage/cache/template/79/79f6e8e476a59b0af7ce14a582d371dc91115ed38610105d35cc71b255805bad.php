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

/* remart/template/checkout/cart.twig */
class __TwigTemplate_85c42a26c83151d1655c61b4f5c43ee30b4bed5e60d425ca1f40c433a87b8611 extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container\">
  
  ";
        // line 4
        if (($context["attention"] ?? null)) {
            // line 5
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 10
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <ul class=\"breadcrumb\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 30
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 30);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>
      <div class=\"head-t\">
      <h4><span>";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 35
        if (($context["weight"] ?? null)) {
            // line 36
            echo "        &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 37
        echo "<hr></span></h4>
      </div>

      <form action=\"";
        // line 40
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

        <div class=\"account-responsive\">
          <div class=\"table-account col-xs-12\">
             ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 45
            echo "             <div class=\"acco-table col-xs-12\">
            <div class=\"crt-img col-md-3 col-xs-12 col-sm-6 text-left\">
              <div class=\"text-left\">";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 47);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</div>
            </div>
            <div class=\"crt-dsc text-left col-md-9 col-xs-12 col-sm-6\">
              <a class=\"acnt-ttl\" href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 50);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
            echo "
                ";
            // line 51
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 51)) {
                // line 52
                echo "               <span class=\"text-danger\">***</span>
             ";
            }
            // line 53
            echo "</a>
             

                ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 56)) {
                // line 57
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 58);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 58);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                ";
            }
            // line 60
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 60)) {
                echo " <br />
                <small>";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 61);
                echo "</small> ";
            }
            // line 62
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 62)) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 63
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> 
                <small>";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 64);
                echo "</small> 
                ";
            }
            // line 66
            echo "
               <div class=\"text-left ac-md\">";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 67);
            echo "</div>
               <div class=\"text-left ac-pr col-md-4 col-sm-6 col-xs-6\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68);
            echo "</div>
              <div class=\"text-left ac-ct col-md-4 col-sm-6 col-xs-6\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 70);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 70);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 73
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 73);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></div>
              
              <div class=\"text-left ac-tl col-md-4 col-sm-12 col-xs-12\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 76);
            echo "</div>
              </div>
               </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
           

            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 84
            echo "            <div>
              <div class=\"text-left\">";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 85);
            echo "</div>
              <div class=\"text-left\"></div>
              <div class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 90);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></div>
              <div class=\"text-right\">";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 92);
            echo "</div>
              <div class=\"text-right\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 93);
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "          </div>
        </div>
      </form>
      ";
        // line 99
        if (($context["modules"] ?? null)) {
            // line 100
            echo "      <h2 class=\"accon\">";
            echo ($context["text_next"] ?? null);
            echo "</h2>
      <p>";
            // line 101
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 103
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " </div>
      ";
        }
        // line 105
        echo " <br />
      <div class=\"row\">
        <div class=\"col-sm-6 col-xs-12 col-md-5 crt-ttl\">
          <div class=\"total-bordered\">
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "            <div>
              <div class=\"text-right col-sm-6 col-xs-6 totl\"><strong>";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 111);
            echo ":</strong></div>
              <div class=\"text-right col-sm-6 col-xs-6 totl\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 112);
            echo "</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "          </div>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 119
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 120
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "remart/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 125,  399 => 123,  395 => 122,  388 => 120,  382 => 119,  376 => 115,  367 => 112,  363 => 111,  360 => 110,  356 => 109,  350 => 105,  346 => 104,  337 => 103,  333 => 102,  329 => 101,  324 => 100,  322 => 99,  317 => 96,  308 => 93,  304 => 92,  297 => 90,  289 => 85,  286 => 84,  282 => 83,  277 => 80,  267 => 76,  259 => 73,  255 => 72,  248 => 70,  243 => 68,  239 => 67,  236 => 66,  231 => 64,  227 => 63,  222 => 62,  218 => 61,  213 => 60,  210 => 59,  201 => 58,  194 => 57,  192 => 56,  187 => 53,  183 => 52,  181 => 51,  175 => 50,  159 => 47,  155 => 45,  151 => 44,  144 => 40,  139 => 37,  133 => 36,  131 => 35,  127 => 34,  123 => 32,  112 => 30,  108 => 29,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  75 => 19,  67 => 15,  64 => 14,  56 => 10,  53 => 9,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/checkout/cart.twig", "");
    }
}
