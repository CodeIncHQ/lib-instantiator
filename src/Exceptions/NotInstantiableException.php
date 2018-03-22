<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     22/03/2018
// Time:     11:26
// Project:  ServicesManager
//
declare(strict_types = 1);
namespace CodeInc\ServicesManager\Exceptions;
use CodeInc\ServicesManager\ServicesManager;
use Throwable;


/**
 * Class NotInstantiableException
 *
 * @package CodeInc\ServicesManager\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class NotInstantiableException extends ServicesManagerException
{
    /**
     * NotInstantiableException constructor.
     *
     * @param \ReflectionClass $class
     * @param ServicesManager $servicesManager
     * @param int|null $code
     * @param null|Throwable $previous
     */
    public function __construct(\ReflectionClass $class,
        ServicesManager $servicesManager, ?int $code = null,
        ?Throwable $previous = null)
    {
        parent::__construct(
            sprintf("The class %s is not instantiable", $class->getName()),
            $servicesManager,
            $code,
            $previous
        );
    }
}