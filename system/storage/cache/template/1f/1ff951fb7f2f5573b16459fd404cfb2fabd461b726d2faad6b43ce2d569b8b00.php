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

/* remart/template/extension/module/filter.twig */
class __TwigTemplate_a1ff7e8a86ecb367a8885d1e7f20f06123c1321bdeb6bf104292101c4e71fd46 extends \Twig\Template
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
        echo "<div class=\"panel panel-default catfilter\">
  <div class=\"panel-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "<button type=\"button\" class=\"btn toggle collapsed add\" data-toggle=\"collapse\" data-target=\"#xsfilter\" aria-expanded=\"false\"></button></div>
  <div id=\"xsfilter\" class=\"collapse\" aria-expanded=\"true\">
  <div class=\"list-group\"> ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 4);
            echo "</a>
    <div class=\"list-group-item\">
      <div id=\"filter-group";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 6);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 7
                echo "        <div class=\"checkbox\">
          <label>";
                // line 8
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8), ($context["filter_category"] ?? null))) {
                    // line 9
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                    echo "\" checked=\"checked\" />
            ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 10);
                    echo "
            ";
                } else {
                    // line 12
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12);
                    echo "\" />
            ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 13);
                    echo "
            ";
                }
                // line 14
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>

  <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\" btn btn-primary\">";
        // line 21
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
  filter = [];

  \$('input[name^=\\'filter\\']:checked').each(function(element) {
    filter.push(this.value);
  });

  location = '";
        // line 33
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  106 => 21,  101 => 18,  93 => 16,  85 => 14,  80 => 13,  75 => 12,  70 => 10,  65 => 9,  63 => 8,  60 => 7,  54 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/filter.twig", "");
    }
}
