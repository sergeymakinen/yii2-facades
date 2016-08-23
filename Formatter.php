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
 * Formatter facade.
 *
 * Facades Yii::$app->get('formatter') component.
 *
 * @see \yii\i18n\Formatter
 * @method static string asBoolean(mixed $value) Formats the value as a boolean.
 * @method static string asCurrency(mixed $value, string $currency = null, array $options = [], array $textOptions = []) Formats the value as a currency number.
 * @method static string asDate(int|string|\DateTime $value, string $format = null) Formats the value as a date.
 * @method static string asDatetime(int|string|\DateTime $value, string $format = null) Formats the value as a datetime.
 * @method static string asDecimal(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a decimal number.
 * @method static string asDuration(\DateInterval|string|int $value, string $implodeString = ', ', string $negativeSign = '-') Represents the value as duration in human readable format.
 * @method static string asEmail(string $value, array $options = []) Formats the value as a mailto link.
 * @method static string asHtml(string $value, array|null $config = null) Formats the value as HTML text.
 * @method static string asImage(mixed $value, array $options = []) Formats the value as an image tag.
 * @method static string asInteger(mixed $value, array $options = [], array $textOptions = []) Formats the value as an integer number by removing any decimal digits without rounding.
 * @method static string asNtext(string $value) Formats the value as an HTML-encoded plain text with newlines converted into breaks.
 * @method static string asOrdinal(mixed $value) Formats the value as a ordinal value of a number.
 * @method static string asParagraphs(string $value) Formats the value as HTML-encoded text paragraphs.
 * @method static string asPercent(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a percent number with "%" sign.
 * @method static string asRaw(mixed $value) Formats the value as is without any formatting.
 * @method static string asRelativeTime(int|string|\DateTime|\DateInterval $value, int|string|\DateTime $referenceTime = null) Formats the value as the time interval between a date and now in human readable form.
 * @method static string asScientific(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a scientific number.
 * @method static string asShortSize(string|int|float $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form for example `12 KB`.
 * @method static string asSize(string|int|float $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form, for example `12 kilobytes`.
 * @method static string asSpellout(mixed $value) Formats the value as a number spellout.
 * @method static string asText(string $value) Formats the value as an HTML-encoded plain text.
 * @method static string asTime(int|string|\DateTime $value, string $format = null) Formats the value as a time.
 * @method static string asTimestamp(int|string|\DateTime $value) Formats a date, time or datetime in a float number as UNIX timestamp (seconds since 01-01-1970).
 * @method static string asUrl(mixed $value, array $options = []) Formats the value as a hyperlink.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string format(mixed $value, string|array $format) Formats the value based on the given format type.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static array getBooleanFormat() Returns the text to be displayed when formatting a boolean value.
 * @method static \IntlCalendar|int|null getCalendar() Returns the calendar to be used for date formatting.
 * @method static string getCurrencyCode() Returns the 3-letter ISO 4217 currency code indicating the default currency to use for [[asCurrency]].
 * @method static string getDateFormat() Returns the default format string to be used to format a [[asDate()|date]].
 * @method static string getDatetimeFormat() Returns the default format string to be used to format a [[asDatetime()|date and time]].
 * @method static string getDecimalSeparator() Returns the character displayed as the decimal point when formatting a number.
 * @method static string getDefaultTimeZone() Returns the time zone that is assumed for input values if they do not include a time zone explicitly.
 * @method static string getLocale() Returns the locale ID that is used to localize the date and number formatting.
 * @method static string getNullDisplay() Returns the text to be displayed when formatting a `null` value.
 * @method static array getNumberFormatterOptions() Returns a list of name value pairs that are passed to the intl [Numberformatter::setAttribute()](http://php.net/manual/en/numberformatter.setattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static array getNumberFormatterSymbols() Returns a list of name value pairs that are passed to the intl [Numberformatter::setSymbol()](http://php.net/manual/en/numberformatter.setsymbol.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static array getNumberFormatterTextOptions() Returns a list of name value pairs that are passed to the intl [Numberformatter::setTextAttribute()](http://php.net/manual/en/numberformatter.settextattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static int getSizeFormatBase() Returns the base at which a kilobyte is calculated (1000 or 1024 bytes per kilobyte), used by [[asSize]] and [[asShortSize]].
 * @method static string getThousandSeparator() Returns the character displayed as the thousands separator (also called grouping separator) character when formatting a number.
 * @method static string getTimeFormat() Returns the default format string to be used to format a [[asTime()|time]].
 * @method static string getTimeZone() Returns the time zone to use for formatting time and date values.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static setBooleanFormat(array $value) Sets the text to be displayed when formatting a boolean value.
 * @method static setCalendar(\IntlCalendar|int|null $value) Sets the calendar to be used for date formatting.
 * @method static setCurrencyCode(string $value) Sets the 3-letter ISO 4217 currency code indicating the default currency to use for [[asCurrency]].
 * @method static setDateFormat(string $value) Sets the default format string to be used to format a [[asDate()|date]].
 * @method static setDatetimeFormat(string $value) Sets the default format string to be used to format a [[asDatetime()|date and time]].
 * @method static setDecimalSeparator(string $value) Sets the character displayed as the decimal point when formatting a number.
 * @method static setDefaultTimeZone(string $value) Sets the time zone that is assumed for input values if they do not include a time zone explicitly.
 * @method static setLocale(string $value) Sets the locale ID that is used to localize the date and number formatting.
 * @method static setNullDisplay(string $value) Sets the text to be displayed when formatting a `null` value.
 * @method static setNumberFormatterOptions(array $value) Sets a list of name value pairs that are passed to the intl [Numberformatter::setAttribute()](http://php.net/manual/en/numberformatter.setattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static setNumberFormatterSymbols(array $value) Sets a list of name value pairs that are passed to the intl [Numberformatter::setSymbol()](http://php.net/manual/en/numberformatter.setsymbol.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static setNumberFormatterTextOptions(array $value) Sets a list of name value pairs that are passed to the intl [Numberformatter::setTextAttribute()](http://php.net/manual/en/numberformatter.settextattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @method static setSizeFormatBase(int $value) Sets the base at which a kilobyte is calculated (1000 or 1024 bytes per kilobyte), used by [[asSize]] and [[asShortSize]].
 * @method static setThousandSeparator(string $value) Sets the character displayed as the thousands separator (also called grouping separator) character when formatting a number.
 * @method static setTimeFormat(string $value) Sets the default format string to be used to format a [[asTime()|time]].
 * @method static setTimeZone(string $value) Sets the time zone to use for formatting time and date values.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Formatter extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'formatter';
    }
}
