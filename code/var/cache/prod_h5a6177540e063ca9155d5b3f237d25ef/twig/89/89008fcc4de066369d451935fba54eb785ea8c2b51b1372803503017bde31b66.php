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

/* @Storefront/storefront/component/listing/filter/filter-boolean.html.twig */
class __TwigTemplate_1c1b2d8bf3be1d27d974560ebf61b4cf1b63dddafee2e3ebb9526c9e42fe38ea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_boolean' => [$this, 'block_component_filter_boolean'],
            'component_filter_boolean_container' => [$this, 'block_component_filter_boolean_container'],
            'component_filter_boolean_checkbox' => [$this, 'block_component_filter_boolean_checkbox'],
            'component_filter_boolean_label' => [$this, 'block_component_filter_boolean_label'],
            'component_filter_boolean_display_name' => [$this, 'block_component_filter_boolean_display_name'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_boolean', $context, $blocks);
    }

    public function block_component_filter_boolean($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"filter-boolean filter-panel-item\"
         data-filter-boolean=\"true\"
         data-filter-boolean-options='{ \"name\": \"";
        // line 4
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\", \"displayName\": \"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "\" }'>

        ";
        // line 6
        $this->displayBlock('component_filter_boolean_container', $context, $blocks);
        // line 25
        echo "    </div>
";
    }

    // line 6
    public function block_component_filter_boolean_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"custom-control custom-checkbox\">

                ";
        // line 9
        $this->displayBlock('component_filter_boolean_checkbox', $context, $blocks);
        // line 15
        echo "
                ";
        // line 16
        $this->displayBlock('component_filter_boolean_label', $context, $blocks);
        // line 23
        echo "            </div>
        ";
    }

    // line 9
    public function block_component_filter_boolean_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    <input type=\"checkbox\"
                           class=\"filter-boolean-input custom-control-input\"
                           id=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                           name=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                ";
    }

    // line 16
    public function block_component_filter_boolean_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    <label for=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"filter-boolean-label custom-control-label\">
                        ";
        // line 18
        $this->displayBlock('component_filter_boolean_display_name', $context, $blocks);
        // line 21
        echo "                    </label>
                ";
    }

    // line 18
    public function block_component_filter_boolean_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-boolean.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 19,  121 => 18,  116 => 21,  114 => 18,  109 => 17,  105 => 16,  99 => 13,  95 => 12,  91 => 10,  87 => 9,  82 => 23,  80 => 16,  77 => 15,  75 => 9,  71 => 7,  67 => 6,  62 => 25,  60 => 6,  53 => 4,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-boolean.html.twig");
    }
}
