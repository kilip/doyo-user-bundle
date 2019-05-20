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

namespace ContainerM6zY2Py;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir              = $this->targetDirs[0]              = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir    = $containerDir;
        $this->parameters      = $this->getDefaultParameters();

        $this->services     = $this->privates     = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app'                      => 'getCache_AppService',
            'cache.system'                   => 'getCache_SystemService',
            'doctrine'                       => 'getDoctrineService',
            'event_dispatcher'               => 'getEventDispatcherService',
            'http_kernel'                    => 'getHttpKernelService',
            'profiler'                       => 'getProfilerService',
            'request_stack'                  => 'getRequestStackService',
            'router'                         => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage'         => 'getSecurity_TokenStorageService',
            'serializer'                     => 'getSerializerService',
            'translator'                     => 'getTranslatorService',
            'twig'                           => 'getTwigService',
            'validator'                      => 'getValidatorService',
        ];
        $this->fileMap = [
            'App\\Controller\\MainController'                                           => 'getMainControllerService.php',
            'Doyo\\UserBundle\\Controller\\ProfileController'                           => 'getProfileControllerService.php',
            'Doyo\\UserBundle\\Controller\\RegisterController'                          => 'getRegisterControllerService.php',
            'Doyo\\UserBundle\\Controller\\ResetPasswordController'                     => 'getResetPasswordControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'          => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'          => 'getTemplateControllerService.php',
            'api_platform.action.documentation'                                         => 'getApiPlatform_Action_DocumentationService.php',
            'api_platform.action.entrypoint'                                            => 'getApiPlatform_Action_EntrypointService.php',
            'api_platform.action.exception'                                             => 'getApiPlatform_Action_ExceptionService.php',
            'api_platform.action.placeholder'                                           => 'getApiPlatform_Action_PlaceholderService.php',
            'api_platform.jsonld.action.context'                                        => 'getApiPlatform_Jsonld_Action_ContextService.php',
            'api_platform.swagger.action.ui'                                            => 'getApiPlatform_Swagger_Action_UiService.php',
            'cache.app_clearer'                                                         => 'getCache_AppClearerService.php',
            'cache.global_clearer'                                                      => 'getCache_GlobalClearerService.php',
            'cache.system_clearer'                                                      => 'getCache_SystemClearerService.php',
            'cache_clearer'                                                             => 'getCacheClearerService.php',
            'cache_warmer'                                                              => 'getCacheWarmerService.php',
            'console.command.public_alias.api_platform.swagger.command.swagger_command' => 'getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command'              => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command'                => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command'                 => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command'                 => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doyo_user.command.generate_jwt_keys'          => 'getConsole_Command_PublicAlias_DoyoUser_Command_GenerateJwtKeysService.php',
            'console.command_loader'                                                    => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection'                                          => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager'                                       => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache'              => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache'                 => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache'                => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'filesystem'                                                                => 'getFilesystemService.php',
            'lexik_jwt_authentication.check_config_command'                             => 'getLexikJwtAuthentication_CheckConfigCommandService.php',
            'lexik_jwt_authentication.encoder'                                          => 'getLexikJwtAuthentication_EncoderService.php',
            'lexik_jwt_authentication.generate_token_command'                           => 'getLexikJwtAuthentication_GenerateTokenCommandService.php',
            'lexik_jwt_authentication.jwt_manager'                                      => 'getLexikJwtAuthentication_JwtManagerService.php',
            'lexik_jwt_authentication.key_loader'                                       => 'getLexikJwtAuthentication_KeyLoaderService.php',
            'routing.loader'                                                            => 'getRouting_LoaderService.php',
            'security.authentication_utils'                                             => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager'                                               => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder'                                                 => 'getSecurity_PasswordEncoderService.php',
            'services_resetter'                                                         => 'getServicesResetterService.php',
            'session'                                                                   => 'getSessionService.php',
            'swiftmailer.mailer.default'                                                => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger'                           => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real'                                 => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport'                                                     => 'getSwiftmailer_TransportService.php',
            'twig.controller.exception'                                                 => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error'                                             => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception'                                         => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler'                                          => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router'                                            => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'api_platform.action.delete_item'     => 'api_platform.action.placeholder',
            'api_platform.action.get_collection'  => 'api_platform.action.placeholder',
            'api_platform.action.get_item'        => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item'      => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item'        => 'api_platform.action.placeholder',
            'database_connection'                 => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache'    => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache'   => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager'         => 'doctrine.orm.default_entity_manager',
            'mailer'                              => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[4].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[4].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[4].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Cache/CacheInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once $this->targetDirs[4].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Cache/CacheTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Service/ServiceLocatorTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Translation/LocaleAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/SerializerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Serializer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/NoOpScalarNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/InputOutputMetadataTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Loader/FileLoader.php';
            include_once $this->targetDirs[4].'/vendor/symfony/serializer/Mapping/Loader/YamlFileLoader.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once $this->targetDirs[4].'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Environment.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Translation/TranslatorTrait.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Extension/DebugExtension.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once $this->targetDirs[4].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once $this->targetDirs[4].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Twig/EntryFilesTwigExtension.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[4].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[4].'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-http/Firewall.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[4].'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once $this->targetDirs[4].'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once $this->targetDirs[4].'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[4].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[4].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/FormatsProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/OperationAwareFormatsProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/FormatsProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once $this->targetDirs[4].'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once $this->targetDirs[4].'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Identifier/ContextAwareIdentifierConverterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Filter/QueryParameterValidateListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once $this->targetDirs[4].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/InputOutputResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/JsonLd/AnonymousContextBuilderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainCollectionDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainItemDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainSubresourceDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataPersister/TraceableChainDataPersister.php';
            include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataPersister/ChainDataPersister.php';
            include_once $this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once $this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once $this->targetDirs[4].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[4].'/vendor/psr/log/Psr/Log/AbstractLogger.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Log/Logger.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[4].'/vendor/symfony/translation/IdentityTranslator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[4].'/vendor/symfony/contracts/Service/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once $this->targetDirs[4].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[4].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[4].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[4].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('tMB4-yZtJF', 0, ($this->targetDirs[0].'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(null));
        $a->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('TepLTbid2J', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['http_exception_listener'] ?? $this->load('getHttpExceptionListenerService.php');
        }, 1 => 'onKernelException'], -2048);
        $instance->addListener('kernel.controller', [0 => function () {
            return $this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService();
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService();
        }, 1 => 'onKernelRequest'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService();
        }, 1 => 'onKernelRequest'], 4);
        $instance->addListener('kernel.view', [0 => function () {
            return $this->privates['api_platform.listener.view.write'] ?? $this->load('getApiPlatform_Listener_View_WriteService.php');
        }, 1 => 'onKernelView'], 32);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService();
        }, 1 => 'onKernelRequest'], 2);
        $instance->addListener('kernel.view', [0 => function () {
            return $this->privates['api_platform.listener.view.serialize'] ?? $this->load('getApiPlatform_Listener_View_SerializeService.php');
        }, 1 => 'onKernelView'], 16);
        $instance->addListener('kernel.view', [0 => function () {
            return $this->privates['api_platform.listener.view.respond'] ?? $this->load('getApiPlatform_Listener_View_RespondService.php');
        }, 1 => 'onKernelView'], 8);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['api_platform.listener.exception.validation'] ?? $this->load('getApiPlatform_Listener_Exception_ValidationService.php');
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['api_platform.listener.exception'] ?? $this->load('getApiPlatform_Listener_ExceptionService.php');
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.view', [0 => function () {
            return $this->privates['api_platform.listener.view.validate'] ?? $this->load('getApiPlatform_Listener_View_ValidateService.php');
        }, 1 => 'onKernelView'], 64);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService();
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService();
        }, 1 => 'onKernelRequest'], 1);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['api_platform.swagger.listener.ui'] ?? ($this->privates['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['api_platform.hydra.listener.response.add_link_header'] ?? $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService();
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService();
        }, 1 => 'onKernelResponse'], -1);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['locale_listener'] ?? $this->getLocaleListenerService();
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return $this->privates['locale_listener'] ?? $this->getLocaleListenerService();
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService();
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return $this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php');
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return $this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php');
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['session_listener'] ?? $this->getSessionListenerService();
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['session_listener'] ?? $this->getSessionListenerService();
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return $this->privates['session_listener'] ?? $this->getSessionListenerService();
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['translator_listener'] ?? $this->getTranslatorListenerService();
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return $this->privates['translator_listener'] ?? $this->getTranslatorListenerService();
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['profiler_listener'] ?? $this->getProfilerListenerService();
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['profiler_listener'] ?? $this->getProfilerListenerService();
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return $this->privates['profiler_listener'] ?? $this->getProfilerListenerService();
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return $this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService();
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return $this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService();
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['router_listener'] ?? $this->getRouterListenerService();
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return $this->privates['router_listener'] ?? $this->getRouterListenerService();
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['router_listener'] ?? $this->getRouterListenerService();
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php');
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php');
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return $this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php');
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return $this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService();
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return $this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService();
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return $this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService();
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.exception', [0 => function () {
            return $this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php');
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return $this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php');
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return $this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php');
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return $this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php');
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 7)), $a));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $c->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $c->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $c->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $c->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $c->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $c->addInstance('api_platform.cache.route_name_resolver', ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()));
        $c->addInstance('api_platform.cache.identifiers_extractor', ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()));
        $c->addInstance('api_platform.cache.subresource_operation_factory', ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()));
        $c->addInstance('api_platform.cache.metadata.resource', ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()));
        $c->addInstance('api_platform.cache.metadata.property', ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()));
        $c->addInstance('cache.webpack_encore', ($this->privates['cache.webpack_encore'] ?? $this->getCache_WebpackEncoreService()));
        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $d->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataCollector\RequestDataCollector(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, []))), ($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($c);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $b = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $c = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $d = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $e = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        $f = new \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver($e, $a);
        $g = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());
        $h = ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [])));

        $i = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer($a, $b, $c, $d, $f, new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver($e, ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $g), null, $h, null, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', [], $this->parameters['api_platform.swagger.api_keys'], $g, true, 'page', false, 'itemsPerPage', ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()), false, 'pagination'));
        $j = ($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService());
        $k = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $l = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $m = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());
        $n = ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService());

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => $i, 1 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($e, [], null), 2 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer([], null), 3 => $i, 4 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($j, $d, $k), 'page', 'pagination'), $a, $d, $h), 5 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($a, $b, $c, $d, $f, $e, $g, null), 6 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($a, $k, $e), 7 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($e, true), 8 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 9 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 10 => new \ApiPlatform\Core\Serializer\NoOpScalarNormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 12 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 15 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($a, $b, $c, $k, $d, $j, $l, null, $m, [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), false), 16 => new \ApiPlatform\Core\Serializer\ItemNormalizer($b, $c, $k, $d, $l, null, $m, $n, false, null, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $a, false), 17 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($a, $b, $c, $k, $d, $j, $l, null, $m, [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), true), 18 => new \ApiPlatform\Core\Serializer\ItemNormalizer($b, $c, $k, $d, $l, null, $m, $n, false, null, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $a, true), 19 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 20 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($m, new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($m), $l, ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($m))], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')]);
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv'   => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat'   => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini'   => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json'  => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo'    => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php'   => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po'    => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt'    => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res'   => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml'   => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.ar.xlf')], 'az' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'bg' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.bg.xlf')], 'ca' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.ca.xlf')], 'cs' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.cs.xlf')], 'cy' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.da.xlf')], 'de' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.de.xlf')], 'el' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.el.xlf')], 'en' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 2 => ($this->targetDirs[4].'/src/Resources/translations/DoyoUserBundle.en.yml')], 'es' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.es.xlf')], 'et' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf')], 'fa' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.fa.xlf')], 'fi' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf')], 'fr' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.fr.xlf')], 'gl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.gl.xlf')], 'he' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.hr.xlf')], 'hu' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.hu.xlf')], 'hy' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.it.xlf')], 'ja' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')], 'lb' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.lt.xlf')], 'lv' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.nl.xlf')], 'nn' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.no.xlf')], 'pl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.pl.xlf')], 'pt' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf')], 'pt_BR' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf')], 'ro' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.ro.xlf')], 'ru' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.ru.xlf')], 'sk' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.sl.xlf')], 'sq' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.sv.xlf')], 'th' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.tr.xlf')], 'uk' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.uk.xlf')], 'vi' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf')], 'zh_TW' => [0 => ($this->targetDirs[4].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[4].'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')]]]);
        $a->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $a->setFallbackLocales([0 => 'en']);

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator($a);
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath(($this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/templates'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => null], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(null, 'UTF-8', 1);
        $e->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $c]);
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($c, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService.php', true],
            'webpack_encore.tag_renderer'                 => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService.php', true],
        ])));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime'       => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', null, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->privates['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('YgTHXyto--', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('PnDaTKU-wF', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('oEw5YOyRZe', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->privates['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('G4MbqMxk3C', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->privates['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('DnwrDZAMq8', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'api_platform.formats_provider' shared service.
     *
     * @return \ApiPlatform\Core\Api\FormatsProvider
     */
    protected function getApiPlatform_FormatsProviderService()
    {
        return $this->privates['api_platform.formats_provider'] = new \ApiPlatform\Core\Api\FormatsProvider(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, null, null, $this->parameters['api_platform.http_cache.vary'], null, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->privates['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? ($this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer()));
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? ($this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer()));
        }, 2));
    }

    /**
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /**
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->privates['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.formats_provider'] ?? $this->getApiPlatform_FormatsProviderService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\Filter\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\Filter\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, []))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([0 => ($this->targetDirs[4].'/src/Resources/config/api_resources.yaml')], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))))))))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([0 => ($this->targetDirs[4].'/src/Resources/config/api_resources.yaml')], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()))))));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([0 => ($this->targetDirs[4].'/src/Resources/config/api_resources.yaml')], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))))))), $this->parameters['api_platform.formats']));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([0 => ($this->targetDirs[4].'/src/Resources/config/api_resources.yaml')], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->getParameter('api_platform.resource_class_directories'), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))));
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), new \ApiPlatform\Core\Security\ResourceAccessChecker(new \ApiPlatform\Core\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(null, null))), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
    }

    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, []))), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy(($this->targetDirs[3].'/public/build/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('PDShq7ilYt', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qw7PfOnbEb', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('tK5C4VCwor', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('7+uF4OqcyA', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'cache.webpack_encore' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_WebpackEncoreService()
    {
        return $this->privates['cache.webpack_encore'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vqz5E7A-fJ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'debug.api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider
     */
    protected function getDebug_ApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['debug.api_platform.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider(new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister
     */
    protected function getDebug_ApiPlatform_DataPersisterService()
    {
        return $this->privates['debug.api_platform.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister(new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.data_persister'] ?? $this->load('getApiPlatform_Doctrine_Orm_DataPersisterService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider
     */
    protected function getDebug_ApiPlatform_ItemDataProviderService()
    {
        return $this->privates['debug.api_platform.item_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider(new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['doyo_user.providers.user_item'] ?? $this->load('getDoyoUser_Providers_UserItemService.php'));
            yield 1 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php'));
        }, 2)));
    }

    /**
     * Gets the private 'debug.api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider
     */
    protected function getDebug_ApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['debug.api_platform.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider(new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->load('getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php'));
        }, 1)));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(null, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), null, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(null, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->targetDirs[3], function () {
            return $this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php');
        });
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.doyo_user.security.user_resource_voter'] ?? $this->load('getDebug_Security_Voter_DoyoUser_Security_UserResourceVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php'));
            yield 3 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults'))]));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), null, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.api'] ?? $this->load('getSecurity_Authentication_Provider_Guard_ApiService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.api'] ?? ($this->privates['security.authentication.provider.anonymous.api'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->load('getSecurity_Authentication_Provider_Guard_MainService.php'));
            yield 3 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.api'  => ['privates', 'security.firewall.map.context.api', 'getSecurity_Firewall_Map_Context_ApiService.php', true],
            'security.firewall.map.context.dev'  => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Whq7_mc'] ?? ($this->privates['.security.request_matcher.Whq7_mc'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/_(profiler|wdt)')));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.uTv4pMG'] ?? ($this->privates['.security.request_matcher.uTv4pMG'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/')));
            yield 'security.firewall.map.context.main' => null;
        }, 3));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->privates['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 1 => new \Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader(($this->targetDirs[4].'/src/Resources/config/serialization/User.yaml'))]), null);
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', null, true],
            'request_stack'       => ['services', 'request_stack', 'getRequestStackService', false],
            'session'             => ['services', 'session', 'getSessionService.php', true],
            'session_storage'     => ['privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true],
        ]));
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator'          => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator'                        => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator'                   => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'doctrine.orm.validator.unique'                                                     => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password'                                                  => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression'                                                              => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir'                         => false,
        'kernel.project_dir'                      => false,
        'kernel.cache_dir'                        => false,
        'kernel.logs_dir'                         => false,
        'kernel.bundles_metadata'                 => false,
        'kernel.secret'                           => false,
        'session.save_path'                       => false,
        'validator.mapping.cache.file'            => false,
        'translator.default_path'                 => false,
        'profiler.storage.dsn'                    => false,
        'debug.container.dump'                    => false,
        'serializer.mapping.cache.file'           => false,
        'twig.default_path'                       => false,
        'nelmio_cors.defaults'                    => false,
        'doctrine.orm.proxy_dir'                  => false,
        'api_platform.resource_class_directories' => false,
        'lexik_jwt_authentication.pass_phrase'    => false,
        'doyo_user_bundle_path'                   => false,
        'swiftmailer.spool.default.memory.path'   => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     *
     * @return mixed The value of the dynamic parameter
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value         = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value      = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value        = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value         = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'NelmioCorsBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'ApiPlatformBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'WebProfilerBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'DoyoUserBundle' => [
                    'path'      => ($this->targetDirs[4].'/src'),
                    'namespace' => 'Doyo\\UserBundle',
                ],
                'SwiftmailerBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'WebpackEncoreBundle' => [
                    'path'      => ($this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
            ]; break;
            case 'kernel.secret': $value                 = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value             = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value  = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value       = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value          = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value          = ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value             = ($this->targetDirs[3].'/templates'); break;
            case 'nelmio_cors.defaults': $value          = [
                'allow_origin' => [
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ],
                'allow_credentials' => false,
                'allow_headers'     => [
                    0 => 'content-type',
                    1 => 'authorization',
                ],
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts'   => [
                ],
                'origin_regex'              => true,
                'forced_allow_origin_value' => null,
            ]; break;
            case 'doctrine.orm.proxy_dir': $value                  = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'api_platform.resource_class_directories': $value = [
                0 => ($this->targetDirs[3].'/src/Entity'),
            ]; break;
            case 'lexik_jwt_authentication.pass_phrase': $value  = $this->getEnv('JWT_PASSPHRASE'); break;
            case 'doyo_user_bundle_path': $value                 = $this->targetDirs[4]; break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug'       => true,
            'kernel.name'        => 'src',
            'kernel.bundles'     => [
                'FrameworkBundle'              => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle'                   => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle'               => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'NelmioCorsBundle'             => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'DoctrineCacheBundle'          => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle'               => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'ApiPlatformBundle'            => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'WebProfilerBundle'            => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'DoyoUserBundle'               => 'Doyo\\UserBundle\\DoyoUserBundle',
                'SwiftmailerBundle'            => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'WebpackEncoreBundle'          => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
            ],
            'kernel.charset'                             => 'UTF-8',
            'kernel.container_class'                     => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader'       => true,
            'env(DATABASE_URL)'                          => '',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path'                              => '/_fragment',
            'kernel.http_method_override'                => true,
            'kernel.trusted_hosts'                       => [
            ],
            'kernel.default_locale'                   => 'en',
            'templating.helper.code.file_link_format' => null,
            'debug.file_link_format'                  => null,
            'session.metadata.storage_key'            => '_sf2_meta',
            'session.storage.options'                 => [
                'cache_limiter'   => '0',
                'cookie_secure'   => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability'  => 1,
            ],
            'session.metadata.update_threshold'      => 0,
            'asset.request_context.base_path'        => '',
            'asset.request_context.secure'           => false,
            'validator.mapping.cache.prefix'         => '',
            'validator.translation_domain'           => 'validators',
            'translator.logging'                     => false,
            'profiler_listener.only_exceptions'      => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at'           => -1,
            'router.request_context.host'            => 'localhost',
            'router.request_context.scheme'          => 'http',
            'router.request_context.base_url'        => '',
            'router.resource'                        => 'kernel::loadRoutes',
            'router.cache_class_prefix'              => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port'             => 80,
            'request_listener.https_port'            => 443,
            'serializer.mapping.cache.prefix'        => '',
            'twig.exception_listener.controller'     => 'twig.controller.exception::showAction',
            'twig.form.resources'                    => [
                0 => 'form_div_layout.html.twig',
            ],
            'security.authentication.trust_resolver.anonymous_class'  => null,
            'security.authentication.trust_resolver.rememberme_class' => null,
            'security.role_hierarchy.roles'                           => [
            ],
            'security.access.denied_url'                          => null,
            'security.authentication.manager.erase_credentials'   => true,
            'security.authentication.session_strategy.strategy'   => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found'         => true,
            'nelmio_cors.map'                                     => [
                '^/' => [
                ],
            ],
            'nelmio_cors.cors_listener.class'                => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class'             => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class'      => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'doctrine_cache.apc.class'                       => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class'                      => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class'                     => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class'                     => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class'                 => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class'      => 'Couchbase',
            'doctrine_cache.couchbase.hostnames'             => 'localhost:8091',
            'doctrine_cache.file_system.class'               => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class'                  => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class'                  => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class'       => 'Memcache',
            'doctrine_cache.memcache.host'                   => 'localhost',
            'doctrine_cache.memcache.port'                   => 11211,
            'doctrine_cache.memcached.class'                 => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class'      => 'Memcached',
            'doctrine_cache.memcached.host'                  => 'localhost',
            'doctrine_cache.memcached.port'                  => 11211,
            'doctrine_cache.mongodb.class'                   => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class'        => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class'        => 'MongoClient',
            'doctrine_cache.mongodb.server'                  => 'localhost:27017',
            'doctrine_cache.predis.client.class'             => 'Predis\\Client',
            'doctrine_cache.predis.scheme'                   => 'tcp',
            'doctrine_cache.predis.host'                     => 'localhost',
            'doctrine_cache.predis.port'                     => 6379,
            'doctrine_cache.redis.class'                     => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class'          => 'Redis',
            'doctrine_cache.redis.host'                      => 'localhost',
            'doctrine_cache.redis.port'                      => 6379,
            'doctrine_cache.riak.class'                      => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class'               => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class'           => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host'                       => 'localhost',
            'doctrine_cache.riak.port'                       => 8087,
            'doctrine_cache.sqlite3.class'                   => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class'        => 'SQLite3',
            'doctrine_cache.void.class'                      => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class'                  => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class'                    => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class'                  => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class'        => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class'               => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class'           => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class'                     => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class'              => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class'                  => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class'   => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class'         => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class'  => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class'                                 => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers'                       => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager'        => 'default',
            'doctrine.dbal.connection_factory.types' => [
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection'                                 => 'default',
            'doctrine.orm.configuration.class'                            => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class'                           => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class'                     => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class'                              => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class'                                => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class'                           => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host'                            => 'localhost',
            'doctrine.orm.cache.memcache_port'                            => 11211,
            'doctrine.orm.cache.memcache_instance.class'                  => 'Memcache',
            'doctrine.orm.cache.memcached.class'                          => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host'                           => 'localhost',
            'doctrine.orm.cache.memcached_port'                           => 11211,
            'doctrine.orm.cache.memcached_instance.class'                 => 'Memcached',
            'doctrine.orm.cache.redis.class'                              => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host'                               => 'localhost',
            'doctrine.orm.cache.redis_port'                               => 6379,
            'doctrine.orm.cache.redis_instance.class'                     => 'Redis',
            'doctrine.orm.cache.xcache.class'                             => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class'                           => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class'                           => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class'                    => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class'                      => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class'                             => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class'                             => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class'                             => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class'                       => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class'                       => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class'                            => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class'                         => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class'                    => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class'                   => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class'          => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class'        => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class'                  => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class'               => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class'                   => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class'                      => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class'                 => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class'        => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class'       => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class'          => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class'     => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class'   => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes'                    => true,
            'doctrine.orm.proxy_namespace'                                => 'Proxies',
            'api_platform.enable_entrypoint'                              => true,
            'api_platform.enable_docs'                                    => true,
            'api_platform.title'                                          => '',
            'api_platform.description'                                    => '',
            'api_platform.version'                                        => '0.0.0',
            'api_platform.show_webby'                                     => true,
            'api_platform.exception_to_status'                            => [
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException'        => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException'       => 400,
                'Doctrine\\ORM\\OptimisticLockException'                        => 409,
            ],
            'api_platform.formats' => [
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
                'json' => [
                    0 => 'application/json',
                ],
                'html' => [
                    0 => 'text/html',
                ],
            ],
            'api_platform.error_formats' => [
                'jsonproblem' => [
                    0 => 'application/problem+json',
                ],
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
            ],
            'api_platform.allow_plain_identifiers'                             => false,
            'api_platform.eager_loading.enabled'                               => true,
            'api_platform.eager_loading.max_joins'                             => 30,
            'api_platform.eager_loading.fetch_partial'                         => false,
            'api_platform.eager_loading.force_eager'                           => true,
            'api_platform.collection.order'                                    => 'ASC',
            'api_platform.collection.order_parameter_name'                     => 'order',
            'api_platform.collection.pagination.enabled'                       => true,
            'api_platform.collection.pagination.partial'                       => false,
            'api_platform.collection.pagination.client_enabled'                => false,
            'api_platform.collection.pagination.client_items_per_page'         => false,
            'api_platform.collection.pagination.client_partial'                => false,
            'api_platform.collection.pagination.items_per_page'                => 30,
            'api_platform.collection.pagination.maximum_items_per_page'        => null,
            'api_platform.collection.pagination.page_parameter_name'           => 'page',
            'api_platform.collection.pagination.enabled_parameter_name'        => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name'        => 'partial',
            'api_platform.collection.pagination'                               => [
                'enabled'                       => true,
                'partial'                       => false,
                'client_enabled'                => false,
                'client_items_per_page'         => false,
                'client_partial'                => false,
                'items_per_page'                => 30,
                'maximum_items_per_page'        => null,
                'page_parameter_name'           => 'page',
                'enabled_parameter_name'        => 'pagination',
                'items_per_page_parameter_name' => 'itemsPerPage',
                'partial_parameter_name'        => 'partial',
            ],
            'api_platform.http_cache.etag'           => true,
            'api_platform.http_cache.max_age'        => null,
            'api_platform.http_cache.shared_max_age' => null,
            'api_platform.http_cache.vary'           => [
                0 => 'Accept',
            ],
            'api_platform.http_cache.public'      => null,
            'api_platform.oauth.enabled'          => false,
            'api_platform.oauth.clientId'         => '',
            'api_platform.oauth.clientSecret'     => '',
            'api_platform.oauth.type'             => 'oauth2',
            'api_platform.oauth.flow'             => 'application',
            'api_platform.oauth.tokenUrl'         => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes'           => [
            ],
            'api_platform.swagger.api_keys' => [
                'apiKey' => [
                    'name' => 'Authorization',
                    'type' => 'header',
                ],
            ],
            'api_platform.enable_swagger_ui'                  => true,
            'api_platform.enable_re_doc'                      => true,
            'api_platform.enable_swagger'                     => true,
            'api_platform.graphql.enabled'                    => false,
            'api_platform.validator.serialize_payload_fields' => [
            ],
            'api_platform.elasticsearch.enabled'                   => false,
            'lexik_jwt_authentication.token_ttl'                   => 3600,
            'lexik_jwt_authentication.clock_skew'                  => 0,
            'lexik_jwt_authentication.user_identity_field'         => 'username',
            'lexik_jwt_authentication.user_id_claim'               => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine'       => 'openssl',
            'web_profiler.debug_toolbar.intercept_redirects'       => false,
            'web_profiler.debug_toolbar.mode'                      => 2,
            'doyo_user.user_class'                                 => 'App\\Entity\\User',
            'doyo_user.security.roles'                             => [
                'DOYO_USER_LIST'               => 'is_granted("ROLE_ADMIN")',
                'DOYO_USER_CREATE'             => 'is_granted("ROLE_USER")',
                'DOYO_USER_READ'               => 'is_granted("ROLE_USER")',
                'DOYO_USER_UPDATE'             => 'is_granted("ROLE_USER")',
                'DOYO_USER_DELETE'             => 'is_granted("ROLE_USER")',
                'DOYO_USER_REGISTER'           => 'is_granted("IS_AUTHENTICATED_ANONYMOUSLY")',
                'DOYO_PROFILE_CHANGE_PASSWORD' => 'is_granted("ROLE_USER") and object.owner==user',
                'DOYO_PROFILE_RESET_PASSWORD'  => 'is_granted("IS_AUTHENTICATED_ANONYMOUSLY")',
                'DOYO_PROFILE_UPDATE'          => 'is_granted("ROLE_USER") and object.owner==user',
            ],
            'doyo_user.config' => [
                'retry_ttl' => 7200,
                'token_ttl' => 86400,
            ],
            'doyo_user.config.retry_ttl'  => 7200,
            'doyo_user.config.token_ttl'  => 86400,
            'doyo_user.mail_confirmation' => [
                'reset_password_route' => 'app_reset_password_confirm',
                'register_route'       => 'app_register_confirm',
            ],
            'doyo_user.mail_confirmation.reset_password_route' => 'app_reset_password_confirm',
            'doyo_user.mail_confirmation.register_route'       => 'app_register_confirm',
            'swiftmailer.mailer.default.transport.name'        => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled'         => true,
            'swiftmailer.mailer.default.plugin.impersonate'    => null,
            'swiftmailer.mailer.default.single_address'        => null,
            'swiftmailer.mailer.default.delivery.enabled'      => true,
            'swiftmailer.spool.enabled'                        => true,
            'swiftmailer.delivery.enabled'                     => true,
            'swiftmailer.single_address'                       => null,
            'swiftmailer.mailers'                              => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'data_collector.templates'   => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'api_platform.data_collector.request' => [
                    0 => 'api_platform.data_collector.request',
                    1 => '@ApiPlatform/DataCollector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
                4 => 'console.command.public_alias.api_platform.swagger.command.swagger_command',
                5 => 'console.command.public_alias.doyo_user.command.generate_jwt_keys',
            ],
        ];
    }
}
