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

/* remart/template/extension/module/webinewsletter/default.twig */
class __TwigTemplate_90276cb539793e3b51164acebf700b17b3bdcc0f5c3767366ff2353f9a692e4d extends \Twig\Template
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
        echo "<div class=\"webi-newsletter ";
        echo ($context["prefix"] ?? null);
        echo " webi-newsletter col-sm-4 col-xs-12 col-lg-4\" id=\"newsletter_";
        echo ($context["id"] ?? null);
        echo "\" data-mode=\"";
        echo ($context["mode"] ?? null);
        echo "\">
<h5>newsletter
   <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#formNewLestter\" aria-expanded=\"false\"></button>
            </h5>
\t\t<form id=\"formNewLestter\" method=\"post\" action=\"";
        // line 5
        echo ($context["action"] ?? null);
        echo "\" class=\"formNewLestter newsle collapse\" aria-expanded=\"false\" ";
        if ( !twig_test_empty(($context["banner"] ?? null))) {
            echo " style=\"background-image: url('";
            echo ($context["banner"] ?? null);
            echo "')\" ";
        }
        echo ">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"hidden-xs world\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 10
        echo "\t\t\t\t\t<div class=\"contact-icon\"> <svg width=\"70px\" height=\"70px\"><use xlink:href=\"#email\"></use></svg></div>
\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t<div class=\"description-top\">
\t\t\t\t\t\t";
        // line 13
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t
\t\t\t\t<div class=\"form-group col-lg-8 col-md-7 col-xs-12 col-sm-12 email-f\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-md inputNew\" ";
        // line 17
        if ( !array_key_exists("customer_email", $context)) {
            echo " onblur=\"javascript:if(this.value=='')this.value='";
            echo ($context["default_input_text"] ?? null);
            echo "';\" onfocus=\"javascript:if(this.value=='";
            echo ($context["default_input_text"] ?? null);
            echo "')this.value='';\"";
        }
        echo " value=\"";
        echo ((($context["customer_email"] ?? null)) ? (($context["customer_email"] ?? null)) : (($context["default_input_text"] ?? null)));
        echo "\" size=\"18\" name=\"email\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-submit input-group-btn\">
\t\t\t\t\t\t\t<button class=\"submits\" type=\"submit\" name=\"submitNewsletter\" class=\"btn btn-block\">
\t\t\t\t\t\t\t\t";
        // line 21
        echo "<svg height=\"20px\" width=\"20px\"><use xlink:href=\"#send\"></use></svg></button>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"action\">
\t\t\t\t<div class=\"valid\"></div>
\t\t\t\t<div class=\"description-bottom\">
\t\t\t\t\t";
        // line 27
        echo ($context["social"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t</form>
</div>

<script type=\"text/javascript\"><!--
\$(\"#newsletter_";
        // line 39
        echo ($context["id"] ?? null);
        echo "\").webiNewsletter().work(  '";
        echo ($context["valid_email"] ?? null);
        echo "' );
--></script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/webinewsletter/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  97 => 27,  89 => 21,  74 => 17,  67 => 13,  62 => 10,  49 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/webinewsletter/default.twig", "");
    }
}
