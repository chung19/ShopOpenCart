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

/* remart/template/information/sitemap.twig */
class __TwigTemplate_e35b028c1de07ed4852c99d8610153761478a2408dfdd8b729868a0df82cdc39 extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
        
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
            $context["class"] = "col-xs-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " sitem\">";
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
        <div class=\"col-sm-6 col-xs-12\">
          <ul class=\"text-capitalize\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 25
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 25);
            echo "</a>
              ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 26)) {
                // line 27
                echo "              <ul>
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 29
                    echo "                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 29);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 29);
                    echo "</a>
                  ";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "                  <ul>
                    ";
                        // line 32
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 32));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 33
                            echo "                    <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 33);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 33);
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "                  </ul>
                  ";
                    }
                    // line 37
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "              </ul>
              ";
            }
            // line 41
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </ul>
        </div>
        <div class=\"col-sm-6 col-xs-12\">
          <ul>
            <li><a href=\"";
        // line 47
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 48
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 50
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 51
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 52
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 53
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
                <li><a href=\"";
        // line 54
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 57
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 58
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 59
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
            <li>";
        // line 60
        echo ($context["text_information"] ?? null);
        echo "
              <ul>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 63
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 63);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 63);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 71
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 72
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 74
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "remart/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 74,  276 => 72,  272 => 71,  260 => 65,  249 => 63,  245 => 62,  240 => 60,  234 => 59,  228 => 58,  222 => 57,  214 => 54,  208 => 53,  202 => 52,  196 => 51,  190 => 50,  183 => 48,  177 => 47,  171 => 43,  164 => 41,  160 => 39,  153 => 37,  149 => 35,  138 => 33,  134 => 32,  131 => 31,  129 => 30,  122 => 29,  118 => 28,  115 => 27,  113 => 26,  106 => 25,  102 => 24,  94 => 19,  90 => 17,  79 => 15,  75 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/information/sitemap.twig", "");
    }
}
