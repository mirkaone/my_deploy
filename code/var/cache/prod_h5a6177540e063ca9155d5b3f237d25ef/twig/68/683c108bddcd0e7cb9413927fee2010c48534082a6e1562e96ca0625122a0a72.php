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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_ae217f727e8a50161ba3a8f2c2562dd9c8e36217c1cb553a2400ed073da8d2f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_rich_snippets' => [$this, 'block_component_product_box_rich_snippets'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box', $context, $blocks);
    }

    public function block_component_product_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (($context["product"] ?? null)) {
            // line 3
            echo "        ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["cover"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            echo "
        <div class=\"card product-box box-";
            // line 7
            echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 8
            $this->displayBlock('component_product_box_content', $context, $blocks);
            // line 103
            echo "        </div>
    ";
        }
    }

    // line 8
    public function block_component_product_box_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"card-body\">
                    ";
        // line 10
        $this->displayBlock('component_product_box_badges', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('component_product_box_rich_snippets', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('component_product_box_image', $context, $blocks);
        // line 62
        echo "
                    ";
        // line 63
        $this->displayBlock('component_product_box_info', $context, $blocks);
        // line 101
        echo "                </div>
            ";
    }

    // line 10
    public function block_component_product_box_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 11)->display($context);
        // line 12
        echo "                    ";
    }

    // line 14
    public function block_component_product_box_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/meta.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 15)->display($context);
        // line 16
        echo "                    ";
    }

    // line 18
    public function block_component_product_box_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        <div class=\"product-image-wrapper\">
                            ";
        // line 21
        echo "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? (($context["displayMode"] ?? null)) : ("standard"));
        // line 22
        echo "
                            ";
        // line 24
        echo "                            ";
        if (((($context["layout"] ?? null) == "image") && (($context["displayMode"] ?? null) == "standard"))) {
            // line 25
            echo "                                ";
            $context["displayMode"] = "cover";
            // line 26
            echo "                            ";
        }
        // line 27
        echo "
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                               title=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               class=\"product-image-link is-";
        // line 30
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                    ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 33
($context["displayMode"] ?? null)), "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["cover"] ?? null), "translated", [], "any", false, false, false, 34), "alt", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 34), "alt", [], "any", false, false, false, 34)) : (($context["name"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35)) : (($context["name"] ?? null)))];
            // line 37
            echo "
                                    ";
            // line 38
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 39
                echo "                                        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 40
                echo "                                    ";
            }
            // line 41
            echo "
                                    ";
            // line 42
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 42);
            })())->display(twig_array_merge($context, ["media" =>             // line 43
($context["cover"] ?? null), "sizes" => ["xs" => "501px", "sm" => "315px", "md" => "427px", "lg" => "333px", "xl" => "284px"], "name" => "product-image-thumbnails"]));
            // line 52
            echo "                                ";
        } else {
            // line 53
            echo "                                    <div class=\"product-image-placeholder\">
                                        ";
            // line 54
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 54);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 57
            echo "                                    </div>
                                ";
        }
        // line 59
        echo "                            </a>
                        </div>
                    ";
    }

    // line 63
    public function block_component_product_box_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                        <div class=\"product-info\">
                            ";
        // line 65
        $this->displayBlock('component_product_box_rating', $context, $blocks);
        // line 77
        echo "
                            ";
        // line 78
        $this->displayBlock('component_product_box_name', $context, $blocks);
        // line 85
        echo "
                            ";
        // line 86
        $this->displayBlock('component_product_box_description', $context, $blocks);
        // line 91
        echo "
                            ";
        // line 92
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 95
        echo "
                            ";
        // line 96
        $this->displayBlock('component_product_box_action', $context, $blocks);
        // line 99
        echo "                        </div>
                    ";
    }

    // line 65
    public function block_component_product_box_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 66), "detail", [], "any", false, false, false, 66), "showReviews", [], "any", false, false, false, 66)) {
            // line 67
            echo "                                    <div class=\"product-rating\">
                                        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 68)) {
                // line 69
                echo "                                            ";
                $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 69)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source,                 // line 70
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 70), "style" => "text-primary"]));
                // line 73
                echo "                                        ";
            }
            // line 74
            echo "                                    </div>
                                ";
        }
        // line 76
        echo "                            ";
    }

    // line 78
    public function block_component_product_box_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                                   class=\"product-name\"
                                   title=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 82
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 86
    public function block_component_product_box_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "                                <div class=\"product-description\">
                                    ";
        // line 88
        echo strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 88), "description", [], "any", false, false, false, 88));
        echo "
                                </div>
                            ";
    }

    // line 92
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 93)->display($context);
        // line 94
        echo "                            ";
    }

    // line 96
    public function block_component_product_box_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 97)->display($context);
        // line 98
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  339 => 98,  336 => 97,  332 => 96,  328 => 94,  325 => 93,  321 => 92,  314 => 88,  311 => 87,  307 => 86,  300 => 82,  296 => 81,  290 => 79,  286 => 78,  282 => 76,  278 => 74,  275 => 73,  273 => 70,  271 => 69,  269 => 68,  266 => 67,  263 => 66,  259 => 65,  254 => 99,  252 => 96,  249 => 95,  247 => 92,  244 => 91,  242 => 86,  239 => 85,  237 => 78,  234 => 77,  232 => 65,  229 => 64,  225 => 63,  219 => 59,  215 => 57,  207 => 54,  204 => 53,  201 => 52,  199 => 43,  192 => 42,  189 => 41,  186 => 40,  183 => 39,  181 => 38,  178 => 37,  176 => 35,  175 => 34,  174 => 33,  172 => 32,  170 => 31,  166 => 30,  162 => 29,  158 => 28,  155 => 27,  152 => 26,  149 => 25,  146 => 24,  143 => 22,  140 => 21,  137 => 19,  133 => 18,  129 => 16,  126 => 15,  122 => 14,  118 => 12,  115 => 11,  111 => 10,  106 => 101,  104 => 63,  101 => 62,  99 => 18,  96 => 17,  94 => 14,  91 => 13,  89 => 10,  86 => 9,  82 => 8,  76 => 103,  74 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
