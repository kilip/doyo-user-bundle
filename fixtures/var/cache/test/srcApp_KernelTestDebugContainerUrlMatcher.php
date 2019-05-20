<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelTestDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/change-password' => [[['_route' => 'doyo_user.change_password', '_controller' => 'Doyo\\UserBundle\\Controller\\ProfileController::changePassword'], null, ['POST' => 0], null, false, false, null]],
            '/register' => [[['_route' => 'doyo_user.register', '_controller' => 'Doyo\\UserBundle\\Controller\\RegisterController::register'], null, ['POST' => 0], null, false, false, null]],
            '/reset-password/request' => [[['_route' => 'doyo_user_reset_password_request', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::request'], null, ['POST' => 0], null, false, false, null]],
            '/reset-password/new-password' => [[['_route' => 'doyo_user_new_password', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::newPassword'], null, null, null, false, false, null]],
            '/login-check' => [[['_route' => 'login_check'], null, ['POST' => 0], null, false, false, null]],
            '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/default\\-reset\\-password/confirm/([^/]++)(*:49)'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:91)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:121)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:157)'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:191)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:229)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/reset\\-password/confirm/([^/]++)(*:274)'
                    .'|/((?!.*_wdt|_profiler).+)(*:307)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            49 => [[['_route' => 'doyo_user_reset_password_confirm', '_controller' => 'Doyo\\UserBundle\\Controller\\ResetPasswordController::confirmResetPassword'], ['token'], null, null, false, true, null]],
            91 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            121 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            157 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            191 => [
                [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            229 => [
                [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            274 => [[['_route' => 'app_reset_password_confirm', '_controller' => 'App\\Controller\\MainController::resetPasswordConfirm'], ['token'], null, null, false, true, null]],
            307 => [[['_route' => 'vue_pages', '_controller' => 'App\\Controller\\MainController::index'], ['route'], null, null, false, true, null]],
        ];
    }
}
