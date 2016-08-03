<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Error facade.
 *
 * @method static string addTypeLinks(string $code) Adds informational links to the given PHP type/class.
 * @method static string argumentsToString(array $args) Converts arguments array to its string representation.
 * @method static clearOutput() Removes all output echoed before calling this method.
 * @method static convertExceptionToError(\Exception $exception) Converts an exception into a PHP error.
 * @method static string convertExceptionToString(\Exception $exception) Converts an exception into a simple string.
 * @method static string createFrameworkVersionLink() Creates string containing HTML link which refers to the page with the current version.
 * @method static string createHttpStatusLink(integer $statusCode, string $statusDescription) Creates HTML containing link to the page with the information on given HTTP status code.
 * @method static string createServerInformationLink() Creates string containing HTML link which refers to the home page of determined web-server software.
 * @method static string getExceptionName($exception) Returns human-readable exception name.
 * @method static string getCallStackItemView() Returns $callStackItemView - the path of the view file for rendering exceptions and errors call stack element.
 * @method static boolean getDiscardExistingOutput() Returns $discardExistingOutput - whether to discard any existing page output before error display.
 * @method static array getDisplayVars() Returns $displayVars - list of the PHP predefined variables that should be displayed on the error page.
 * @method static string getErrorAction() Returns $errorAction - the route (e.g. 'site/error') to the controller action that will be used to display external errors.
 * @method static string getErrorView() Returns $errorView - the path of the view file for rendering exceptions without call stack information.
 * @method static \Exception getException() Returns $exception - the exception that is being handled currently.
 * @method static string getExceptionView() Returns $exceptionView - the path of the view file for rendering exceptions.
 * @method static integer getMaxSourceLines() Returns $maxSourceLines - maximum number of source code lines to be displayed.
 * @method static integer getMaxTraceSourceLines() Returns $maxTraceSourceLines - maximum number of trace source code lines to be displayed.
 * @method static integer getMemoryReserveSize() Returns $memoryReserveSize - the size of the reserved memory.
 * @method static string getPreviousExceptionView() Returns $previousExceptionView - the path of the view file for rendering previous exceptions.
 * @method static boolean handleError(integer $code, string $message, string $file, integer $line) Handles PHP execution errors such as warnings and notices.
 * @method static handleException(\Exception $exception) Handles uncaught PHP exceptions.
 * @method static handleFatalError() Handles fatal PHP errors.
 * @method static boolean handleHhvmError(integer $code, string $message, string $file, integer $line, $context, mixed $backtrace) Handles HHVM execution errors such as warnings and notices.
 * @method static string htmlEncode(string $text) Converts special characters to HTML entities.
 * @method static boolean isCoreFile(string $file) Determines whether given name of the file belongs to the framework.
 * @method static logException(\Exception $exception) Logs the given exception.
 * @method static register() Register this error handler.
 * @method static string renderCallStackItem(string|null $file, integer|null $line, string|null $class, string|null $method, array $args, integer $index) Renders a single call stack element.
 * @method static string renderFile(string $_file_, array $_params_) Renders a view file as a PHP script.
 * @method static string renderPreviousExceptions(\Exception $exception) Renders the previous exception stack for a given Exception.
 * @method static string renderRequest() Renders the global variables of the request.
 * @method static setCallStackItemView(string $value) Sets $callStackItemView - the path of the view file for rendering exceptions and errors call stack element.
 * @method static setDiscardExistingOutput(boolean $value) Sets $discardExistingOutput - whether to discard any existing page output before error display.
 * @method static setDisplayVars(array $value) Sets $displayVars - list of the PHP predefined variables that should be displayed on the error page.
 * @method static setErrorAction(string $value) Sets $errorAction - the route (e.g. 'site/error') to the controller action that will be used to display external errors.
 * @method static setErrorView(string $value) Sets $errorView - the path of the view file for rendering exceptions without call stack information.
 * @method static setException(\Exception $value) Sets $exception - the exception that is being handled currently.
 * @method static setExceptionView(string $value) Sets $exceptionView - the path of the view file for rendering exceptions.
 * @method static setMaxSourceLines(integer $value) Sets $maxSourceLines - maximum number of source code lines to be displayed.
 * @method static setMaxTraceSourceLines(integer $value) Sets $maxTraceSourceLines - maximum number of trace source code lines to be displayed.
 * @method static setMemoryReserveSize(integer $value) Sets $memoryReserveSize - the size of the reserved memory.
 * @method static setPreviousExceptionView(string $value) Sets $previousExceptionView - the path of the view file for rendering previous exceptions.
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
