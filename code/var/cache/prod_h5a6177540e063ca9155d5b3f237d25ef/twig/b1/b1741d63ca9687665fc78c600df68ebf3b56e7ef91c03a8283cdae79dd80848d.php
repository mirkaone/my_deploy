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

/* @Storefront/storefront/component/listing/filter/filter-range.html.twig */
class __TwigTemplate_a05bebee3d5d250eb5a79100a769b018d0e97082dafe85a147f8149c68023400 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_range' => [$this, 'block_component_filter_range'],
            'component_filter_range_toggle' => [$this, 'block_component_filter_range_toggle'],
            'component_filter_range_display_name' => [$this, 'block_component_filter_range_display_name'],
            'component_filter_range_toggle_icon' => [$this, 'block_component_filter_range_toggle_icon'],
            'component_filter_range_dropdown' => [$this, 'block_component_filter_range_dropdown'],
            'component_filter_range_container' => [$this, 'block_component_filter_range_container'],
            'component_filter_range_min' => [$this, 'block_component_filter_range_min'],
            'component_filter_range_min_label' => [$this, 'block_component_filter_range_min_label'],
            'component_filter_range_min_input' => [$this, 'block_component_filter_range_min_input'],
            'component_filter_range_min_currency_symbol' => [$this, 'block_component_filter_range_min_currency_symbol'],
            'component_filter_range_divider' => [$this, 'block_component_filter_range_divider'],
            'component_filter_range_max' => [$this, 'block_component_filter_range_max'],
            'component_filter_range_max_label' => [$this, 'block_component_filter_range_max_label'],
            'component_filter_range_max_input' => [$this, 'block_component_filter_range_max_input'],
            'component_filter_range_max_currency_symbol' => [$this, 'block_component_filter_range_max_currency_symbol'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context))) {
            // line 4
            echo "    ";
            $context["currencySymbol"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "activeCurrency", [], "any", false, false, false, 4), "symbol", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["filterRangeActiveMinLabel"]) || array_key_exists("filterRangeActiveMinLabel", $context))) {
            // line 8
            echo "    ";
            $context["filterRangeActiveMinLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMinLabel"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["filterRangeActiveMaxLabel"]) || array_key_exists("filterRangeActiveMaxLabel", $context))) {
            // line 12
            echo "    ";
            $context["filterRangeActiveMaxLabel"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeActiveMaxLabel"));
        }
        // line 14
        echo "
";
        // line 15
        if ( !(isset($context["filterRangeErrorMessage"]) || array_key_exists("filterRangeErrorMessage", $context))) {
            // line 16
            echo "    ";
            $context["filterRangeErrorMessage"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeErrorMessage"));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('component_filter_range', $context, $blocks);
    }

    public function block_component_filter_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"filter-range filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-filter-range=\"true\"
         data-filter-range-options='{
             \"name\": \"";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\",
             \"minKey\": \"";
        // line 24
        echo twig_escape_filter($this->env, ($context["minKey"] ?? null), "html", null, true);
        echo "\",
             \"maxKey\": \"";
        // line 25
        echo twig_escape_filter($this->env, ($context["maxKey"] ?? null), "html", null, true);
        echo "\",
             \"currencySymbol\": \"";
        // line 26
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "\",
             \"snippets\": {
                \"filterRangeActiveMinLabel\": \"";
        // line 28
        echo twig_escape_filter($this->env, ($context["filterRangeActiveMinLabel"] ?? null), "html", null, true);
        echo "\",
                \"filterRangeActiveMaxLabel\": \"";
        // line 29
        echo twig_escape_filter($this->env, ($context["filterRangeActiveMaxLabel"] ?? null), "html", null, true);
        echo "\",
                \"filterRangeErrorMessage\": \"";
        // line 30
        echo twig_escape_filter($this->env, ($context["filterRangeErrorMessage"] ?? null), "html", null, true);
        echo "\"
             }
         }'>

        ";
        // line 34
        $this->displayBlock('component_filter_range_toggle', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('component_filter_range_dropdown', $context, $blocks);
        // line 118
        echo "    </div>
";
    }

    // line 34
    public function block_component_filter_range_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 37
        if (($context["sidebar"] ?? null)) {
            // line 38
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 39
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 41
            echo "                    data-toggle=\"dropdown\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 44
        echo ">

                ";
        // line 46
        $this->displayBlock('component_filter_range_display_name', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        $this->displayBlock('component_filter_range_toggle_icon', $context, $blocks);
        // line 53
        echo "            </button>
        ";
    }

    // line 46
    public function block_component_filter_range_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 50
    public function block_component_filter_range_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-range.html.twig", 51);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 52
        echo "                ";
    }

    // line 56
    public function block_component_filter_range_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            <div class=\"filter-range-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                ";
        // line 60
        $this->displayBlock('component_filter_range_container', $context, $blocks);
        // line 116
        echo "            </div>
        ";
    }

    // line 60
    public function block_component_filter_range_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                    <div class=\"filter-range-container\">

                        ";
        // line 63
        $this->displayBlock('component_filter_range_min', $context, $blocks);
        // line 85
        echo "
                        ";
        // line 86
        $this->displayBlock('component_filter_range_divider', $context, $blocks);
        // line 91
        echo "
                        ";
        // line 92
        $this->displayBlock('component_filter_range_max', $context, $blocks);
        // line 114
        echo "                    </div>
                ";
    }

    // line 63
    public function block_component_filter_range_min($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                            <label class=\"filter-range-min\">

                                ";
        // line 66
        $this->displayBlock('component_filter_range_min_label', $context, $blocks);
        // line 69
        echo "
                                ";
        // line 70
        $this->displayBlock('component_filter_range_min_input', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        $this->displayBlock('component_filter_range_min_currency_symbol', $context, $blocks);
        // line 83
        echo "                            </label>
                        ";
    }

    // line 66
    public function block_component_filter_range_min_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMinLabel"));
        echo "
                                ";
    }

    // line 70
    public function block_component_filter_range_min_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                    <input class=\"form-control min-input\"
                                           type=\"number\"
                                           name=\"min-price\"
                                           min=\"0\"
                                           max=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 75), "html", null, true);
        echo "\">
                                ";
    }

    // line 78
    public function block_component_filter_range_min_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 80
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
    }

    // line 86
    public function block_component_filter_range_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                            <div class=\"filter-range-divider\">
                                &ndash;
                            </div>
                        ";
    }

    // line 92
    public function block_component_filter_range_max($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                            <label class=\"filter-range-max\">

                                ";
        // line 95
        $this->displayBlock('component_filter_range_max_label', $context, $blocks);
        // line 98
        echo "
                                ";
        // line 99
        $this->displayBlock('component_filter_range_max_input', $context, $blocks);
        // line 106
        echo "
                                ";
        // line 107
        $this->displayBlock('component_filter_range_max_currency_symbol', $context, $blocks);
        // line 112
        echo "                            </label>
                        ";
    }

    // line 95
    public function block_component_filter_range_max_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRangeMaxLabel"));
        echo "
                                ";
    }

    // line 99
    public function block_component_filter_range_max_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                                    <input class=\"form-control max-input\"
                                           type=\"number\"
                                           name=\"max-price\"
                                           min=\"0\"
                                           max=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 104), "html", null, true);
        echo "\">
                                ";
    }

    // line 107
    public function block_component_filter_range_max_currency_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                                    <span class=\"filter-range-currency-symbol\">
                                        ";
        // line 109
        echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
        echo "
                                    </span>
                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 109,  408 => 108,  404 => 107,  398 => 104,  392 => 100,  388 => 99,  381 => 96,  377 => 95,  372 => 112,  370 => 107,  367 => 106,  365 => 99,  362 => 98,  360 => 95,  356 => 93,  352 => 92,  345 => 87,  341 => 86,  334 => 80,  331 => 79,  327 => 78,  321 => 75,  315 => 71,  311 => 70,  304 => 67,  300 => 66,  295 => 83,  293 => 78,  290 => 77,  288 => 70,  285 => 69,  283 => 66,  279 => 64,  275 => 63,  270 => 114,  268 => 92,  265 => 91,  263 => 86,  260 => 85,  258 => 63,  254 => 61,  250 => 60,  245 => 116,  243 => 60,  238 => 58,  229 => 57,  225 => 56,  221 => 52,  212 => 51,  208 => 50,  201 => 47,  197 => 46,  192 => 53,  190 => 50,  187 => 49,  185 => 46,  181 => 44,  175 => 41,  170 => 39,  167 => 38,  165 => 37,  157 => 35,  153 => 34,  148 => 118,  146 => 56,  143 => 55,  141 => 34,  134 => 30,  130 => 29,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  100 => 20,  93 => 19,  90 => 18,  86 => 16,  84 => 15,  81 => 14,  77 => 12,  75 => 11,  72 => 10,  68 => 8,  66 => 7,  63 => 6,  59 => 4,  57 => 3,  54 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-range.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-range.html.twig");
    }
}
