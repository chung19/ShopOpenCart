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

/* remart/template/common/home.twig */
class __TwigTemplate_cffaba7eda58c3e2303397a634aeede4fd86167f8fad351378b86945d0fb1887 extends \Twig\Template
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
        echo "<div class=\"commenu\">";
        echo ($context["header"] ?? null);
        echo "</div>
<div id=\"common-home\">
  ";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
   ";
        // line 6
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 8
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-9";
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
        echo " col-md-9\">
    ";
        // line 14
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
</div>
</div>
</div>
";
        // line 19
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  77 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/home.twig", "");
    }
}
