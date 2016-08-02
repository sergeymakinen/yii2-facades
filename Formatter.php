<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Formatter facade.
 *
 * @method static string asBoolean(mixed $value) Formats the value as a boolean.
 * @method static string asCurrency(mixed $value, string $currency = null, array $options = [], array $textOptions = []) Formats the value as a currency number.
 * @method static string asDate(integer|string|\DateTime $value, string $format = null) Formats the value as a date.
 * @method static string asDatetime(integer|string|\DateTime $value, string $format = null) Formats the value as a datetime.
 * @method static string asDecimal(mixed $value, integer $decimals = null, array $options = [], array $textOptions = []) Formats the value as a decimal number.
 * @method static string asDuration(\DateInterval|string|integer $value, string $implodeString = ', ', string $negativeSign = '-') Represents the value as duration in human readable format.
 * @method static string asEmail(string $value, array $options = []) Formats the value as a mailto link.
 * @method static string asHtml(string $value, array|null $config = null) Formats the value as HTML text.
 * @method static string asImage(mixed $value, array $options = []) Formats the value as an image tag.
 * @method static string asInteger(mixed $value, array $options = [], array $textOptions = []) Formats the value as an integer number by removing any decimal digits without rounding.
 * @method static string asNtext(string $value) Formats the value as an HTML-encoded plain text with newlines converted into breaks.
 * @method static string asOrdinal(mixed $value) Formats the value as a ordinal value of a number.
 * @method static string asParagraphs(string $value) Formats the value as HTML-encoded text paragraphs.
 * @method static string asPercent(mixed $value, integer $decimals = null, array $options = [], array $textOptions = []) Formats the value as a percent number with "%" sign.
 * @method static string asRaw(mixed $value) Formats the value as is without any formatting.
 * @method static string asRelativeTime(integer|string|\DateTime|\DateInterval $value, integer|string|\DateTime $referenceTime = null) Formats the value as the time interval between a date and now in human readable form.
 * @method static string asScientific(mixed $value, integer $decimals = null, array $options = [], array $textOptions = []) Formats the value as a scientific number.
 * @method static string asShortSize(string|integer|float $value, integer $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form for example `12 KB`.
 * @method static string asSize(string|integer|float $value, integer $decimals = null, array $options = [], array $textOptions = []) Formats the value in bytes as a size in human readable form, for example `12 kilobytes`.
 * @method static string asSpellout(mixed $value) Formats the value as a number spellout.
 * @method static string asText(string $value) Formats the value as an HTML-encoded plain text.
 * @method static string asTime(integer|string|\DateTime $value, string $format = null) Formats the value as a time.
 * @method static string asTimestamp(integer|string|\DateTime $value) Formats a date, time or datetime in a float number as UNIX timestamp (seconds since 01-01-1970).
 * @method static string asUrl(mixed $value, array $options = []) Formats the value as a hyperlink.
 * @method static string format(mixed $value, string|array $format) Formats the value based on the given format type.
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
