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

/* remart/template/checkout/login.twig */
class __TwigTemplate_3be3c4228e4c7c33d87cd302986b4f7d8ad7b62109a01df943e8d7fd84a7c0b6 extends \Twig\Template
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
        echo "<div class=\"row afflog\">
  <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
    <div class=\"well\">
    <h1>";
        // line 4
        echo ($context["text_new_customer"] ?? null);
        echo "</h1>
    <p>";
        // line 5
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"radio\">
      <label> ";
        // line 7
        if ((($context["account"] ?? null) == "register")) {
            // line 8
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 10
            echo "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 12
        echo "        ";
        echo ($context["text_register"] ?? null);
        echo "</label>
    </div>
    ";
        // line 14
        if (($context["checkout_guest"] ?? null)) {
            // line 15
            echo "    <div class=\"radio\">
      <label> ";
            // line 16
            if ((($context["account"] ?? null) == "guest")) {
                // line 17
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 19
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 21
            echo "        ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
    </div>
    ";
        }
        // line 24
        echo "    <p>";
        echo ($context["text_register_account"] ?? null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 25
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
  <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
    <div class=\"well\">
    <h1>";
        // line 30
        echo ($context["text_returning_customer"] ?? null);
        echo "</h1>
    <p>";
        // line 31
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 33
        echo ($context["entry_email"] ?? null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 34
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 37
        echo ($context["entry_password"] ?? null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 39
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 40
        echo ($context["button_login"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "remart/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  131 => 39,  127 => 38,  123 => 37,  117 => 34,  113 => 33,  108 => 31,  104 => 30,  94 => 25,  89 => 24,  82 => 21,  78 => 19,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  61 => 12,  57 => 10,  53 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/checkout/login.twig", "");
    }
}
