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

/* default/template/extension/module/onwebchat.twig */
class __TwigTemplate_0415daba2b9df716cba032d0350d2e10312d6983b9b7cbd5ea3da107a862506c extends \Twig\Template
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
        echo "<script type='text/javascript'>
    var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.
    push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},w
        :(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';ga.
        async=1;ga.src='//www.onwebchat.com/clientchat/";
        // line 5
        echo ($context["module_onwebchat_chat_id"] ?? null);
        echo "';
        var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/onwebchat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/onwebchat.twig", "");
    }
}
