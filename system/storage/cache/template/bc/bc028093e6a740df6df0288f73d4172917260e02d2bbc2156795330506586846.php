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

/* remart/template/extension/module/account.twig */
class __TwigTemplate_de52dc00353b9f54838786e8399f0ffdcf2300729398d971b7f302348c593f1e extends \Twig\Template
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
        echo "<div class=\"list-group accolumn\">
 

  <h3><svg class=\"\" width=\"20px\" height=\"20px\"> <use xlink:href=\"#acluser\"></use> </svg>ACCOUNT SETTINGS</h3>
   ";
        // line 5
        if ( !($context["logged"] ?? null)) {
            // line 6
            echo "    <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 8
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 9
        if (($context["logged"] ?? null)) {
            // line 10
            echo "    <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 11
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 13
        echo "  
  ";
        // line 14
        if (($context["logged"] ?? null)) {
            // line 15
            echo "    <a href=\"";
            echo ($context["address"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_address"] ?? null);
            echo "</a>
    <hr>
    <h3><svg class=\"\" width=\"20px\" height=\"20px\"> <use xlink:href=\"#aclorder\"></use> </svg>MY ORDERS </h3>
    <a href=\"";
            // line 18
            echo ($context["order"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 19
            echo ($context["download"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a>
    <a href=\"";
            // line 20
            echo ($context["return"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_return"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 21
            echo ($context["transaction"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a> 
    <hr>
    <h3><svg class=\"\" width=\"20px\" height=\"20px\"> <use xlink:href=\"#aclufolder\"></use> </svg>MY STUFF</h3>
    <a href=\"";
            // line 24
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a>
    <a href=\"";
            // line 25
            echo ($context["recurring"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_recurring"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 26
            echo ($context["reward"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_reward"] ?? null);
            echo "</a>
    <a href=\"";
            // line 27
            echo ($context["newsletter"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a>
    <hr>
  <h3 class=\"acl\"><svg class=\"\" width=\"20px\" height=\"20px\"> <use xlink:href=\"#aclogout\"></use> </svg><a href=\"";
            // line 29
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item logu\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></h3>
  ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 31,  149 => 29,  142 => 27,  136 => 26,  130 => 25,  124 => 24,  116 => 21,  110 => 20,  104 => 19,  98 => 18,  89 => 15,  87 => 14,  84 => 13,  77 => 11,  70 => 10,  68 => 9,  61 => 8,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/account.twig", "");
    }
}
