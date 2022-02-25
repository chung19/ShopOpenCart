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

/* remart/template/information/contact.twig */
class __TwigTemplate_50912f1ecd574490bc6f922ca12e2e6edc0f907e2c2e2229d5c1b4f1859b9fe5 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  
  <div class=\"row infobg\">";
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
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
       <div class=\"head-t\">
      <h4 class=\"heading\"><span>";
        // line 19
        echo ($context["cheading_title"] ?? null);
        echo "</span></h4><hr>
    </div>
      <div class=\"row\">
      
      <div class=\"col-lg-4 col-xs-12 infocnt\">
      <legend>";
        // line 24
        echo ($context["text_location"] ?? null);
        echo "</legend>
      <div class=\"\">
          <!--   ";
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            echo "           <img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-responsive\" />
            ";
        }
        // line 28
        echo " -->

            <!-- <strong>";
        // line 30
        echo ($context["store"] ?? null);
        echo "</strong> -->

            ";
        // line 32
        if (($context["comment"] ?? null)) {
            // line 33
            echo "              <div>";
            echo ($context["comment"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "
              

              <div class=\"pull-left\"><i class=\"fa fa-home\"></i></div>
              <div class=\"contsp\">";
        // line 39
        echo ($context["address"] ?? null);
        echo "</div>

              ";
        // line 41
        if (($context["geocode"] ?? null)) {
            // line 42
            echo "              <div class=\"contsp\">
              <a href=\"https://maps.google.com/maps?q=";
            // line 43
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a></div>
              ";
        }
        // line 45
        echo "
              <div class=\"pull-left\"><i class=\"fa fa-phone\"></i></div>
             <div class=\"contsp\"> ";
        // line 47
        echo ($context["telephone"] ?? null);
        echo "</div>

              ";
        // line 49
        if (($context["fax"] ?? null)) {
            // line 50
            echo "              <div class=\"pull-left\"><i class=\"fa fa-fax\"></i></div>
             <div class=\"contsp\"> ";
            // line 51
            echo ($context["fax"] ?? null);
            echo "</div>
              ";
        }
        // line 53
        echo "
              ";
        // line 54
        if (($context["open"] ?? null)) {
            // line 55
            echo "              <div class=\"pull-left\"><i class=\"fa fa-clock-o\"></i></div>
             <div class=\"contsp\"> ";
            // line 56
            echo ($context["open"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "              
      </div>
 

      ";
        // line 62
        if (($context["locations"] ?? null)) {
            // line 63
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div id=\"accordion\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 66
                echo "          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 67);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 69);
                echo "\">
                ";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 71);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 71);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 71);
                    echo "\" class=\"center-block img-responsive\" />
                ";
                }
                // line 73
                echo "                <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 73);
                echo "</strong>
                  <address>
                  ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 75);
                echo "
                  </address>
                  ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 78));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 80
                echo "                <strong>";
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
                  ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 81);
                echo "
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong>
                  ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 84);
                    echo "
                  ";
                }
                // line 86
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
                  ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 88);
                    echo "
                  ";
                }
                // line 90
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
                  ";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 92);
                    echo "
                  ";
                }
                // line 94
                echo "          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "      </div>
      ";
        }
        // line 98
        echo "    </div>
<div class=\"col-lg-8 col-xs-12\">
      <form action=\"";
        // line 100
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 102
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 104
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 106
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 107
        if (($context["error_name"] ?? null)) {
            // line 108
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 110
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-email\">";
        // line 113
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 115
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 116
        if (($context["error_email"] ?? null)) {
            // line 117
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 119
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-3 control-label\" for=\"input-enquiry\">";
        // line 122
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 124
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 125
        if (($context["error_enquiry"] ?? null)) {
            // line 126
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 128
        echo "            </div>
          </div>
          ";
        // line 130
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 134
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form></div>
      ";
        // line 138
        echo ($context["content_bottom"] ?? null);
        echo "</div></div>
    ";
        // line 139
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 141
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "remart/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 141,  415 => 139,  411 => 138,  404 => 134,  397 => 130,  393 => 128,  387 => 126,  385 => 125,  381 => 124,  376 => 122,  371 => 119,  365 => 117,  363 => 116,  359 => 115,  354 => 113,  349 => 110,  343 => 108,  341 => 107,  337 => 106,  332 => 104,  327 => 102,  322 => 100,  318 => 98,  314 => 96,  307 => 94,  302 => 92,  297 => 91,  294 => 90,  289 => 88,  284 => 87,  281 => 86,  276 => 84,  271 => 83,  269 => 82,  265 => 81,  260 => 80,  250 => 78,  248 => 77,  243 => 75,  237 => 73,  227 => 71,  225 => 70,  221 => 69,  214 => 67,  211 => 66,  207 => 65,  201 => 63,  199 => 62,  193 => 58,  188 => 56,  185 => 55,  183 => 54,  180 => 53,  175 => 51,  172 => 50,  170 => 49,  165 => 47,  161 => 45,  152 => 43,  149 => 42,  147 => 41,  142 => 39,  136 => 35,  130 => 33,  128 => 32,  123 => 30,  119 => 28,  109 => 27,  107 => 26,  102 => 24,  94 => 19,  90 => 17,  79 => 15,  75 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/information/contact.twig", "");
    }
}
