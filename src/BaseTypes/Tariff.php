<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Class Tarifflist
 * @package CdekSDK2\BaseTypes
 */
class Tariff extends Tarifflist
{
    /**
     * Код тарифа
     * @Type("integer")
     * @var integer
     */
    public $tariff_code;

	/**
	 * Список информации по дополнительным услугам
	 * @Type("array<int, CdekSDK2\BaseTypes\Service>")
	 * @var array
	 */
	public $services;

    /**
     * Intake constructor.
     * @param array $param
     */
    public function __construct(array $param = [])
    {
        parent::__construct($param);
	    $this->rules['tariff_code'] = 'numeric|required';
	    $this->rules['services'] = [
				'',
				function ($value) {
					if ($value instanceof Service) {
						return $value->validate();
					}
				}
			];
    }
}
