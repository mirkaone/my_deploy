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

/* @Storefront/storefront/component/listing/filter/filter-property-select.html.twig */
class __TwigTemplate_bbf4c86c1eada80274a954a63c49e3990f717c8add68fb997e75fa565be89d3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_property_select_preview' => [$this, 'block_component_filter_property_select_preview'],
            'component_filter_property_select_checkox_input' => [$this, 'block_component_filter_property_select_checkox_input'],
            'component_filter_property_select_preview_checkmark' => [$this, 'block_component_filter_property_select_preview_checkmark'],
            'component_filter_property_select_preview_checkmark_icon' => [$this, 'block_component_filter_property_select_preview_checkmark_icon'],
            'component_filter_property_select_preview_list_item_label_element' => [$this, 'block_component_filter_property_select_preview_list_item_label_element'],
            'component_filter_property_select_preview_list_item_label' => [$this, 'block_component_filter_property_select_preview_list_item_label'],
            'component_filter_property_select_preview_list_item' => [$this, 'block_component_filter_property_select_preview_list_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <li class=\"filter-multi-select-list-item filter-property-select-list-item\">
        ";
        // line 5
        if (((($context["displayType"] ?? null) == "color") || (($context["displayType"] ?? null) == "media"))) {
            // line 6
            echo "            ";
            $context["color"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "colorHexCode", [], "any", false, false, false, 6);
            // line 7
            echo "            ";
            $context["media"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "media", [], "any", false, false, false, 7), "url", [], "any", false, false, false, 7);
            // line 8
            echo "            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8);
            // line 9
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 9);
            // line 10
            echo "
            ";
            // line 11
            $this->displayBlock('component_filter_property_select_preview', $context, $blocks);
            // line 43
            echo "
            ";
            // line 44
            if ( !($context["hideTitle"] ?? null)) {
                // line 45
                echo "                ";
                $this->displayBlock('component_filter_property_select_preview_list_item_label_element', $context, $blocks);
                // line 52
                echo "            ";
            }
            // line 53
            echo "        ";
        } else {
            // line 54
            echo "            ";
            $this->displayBlock('component_filter_property_select_preview_list_item', $context, $blocks);
            // line 57
            echo "        ";
        }
        // line 58
        echo "    </li>
";
    }

    // line 11
    public function block_component_filter_property_select_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <span class=\"filter-property-select-preview\"
                      title=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                      ";
        // line 14
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 15
            echo "                      style=\"background: ";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                      ";
        }
        // line 17
        echo "                      ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 18
            echo "                      style=\"background-image: url('";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "')\"
                      ";
        }
        // line 19
        echo ">

                    ";
        // line 21
        $this->displayBlock('component_filter_property_select_checkox_input', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('component_filter_property_select_preview_checkmark', $context, $blocks);
        // line 41
        echo "                </span>
            ";
    }

    // line 21
    public function block_component_filter_property_select_checkox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                        <input type=\"checkbox\"
                               class=\"filter-property-select-checkbox filter-multi-select-checkbox\"
                               id=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
                               data-label=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               ";
        // line 26
        if (((($context["displayType"] ?? null) == "color") && ($context["color"] ?? null))) {
            // line 27
            echo "                               data-preview-hex=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 29
        echo "                               ";
        if (((($context["displayType"] ?? null) == "media") && ($context["media"] ?? null))) {
            // line 30
            echo "                               data-preview-image-url=\"";
            echo twig_escape_filter($this->env, ($context["media"] ?? null), "html", null, true);
            echo "\"
                               ";
        }
        // line 31
        echo ">
                    ";
    }

    // line 34
    public function block_component_filter_property_select_preview_checkmark($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                        <span class=\"filter-property-select-preview-checkmark\">
                            ";
        // line 36
        $this->displayBlock('component_filter_property_select_preview_checkmark_icon', $context, $blocks);
        // line 39
        echo "                        </span>
                    ";
    }

    // line 36
    public function block_component_filter_property_select_preview_checkmark_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 37);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "name" => "checkmark"]));
        // line 38
        echo "                            ";
    }

    // line 45
    public function block_component_filter_property_select_preview_list_item_label_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                    <label class=\"filter-multi-select-item-label\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 47
        $this->displayBlock('component_filter_property_select_preview_list_item_label', $context, $blocks);
        // line 50
        echo "                    </label>
                ";
    }

    // line 47
    public function block_component_filter_property_select_preview_list_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                        ";
    }

    // line 54
    public function block_component_filter_property_select_preview_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", 55)->display($context);
        // line 56
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 56,  248 => 55,  244 => 54,  237 => 48,  233 => 47,  228 => 50,  226 => 47,  221 => 46,  217 => 45,  213 => 38,  204 => 37,  200 => 36,  195 => 39,  193 => 36,  190 => 35,  186 => 34,  181 => 31,  175 => 30,  172 => 29,  166 => 27,  164 => 26,  160 => 25,  156 => 24,  152 => 22,  148 => 21,  143 => 41,  141 => 34,  138 => 33,  136 => 21,  132 => 19,  126 => 18,  123 => 17,  117 => 15,  115 => 14,  111 => 13,  108 => 12,  104 => 11,  99 => 58,  96 => 57,  93 => 54,  90 => 53,  87 => 52,  84 => 45,  82 => 44,  79 => 43,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  60 => 5,  57 => 4,  53 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-property-select.html.twig");
    }
}
