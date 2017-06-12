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
 * Yii::$app->get('session') facade.
 *
 * Methods
 *
 * @method static void addFlash(string $key, mixed $value = true, bool $removeAfterAccess = true) Adds a flash message.
 * @see \yii\web\Session::addFlash
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
 * @method static void close() Ends the current session and store session data.
 * @see \yii\web\Session::close
 *
 * @method static bool closeSession() Session close handler.
 * @see \yii\web\Session::closeSession
 *
 * @method static int count() Returns the number of items in the session.
 * @see \yii\web\Session::count
 *
 * @method static void destroy() Frees all session variables and destroys all data registered to a session.
 * @see \yii\web\Session::destroy
 *
 * @method static bool destroySession(string $id) Session destroy handler.
 * @see \yii\web\Session::destroySession
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
 * @method static bool gcSession(int $maxLifetime) Session GC (garbage collection) handler.
 * @see \yii\web\Session::gcSession
 *
 * @method static mixed get(string $key, mixed $defaultValue = null) Returns the session variable value with the session variable name.
 * @see \yii\web\Session::get
 *
 * @method static array getAllFlashes(bool $delete = false) Returns all flash messages.
 * @see \yii\web\Session::getAllFlashes
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static array getCookieParams()
 * @see \yii\web\Session::getCookieParams
 *
 * @method static int getCount() Returns the number of items in the session.
 * @see \yii\web\Session::getCount
 *
 * @method static mixed getFlash(string $key, mixed $defaultValue = null, bool $delete = false) Returns a flash message.
 * @see \yii\web\Session::getFlash
 *
 * @method static float getGCProbability()
 * @see \yii\web\Session::getGCProbability
 *
 * @method static bool getHasSessionId() Returns a value indicating whether the current request has sent the session ID.
 * @see \yii\web\Session::getHasSessionId
 *
 * @method static string getId() Gets the session ID.
 * @see \yii\web\Session::getId
 *
 * @method static bool getIsActive()
 * @see \yii\web\Session::getIsActive
 *
 * @method static string getName() Gets the name of the current session.
 * @see \yii\web\Session::getName
 *
 * @method static string getSavePath() Gets the current session save path.
 * @see \yii\web\Session::getSavePath
 *
 * @method static int getTimeout()
 * @see \yii\web\Session::getTimeout
 *
 * @method static bool|null getUseCookies() Returns the value indicating whether cookies should be used to store session IDs.
 * @see \yii\web\Session::getUseCookies
 *
 * @method static bool getUseCustomStorage() Returns a value indicating whether to use custom session storage.
 * @see \yii\web\Session::getUseCustomStorage
 *
 * @method static bool getUseTransparentSessionID()
 * @see \yii\web\Session::getUseTransparentSessionID
 *
 * @method static bool has(mixed $key)
 * @see \yii\web\Session::has
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool hasFlash(string $key) Returns a value indicating whether there are flash messages associated with the specified key.
 * @see \yii\web\Session::hasFlash
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void open() Starts the session.
 * @see \yii\web\Session::open
 *
 * @method static bool openSession(string $savePath, string $sessionName) Session open handler.
 * @see \yii\web\Session::openSession
 *
 * @method static string readSession(string $id) Session read handler.
 * @see \yii\web\Session::readSession
 *
 * @method static void regenerateID(bool $deleteOldSession = false) Updates the current session ID with a newly generated one.
 * @see \yii\web\Session::regenerateID
 *
 * @method static mixed remove(string $key) Removes a session variable.
 * @see \yii\web\Session::remove
 *
 * @method static void removeAll() Removes all session variables.
 * @see \yii\web\Session::removeAll
 *
 * @method static void removeAllFlashes() Removes all flash messages.
 * @see \yii\web\Session::removeAllFlashes
 *
 * @method static mixed removeFlash(string $key) Removes a flash message.
 * @see \yii\web\Session::removeFlash
 *
 * @method static void set(string $key, mixed $value) Adds a session variable.
 * @see \yii\web\Session::set
 *
 * @method static void setCookieParams(array $value) Sets the session cookie parameters.
 * @see \yii\web\Session::setCookieParams
 *
 * @method static void setFlash(string $key, mixed $value = true, bool $removeAfterAccess = true) Sets a flash message.
 * @see \yii\web\Session::setFlash
 *
 * @method static void setGCProbability(float $value)
 * @see \yii\web\Session::setGCProbability
 *
 * @method static void setHasSessionId(bool $value) Sets the value indicating whether the current request has sent the session ID.
 * @see \yii\web\Session::setHasSessionId
 *
 * @method static void setId(string $value) Sets the session ID.
 * @see \yii\web\Session::setId
 *
 * @method static void setName(string $value) Sets the name for the current session.
 * @see \yii\web\Session::setName
 *
 * @method static void setSavePath(string $value) Sets the current session save path.
 * @see \yii\web\Session::setSavePath
 *
 * @method static void setTimeout(int $value)
 * @see \yii\web\Session::setTimeout
 *
 * @method static void setUseCookies(bool|null $value) Sets the value indicating whether cookies should be used to store session IDs.
 * @see \yii\web\Session::setUseCookies
 *
 * @method static void setUseTransparentSessionID(bool $value)
 * @see \yii\web\Session::setUseTransparentSessionID
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static bool writeSession(string $id, string $data) Session write handler.
 * @see \yii\web\Session::writeSession
 *
 * Property accessors
 *
 * @method static string getFlashParam() Returns the name of the session variable that stores the flash message data.
 * @see \yii\web\Session::flashParam
 *
 * @method static \SessionHandlerInterface|array getHandler() Returns an object implementing the SessionHandlerInterface or a configuration array.
 * @see \yii\web\Session::handler
 *
 * @method static void setFlashParam(string $value) Sets the name of the session variable that stores the flash message data.
 * @see \yii\web\Session::flashParam
 *
 * @method static void setHandler(\SessionHandlerInterface|array $value) Sets an object implementing the SessionHandlerInterface or a configuration array.
 * @see \yii\web\Session::handler
 */
class Session extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'session';
    }
}
