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

/* @Storefront/storefront/component/listing/filter/filter-multi-select.html.twig */
class __TwigTemplate_c591d88d55bfef429c6fa9d2166d1d8ab212e270ae566b1d42d41be70081ab76 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_multi_select' => [$this, 'block_component_filter_multi_select'],
            'component_filter_multi_select_toggle' => [$this, 'block_component_filter_multi_select_toggle'],
            'component_filter_multi_select_display_name' => [$this, 'block_component_filter_multi_select_display_name'],
            'component_filter_multi_select_count' => [$this, 'block_component_filter_multi_select_count'],
            'component_filter_multi_select_toggle_icon' => [$this, 'block_component_filter_multi_select_toggle_icon'],
            'component_filter_multi_select_dropdown' => [$this, 'block_component_filter_multi_select_dropdown'],
            'component_filter_multi_select_list' => [$this, 'block_component_filter_multi_select_list'],
            'component_filter_multi_select_list_item' => [$this, 'block_component_filter_multi_select_list_item'],
            'component_filter_multi_select_list_item_inner' => [$this, 'block_component_filter_multi_select_list_item_inner'],
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
        if ( !(isset($context["pluginSelector"]) || array_key_exists("pluginSelector", $context))) {
            // line 4
            echo "    ";
            $context["pluginSelector"] = "filter-multi-select";
        }
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('component_filter_multi_select', $context, $blocks);
    }

    public function block_component_filter_multi_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"filter-multi-select filter-multi-select-";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-";
        // line 9
        echo twig_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "=\"true\"
         data-";
        // line 10
        echo twig_escape_filter($this->env, ($context["pluginSelector"] ?? null), "html", null, true);
        echo "-options='{ \"name\": \"";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" }'>

        ";
        // line 12
        $this->displayBlock('component_filter_multi_select_toggle', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('component_filter_multi_select_dropdown', $context, $blocks);
        // line 58
        echo "    </div>
";
    }

    // line 12
    public function block_component_filter_multi_select_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 15
        if (($context["sidebar"] ?? null)) {
            // line 16
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 17
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 19
            echo "                    data-toggle=\"dropdown\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 22
        echo ">

                ";
        // line 24
        $this->displayBlock('component_filter_multi_select_display_name', $context, $blocks);
        // line 27
        echo "
                ";
        // line 28
        $this->displayBlock('component_filter_multi_select_count', $context, $blocks);
        // line 31
        echo "
                ";
        // line 32
        $this->displayBlock('component_filter_multi_select_toggle_icon', $context, $blocks);
        // line 37
        echo "            </button>
        ";
    }

    // line 24
    public function block_component_filter_multi_select_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 28
    public function block_component_filter_multi_select_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                    <span class=\"filter-multi-select-count\"></span>
                ";
    }

    // line 32
    public function block_component_filter_multi_select_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 33);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 36
        echo "                ";
    }

    // line 40
    public function block_component_filter_multi_select_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "            <div class=\"filter-multi-select-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 43
        $this->displayBlock('component_filter_multi_select_list', $context, $blocks);
        // line 56
        echo "            </div>
        ";
    }

    // line 43
    public function block_component_filter_multi_select_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                    <ul class=\"filter-multi-select-list\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 46
            echo "                            ";
            $this->displayBlock('component_filter_multi_select_list_item', $context, $blocks);
            // line 53
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </ul>
                ";
    }

    // line 46
    public function block_component_filter_multi_select_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                                <li class=\"filter-multi-select-list-item\">
                                    ";
        // line 48
        $this->displayBlock('component_filter_multi_select_list_item_inner', $context, $blocks);
        // line 51
        echo "                                </li>
                            ";
    }

    // line 48
    public function block_component_filter_multi_select_list_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select-list-item.html.twig", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", 49)->display($context);
        // line 50
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 50,  273 => 49,  269 => 48,  264 => 51,  262 => 48,  259 => 47,  255 => 46,  250 => 54,  236 => 53,  233 => 46,  216 => 45,  213 => 44,  209 => 43,  204 => 56,  202 => 43,  198 => 42,  189 => 41,  185 => 40,  181 => 36,  172 => 33,  168 => 32,  163 => 29,  159 => 28,  152 => 25,  148 => 24,  143 => 37,  141 => 32,  138 => 31,  136 => 28,  133 => 27,  131 => 24,  127 => 22,  121 => 19,  116 => 17,  113 => 16,  111 => 15,  103 => 13,  99 => 12,  94 => 58,  92 => 40,  89 => 39,  87 => 12,  80 => 10,  76 => 9,  67 => 8,  60 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-multi-select.html.twig");
    }
}
