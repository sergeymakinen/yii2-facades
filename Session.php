<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Session facade.
 *
 * Facades Yii::$app->get('session') component.
 *
 * @method static addFlash(string $key, mixed $value = true, bool $removeAfterAccess = true) Adds a flash message.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static close() Ends the current session and store session data.
 * @method static bool closeSession() Session close handler.
 * @method static int count() Returns the number of items in the session.
 * @method static destroy() Frees all session variables and destroys all data registered to a session.
 * @method static bool destroySession(string $id) Session destroy handler.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static bool gcSession(int $maxLifetime) Session GC (garbage collection) handler.
 * @method static mixed get(string $key, mixed $defaultValue = null) Returns the session variable value with the session variable name.
 * @method static array getAllFlashes(bool $delete = false) Returns all flash messages.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static array getCookieParams()
 * @method static int getCount() Returns the number of items in the session.
 * @method static mixed getFlash(string $key, mixed $defaultValue = null, bool $delete = false) Returns a flash message.
 * @method static float getGCProbability()
 * @method static bool getHasSessionId() Returns a value indicating whether the current request has sent the session ID.
 * @method static string getId() Gets the session ID.
 * @method static bool getIsActive()
 * @method static string getName() Gets the name of the current session.
 * @method static string getSavePath() Gets the current session save path.
 * @method static int getTimeout()
 * @method static bool|null getUseCookies() Returns the value indicating whether cookies should be used to store session IDs.
 * @method static bool getUseCustomStorage() Returns a value indicating whether to use custom session storage.
 * @method static bool getUseTransparentSessionID()
 * @method static string getFlashParam() Returns $flashParam - the name of the session variable that stores the flash message data.
 * @method static \SessionHandlerInterface|array getHandler() Returns $handler - an object implementing the SessionHandlerInterface or a configuration array.
 * @method static bool has(mixed $key)
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool hasFlash(string $key) Returns a value indicating whether there are flash messages associated with the specified key.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static open() Starts the session.
 * @method static bool openSession(string $savePath, string $sessionName) Session open handler.
 * @method static string readSession(string $id) Session read handler.
 * @method static regenerateID(bool $deleteOldSession = false) Updates the current session ID with a newly generated one .
 * @method static mixed remove(string $key) Removes a session variable.
 * @method static removeAll() Removes all session variables.
 * @method static removeAllFlashes() Removes all flash messages.
 * @method static mixed removeFlash(string $key) Removes a flash message.
 * @method static set(string $key, mixed $value) Adds a session variable.
 * @method static setCookieParams(array $value) Sets the session cookie parameters.
 * @method static setFlash(string $key, mixed $value = true, bool $removeAfterAccess = true) Sets a flash message.
 * @method static setGCProbability(float $value)
 * @method static setHasSessionId(bool $value) Sets the value indicating whether the current request has sent the session ID.
 * @method static setId(string $value) Sets the session ID.
 * @method static setName(string $value) Sets the name for the current session.
 * @method static setSavePath(string $value) Sets the current session save path.
 * @method static setTimeout(int $value)
 * @method static setUseCookies(bool|null $value) Sets the value indicating whether cookies should be used to store session IDs.
 * @method static setUseTransparentSessionID(bool $value)
 * @method static setFlashParam(string $value) Sets $flashParam - the name of the session variable that stores the flash message data.
 * @method static setHandler(\SessionHandlerInterface|array $value) Sets $handler - an object implementing the SessionHandlerInterface or a configuration array.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static bool writeSession(string $id, string $data) Session write handler.
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
