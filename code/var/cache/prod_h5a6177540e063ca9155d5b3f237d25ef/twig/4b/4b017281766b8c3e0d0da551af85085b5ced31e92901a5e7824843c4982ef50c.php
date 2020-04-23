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

/* @Storefront/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_daa44f710e89d2499e9ccb4cb6df6a71d74dfc76771bb4f39b3cdd402d97758b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["activeId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "
    <div class=\"";
        // line 9
        if ((($context["level"] ?? null) == 0)) {
            echo "row ";
        }
        echo "navigation-flyout-categories is-level-";
        echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 11
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11);
            // line 12
            echo "            ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 12), "translated", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12);
            // line 13
            echo "            ";
            $context["link"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 13), "externalLink", [], "any", false, false, false, 13);
            // line 14
            echo "
            ";
            // line 15
            $this->displayBlock('layout_navigation_categories_item', $context, $blocks);
            // line 43
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
";
    }

    // line 15
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"";
        if ((($context["level"] ?? null) == 0)) {
            if (($context["navigationMedia"] ?? null)) {
                echo "col-4 ";
            } else {
                echo "col-3 ";
            }
        }
        echo "navigation-flyout-col\">
                    ";
        // line 17
        $this->displayBlock('layout_navigation_categories_item_link', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
        // line 41
        echo "                </div>
            ";
    }

    // line 17
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 18), "type", [], "any", false, false, false, 18) == "folder")) {
            // line 19
            echo "                            <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
                                 title=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 21
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </div>
                        ";
        } else {
            // line 24
            echo "                            <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if ((($context["id"] ?? null) === ($context["activeId"] ?? null))) {
                echo " active";
            }
            echo "\"
                               href=\"";
            // line 25
            if (($context["link"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["id"] ?? null)]), "html", null, true);
            }
            echo "\"
                               itemprop=\"url\"
                               title=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                <span itemprop=\"name\">";
            // line 28
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                            </a>
                        ";
        }
        // line 31
        echo "                    ";
    }

    // line 33
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        ";
        if ((($context["level"] ?? null) < ($context["navigationMaxDepth"] ?? null))) {
            // line 35
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@Storefront/storefront/layout/navigation/categories.html.twig", 35)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source,             // line 36
($context["treeItem"] ?? null), "children", [], "any", false, false, false, 36), "level" => (            // line 37
($context["level"] ?? null) + 1)]));
            // line 39
            echo "                        ";
        }
        // line 40
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 40,  218 => 39,  216 => 37,  215 => 36,  213 => 35,  210 => 34,  206 => 33,  202 => 31,  196 => 28,  192 => 27,  183 => 25,  175 => 24,  169 => 21,  165 => 20,  160 => 19,  157 => 18,  153 => 17,  148 => 41,  146 => 33,  143 => 32,  141 => 17,  130 => 16,  126 => 15,  121 => 44,  107 => 43,  105 => 15,  102 => 14,  99 => 13,  96 => 12,  93 => 11,  76 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/categories.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
