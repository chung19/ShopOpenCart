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

/* remart/template/account/return_form.twig */
class __TwigTemplate_284c252b29f52cb55595f239ee19b16667c3f1899c4a93b18b6373e6134880c0 extends \Twig\Template
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
<div id=\"account-return\" class=\"container acpage\">

 
  <div class=\"row\"> ";
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
            $context["class"] = "col-sm-8 col-md-9 col-xs-12 colright";
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
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 17
        echo "     ";
        echo ($context["content_top"] ?? null);
        echo "
      <ul class=\"breadcrumb\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\"> ";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </ul>
<div class=\"infobg\">
      <div class=\"head-t\">
        <h4 class=\"heading\"><span>";
        // line 25
        echo ($context["cheading_title"] ?? null);
        echo "</span></h4><hr>
      </div>
      <p>";
        // line 27
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 30
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-firstname\">";
        // line 32
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 34
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 35
        if (($context["error_firstname"] ?? null)) {
            // line 36
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 37
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-lastname\">";
        // line 40
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 42
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 43
        if (($context["error_lastname"] ?? null)) {
            // line 44
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 45
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-email\">";
        // line 48
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 50
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 51
        if (($context["error_email"] ?? null)) {
            // line 52
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 53
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-telephone\">";
        // line 56
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 58
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 59
        if (($context["error_telephone"] ?? null)) {
            // line 60
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 61
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-order-id\">";
        // line 64
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 66
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 67
        if (($context["error_order_id"] ?? null)) {
            // line 68
            echo "              <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 69
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-date-ordered\">";
        // line 72
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 75
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 83
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-product\">";
        // line 85
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 87
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 88
        if (($context["error_product"] ?? null)) {
            // line 89
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 90
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-model\">";
        // line 93
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 95
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 96
        if (($context["error_model"] ?? null)) {
            // line 97
            echo "              <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 98
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-quantity\">";
        // line 101
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 103
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
        // line 107
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\"> ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 109
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 109) == ($context["return_reason_id"] ?? null))) {
                // line 110
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 112);
                echo "\" checked=\"checked\" />
                  ";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 113);
                echo "</label>
              </div>
              ";
            } else {
                // line 116
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 118);
                echo "\" />
                  ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 119);
                echo "</label>
              </div>
              ";
            }
            // line 122
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 124
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 125
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
        // line 128
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <label class=\"radio-inline\"> ";
        // line 130
        if (($context["opened"] ?? null)) {
            // line 131
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 133
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 135
        echo "                ";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 136
        if ( !($context["opened"] ?? null)) {
            // line 137
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 139
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 141
        echo "                ";
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-comment\">";
        // line 145
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 147
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 150
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 152
        if (($context["text_agree"] ?? null)) {
            // line 153
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 154
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 155
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 156
            if (($context["agree"] ?? null)) {
                // line 157
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 159
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 161
            echo "            <input type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 165
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 166
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 168
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 172
        echo "      </form>
      ";
        // line 173
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 174
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 178
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});
//--></script> 
";
        // line 182
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "remart/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 182,  511 => 178,  504 => 174,  500 => 173,  497 => 172,  490 => 168,  483 => 166,  480 => 165,  472 => 161,  468 => 159,  464 => 157,  462 => 156,  458 => 155,  452 => 154,  449 => 153,  447 => 152,  442 => 150,  434 => 147,  429 => 145,  421 => 141,  417 => 139,  413 => 137,  411 => 136,  406 => 135,  402 => 133,  398 => 131,  396 => 130,  391 => 128,  386 => 125,  380 => 124,  377 => 123,  371 => 122,  365 => 119,  361 => 118,  357 => 116,  351 => 113,  347 => 112,  343 => 110,  340 => 109,  336 => 108,  332 => 107,  323 => 103,  318 => 101,  313 => 98,  307 => 97,  305 => 96,  299 => 95,  294 => 93,  289 => 90,  283 => 89,  281 => 88,  275 => 87,  270 => 85,  265 => 83,  252 => 75,  246 => 72,  241 => 69,  235 => 68,  233 => 67,  227 => 66,  222 => 64,  217 => 61,  211 => 60,  209 => 59,  203 => 58,  198 => 56,  193 => 53,  187 => 52,  185 => 51,  179 => 50,  174 => 48,  169 => 45,  163 => 44,  161 => 43,  155 => 42,  150 => 40,  145 => 37,  139 => 36,  137 => 35,  131 => 34,  126 => 32,  121 => 30,  116 => 28,  112 => 27,  107 => 25,  102 => 22,  91 => 20,  87 => 19,  81 => 17,  75 => 15,  73 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/account/return_form.twig", "");
    }
}
