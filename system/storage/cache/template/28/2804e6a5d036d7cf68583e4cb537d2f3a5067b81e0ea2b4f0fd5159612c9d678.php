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

/* remart/template/common/cart.twig */
class __TwigTemplate_3ac0e9c6ef59f7eb284d7653a2ba2010ecc4e6d303d2e6c4f523221526b4cb18 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
    <div class=\"cimg\"><svg width=\"35px\" height=\"35px\"><use xlink:href=\"#hcart\"></use></svg><span id=\"carts\">";
        // line 3
        echo ($context["text_items"] ?? null);
        echo "</span></div>
    <div class=\"discri text-left\">
   <div id=\"cart-text\" class=\"text-capitalize mcart hidden-sm-down\">my cart</div>
   
  </div>
   </button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 10
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 11
            echo "    <li>
      <div>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "        <div class=\"col-xs-12 cartdrop\">
          <div class=\"pull-left imgpro\">";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</div>
          <div class=\"pull-left cartname\"><a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "            ";
                }
                // line 18
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 18)) {
                    echo " <br />
            - <small>";
                    // line 19
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 19);
                    echo "</small> ";
                }
                echo "  
          </div>
  <div class=\"pull-right\"><button type=\"button\" onclick=\"cart.remove('";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 21);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-pri btn-xs\"><i class=\"fa fa-times\"></i></button></div>
          <div class=\"cartprice\">
            <span>";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 23);
                echo " x</span>
            <span>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 24);
                echo "</span>
          </div>
         
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 32);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 34);
                echo "</td>
          <td class=\"text-center text-primary\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 35);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </div>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 44
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 46);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </table>
        <p class=\"cartbt\"><a href=\"";
            // line 50
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></p>
      </div>
    </li>
    ";
        } else {
            // line 54
            echo "    <li>
      <p class=\"text-center\">";
            // line 55
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 58
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "remart/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 58,  201 => 55,  198 => 54,  185 => 50,  182 => 49,  173 => 46,  169 => 45,  166 => 44,  162 => 43,  155 => 38,  144 => 35,  140 => 34,  135 => 32,  131 => 30,  126 => 29,  115 => 24,  111 => 23,  104 => 21,  95 => 19,  90 => 18,  87 => 17,  81 => 16,  67 => 15,  64 => 14,  60 => 13,  56 => 11,  54 => 10,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/cart.twig", "");
    }
}
