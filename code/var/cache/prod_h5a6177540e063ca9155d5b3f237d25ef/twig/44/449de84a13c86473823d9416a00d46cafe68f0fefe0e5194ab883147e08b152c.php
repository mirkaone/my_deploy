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

/* @Storefront/storefront/component/pagination.html.twig */
class __TwigTemplate_f172fccb69fcc600c963523bf2470350612f91732720cfe0ff4ca30346889f69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_pagination_nav' => [$this, 'block_component_pagination_nav'],
            'component_pagination' => [$this, 'block_component_pagination'],
            'component_pagination_first' => [$this, 'block_component_pagination_first'],
            'component_pagination_first_input' => [$this, 'block_component_pagination_first_input'],
            'component_pagination_first_label' => [$this, 'block_component_pagination_first_label'],
            'component_pagination_first_link' => [$this, 'block_component_pagination_first_link'],
            'component_pagination_prev' => [$this, 'block_component_pagination_prev'],
            'component_pagination_prev_input' => [$this, 'block_component_pagination_prev_input'],
            'component_pagination_prev_label' => [$this, 'block_component_pagination_prev_label'],
            'component_pagination_prev_link' => [$this, 'block_component_pagination_prev_link'],
            'component_pagination_prev_icon' => [$this, 'block_component_pagination_prev_icon'],
            'component_pagination_loop' => [$this, 'block_component_pagination_loop'],
            'component_pagination_item' => [$this, 'block_component_pagination_item'],
            'component_pagination_item_input' => [$this, 'block_component_pagination_item_input'],
            'component_pagination_item_label' => [$this, 'block_component_pagination_item_label'],
            'component_pagination_item_link' => [$this, 'block_component_pagination_item_link'],
            'component_pagination_item_text' => [$this, 'block_component_pagination_item_text'],
            'component_pagination_next' => [$this, 'block_component_pagination_next'],
            'component_pagination_next_input' => [$this, 'block_component_pagination_next_input'],
            'component_pagination_next_label' => [$this, 'block_component_pagination_next_label'],
            'component_pagination_next_link' => [$this, 'block_component_pagination_next_link'],
            'component_pagination_next_icon' => [$this, 'block_component_pagination_next_icon'],
            'component_pagination_last' => [$this, 'block_component_pagination_last'],
            'component_pagination_last_input' => [$this, 'block_component_pagination_last_input'],
            'component_pagination_last_label' => [$this, 'block_component_pagination_last_label'],
            'component_pagination_last_link' => [$this, 'block_component_pagination_last_link'],
            'component_pagination_last_icon' => [$this, 'block_component_pagination_last_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_pagination_nav', $context, $blocks);
    }

    public function block_component_pagination_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "offset", [], "any", false, false, false, 2) + 1) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 2)), 0, "ceil");
        // line 3
        echo "    ";
        $context["totalPages"] = twig_round((twig_get_attribute($this->env, $this->source, ($context["entities"] ?? null), "total", [], "any", false, false, false, 3) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 3)), 0, "ceil");
        // line 4
        echo "
    <nav aria-label=\"pagination\" class=\"pagination-nav\">
        ";
        // line 6
        $this->displayBlock('component_pagination', $context, $blocks);
        // line 153
        echo "    </nav>
";
    }

    // line 6
    public function block_component_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <ul class=\"pagination\">
                ";
        // line 8
        $this->displayBlock('component_pagination_first', $context, $blocks);
        // line 29
        echo "
                ";
        // line 30
        $this->displayBlock('component_pagination_prev', $context, $blocks);
        // line 53
        echo "
                ";
        // line 54
        $this->displayBlock('component_pagination_loop', $context, $blocks);
        // line 100
        echo "
                ";
        // line 101
        $this->displayBlock('component_pagination_next', $context, $blocks);
        // line 124
        echo "
                ";
        // line 125
        $this->displayBlock('component_pagination_last', $context, $blocks);
        // line 151
        echo "            </ul>
        ";
    }

    // line 8
    public function block_component_pagination_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <li class=\"page-item page-first";
        if ((($context["currentPage"] ?? null) == 1)) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 10
        $this->displayBlock('component_pagination_first_input', $context, $blocks);
        // line 19
        echo "
                        ";
        // line 20
        $this->displayBlock('component_pagination_first_label', $context, $blocks);
        // line 27
        echo "                    </li>
                ";
    }

    // line 10
    public function block_component_pagination_first_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                            <input type=\"radio\"
                                   ";
        // line 12
        if ((($context["currentPage"] ?? null) == 1)) {
            echo "disabled=\"disabled\"";
        }
        // line 13
        echo "                                   name=\"p\"
                                   id=\"p-first\"
                                   value=\"1\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 20
    public function block_component_pagination_first_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                            <label class=\"page-link\" for=\"p-first\">
                                ";
        // line 22
        $this->displayBlock('component_pagination_first_link', $context, $blocks);
        // line 25
        echo "                            </label>
                        ";
    }

    // line 22
    public function block_component_pagination_first_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 23);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-left"]));
        // line 24
        echo "                                ";
    }

    // line 30
    public function block_component_pagination_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                    <li class=\"page-item page-prev";
        if ((($context["currentPage"] ?? null) == 1)) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 32
        $this->displayBlock('component_pagination_prev_input', $context, $blocks);
        // line 41
        echo "
                        ";
        // line 42
        $this->displayBlock('component_pagination_prev_label', $context, $blocks);
        // line 51
        echo "                    </li>
                ";
    }

    // line 32
    public function block_component_pagination_prev_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                            <input type=\"radio\"
                                   ";
        // line 34
        if ((($context["currentPage"] ?? null) == 1)) {
            echo "disabled=\"disabled\"";
        }
        // line 35
        echo "                                   name=\"p\"
                                   id=\"p-prev\"
                                   value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) - 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 42
    public function block_component_pagination_prev_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                            <label class=\"page-link\" for=\"p-prev\">
                                ";
        // line 44
        $this->displayBlock('component_pagination_prev_link', $context, $blocks);
        // line 49
        echo "                            </label>
                        ";
    }

    // line 44
    public function block_component_pagination_prev_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                                    ";
        $this->displayBlock('component_pagination_prev_icon', $context, $blocks);
        // line 48
        echo "                                ";
    }

    // line 45
    public function block_component_pagination_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 46);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-left"]));
        // line 47
        echo "                                    ";
    }

    // line 54
    public function block_component_pagination_loop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    ";
        $context["start"] = (($context["currentPage"] ?? null) - 2);
        // line 56
        echo "                    ";
        if ((($context["start"] ?? null) <= 0)) {
            // line 57
            echo "                        ";
            $context["start"] = (($context["currentPage"] ?? null) - 1);
            // line 58
            echo "                        ";
            if ((($context["start"] ?? null) <= 0)) {
                // line 59
                echo "                            ";
                $context["start"] = ($context["currentPage"] ?? null);
                // line 60
                echo "                        ";
            }
            // line 61
            echo "                    ";
        }
        // line 62
        echo "
                    ";
        // line 63
        $context["end"] = (($context["start"] ?? null) + 4);
        // line 64
        echo "
                    ";
        // line 65
        if ((($context["end"] ?? null) > ($context["totalPages"] ?? null))) {
            // line 66
            echo "                        ";
            $context["end"] = ($context["totalPages"] ?? null);
            // line 67
            echo "                    ";
        }
        // line 68
        echo "
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 70
            echo "
                        ";
            // line 71
            $context["isActive"] = (($context["currentPage"] ?? null) == $context["page"]);
            // line 72
            echo "
                        ";
            // line 73
            $this->displayBlock('component_pagination_item', $context, $blocks);
            // line 97
            echo "
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                ";
    }

    // line 73
    public function block_component_pagination_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                            <li class=\"page-item";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        echo "\">
                                ";
        // line 75
        $this->displayBlock('component_pagination_item_input', $context, $blocks);
        // line 84
        echo "
                                ";
        // line 85
        $this->displayBlock('component_pagination_item_label', $context, $blocks);
        // line 95
        echo "                            </li>
                        ";
    }

    // line 75
    public function block_component_pagination_item_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                                    <input type=\"radio\"
                                           name=\"p\"
                                           id=\"p";
        // line 78
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\"
                                           value=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\"
                                           class=\"d-none\"
                                           title=\"pagination\"
                                           ";
        // line 82
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
                                ";
    }

    // line 85
    public function block_component_pagination_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                                    <label class=\"page-link\"
                                           for=\"p";
        // line 87
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 88
        $this->displayBlock('component_pagination_item_link', $context, $blocks);
        // line 93
        echo "                                    </label>
                                ";
    }

    // line 88
    public function block_component_pagination_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                                            ";
        $this->displayBlock('component_pagination_item_text', $context, $blocks);
        // line 92
        echo "                                        ";
    }

    // line 89
    public function block_component_pagination_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                                                ";
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "
                                            ";
    }

    // line 101
    public function block_component_pagination_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                    <li class=\"page-item page-next";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 103
        $this->displayBlock('component_pagination_next_input', $context, $blocks);
        // line 112
        echo "
                        ";
        // line 113
        $this->displayBlock('component_pagination_next_label', $context, $blocks);
        // line 122
        echo "                    </li>
                ";
    }

    // line 103
    public function block_component_pagination_next_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                            <input type=\"radio\"
                                   ";
        // line 105
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 106
        echo "                                   name=\"p\"
                                   id=\"p-next\"
                                   value=\"";
        // line 108
        echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) + 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 113
    public function block_component_pagination_next_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                            <label class=\"page-link\" for=\"p-next\">
                                ";
        // line 115
        $this->displayBlock('component_pagination_next_link', $context, $blocks);
        // line 120
        echo "                            </label>
                        ";
    }

    // line 115
    public function block_component_pagination_next_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "                                    ";
        $this->displayBlock('component_pagination_next_icon', $context, $blocks);
        // line 119
        echo "                                ";
    }

    // line 116
    public function block_component_pagination_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 117);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
        // line 118
        echo "                                    ";
    }

    // line 125
    public function block_component_pagination_last($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "                    <li class=\"page-item page-last";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 127
        $this->displayBlock('component_pagination_last_input', $context, $blocks);
        // line 136
        echo "
                        ";
        // line 137
        $this->displayBlock('component_pagination_last_label', $context, $blocks);
        // line 149
        echo "                    </li>
                ";
    }

    // line 127
    public function block_component_pagination_last_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "                            <input type=\"radio\"
                                   ";
        // line 129
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 130
        echo "                                   name=\"p\"
                                   id=\"p-last\"
                                   value=\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["totalPages"] ?? null), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
    }

    // line 137
    public function block_component_pagination_last_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "                            <label class=\"page-link\" for=\"p-last\">
                                ";
        // line 139
        $this->displayBlock('component_pagination_last_link', $context, $blocks);
        // line 147
        echo "                            </label>
                        ";
    }

    // line 139
    public function block_component_pagination_last_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                                    ";
        $this->displayBlock('component_pagination_last_icon', $context, $blocks);
        // line 146
        echo "                                ";
    }

    // line 140
    public function block_component_pagination_last_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 141);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-right"]));
        // line 145
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  635 => 145,  626 => 141,  622 => 140,  618 => 146,  615 => 140,  611 => 139,  606 => 147,  604 => 139,  601 => 138,  597 => 137,  589 => 132,  585 => 130,  581 => 129,  578 => 128,  574 => 127,  569 => 149,  567 => 137,  564 => 136,  562 => 127,  555 => 126,  551 => 125,  547 => 118,  538 => 117,  534 => 116,  530 => 119,  527 => 116,  523 => 115,  518 => 120,  516 => 115,  513 => 114,  509 => 113,  501 => 108,  497 => 106,  493 => 105,  490 => 104,  486 => 103,  481 => 122,  479 => 113,  476 => 112,  474 => 103,  467 => 102,  463 => 101,  456 => 90,  452 => 89,  448 => 92,  445 => 89,  441 => 88,  436 => 93,  434 => 88,  430 => 87,  427 => 86,  423 => 85,  415 => 82,  409 => 79,  405 => 78,  401 => 76,  397 => 75,  392 => 95,  390 => 85,  387 => 84,  385 => 75,  378 => 74,  374 => 73,  370 => 99,  355 => 97,  353 => 73,  350 => 72,  348 => 71,  345 => 70,  328 => 69,  325 => 68,  322 => 67,  319 => 66,  317 => 65,  314 => 64,  312 => 63,  309 => 62,  306 => 61,  303 => 60,  300 => 59,  297 => 58,  294 => 57,  291 => 56,  288 => 55,  284 => 54,  280 => 47,  271 => 46,  267 => 45,  263 => 48,  260 => 45,  256 => 44,  251 => 49,  249 => 44,  246 => 43,  242 => 42,  234 => 37,  230 => 35,  226 => 34,  223 => 33,  219 => 32,  214 => 51,  212 => 42,  209 => 41,  207 => 32,  200 => 31,  196 => 30,  192 => 24,  183 => 23,  179 => 22,  174 => 25,  172 => 22,  169 => 21,  165 => 20,  156 => 13,  152 => 12,  149 => 11,  145 => 10,  140 => 27,  138 => 20,  135 => 19,  133 => 10,  126 => 9,  122 => 8,  117 => 151,  115 => 125,  112 => 124,  110 => 101,  107 => 100,  105 => 54,  102 => 53,  100 => 30,  97 => 29,  95 => 8,  92 => 7,  88 => 6,  83 => 153,  81 => 6,  77 => 4,  74 => 3,  71 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/pagination.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/pagination.html.twig");
    }
}
