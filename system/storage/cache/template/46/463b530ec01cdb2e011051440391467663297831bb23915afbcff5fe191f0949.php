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

/* remart/template/account/login.twig */
class __TwigTemplate_a81a8f9906633fd192a20c653c4008200c5ae42324b89da65212d7a3ec872150 extends \Twig\Template
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
<div id=\"account-login\" class=\"container acpage\">
        
 
  <div class=\"row\">";
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
            echo "
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  
  ";
        }
        // line 20
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
 <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 25
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <ul class=\"breadcrumb\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 28);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </ul>
      <div class=\"row afflog\">
        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
          <div class=\"well\">
            <h1>";
        // line 34
        echo ($context["text_new_customer"] ?? null);
        echo "</h1>
            <p><strong>";
        // line 35
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 36
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 37
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
          <div class=\"well\">
            <h1>";
        // line 41
        echo ($context["text_returning_customer"] ?? null);
        echo "</h1>
            <p><strong>";
        // line 42
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 43
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 45
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 46
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 49
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 50
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <div class=\"text-right\"><a href=\"";
        // line 51
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div></div>
              <input type=\"submit\" value=\"";
        // line 52
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 53
        if (($context["redirect"] ?? null)) {
            // line 54
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 56
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 60
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 61
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 63
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 63,  206 => 61,  202 => 60,  196 => 56,  190 => 54,  188 => 53,  184 => 52,  178 => 51,  172 => 50,  168 => 49,  160 => 46,  156 => 45,  151 => 43,  147 => 42,  143 => 41,  134 => 37,  130 => 36,  126 => 35,  122 => 34,  116 => 30,  105 => 28,  101 => 27,  95 => 25,  87 => 21,  84 => 20,  75 => 15,  73 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/account/login.twig", "");
    }
}
