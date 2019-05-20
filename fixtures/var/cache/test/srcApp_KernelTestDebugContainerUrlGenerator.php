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

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelTestDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context       = $context;
        $this->logger        = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
                'doyo_user.change_password'        => [[], ['_controller' => 'Doyo\\UserBundle\\Controller\\ProfileController::changePassword'], [], [['text', '/change-password']], [], []],
                'doyo_user.register'               => [[], ['_controller' => 'Doyo\\UserBundle\\Controller\\RegisterController::register'], [], [['text', '/register']], [], []],
                'doyo_user_reset_password_confirm' => [['token'], ['_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::confirmResetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/default-reset-password/confirm']], [], []],
                'doyo_user_reset_password_request' => [[], ['_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password/request']], [], []],
                'doyo_user_new_password'           => [[], ['_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::newPassword'], [], [['text', '/reset-password/new-password']], [], []],
                'api_entrypoint'                   => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
                'api_doc'                          => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
                'api_jsonld_context'               => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
                'api_users_get_collection'         => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
                'api_users_post_collection'        => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/users']], [], []],
                'api_users_get_item'               => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
                'api_users_put_item'               => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
                'api_users_delete_item'            => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/users']], [], []],
                'login_check'                      => [[], [], [], [['text', '/login-check']], [], []],
                'app_reset_password_confirm'       => [['token'], ['_controller' => 'App\\Controller\\MainController::resetPasswordConfirm'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/confirm']], [], []],
                'app_index'                        => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
                'vue_pages'                        => [['route'], ['_controller' => 'App\\Controller\\MainController::index'], ['route' => '(?!.*_wdt|_profiler).+'], [['variable', '/', '(?!.*_wdt|_profiler).+', 'route', true]], [], []],
            ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
