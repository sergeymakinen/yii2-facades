<?php
/**
 * Facades for Yii 2
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Error facade.
 *
 * Facades Yii::$app->get('errorHandler') component.
 *
 * @see \yii\console\ErrorHandler
 * @see \yii\web\ErrorHandler
 * @method static string addTypeLinks(string $code) Adds informational links to the given PHP type/class.
 * @method static string argumentsToString(array $args) Converts arguments array to its string representation.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static clearOutput() Removes all output echoed before calling this method.
 * @method static convertExceptionToError(\Exception $exception) Converts an exception into a PHP error.
 * @method static string convertExceptionToString(\Exception $exception) Converts an exception into a simple string.
 * @method static string createFrameworkVersionLink() Creates string containing HTML link which refers to the page with the current version.
 * @method static string createHttpStatusLink(int $statusCode, string $statusDescription) Creates HTML containing link to the page with the information on given HTTP status code.
 * @method static string createServerInformationLink() Creates string containing HTML link which refers to the home page of determined web-server software.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getCallStackItemView() Returns the path of the view file for rendering exceptions and errors call stack element.
 * @method static bool getDiscardExistingOutput() Returns whether to discard any existing page output before error display.
 * @method static array getDisplayVars() Returns list of the PHP predefined variables that should be displayed on the error page.
 * @method static string getErrorAction() Returns the route (e.g. 'site/error') to the controller action that will be used to display external errors.
 * @method static string getErrorView() Returns the path of the view file for rendering exceptions without call stack information.
 * @method static \Exception getException() Returns the exception that is being handled currently.
 * @method static string getExceptionName(\Exception $exception) Returns human-readable exception name.
 * @method static string getExceptionView() Returns the path of the view file for rendering exceptions.
 * @method static int getMaxSourceLines() Returns maximum number of source code lines to be displayed.
 * @method static int getMaxTraceSourceLines() Returns maximum number of trace source code lines to be displayed.
 * @method static int getMemoryReserveSize() Returns the size of the reserved memory.
 * @method static string getPreviousExceptionView() Returns the path of the view file for rendering previous exceptions.
 * @method static bool handleError(int $code, string $message, string $file, int $line) Handles PHP execution errors such as warnings and notices.
 * @method static handleException(\Exception $exception) Handles uncaught PHP exceptions.
 * @method static handleFatalError() Handles fatal PHP errors.
 * @method static bool handleHhvmError(int $code, string $message, string $file, int $line, mixed $context, mixed $backtrace) Handles HHVM execution errors such as warnings and notices.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static string htmlEncode(string $text) Converts special characters to HTML entities.
 * @method static bool isCoreFile(string $file) Determines whether given name of the file belongs to the framework.
 * @method static logException(\Exception $exception) Logs the given exception.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static register() Register this error handler.
 * @method static string renderCallStackItem(string|null $file, int|null $line, string|null $class, string|null $method, array $args, int $index) Renders a single call stack element.
 * @method static string renderFile(string $_file_, array $_params_) Renders a view file as a PHP script.
 * @method static string renderPreviousExceptions(\Exception $exception) Renders the previous exception stack for a given Exception.
 * @method static string renderRequest() Renders the global variables of the request.
 * @method static setCallStackItemView(string $value) Sets the path of the view file for rendering exceptions and errors call stack element.
 * @method static setDiscardExistingOutput(bool $value) Sets whether to discard any existing page output before error display.
 * @method static setDisplayVars(array $value) Sets list of the PHP predefined variables that should be displayed on the error page.
 * @method static setErrorAction(string $value) Sets the route (e.g. 'site/error') to the controller action that will be used to display external errors.
 * @method static setErrorView(string $value) Sets the path of the view file for rendering exceptions without call stack information.
 * @method static setException(\Exception $value) Sets the exception that is being handled currently.
 * @method static setExceptionView(string $value) Sets the path of the view file for rendering exceptions.
 * @method static setMaxSourceLines(int $value) Sets maximum number of source code lines to be displayed.
 * @method static setMaxTraceSourceLines(int $value) Sets maximum number of trace source code lines to be displayed.
 * @method static setMemoryReserveSize(int $value) Sets the size of the reserved memory.
 * @method static setPreviousExceptionView(string $value) Sets the path of the view file for rendering previous exceptions.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static unregister() Unregisters this error handler by restoring the PHP error and exception handlers.
 */
class Error extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'errorHandler';
    }
}
