<?php
/**
 * Facades for Yii 2
 *
 * Generated on Yii 2.0.12
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Yii::$app->get('errorHandler') facade.
 *
 * Methods
 *
 * @method static string addTypeLinks(string $code) Adds informational links to the given PHP type/class.
 * @see \yii\web\ErrorHandler::addTypeLinks
 *
 * @method static string argumentsToString(array $args) Converts arguments array to its string representation.
 * @see \yii\web\ErrorHandler::argumentsToString
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static void clearOutput() Removes all output echoed before calling this method.
 * @see \yii\base\ErrorHandler::clearOutput
 *
 * @method static void convertExceptionToError(\Exception $exception) Converts an exception into a PHP error.
 * @see \yii\base\ErrorHandler::convertExceptionToError
 *
 * @method static string convertExceptionToString(\Exception|\Error $exception) Converts an exception into a simple string.
 * @see \yii\base\ErrorHandler::convertExceptionToString
 *
 * @method static string createFrameworkVersionLink() Creates string containing HTML link which refers to the page with the current version of the framework and version number text.
 * @see \yii\web\ErrorHandler::createFrameworkVersionLink
 *
 * @method static string createHttpStatusLink(int $statusCode, string $statusDescription) Creates HTML containing link to the page with the information on given HTTP status code.
 * @see \yii\web\ErrorHandler::createHttpStatusLink
 *
 * @method static string createServerInformationLink() Creates string containing HTML link which refers to the home page of determined web-server software and its full name.
 * @see \yii\web\ErrorHandler::createServerInformationLink
 *
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static string getExceptionName(\Exception $exception) Returns human-readable exception name.
 * @see \yii\web\ErrorHandler::getExceptionName
 *
 * @method static bool handleError(int $code, string $message, string $file, int $line) Handles PHP execution errors such as warnings and notices.
 * @see \yii\base\ErrorHandler::handleError
 *
 * @method static void handleException(\Exception $exception) Handles uncaught PHP exceptions.
 * @see \yii\base\ErrorHandler::handleException
 *
 * @method static void handleFatalError() Handles fatal PHP errors.
 * @see \yii\base\ErrorHandler::handleFatalError
 *
 * @method static bool handleHhvmError(int $code, string $message, string $file, int $line, mixed $context, mixed $backtrace) Handles HHVM execution errors such as warnings and notices.
 * @see \yii\base\ErrorHandler::handleHhvmError
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static string htmlEncode(string $text) Converts special characters to HTML entities.
 * @see \yii\web\ErrorHandler::htmlEncode
 *
 * @method static bool isCoreFile(string $file) Determines whether given name of the file belongs to the framework.
 * @see \yii\web\ErrorHandler::isCoreFile
 *
 * @method static void logException(\Exception $exception) Logs the given exception.
 * @see \yii\base\ErrorHandler::logException
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void register() Register this error handler.
 * @see \yii\base\ErrorHandler::register
 *
 * @method static string renderCallStack(\Exception|\ParseError $exception) Renders call stack.
 * @see \yii\web\ErrorHandler::renderCallStack
 *
 * @method static string renderCallStackItem(string|null $file, int|null $line, string|null $class, string|null $method, array $args, int $index) Renders a single call stack element.
 * @see \yii\web\ErrorHandler::renderCallStackItem
 *
 * @method static string renderFile(string $_file_, array $_params_) Renders a view file as a PHP script.
 * @see \yii\web\ErrorHandler::renderFile
 *
 * @method static string renderPreviousExceptions(\Exception $exception) Renders the previous exception stack for a given Exception.
 * @see \yii\web\ErrorHandler::renderPreviousExceptions
 *
 * @method static string renderRequest() Renders the global variables of the request.
 * @see \yii\web\ErrorHandler::renderRequest
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static void unregister() Unregisters this error handler by restoring the PHP error and exception handlers.
 * @see \yii\base\ErrorHandler::unregister
 *
 * Property accessors
 *
 * @method static string getCallStackItemView() Returns the path of the view file for rendering exceptions and errors call stack element.
 * @see \yii\web\ErrorHandler::callStackItemView
 *
 * @method static bool getDiscardExistingOutput() Returns whether to discard any existing page output before error display.
 * @see \yii\base\ErrorHandler::discardExistingOutput
 *
 * @method static array getDisplayVars() Returns list of the PHP predefined variables that should be displayed on the error page.
 * @see \yii\web\ErrorHandler::displayVars
 *
 * @method static string getErrorAction() Returns the route (e.g. `site/error`) to the controller action that will be used to display external errors.
 * @see \yii\web\ErrorHandler::errorAction
 *
 * @method static string getErrorView() Returns the path of the view file for rendering exceptions without call stack information.
 * @see \yii\web\ErrorHandler::errorView
 *
 * @method static \Exception|null getException() Returns the exception that is being handled currently.
 * @see \yii\base\ErrorHandler::exception
 *
 * @method static string getExceptionView() Returns the path of the view file for rendering exceptions.
 * @see \yii\web\ErrorHandler::exceptionView
 *
 * @method static int getMaxSourceLines() Returns maximum number of source code lines to be displayed.
 * @see \yii\web\ErrorHandler::maxSourceLines
 *
 * @method static int getMaxTraceSourceLines() Returns maximum number of trace source code lines to be displayed.
 * @see \yii\web\ErrorHandler::maxTraceSourceLines
 *
 * @method static int getMemoryReserveSize() Returns the size of the reserved memory.
 * @see \yii\base\ErrorHandler::memoryReserveSize
 *
 * @method static string getPreviousExceptionView() Returns the path of the view file for rendering previous exceptions.
 * @see \yii\web\ErrorHandler::previousExceptionView
 *
 * @method static void setCallStackItemView(string $value) Sets the path of the view file for rendering exceptions and errors call stack element.
 * @see \yii\web\ErrorHandler::callStackItemView
 *
 * @method static void setDiscardExistingOutput(bool $value) Sets whether to discard any existing page output before error display.
 * @see \yii\base\ErrorHandler::discardExistingOutput
 *
 * @method static void setDisplayVars(array $value) Sets list of the PHP predefined variables that should be displayed on the error page.
 * @see \yii\web\ErrorHandler::displayVars
 *
 * @method static void setErrorAction(string $value) Sets the route (e.g. `site/error`) to the controller action that will be used to display external errors.
 * @see \yii\web\ErrorHandler::errorAction
 *
 * @method static void setErrorView(string $value) Sets the path of the view file for rendering exceptions without call stack information.
 * @see \yii\web\ErrorHandler::errorView
 *
 * @method static void setException(\Exception|null $value) Sets the exception that is being handled currently.
 * @see \yii\base\ErrorHandler::exception
 *
 * @method static void setExceptionView(string $value) Sets the path of the view file for rendering exceptions.
 * @see \yii\web\ErrorHandler::exceptionView
 *
 * @method static void setMaxSourceLines(int $value) Sets maximum number of source code lines to be displayed.
 * @see \yii\web\ErrorHandler::maxSourceLines
 *
 * @method static void setMaxTraceSourceLines(int $value) Sets maximum number of trace source code lines to be displayed.
 * @see \yii\web\ErrorHandler::maxTraceSourceLines
 *
 * @method static void setMemoryReserveSize(int $value) Sets the size of the reserved memory.
 * @see \yii\base\ErrorHandler::memoryReserveSize
 *
 * @method static void setPreviousExceptionView(string $value) Sets the path of the view file for rendering previous exceptions.
 * @see \yii\web\ErrorHandler::previousExceptionView
 */
class Error extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'errorHandler';
    }
}
