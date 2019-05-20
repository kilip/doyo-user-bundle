<?php

/*
 * This file is part of the DoyoUserBundle project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_4eed9fe9612487f90ea07a885f8359049e14847e991dbe33ae41bb922380c8fc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return '@WebProfiler/Profiler/base.html.twig';
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@WebProfiler/Profiler/open.html.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@WebProfiler/Profiler/open.html.twig'));

        $this->parent = $this->loadTemplate('@WebProfiler/Profiler/base.html.twig', '@WebProfiler/Profiler/open.html.twig', 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'head'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'head'));

        // line 4
        echo '    <style>
        ';
        // line 5
        echo twig_include($this->env, $context, '@WebProfiler/Profiler/open.css.twig');
        echo '
    </style>
';

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'body'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'body'));

        // line 10
        echo '    ';
        $context['source'] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt((isset($context['filename']) || array_key_exists('filename', $context) ? $context['filename'] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 10, $this->source); })()), (isset($context['line']) || array_key_exists('line', $context) ? $context['line'] : (function () { throw new RuntimeError('Variable "line" does not exist.', 10, $this->source); })()), -1);
        // line 11
        echo '    <div class="header">
        <h1>';
        // line 12
        echo twig_escape_filter($this->env, (isset($context['file']) || array_key_exists('file', $context) ? $context['file'] : (function () { throw new RuntimeError('Variable "file" does not exist.', 12, $this->source); })()), 'html', null, true);
        if ((0 < (isset($context['line']) || array_key_exists('line', $context) ? $context['line'] : (function () { throw new RuntimeError('Variable "line" does not exist.', 12, $this->source); })()))) {
            echo ' <small>line ';
            echo twig_escape_filter($this->env, (isset($context['line']) || array_key_exists('line', $context) ? $context['line'] : (function () { throw new RuntimeError('Variable "line" does not exist.', 12, $this->source); })()), 'html', null, true);
            echo '</small>';
        }
        echo '</h1>
        <a class="doc" href="https://symfony.com/doc/';
        // line 13
        echo twig_escape_filter($this->env, twig_constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION'), 'html', null, true);
        echo '/reference/configuration/framework.html#ide" rel="help">Open in your IDE?</a>
    </div>
    <div class="source">
        ';
        // line 16
        if ((null === (isset($context['source']) || array_key_exists('source', $context) ? $context['source'] : (function () { throw new RuntimeError('Variable "source" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo '            <p class="empty">The file is not readable.</p>
        ';
        } else {
            // line 19
            echo '            ';
            echo isset($context['source']) || array_key_exists('source', $context) ? $context['source'] : (function () { throw new RuntimeError('Variable "source" does not exist.', 19, $this->source); })();
            echo '
        ';
        }
        // line 21
        echo '    </div>
';

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    public function getTemplateName()
    {
        return '@WebProfiler/Profiler/open.html.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [124 => 21,  118 => 19,  114 => 17,  112 => 16,  106 => 13,  97 => 12,  94 => 11,  91 => 10,  82 => 9,  69 => 5,  66 => 4,  57 => 3,  35 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
    {% set source = filename|file_excerpt(line, -1) %}
    <div class=\"header\">
        <h1>{{ file }}{% if 0 < line %} <small>line {{ line }}</small>{% endif %}</h1>
        <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    </div>
    <div class=\"source\">
        {% if source is null %}
            <p class=\"empty\">The file is not readable.</p>
        {% else %}
            {{ source|raw }}
        {% endif %}
    </div>
{% endblock %}
", '@WebProfiler/Profiler/open.html.twig', '/project/doyo/user-bundle/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig');
    }
}