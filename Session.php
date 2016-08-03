<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Session facade.
 *
 * @method static addFlash(string $key, mixed $value = true, boolean $removeAfterAccess = true) Adds a flash message.
 * @method static close() Ends the current session and store session data.
 * @method static boolean closeSession() Session close handler.
 * @method static integer count() Returns the number of items in the session.
 * @method static destroy() Frees all session variables and destroys all data registered to a session.
 * @method static boolean destroySession(string $id) Session destroy handler.
 * @method static boolean gcSession(integer $maxLifetime) Session GC (garbage collection) handler.
 * @method static mixed get(string $key, mixed $defaultValue = null) Returns the session variable value with the session variable name.
 * @method static array getAllFlashes(boolean $delete = false) Returns all flash messages.
 * @method static array getCookieParams()
 * @method static integer getCount() Returns the number of items in the session.
 * @method static mixed getFlash(string $key, mixed $defaultValue = null, boolean $delete = false) Returns a flash message.
 * @method static float getGCProbability()
 * @method static boolean getHasSessionId() Returns a value indicating whether the current request has sent the session ID.
 * @method static string getId() Gets the session ID.
 * @method static boolean getIsActive()
 * @method static \yii\web\SessionIterator getIterator() Returns an iterator for traversing the session variables.
 * @method static string getName() Gets the name of the current session.
 * @method static string getSavePath() Gets the current session save path.
 * @method static integer getTimeout() The default value is 1440 seconds (or the value of "session.gc_maxlifetime" set in php.ini).
 * @method static boolean|null getUseCookies() Returns the value indicating whether cookies should be used to store session IDs.
 * @method static boolean getUseCustomStorage() Returns a value indicating whether to use custom session storage.
 * @method static boolean getUseTransparentSessionID()
 * @method static string getFlashParam() Returns $flashParam - the name of the session variable that stores the flash message data.
 * @method static \SessionHandlerInterface|array getHandler() Returns $handler - an object implementing the SessionHandlerInterface or a configuration array.
 * @method static boolean has(mixed $key)
 * @method static boolean hasFlash(string $key) Returns a value indicating whether there are flash messages associated with the specified key.
 * @method static open() Starts the session.
 * @method static boolean openSession(string $savePath, string $sessionName) Session open handler.
 * @method static string readSession(string $id) Session read handler.
 * @method static regenerateID(boolean $deleteOldSession = false) Updates the current session ID with a newly generated one .
 * @method static mixed remove(string $key) Removes a session variable.
 * @method static removeAll() Removes all session variables.
 * @method static removeAllFlashes() Removes all flash messages.
 * @method static mixed removeFlash(string $key) Removes a flash message.
 * @method static set(string $key, mixed $value) Adds a session variable.
 * @method static setCookieParams(array $value) Sets the session cookie parameters.
 * @method static setFlash(string $key, mixed $value = true, boolean $removeAfterAccess = true) Sets a flash message.
 * @method static setGCProbability(float $value)
 * @method static setHasSessionId(boolean $value) Sets the value indicating whether the current request has sent the session ID.
 * @method static setId(string $value) Sets the session ID.
 * @method static setName(string $value) Sets the name for the current session.
 * @method static setSavePath(string $value) Sets the current session save path.
 * @method static setTimeout(integer $value)
 * @method static setUseCookies(boolean|null $value) Sets the value indicating whether cookies should be used to store session IDs.
 * @method static setUseTransparentSessionID(boolean $value)
 * @method static setFlashParam(string $value) Sets $flashParam - the name of the session variable that stores the flash message data.
 * @method static setHandler(\SessionHandlerInterface|array $value) Sets $handler - an object implementing the SessionHandlerInterface or a configuration array.
 * @method static boolean writeSession(string $id, string $data) Session write handler.
 */
class Session extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'session';
    }
}
