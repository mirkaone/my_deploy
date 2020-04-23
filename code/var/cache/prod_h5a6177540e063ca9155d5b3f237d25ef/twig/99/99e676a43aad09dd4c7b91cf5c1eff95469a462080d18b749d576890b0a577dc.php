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

/* @Storefront/storefront/block/cms-block-image-cover.html.twig */
class __TwigTemplate_0a25cff3d24d1369db1351891a7629efdd4d4bce257cd7474b0206bbeb34002a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_cover' => [$this, 'block_block_image_cover'],
            'block_image_cover_inner' => [$this, 'block_block_image_cover_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_image_cover', $context, $blocks);
    }

    public function block_block_image_cover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", [0 => "image"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["columns"] = 1;
        // line 4
        echo "    
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('block_image_cover_inner', $context, $blocks);
        // line 9
        echo "    </div>
";
    }

    // line 6
    public function block_block_image_cover_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-cover.html.twig", 7);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 8
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-cover.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 8,  70 => 7,  66 => 6,  61 => 9,  59 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-image-cover.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-cover.html.twig");
    }
}
