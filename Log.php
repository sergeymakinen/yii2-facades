<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Log facade.
 *
 * @method static dispatch(array $messages, boolean $final) Dispatches the logged messages to [[targets]].
 * @method static integer getFlushInterval() This method returns the value of [[Logger::flushInterval]].
 * @method static \yii\log\Logger getLogger() Gets the connected logger.
 * @method static integer getTraceLevel() This method returns the value of [[Logger::traceLevel]]. Defaults to 0.
 * @method static setFlushInterval(integer $value) This method will set the value of [[Logger::flushInterval]].
 * @method static setLogger(\yii\log\Logger|string|array $value) Sets the connected logger.
 * @method static setTraceLevel(integer $value) This method will set the value of [[Logger::traceLevel]]. If the value is greater than 0,
 */
class Log extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'log';
    }
}
