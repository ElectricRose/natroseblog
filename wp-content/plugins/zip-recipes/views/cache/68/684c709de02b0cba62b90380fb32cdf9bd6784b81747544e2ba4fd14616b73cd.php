<?php

/* header.twig */
class __TwigTemplate_d2fedaa96c5fa336c1898297ef2941f0bde0af6b9c46114dedd094251d44d75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<script type=\"text/javascript\" async=\"\" src=\"";
        echo twig_escape_filter($this->env, ($context["ZRDN_PLUGIN_URL"] ?? null), "html", null, true);
        echo "scripts/zlrecipe_print.js\"></script>

";
        // line 5
        if (($context["css"] ?? null)) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, ($context["ZRDN_PLUGIN_URL"] ?? null), "html", null, true);
            echo "styles/zlrecipe-std.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.twig", "/Users/Fireandsurf/Sites/natroseblog/wp-content/plugins/zip-recipes/views/header.twig");
    }
}
