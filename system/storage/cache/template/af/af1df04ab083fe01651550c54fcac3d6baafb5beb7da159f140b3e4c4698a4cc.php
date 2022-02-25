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

/* remart/template/account/account.twig */
class __TwigTemplate_1e8bf30d597dff575f6f24c4c0907c4327d6fe113d775ec89ed24216f66be7b5 extends \Twig\Template
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
<div id=\"account-account\" class=\"container acpage\">
  
 
  <div class=\"row bgcolor\">";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 6
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-8 col-md-6  col-xs-12 colright accw";
            // line 8
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9  col-xs-12 colright";
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
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
       ";
        // line 14
        if (($context["success"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 17
        echo "      <ul class=\"breadcrumb\">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
      <div class=\"acco\">

        ";
        // line 24
        echo ($context["content_top"] ?? null);
        echo "
      <h2 class=\"achead\">";
        // line 25
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
      <div class=\"row accrow\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 28
        echo ($context["edit"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acpoder\"></use> </svg></span><span>";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "<br><span>edit your account</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 33
        echo ($context["password"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acppass\"></use> </svg></span><span>";
        // line 34
        echo ($context["text_password"] ?? null);
        echo "<br><span>Change Your Passowrd</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 38
        echo ($context["address"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acppadd\"></use> </svg></span><span>";
        // line 39
        echo ($context["text_address"] ?? null);
        echo "<br><span>Edit your address</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 43
        echo ($context["newsletter"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acnewsl\"></use> </svg></span><span>";
        // line 44
        echo ($context["text_newsletter"] ?? null);
        echo "<br><span>subscribe for newsletter</span></span>
          </a>
        </div>
        ";
        // line 48
        echo "      </div>
      ";
        // line 49
        if (($context["credit_cards"] ?? null)) {
            // line 50
            echo "      <h2 class=\"achead\">";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
      <ul class=\"list-unstyled accolor\">
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 53
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 53);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 53);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "      </ul>
      ";
        }
        // line 57
        echo "      <h2 class=\"achead\">";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
      <div class=\"row accrow\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 60
        echo ($context["order"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acporderh\"></use> </svg></span><span>";
        // line 61
        echo ($context["text_order"] ?? null);
        echo "<br><span>See your order history</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 65
        echo ($context["download"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acpdown\"></use> </svg></span><span>";
        // line 66
        echo ($context["text_download"] ?? null);
        echo "<br><span>Download Your Theme</span></span>
          </a>
        </div>
        ";
        // line 69
        if (($context["reward"] ?? null)) {
            // line 70
            echo "        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
            // line 71
            echo ($context["reward"] ?? null);
            echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acpreward\"></use> </svg></span><span>";
            // line 72
            echo ($context["text_reward"] ?? null);
            echo "<br><span>Count Reward Point</span></span>
          </a>
        </div>
        ";
        }
        // line 76
        echo "        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 77
        echo ($context["return"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acpreturn\"></use> </svg></span><span>";
        // line 78
        echo ($context["text_return"] ?? null);
        echo "<br><span>See your Return</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 82
        echo ($context["transaction"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acptran\"></use> </svg></span><span>";
        // line 83
        echo ($context["text_transaction"] ?? null);
        echo "<br><span>See your Transaction</span></span>
          </a>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
          <a href=\"";
        // line 87
        echo ($context["recurring"] ?? null);
        echo "\">
            <span><svg class=\"\" width=\"52px\" height=\"52px\"> <use xlink:href=\"#acppay\"></use> </svg></span><span>";
        // line 88
        echo ($context["text_recurring"] ?? null);
        echo "<br><span>See your Payment</span></span>
          </a>
        </div>
      </div>
      
      ";
        // line 93
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 94
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 96
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 96,  272 => 94,  268 => 93,  260 => 88,  256 => 87,  249 => 83,  245 => 82,  238 => 78,  234 => 77,  231 => 76,  224 => 72,  220 => 71,  217 => 70,  215 => 69,  209 => 66,  205 => 65,  198 => 61,  194 => 60,  187 => 57,  183 => 55,  172 => 53,  168 => 52,  162 => 50,  160 => 49,  157 => 48,  151 => 44,  147 => 43,  140 => 39,  136 => 38,  129 => 34,  125 => 33,  118 => 29,  114 => 28,  108 => 25,  104 => 24,  99 => 21,  88 => 19,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/account/account.twig", "");
    }
}
