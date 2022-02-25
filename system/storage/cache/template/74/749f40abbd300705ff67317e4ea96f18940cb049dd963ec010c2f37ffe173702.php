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

/* design/layout_form.twig */
class __TwigTemplate_16d3d6917179dd82656d20c8ad14ec9e89f3a8e21444094cdefa002097adb152 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 55);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 55);
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 57);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 57);
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 61);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo ($context["text_module"] ?? null);
        echo "</legend>
          
          
            ";
        // line 79
        $context["module_row"] = 0;
        // line 80
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 85
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 90
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 90) == "column_left")) {
                // line 91
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 93
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 95
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 95);
                    echo "\">
                            ";
                    // line 96
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 97) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 97))) {
                            // line 98
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 98);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                            echo "</option>
                            ";
                        } else {
                            // line 100
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 100);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 100);
                            echo "</option>
                            ";
                        }
                        // line 102
                        echo "                            ";
                    } else {
                        // line 103
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 103));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 104
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 104) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 104))) {
                                // line 105
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 105);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                                echo "</option>
                            ";
                            } else {
                                // line 107
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 107);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 107);
                                echo "</option>
                            ";
                            }
                            // line 109
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 110
                        echo "                            ";
                    }
                    // line 111
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 114
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 114);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 115
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 115);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 116);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 117
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 121
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 122
                echo "                    ";
            }
            // line 123
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 131
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 131);
            echo "\">
                            ";
            // line 132
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 132)) {
                // line 133
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 133);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 133);
                echo "</option>
                            ";
            } else {
                // line 135
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 135));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 136
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 136);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                            ";
            }
            // line 139
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-header-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 154
        echo ($context["text_header_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 159
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 159) == "header_top")) {
                // line 160
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 162
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 164
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 164);
                    echo "\">
                            ";
                    // line 165
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 166) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 166))) {
                            // line 167
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 167);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 167);
                            echo "</option>
                            ";
                        } else {
                            // line 169
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 169);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 169);
                            echo "</option>
                            ";
                        }
                        // line 171
                        echo "                            ";
                    } else {
                        // line 172
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 172));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 173
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 173) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 173))) {
                                // line 174
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 174);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 174);
                                echo "</option>
                            ";
                            } else {
                                // line 176
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 176);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 176);
                                echo "</option>
                            ";
                            }
                            // line 178
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        echo "                            ";
                    }
                    // line 180
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 182
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 183
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 183);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 184
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 184);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 185);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 186
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 190
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 191
                echo "                    ";
            }
            // line 192
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 200
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 200);
            echo "\">
                            ";
            // line 201
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 201)) {
                // line 202
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 202);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 202);
                echo "</option>
                            ";
            } else {
                // line 204
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 205
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 205);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 205);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 207
                echo "                            ";
            }
            // line 208
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('header-top');\" data-toggle=\"tooltip\" title=\"";
        // line 212
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 221
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 226
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 226) == "content_top")) {
                // line 227
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 229
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 231
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 231);
                    echo "\">
                            ";
                    // line 232
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 232)) {
                        // line 233
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 233) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 233))) {
                            // line 234
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 234);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 234);
                            echo "</option>
                            ";
                        } else {
                            // line 236
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 236);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 236);
                            echo "</option>
                            ";
                        }
                        // line 238
                        echo "                            ";
                    } else {
                        // line 239
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 239));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 240
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 240) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 240))) {
                                // line 241
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 241);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 241);
                                echo "</option>
                            ";
                            } else {
                                // line 243
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 243);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 243);
                                echo "</option>
                            ";
                            }
                            // line 245
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 246
                        echo "                            ";
                    }
                    // line 247
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 249
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 250
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 250);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 251
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 251);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 252);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 253
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 257
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 258
                echo "                    ";
            }
            // line 259
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 267
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 267);
            echo "\">
                            ";
            // line 268
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 268)) {
                // line 269
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 269);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 269);
                echo "</option>
                            ";
            } else {
                // line 271
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 271));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 272
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 272);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 272);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                            ";
            }
            // line 275
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 279
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 288
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 293
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 293) == "content_bottom")) {
                // line 294
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 296
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 298
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 298);
                    echo "\">
                            ";
                    // line 299
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 299)) {
                        // line 300
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 300) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 300))) {
                            // line 301
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 301);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 301);
                            echo "</option>
                            ";
                        } else {
                            // line 303
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 303);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 303);
                            echo "</option>
                            ";
                        }
                        // line 305
                        echo "                            ";
                    } else {
                        // line 306
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 306));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 307
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 307) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 307))) {
                                // line 308
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 308);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 308);
                                echo "</option>
                            ";
                            } else {
                                // line 310
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 310);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 310);
                                echo "</option>
                            ";
                            }
                            // line 312
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 313
                        echo "                            ";
                    }
                    // line 314
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 317
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 317);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 318
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 318);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 319);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 320
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 324
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 325
                echo "                    ";
            }
            // line 326
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 334
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 334);
            echo "\">
                            ";
            // line 335
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 335)) {
                // line 336
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 336);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 336);
                echo "</option>
                            ";
            } else {
                // line 338
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 339
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 339);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 339);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                echo "                            ";
            }
            // line 342
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 346
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 357
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 362
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 362) == "column_right")) {
                // line 363
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 365
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 367
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 367);
                    echo "\">
                            ";
                    // line 368
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 368)) {
                        // line 369
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 369) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 369))) {
                            // line 370
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 370);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 370);
                            echo "</option>
                            ";
                        } else {
                            // line 372
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 372);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 372);
                            echo "</option>
                            ";
                        }
                        // line 374
                        echo "                            ";
                    } else {
                        // line 375
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 375));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 376
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 376) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 376))) {
                                // line 377
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 377);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 377);
                                echo "</option>
                            ";
                            } else {
                                // line 379
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 379);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 379);
                                echo "</option>
                            ";
                            }
                            // line 381
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 382
                        echo "                            ";
                    }
                    // line 383
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 386
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 386);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 387
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 387);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 388
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 388);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 389
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 393
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 394
                echo "                    ";
            }
            // line 395
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 403
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 403);
            echo "\">
                            ";
            // line 404
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 404)) {
                // line 405
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 405);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 405);
                echo "</option>
                            ";
            } else {
                // line 407
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 407));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 408
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 408);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 408);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 410
                echo "                            ";
            }
            // line 411
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 415
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>

             <!-- custom position -->
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-footer-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 430
        echo ($context["text_footer_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 435
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 435) == "footer_left")) {
                // line 436
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 438
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 440
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 440);
                    echo "\">
                            ";
                    // line 441
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 441)) {
                        // line 442
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 442) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 442))) {
                            // line 443
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 443);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 443);
                            echo "</option>
                            ";
                        } else {
                            // line 445
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 445);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 445);
                            echo "</option>
                            ";
                        }
                        // line 447
                        echo "                            ";
                    } else {
                        // line 448
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 448));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 449
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 449) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 449))) {
                                // line 450
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 450);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 450);
                                echo "</option>
                            ";
                            } else {
                                // line 452
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 452);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 452);
                                echo "</option>
                            ";
                            }
                            // line 454
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 455
                        echo "                            ";
                    }
                    // line 456
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 458
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 459
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 459);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 460
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 460);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 461);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 462
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 466
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 467
                echo "                    ";
            }
            // line 468
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 476
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 476);
            echo "\">
                            ";
            // line 477
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 477)) {
                // line 478
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 478);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 478);
                echo "</option>
                            ";
            } else {
                // line 480
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 480));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 481
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 481);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 481);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 483
                echo "                            ";
            }
            // line 484
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-left');\" data-toggle=\"tooltip\" title=\"";
        // line 488
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-ftop-full\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 499
        echo ($context["text_ftop_full"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 504
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 504) == "ftop_full")) {
                // line 505
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 507
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 509
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 509);
                    echo "\">
                            ";
                    // line 510
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 510)) {
                        // line 511
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 511) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 511))) {
                            // line 512
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 512);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 512);
                            echo "</option>
                            ";
                        } else {
                            // line 514
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 514);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 514);
                            echo "</option>
                            ";
                        }
                        // line 516
                        echo "                            ";
                    } else {
                        // line 517
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 517));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 518
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 518) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 518))) {
                                // line 519
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 519);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 519);
                                echo "</option>
                            ";
                            } else {
                                // line 521
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 521);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 521);
                                echo "</option>
                            ";
                            }
                            // line 523
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 524
                        echo "                            ";
                    }
                    // line 525
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 527
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 528
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 528);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 529
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 529);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 530
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 530);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 531
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 535
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 536
                echo "                    ";
            }
            // line 537
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 545
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 545);
            echo "\">
                            ";
            // line 546
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 546)) {
                // line 547
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 547);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 547);
                echo "</option>
                            ";
            } else {
                // line 549
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 549));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 550
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 550);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 550);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 552
                echo "                            ";
            }
            // line 553
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('ftop-full');\" data-toggle=\"tooltip\" title=\"";
        // line 557
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-fbottom-full\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 566
        echo ($context["text_fbottom_full"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 571
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 571) == "fbottom_full")) {
                // line 572
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 574
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 575
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 576
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 576);
                    echo "\">
                            ";
                    // line 577
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 577)) {
                        // line 578
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 578) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 578))) {
                            // line 579
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 579);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 579);
                            echo "</option>
                            ";
                        } else {
                            // line 581
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 581);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 581);
                            echo "</option>
                            ";
                        }
                        // line 583
                        echo "                            ";
                    } else {
                        // line 584
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 584));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 585
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 585) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 585))) {
                                // line 586
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 586);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 586);
                                echo "</option>
                            ";
                            } else {
                                // line 588
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 588);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 588);
                                echo "</option>
                            ";
                            }
                            // line 590
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 591
                        echo "                            ";
                    }
                    // line 592
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 594
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 595
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 595);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 596
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 596);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 597
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 597);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 598
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 602
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 603
                echo "                    ";
            }
            // line 604
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 612
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 612);
            echo "\">
                            ";
            // line 613
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 613)) {
                // line 614
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 614);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 614);
                echo "</option>
                            ";
            } else {
                // line 616
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 616));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 617
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 617);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 617);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 619
                echo "                            ";
            }
            // line 620
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('fbottom-full');\" data-toggle=\"tooltip\" title=\"";
        // line 624
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-footer-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 635
        echo ($context["text_footer_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 640
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 640) == "footer_right")) {
                // line 641
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 643
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 644
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 645
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 645);
                    echo "\">
                            ";
                    // line 646
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 646)) {
                        // line 647
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 647) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 647))) {
                            // line 648
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 648);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 648);
                            echo "</option>
                            ";
                        } else {
                            // line 650
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 650);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 650);
                            echo "</option>
                            ";
                        }
                        // line 652
                        echo "                            ";
                    } else {
                        // line 653
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 653));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 654
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 654) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 654))) {
                                // line 655
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 655);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 655);
                                echo "</option>
                            ";
                            } else {
                                // line 657
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 657);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 657);
                                echo "</option>
                            ";
                            }
                            // line 659
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 660
                        echo "                            ";
                    }
                    // line 661
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 663
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 664
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 664);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 665
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 665);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 666
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 666);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 667
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 671
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 672
                echo "                    ";
            }
            // line 673
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 674
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 681
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 681);
            echo "\">
                            ";
            // line 682
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 682)) {
                // line 683
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 683);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 683);
                echo "</option>
                            ";
            } else {
                // line 685
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 685));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 686
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 686);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 686);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 688
                echo "                            ";
            }
            // line 689
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('footer-right');\" data-toggle=\"tooltip\" title=\"";
        // line 693
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- custom position over-->
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 708
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 713
        echo ($context["text_default"] ?? null);
        echo "</option>';
\t";
        // line 714
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 715
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 715);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 715), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 717
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 718
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 719
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 727
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 732
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 733
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 733), "js");
            echo "\">';
\t";
            // line 734
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 734)) {
                // line 735
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 735);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 735), "js");
                echo "</option>';
\t";
            } else {
                // line 737
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 737));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 738
                    echo "\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 738);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 738), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 740
                echo "\t";
            }
            // line 741
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 743
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 746
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 766
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 768
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 775
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2281 => 775,  2271 => 768,  2266 => 766,  2241 => 746,  2236 => 743,  2229 => 741,  2226 => 740,  2215 => 738,  2210 => 737,  2202 => 735,  2200 => 734,  2195 => 733,  2191 => 732,  2183 => 727,  2172 => 719,  2168 => 718,  2165 => 717,  2154 => 715,  2150 => 714,  2146 => 713,  2138 => 708,  2120 => 693,  2116 => 691,  2109 => 689,  2106 => 688,  2095 => 686,  2090 => 685,  2082 => 683,  2080 => 682,  2075 => 681,  2071 => 680,  2063 => 674,  2057 => 673,  2054 => 672,  2052 => 671,  2043 => 667,  2037 => 666,  2031 => 665,  2025 => 664,  2022 => 663,  2015 => 661,  2012 => 660,  2006 => 659,  1998 => 657,  1990 => 655,  1987 => 654,  1982 => 653,  1979 => 652,  1971 => 650,  1963 => 648,  1960 => 647,  1958 => 646,  1953 => 645,  1949 => 644,  1945 => 643,  1939 => 641,  1936 => 640,  1932 => 639,  1925 => 635,  1911 => 624,  1907 => 622,  1900 => 620,  1897 => 619,  1886 => 617,  1881 => 616,  1873 => 614,  1871 => 613,  1866 => 612,  1862 => 611,  1854 => 605,  1848 => 604,  1845 => 603,  1843 => 602,  1834 => 598,  1828 => 597,  1822 => 596,  1816 => 595,  1813 => 594,  1806 => 592,  1803 => 591,  1797 => 590,  1789 => 588,  1781 => 586,  1778 => 585,  1773 => 584,  1770 => 583,  1762 => 581,  1754 => 579,  1751 => 578,  1749 => 577,  1744 => 576,  1740 => 575,  1736 => 574,  1730 => 572,  1727 => 571,  1723 => 570,  1716 => 566,  1704 => 557,  1700 => 555,  1693 => 553,  1690 => 552,  1679 => 550,  1674 => 549,  1666 => 547,  1664 => 546,  1659 => 545,  1655 => 544,  1647 => 538,  1641 => 537,  1638 => 536,  1636 => 535,  1627 => 531,  1621 => 530,  1615 => 529,  1609 => 528,  1606 => 527,  1599 => 525,  1596 => 524,  1590 => 523,  1582 => 521,  1574 => 519,  1571 => 518,  1566 => 517,  1563 => 516,  1555 => 514,  1547 => 512,  1544 => 511,  1542 => 510,  1537 => 509,  1533 => 508,  1529 => 507,  1523 => 505,  1520 => 504,  1516 => 503,  1509 => 499,  1495 => 488,  1491 => 486,  1484 => 484,  1481 => 483,  1470 => 481,  1465 => 480,  1457 => 478,  1455 => 477,  1450 => 476,  1446 => 475,  1438 => 469,  1432 => 468,  1429 => 467,  1427 => 466,  1418 => 462,  1412 => 461,  1406 => 460,  1400 => 459,  1397 => 458,  1390 => 456,  1387 => 455,  1381 => 454,  1373 => 452,  1365 => 450,  1362 => 449,  1357 => 448,  1354 => 447,  1346 => 445,  1338 => 443,  1335 => 442,  1333 => 441,  1328 => 440,  1324 => 439,  1320 => 438,  1314 => 436,  1311 => 435,  1307 => 434,  1300 => 430,  1282 => 415,  1278 => 413,  1271 => 411,  1268 => 410,  1257 => 408,  1252 => 407,  1244 => 405,  1242 => 404,  1237 => 403,  1233 => 402,  1225 => 396,  1219 => 395,  1216 => 394,  1214 => 393,  1205 => 389,  1199 => 388,  1193 => 387,  1187 => 386,  1184 => 385,  1177 => 383,  1174 => 382,  1168 => 381,  1160 => 379,  1152 => 377,  1149 => 376,  1144 => 375,  1141 => 374,  1133 => 372,  1125 => 370,  1122 => 369,  1120 => 368,  1115 => 367,  1111 => 366,  1107 => 365,  1101 => 363,  1098 => 362,  1094 => 361,  1087 => 357,  1073 => 346,  1069 => 344,  1062 => 342,  1059 => 341,  1048 => 339,  1043 => 338,  1035 => 336,  1033 => 335,  1028 => 334,  1024 => 333,  1016 => 327,  1010 => 326,  1007 => 325,  1005 => 324,  996 => 320,  990 => 319,  984 => 318,  978 => 317,  975 => 316,  968 => 314,  965 => 313,  959 => 312,  951 => 310,  943 => 308,  940 => 307,  935 => 306,  932 => 305,  924 => 303,  916 => 301,  913 => 300,  911 => 299,  906 => 298,  902 => 297,  898 => 296,  892 => 294,  889 => 293,  885 => 292,  878 => 288,  866 => 279,  862 => 277,  855 => 275,  852 => 274,  841 => 272,  836 => 271,  828 => 269,  826 => 268,  821 => 267,  817 => 266,  809 => 260,  803 => 259,  800 => 258,  798 => 257,  789 => 253,  783 => 252,  777 => 251,  771 => 250,  768 => 249,  761 => 247,  758 => 246,  752 => 245,  744 => 243,  736 => 241,  733 => 240,  728 => 239,  725 => 238,  717 => 236,  709 => 234,  706 => 233,  704 => 232,  699 => 231,  695 => 230,  691 => 229,  685 => 227,  682 => 226,  678 => 225,  671 => 221,  659 => 212,  655 => 210,  648 => 208,  645 => 207,  634 => 205,  629 => 204,  621 => 202,  619 => 201,  614 => 200,  610 => 199,  602 => 193,  596 => 192,  593 => 191,  591 => 190,  582 => 186,  576 => 185,  570 => 184,  564 => 183,  561 => 182,  554 => 180,  551 => 179,  545 => 178,  537 => 176,  529 => 174,  526 => 173,  521 => 172,  518 => 171,  510 => 169,  502 => 167,  499 => 166,  497 => 165,  492 => 164,  488 => 163,  484 => 162,  478 => 160,  475 => 159,  471 => 158,  464 => 154,  450 => 143,  446 => 141,  439 => 139,  436 => 138,  425 => 136,  420 => 135,  412 => 133,  410 => 132,  405 => 131,  401 => 130,  393 => 124,  387 => 123,  384 => 122,  382 => 121,  373 => 117,  367 => 116,  361 => 115,  355 => 114,  352 => 113,  345 => 111,  342 => 110,  336 => 109,  328 => 107,  320 => 105,  317 => 104,  312 => 103,  309 => 102,  301 => 100,  293 => 98,  290 => 97,  288 => 96,  283 => 95,  279 => 94,  275 => 93,  269 => 91,  266 => 90,  262 => 89,  255 => 85,  248 => 80,  246 => 79,  240 => 76,  231 => 70,  225 => 66,  219 => 65,  217 => 64,  210 => 62,  202 => 61,  199 => 60,  193 => 59,  185 => 57,  177 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  157 => 50,  152 => 49,  150 => 48,  142 => 43,  138 => 42,  131 => 37,  125 => 35,  123 => 34,  117 => 33,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_form.twig", "");
    }
}
