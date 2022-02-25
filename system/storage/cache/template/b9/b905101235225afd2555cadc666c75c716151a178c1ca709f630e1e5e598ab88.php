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

/* remart/template/account/register.twig */
class __TwigTemplate_d57956de104aed503487fcd904d4fdcabd4353bdd26058cfe2661da4e11f59fd extends \Twig\Template
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
<div id=\"account-register\" class=\"container acpage\">
 
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-8 col-md-6  col-xs-12 colright accw";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9  col-xs-12 colright";
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
             
  ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
  ";
        }
        // line 17
        echo "      ";
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
            echo "\">";
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
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 30
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group required\" style=\"display: ";
        // line 31
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
        // line 32
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 34
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 34) == ($context["customer_group_id"] ?? null))) {
                // line 35
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 37);
                echo "\" checked=\"checked\" />
                  ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
                echo "</label>
              </div>
              ";
            } else {
                // line 41
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43);
                echo "\" />
                  ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 44);
                echo "</label>
              </div>
              ";
            }
            // line 47
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-firstname\">";
        // line 50
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 52
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_firstname"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 55
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-lastname\">";
        // line 58
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 60
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 61
        if (($context["error_lastname"] ?? null)) {
            // line 62
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 63
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-email\">";
        // line 66
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 68
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 69
        if (($context["error_email"] ?? null)) {
            // line 70
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-telephone\">";
        // line 74
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 76
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 77
        if (($context["error_telephone"] ?? null)) {
            // line 78
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 79
        echo " </div>
          </div>
          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 82
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 82) == "select")) {
                // line 83
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 83);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 84);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <select name=\"custom_field[";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 86);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 87
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 94
                    echo "                ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 94)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94)] ?? null) : null)))) {
                        // line 95
                        echo "                
                
                
                
                <option value=\"";
                        // line 99
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 106
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 111);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 118
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "              
              
              
              
              
              </select>
              ";
                // line 125
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)) {
                    // line 126
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 127
                echo "</div>
          </div>
          ";
            }
            // line 130
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "radio")) {
                // line 131
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 131);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div> ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 135
                    echo "                <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 135) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)))) {
                        // line 136
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 137);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 137);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 138);
                        echo "</label>
                  ";
                    } else {
                        // line 140
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 141);
                        echo "\" />
                    ";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 142);
                        echo "</label>
                  ";
                    }
                    // line 143
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "</div>
              ";
                // line 145
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                    // line 146
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 147
                echo "</div>
          </div>
          ";
            }
            // line 150
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 150) == "checkbox")) {
                // line 151
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 151);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div> ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 154));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 155
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 155), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)))) {
                        // line 156
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 157);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 157);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 158
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 158);
                        echo "</label>
                  ";
                    } else {
                        // line 160
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 161);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161);
                        echo "\" />
                    ";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 162);
                        echo "</label>
                  ";
                    }
                    // line 163
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo " </div>
              ";
                // line 165
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165)] ?? null) : null)) {
                    // line 166
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 167
                echo " </div>
          </div>
          ";
            }
            // line 170
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "text")) {
                // line 171
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 171);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"text\" name=\"custom_field[";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 174);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "]\" value=\"";
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 174);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\" class=\"form-control\" />
              ";
                // line 175
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) {
                    // line 176
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 177
                echo " </div>
          </div>
          ";
            }
            // line 180
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 180) == "textarea")) {
                // line 181
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 181);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 182);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <textarea name=\"custom_field[";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 184);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                echo "\" class=\"form-control\">";
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 184);
                }
                echo "</textarea>
              ";
                // line 185
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null)) {
                    // line 186
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 187
                echo " </div>
          </div>
          ";
            }
            // line 190
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "file")) {
                // line 191
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 191);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <button type=\"button\" id=\"button-custom-field";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 195);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "]\" value=\"";
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 196
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    // line 197
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 198
                echo "</div>
          </div>
          ";
            }
            // line 201
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 201) == "date")) {
                // line 202
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 202);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "]\" value=\"";
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 206);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 210
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) {
                    // line 211
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 212
                echo " </div>
          </div>
          ";
            }
            // line 215
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 215) == "time")) {
                // line 216
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 216);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 217);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 220);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "]\" value=\"";
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 220);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 224
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224)] ?? null) : null)) {
                    // line 225
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 226
                echo " </div>
          </div>
          ";
            }
            // line 229
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 229) == "time")) {
                // line 230
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 230);
                echo "\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-custom-field";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 231);
                echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 234);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "]\" value=\"";
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 234);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 238
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null)) {
                    // line 239
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 240
                echo " </div>
          </div>
          ";
            }
            // line 243
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 246
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-password\">";
        // line 248
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 250
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 251
        if (($context["error_password"] ?? null)) {
            // line 252
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 253
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-lg-3 col-xs-12 control-label\" for=\"input-confirm\">";
        // line 256
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 258
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 259
        if (($context["error_confirm"] ?? null)) {
            // line 260
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 261
        echo " </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 265
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-lg-3 col-xs-12 control-label\">";
        // line 267
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-lg-9 col-xs-12\"> ";
        // line 268
        if (($context["newsletter"] ?? null)) {
            // line 269
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
            // line 271
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                ";
            // line 274
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        } else {
            // line 276
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                ";
            // line 278
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                ";
            // line 281
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        }
        // line 282
        echo " </div>
          </div>
        </fieldset>
        ";
        // line 285
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 286
        if (($context["text_agree"] ?? null)) {
            // line 287
            echo "        <div class=\"buttons\">
          <div class=\"text-right acspace\">";
            // line 288
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 289
            if (($context["agree"] ?? null)) {
                // line 290
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 292
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 294
            echo "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 295
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 299
            echo "        <div class=\"buttons\">
          <div class=\"text-right\">
            <input type=\"submit\" value=\"";
            // line 301
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 305
        echo "      </form>
      ";
        // line 306
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 307
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
    \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
  }

  if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
    \$('#account .form-group:first').before(this);
  }
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
    dataType: 'json',
    success: function(json) {
      \$('.custom-field').hide();
      \$('.custom-field').removeClass('required');

      for (i = 0; i < json.length; i++) {
        custom_field = json[i];

        \$('#custom-field' + custom_field['custom_field_id']).show();

        if (custom_field['required']) {
          \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
        }
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
  var element = this;

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
          \$(element).button('loading');
        },
        complete: function() {
          \$(element).button('reset');
        },
        success: function(json) {
          \$(element).parent().find('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(element).parent().find('input').val(json['code']);
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
\$('.date').datetimepicker({
  language: '";
        // line 410
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.time').datetimepicker({
  language: '";
        // line 415
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 420
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});
//--></script> 
";
        // line 425
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "remart/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1121 => 425,  1113 => 420,  1105 => 415,  1097 => 410,  991 => 307,  987 => 306,  984 => 305,  977 => 301,  973 => 299,  966 => 295,  963 => 294,  959 => 292,  955 => 290,  953 => 289,  949 => 288,  946 => 287,  944 => 286,  940 => 285,  935 => 282,  930 => 281,  924 => 278,  920 => 276,  915 => 274,  909 => 271,  905 => 269,  903 => 268,  899 => 267,  894 => 265,  888 => 261,  882 => 260,  880 => 259,  874 => 258,  869 => 256,  864 => 253,  858 => 252,  856 => 251,  850 => 250,  845 => 248,  840 => 246,  836 => 244,  830 => 243,  825 => 240,  819 => 239,  817 => 238,  798 => 234,  790 => 231,  783 => 230,  780 => 229,  775 => 226,  769 => 225,  767 => 224,  748 => 220,  740 => 217,  733 => 216,  730 => 215,  725 => 212,  719 => 211,  717 => 210,  698 => 206,  690 => 203,  683 => 202,  680 => 201,  675 => 198,  669 => 197,  667 => 196,  655 => 195,  647 => 194,  642 => 192,  635 => 191,  632 => 190,  627 => 187,  621 => 186,  619 => 185,  603 => 184,  596 => 182,  589 => 181,  586 => 180,  581 => 177,  575 => 176,  573 => 175,  557 => 174,  550 => 172,  543 => 171,  540 => 170,  535 => 167,  529 => 166,  527 => 165,  524 => 164,  517 => 163,  512 => 162,  504 => 161,  501 => 160,  496 => 158,  488 => 157,  485 => 156,  482 => 155,  478 => 154,  473 => 152,  466 => 151,  463 => 150,  458 => 147,  452 => 146,  450 => 145,  447 => 144,  440 => 143,  435 => 142,  427 => 141,  424 => 140,  419 => 138,  411 => 137,  408 => 136,  405 => 135,  401 => 134,  396 => 132,  389 => 131,  386 => 130,  381 => 127,  375 => 126,  373 => 125,  365 => 119,  359 => 118,  347 => 111,  340 => 106,  328 => 99,  322 => 95,  319 => 94,  315 => 93,  306 => 87,  298 => 86,  291 => 84,  284 => 83,  281 => 82,  277 => 81,  273 => 79,  267 => 78,  265 => 77,  259 => 76,  254 => 74,  249 => 71,  243 => 70,  241 => 69,  235 => 68,  230 => 66,  225 => 63,  219 => 62,  217 => 61,  211 => 60,  206 => 58,  201 => 55,  195 => 54,  193 => 53,  187 => 52,  182 => 50,  172 => 47,  166 => 44,  162 => 43,  158 => 41,  152 => 38,  148 => 37,  144 => 35,  141 => 34,  137 => 33,  133 => 32,  125 => 31,  121 => 30,  116 => 28,  112 => 27,  107 => 25,  102 => 22,  91 => 20,  87 => 19,  81 => 17,  75 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/account/register.twig", "");
    }
}
