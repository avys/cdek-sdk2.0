<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class Service
{
	/**
	 * Код дополнительной услуги
	 * @Type("string")
	 * @var string
	 */
	public $code;

	/**
	 * Параметр дополнительной услуги
	 * @Type("float")
	 * @var float
	 */
	public $parameter;

	/**
	 * Сумма услуги (в валюте договора)
	 * @Type("float")
	 * @var float
	 */
	public $sum;

	/**
	 * Общая сумма (итого с НДС и скидкой в валюте взаиморасчётов)
	 * @Type("float")
	 * @var float
	 */
	public $total_sum;

	/**
	 * Процент скидки
	 * @Type("float")
	 * @var float
	 */
	public $discount_percent;

	/**
	 * Общая сумма скидки
	 * @Type("float")
	 * @var float
	 */
	public $discount_sum;

}
