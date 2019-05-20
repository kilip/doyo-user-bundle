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

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d5c078aa9618236b179b65c73ea78b30206a12947e957b0264c099ac5f2c268b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'summary' => [$this, 'block_summary'],
            'panel'   => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return '@WebProfiler/Profiler/layout.html.twig';
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@WebProfiler/Profiler/info.html.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@WebProfiler/Profiler/info.html.twig'));

        // line 3
        $context['messages'] = ['no_token' => ['status' => 'error', 'title' => ((('latest' === ((        // line 6
(isset($context['token']) || array_key_exists('token', $context))) ? (_twig_default_filter((isset($context['token']) || array_key_exists('token', $context) ? $context['token'] : (function () { throw new RuntimeError('Variable "token" does not exist.', 6, $this->source); })()), '')) : ('')))) ? ('There are no profiles') : ('Token not found')), 'message' => ((('latest' === ((        // line 7
(isset($context['token']) || array_key_exists('token', $context))) ? (_twig_default_filter((isset($context['token']) || array_key_exists('token', $context) ? $context['token'] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })()), '')) : ('')))) ? ('No profiles found in the database.') : ((('Token "'.(((isset($context['token']) || array_key_exists('token', $context))) ? (_twig_default_filter((isset($context['token']) || array_key_exists('token', $context) ? $context['token'] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })()), '')) : (''))).'" was not found in the database.')))]];
        // line 1
        $this->parent = $this->loadTemplate('@WebProfiler/Profiler/layout.html.twig', '@WebProfiler/Profiler/info.html.twig', 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    // line 11
    public function block_summary($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'summary'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'summary'));

        // line 12
        echo '    <div class="status status-';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['messages']) || array_key_exists('messages', $context) ? $context['messages'] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 12, $this->source); })()), (isset($context['about']) || array_key_exists('about', $context) ? $context['about'] : (function () { throw new RuntimeError('Variable "about" does not exist.', 12, $this->source); })()), [], 'array', false, false, false, 12), 'status', [], 'any', false, false, false, 12), 'html', null, true);
        echo '">
        <div class="container">
            <h2>';
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['messages']) || array_key_exists('messages', $context) ? $context['messages'] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 14, $this->source); })()), (isset($context['about']) || array_key_exists('about', $context) ? $context['about'] : (function () { throw new RuntimeError('Variable "about" does not exist.', 14, $this->source); })()), [], 'array', false, false, false, 14), 'status', [], 'any', false, false, false, 14)), 'html', null, true);
        echo '</h2>
        </div>
    </div>
';

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 19
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'panel'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'block', 'panel'));

        // line 20
        echo '    <h2>';
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['messages']) || array_key_exists('messages', $context) ? $context['messages'] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 20, $this->source); })()), (isset($context['about']) || array_key_exists('about', $context) ? $context['about'] : (function () { throw new RuntimeError('Variable "about" does not exist.', 20, $this->source); })()), [], 'array', false, false, false, 20), 'title', [], 'any', false, false, false, 20), 'html', null, true);
        echo '</h2>
    <p>';
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context['messages']) || array_key_exists('messages', $context) ? $context['messages'] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 21, $this->source); })()), (isset($context['about']) || array_key_exists('about', $context) ? $context['about'] : (function () { throw new RuntimeError('Variable "about" does not exist.', 21, $this->source); })()), [], 'array', false, false, false, 21), 'message', [], 'any', false, false, false, 21), 'html', null, true);
        echo '</p>
';

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    public function getTemplateName()
    {
        return '@WebProfiler/Profiler/info.html.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [105 => 21,  100 => 20,  91 => 19,  77 => 14,  71 => 12,  62 => 11,  51 => 1,  49 => 7,  48 => 6,  47 => 3,  35 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", '@WebProfiler/Profiler/info.html.twig', '/project/doyo/user-bundle/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig');
    }
}
