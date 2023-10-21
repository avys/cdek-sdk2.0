<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Class Services
 * @package CdekSDK2\BaseTypes
 */
class Service extends Base
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

    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'code' => 'required|alpha',
            'parameter' => 'numeric',
            'sum' => 'numeric',
            'total_sum' => 'numeric',
            'discount_percent' => 'numeric',
            'discount_sum' => 'numeric',
        ];
    }
}
