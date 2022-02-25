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

/* remart/template/common/menu.twig */
class __TwigTemplate_a51de0cbeebc7a2521c9d102f791797a23dc83a47567c926e56104bd82a5ff54 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header hidden-sm\">
      <button type=\"button\" class=\"btn-navbar navbar-toggle\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div id=\"pt_vegamenu\" class=\"title-menu wr-left-menu hidden-xs\">
      <div id=\"wr-menu-icon\">
            <div class=\"wr-menu\" data-toggle=\"collapse\" data-target=\"#under-menu\">
                <button class=\"btn-navbar navbar-toggle\" type=\"button\" data-toggle=\"collapse\">
                  <div class=\"ico-menu\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                  </div>
                </button>
                <span class=\"cate\">";
            // line 16
            echo ($context["text_homecat"] ?? null);
            echo "</span><i class=\"fa fa-angle-down pull-right\"></i>
            </div>
        </div>
      </div>
    
<div id=\"mySidenav\" class=\"sidenav\">
  <div class=\"cate-menu collapse\" id=\"under-menu\">
   <div class=\"close-nav hidden-md hidden-lg hidden-xl hidden-sm\">
      <span class=\"categories\">";
            // line 24
            echo ($context["text_category"] ?? null);
            echo "</span>
      <a href=\"javascript:void(0)\" class=\"closebtn pull-right\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
  </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "        <li class=\"dropdown m-menu\">
          <a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
                    echo "\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
                    echo "<i class=\"fa fa-angle-right pull-right\"></i></a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 34), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 35
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 37
                            echo "                <!--3rd level-->
                    <li class=\"dropdown-submenu\"> <a href=\"";
                            // line 38
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 38);
                            echo "\" class=\"submenu-title\"> ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                            echo " </a>
                      ";
                            // line 39
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 39)) {
                                // line 40
                                echo "                      <ul class=\"list-unstyled grand-child\">
                        ";
                                // line 41
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 41));
                                foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                    // line 42
                                    echo "                        <li> <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 42);
                                    echo "\"> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 42);
                                    echo " </a> </li>
                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 44
                                echo "                      </ul>
                      ";
                            }
                            // line 46
                            echo "                    </li>
                    <!--3rd level over-->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "</div>
            <a href=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 51);
                    echo "\" class=\"see-all hidden-md hidden-lg hidden-sm\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51);
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 54
                    echo "        <li class=\"m-menu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 54);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                    echo "</a></li>
        ";
                }
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </ul>
    </div>
  </div>
  </div>
  </nav>
";
        }
        // line 62
        echo " 


<script type=\"text/javascript\">
 function headermenu() {
     if (jQuery(window).width() < 768)
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");        
     }
     else
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\"); 
     }
}
\$(document).ready(function(){headermenu();});
jQuery(window).resize(function() {headermenu();});
jQuery(window).scroll(function() {headermenu();});
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 62,  177 => 57,  171 => 56,  163 => 54,  153 => 51,  150 => 50,  143 => 49,  135 => 46,  131 => 44,  120 => 42,  116 => 41,  113 => 40,  111 => 39,  105 => 38,  102 => 37,  98 => 36,  95 => 35,  91 => 34,  84 => 32,  81 => 31,  78 => 30,  74 => 29,  66 => 24,  55 => 16,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/menu.twig", "");
    }
}
