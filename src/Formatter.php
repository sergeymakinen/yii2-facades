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
 * Yii::$app->get('formatter') facade.
 *
 * Methods
 *
 * @method static string asBoolean(mixed $value) Formats the value as a boolean.
 * @see \yii\i18n\Formatter::asBoolean
 *
 * @method static string asCurrency(mixed $value, string $currency = null, array $options = [], array $textOptions = []) Formats the value as a currency number.
 * @see \yii\i18n\Formatter::asCurrency
 *
 * @method static string asDate(int|string|\DateTime $value, string $format = null) Formats the value as a date.
 * @see \yii\i18n\Formatter::asDate
 *
 * @method static string asDatetime(int|string|\DateTime $value, string $format = null) Formats the value as a datetime.
 * @see \yii\i18n\Formatter::asDatetime
 *
 * @method static string asDecimal(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a decimal number.
 * @see \yii\i18n\Formatter::asDecimal
 *
 * @method static string asDuration(\DateInterval|string|int $value, string $implodeString = ', ', string $negativeSign = '-') Represents the value as duration in human readable format.
 * @see \yii\i18n\Formatter::asDuration
 *
 * @method static string asEmail(string $value, array $options = []) Formats the value as a mailto link.
 * @see \yii\i18n\Formatter::asEmail
 *
 * @method static string asHtml(string $value, array|null $config = null) Formats the value as HTML text.
 * @see \yii\i18n\Formatter::asHtml
 *
 * @method static string asImage(mixed $value, array $options = []) Formats the value as an image tag.
 * @see \yii\i18n\Formatter::asImage
 *
 * @method static string asInteger(mixed $value, array $options = [], array $textOptions = []) Formats the value as an integer number by removing any decimal digits without rounding.
 * @see \yii\i18n\Formatter::asInteger
 *
 * @method static string asNtext(string $value) Formats the value as an HTML-encoded plain text with newlines converted into breaks.
 * @see \yii\i18n\Formatter::asNtext
 *
 * @method static string asOrdinal(mixed $value) Formats the value as a ordinal value of a number.
 * @see \yii\i18n\Formatter::asOrdinal
 *
 * @method static string asParagraphs(string $value) Formats the value as HTML-encoded text paragraphs.
 * @see \yii\i18n\Formatter::asParagraphs
 *
 * @method static string asPercent(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a percent number with "%" sign.
 * @see \yii\i18n\Formatter::asPercent
 *
 * @method static string asRaw(mixed $value) Formats the value as is without any formatting.
 * @see \yii\i18n\Formatter::asRaw
 *
 * @method static string asRelativeTime(int|string|\DateTime|\DateInterval $value, int|string|\DateTime $referenceTime = null) Formats the value as the time interval between a date and now in human readable form.
 * @see \yii\i18n\Formatter::asRelativeTime
 *
 * @method static string asScientific(mixed $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value as a scientific number.
 * @see \yii\i18n\Formatter::asScientific
 *
 * @method static string asShortSize(string|int|float $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form for example `12 KB`.
 * @see \yii\i18n\Formatter::asShortSize
 *
 * @method static string asSize(string|int|float $value, int $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form, for example `12 kilobytes`.
 * @see \yii\i18n\Formatter::asSize
 *
 * @method static string asSpellout(mixed $value) Formats the value as a number spellout.
 * @see \yii\i18n\Formatter::asSpellout
 *
 * @method static string asText(string $value) Formats the value as an HTML-encoded plain text.
 * @see \yii\i18n\Formatter::asText
 *
 * @method static string asTime(int|string|\DateTime $value, string $format = null) Formats the value as a time.
 * @see \yii\i18n\Formatter::asTime
 *
 * @method static string asTimestamp(int|string|\DateTime $value) Formats a date, time or datetime in a float number as UNIX timestamp (seconds since 01-01-1970).
 * @see \yii\i18n\Formatter::asTimestamp
 *
 * @method static string asUrl(mixed $value, array $options = []) Formats the value as a hyperlink.
 * @see \yii\i18n\Formatter::asUrl
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
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static string format(mixed $value, string|array $format) Formats the value based on the given format type.
 * @see \yii\i18n\Formatter::format
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static array getBooleanFormat() Returns the text to be displayed when formatting a boolean value.
 * @see \yii\i18n\Formatter::booleanFormat
 *
 * @method static \IntlCalendar|int|null getCalendar() Returns the calendar to be used for date formatting.
 * @see \yii\i18n\Formatter::calendar
 *
 * @method static string getCurrencyCode() Returns the 3-letter ISO 4217 currency code indicating the default currency to use for [[asCurrency]].
 * @see \yii\i18n\Formatter::currencyCode
 *
 * @method static string getDateFormat() Returns the default format string to be used to format a [[asDate()|date]].
 * @see \yii\i18n\Formatter::dateFormat
 *
 * @method static string getDatetimeFormat() Returns the default format string to be used to format a [[asDatetime()|date and time]].
 * @see \yii\i18n\Formatter::datetimeFormat
 *
 * @method static string getDecimalSeparator() Returns the character displayed as the decimal point when formatting a number.
 * @see \yii\i18n\Formatter::decimalSeparator
 *
 * @method static string getDefaultTimeZone() Returns the time zone that is assumed for input values if they do not include a time zone explicitly.
 * @see \yii\i18n\Formatter::defaultTimeZone
 *
 * @method static string getLocale() Returns the locale ID that is used to localize the date and number formatting.
 * @see \yii\i18n\Formatter::locale
 *
 * @method static string getNullDisplay() Returns the text to be displayed when formatting a `null` value.
 * @see \yii\i18n\Formatter::nullDisplay
 *
 * @method static array getNumberFormatterOptions() Returns a list of name value pairs that are passed to the intl [NumberFormatter::setAttribute()](http://php.net/manual/en/numberformatter.setattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterOptions
 *
 * @method static array getNumberFormatterSymbols() Returns a list of name value pairs that are passed to the intl [NumberFormatter::setSymbol()](http://php.net/manual/en/numberformatter.setsymbol.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterSymbols
 *
 * @method static array getNumberFormatterTextOptions() Returns a list of name value pairs that are passed to the intl [NumberFormatter::setTextAttribute()](http://php.net/manual/en/numberformatter.settextattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterTextOptions
 *
 * @method static int getSizeFormatBase() Returns the base at which a kilobyte is calculated (1000 or 1024 bytes per kilobyte), used by [[asSize]] and [[asShortSize]].
 * @see \yii\i18n\Formatter::sizeFormatBase
 *
 * @method static string getThousandSeparator() Returns the character displayed as the thousands separator (also called grouping separator) character when formatting a number.
 * @see \yii\i18n\Formatter::thousandSeparator
 *
 * @method static string getTimeFormat() Returns the default format string to be used to format a [[asTime()|time]].
 * @see \yii\i18n\Formatter::timeFormat
 *
 * @method static string getTimeZone() Returns the time zone to use for formatting time and date values.
 * @see \yii\i18n\Formatter::timeZone
 *
 * @method static void setBooleanFormat(array $value) Sets the text to be displayed when formatting a boolean value.
 * @see \yii\i18n\Formatter::booleanFormat
 *
 * @method static void setCalendar(\IntlCalendar|int|null $value) Sets the calendar to be used for date formatting.
 * @see \yii\i18n\Formatter::calendar
 *
 * @method static void setCurrencyCode(string $value) Sets the 3-letter ISO 4217 currency code indicating the default currency to use for [[asCurrency]].
 * @see \yii\i18n\Formatter::currencyCode
 *
 * @method static void setDateFormat(string $value) Sets the default format string to be used to format a [[asDate()|date]].
 * @see \yii\i18n\Formatter::dateFormat
 *
 * @method static void setDatetimeFormat(string $value) Sets the default format string to be used to format a [[asDatetime()|date and time]].
 * @see \yii\i18n\Formatter::datetimeFormat
 *
 * @method static void setDecimalSeparator(string $value) Sets the character displayed as the decimal point when formatting a number.
 * @see \yii\i18n\Formatter::decimalSeparator
 *
 * @method static void setDefaultTimeZone(string $value) Sets the time zone that is assumed for input values if they do not include a time zone explicitly.
 * @see \yii\i18n\Formatter::defaultTimeZone
 *
 * @method static void setLocale(string $value) Sets the locale ID that is used to localize the date and number formatting.
 * @see \yii\i18n\Formatter::locale
 *
 * @method static void setNullDisplay(string $value) Sets the text to be displayed when formatting a `null` value.
 * @see \yii\i18n\Formatter::nullDisplay
 *
 * @method static void setNumberFormatterOptions(array $value) Sets a list of name value pairs that are passed to the intl [NumberFormatter::setAttribute()](http://php.net/manual/en/numberformatter.setattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterOptions
 *
 * @method static void setNumberFormatterSymbols(array $value) Sets a list of name value pairs that are passed to the intl [NumberFormatter::setSymbol()](http://php.net/manual/en/numberformatter.setsymbol.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterSymbols
 *
 * @method static void setNumberFormatterTextOptions(array $value) Sets a list of name value pairs that are passed to the intl [NumberFormatter::setTextAttribute()](http://php.net/manual/en/numberformatter.settextattribute.php) method of all the number formatter objects created by [[createNumberFormatter()]].
 * @see \yii\i18n\Formatter::numberFormatterTextOptions
 *
 * @method static void setSizeFormatBase(int $value) Sets the base at which a kilobyte is calculated (1000 or 1024 bytes per kilobyte), used by [[asSize]] and [[asShortSize]].
 * @see \yii\i18n\Formatter::sizeFormatBase
 *
 * @method static void setThousandSeparator(string $value) Sets the character displayed as the thousands separator (also called grouping separator) character when formatting a number.
 * @see \yii\i18n\Formatter::thousandSeparator
 *
 * @method static void setTimeFormat(string $value) Sets the default format string to be used to format a [[asTime()|time]].
 * @see \yii\i18n\Formatter::timeFormat
 *
 * @method static void setTimeZone(string $value) Sets the time zone to use for formatting time and date values.
 * @see \yii\i18n\Formatter::timeZone
 */
class Formatter extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'formatter';
    }
}
